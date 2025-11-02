<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Mail\SellerApproval;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SellerManagementController extends Controller
{
    public function index(Request $request)
    {   
        if (auth()->user()->cannot('manage-users')) {
            abort(403, 'Unauthorized action.');
        }
        
        $query = User::role('seller')->withCount(['books', 'orders']);

        if ($request->has('status')) {
            if ($request->status === 'pending') {
                $query->where('is_approved', false);
            } elseif ($request->status === 'approved') {
                $query->where('is_approved', true);
            }
        }

        if ($request->has('search') && $request->search) {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('name', 'like', "%{$search}%")
                    ->orWhere('email', 'like', "%{$search}%")
                    ->orWhere('business_name', 'like', "%{$search}%");
            });
        }

        $sellers = $query->latest()->paginate(15);

        return view('sellers.index', compact('sellers'));
    }

    public function show(User $seller)
    {
        if (auth()->user()->cannot('manage-users')) {
            abort(403, 'Unauthorized action.');
        }
        
        $seller->load(['books' => function ($query) {
            $query->withCount('orderItems')->latest();
        }, 'orders' => function ($query) {
            $query->latest()->take(10);
        }]);

        return view('sellers.show', compact('seller'));
    }

    public function approve(User $seller)
    {
        if (auth()->user()->cannot('approve-sellers')) {
            abort(403, 'Unauthorized action.');
        }
        
        if ($seller->is_approved) {
            return back()->with('warning', 'Seller is already approved.');
        }

        $seller->update([
            'is_approved' => true,
            'approved_at' => now(),
        ]);

        // Send approval email
        try {
            Mail::to($seller->email)->send(new SellerApproval($seller));
        } catch (\Exception $e) {
            // Log the error but don't prevent approval
            \Log::error('Failed to send seller approval email: ' . $e->getMessage(), [
                'seller_id' => $seller->id,
                'seller_email' => $seller->email,
            ]);
            
            return back()->with('success', 'Seller approved successfully, but email notification could not be sent. Please check mail configuration.')
                ->with('warning', 'Email error: ' . $e->getMessage());
        }

        return back()->with('success', 'Seller approved successfully. Approval email sent.');
    }

    public function reject(User $seller)
    {
        if (auth()->user()->cannot('approve-sellers')) {
            abort(403, 'Unauthorized action.');
        }
        
        if (!$seller->is_approved) {
            return back()->with('warning', 'Seller is not approved yet.');
        }

        $seller->update([
            'is_approved' => false,
            'approved_at' => null,
        ]);

        return back()->with('success', 'Seller approval revoked.');
    }

    public function destroy(User $seller)
    {
        if (auth()->user()->cannot('manage-users')) {
            abort(403, 'Unauthorized action.');
        }
        
        $seller->delete();

        return redirect()->route('sellers.index')
            ->with('success', 'Seller deleted successfully.');
    }
}

