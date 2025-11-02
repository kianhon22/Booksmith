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
        $seller->load(['books' => function ($query) {
            $query->withCount('orderItems')->latest();
        }, 'orders' => function ($query) {
            $query->latest()->take(10);
        }]);

        return view('sellers.show', compact('seller'));
    }

    public function approve(User $seller)
    {
        if ($seller->is_approved) {
            return back()->with('warning', 'Seller is already approved.');
        }

        $seller->update([
            'is_approved' => true,
            'approved_at' => now(),
        ]);

        // Send approval email
        Mail::to($seller->email)->send(new SellerApproval($seller));

        return back()->with('success', 'Seller approved successfully.');
    }

    public function reject(User $seller)
    {
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
        $seller->delete();

        return redirect()->route('sellers.index')
            ->with('success', 'Seller deleted successfully.');
    }
}

