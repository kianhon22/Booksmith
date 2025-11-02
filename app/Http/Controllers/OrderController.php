<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index(Request $request)
    {
        if (auth()->user()->cannot('manage-orders')) {
            abort(403, 'Unauthorized action.');
        }

        $query = auth()->user()->orders()->with('items');

        if ($request->has('search') && $request->search) {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('order_number', 'like', "%{$search}%")
                    ->orWhere('customer_name', 'like', "%{$search}%")
                    ->orWhere('customer_email', 'like', "%{$search}%");
            });
        }

        if ($request->has('status') && $request->status !== 'all') {
            $query->where('status', $request->status);
        }

        $orders = $query->latest()->paginate(15);

        return view('orders.index', compact('orders'));
    }

    public function show(Order $order)
    {
        if (auth()->user()->cannot('manage-orders')) {
            abort(403, 'Unauthorized action.');
        }

        // Sellers can only view their own orders
        if (auth()->user()->hasRole('seller') && $order->seller_id !== auth()->id()) {
            abort(403, 'Unauthorized action.');
        }

        $order->load(['seller', 'items.book']);

        return view('orders.show', compact('order'));
    }

    public function update(Request $request, Order $order)
    {
        if (auth()->user()->cannot('manage-orders')) {
            abort(403, 'Unauthorized action.');
        }
        
        // Sellers can only update their own orders
        if (auth()->user()->hasRole('seller') && $order->seller_id !== auth()->id()) {
            abort(403, 'Unauthorized action.');
        }

        $validated = $request->validate([
            'status' => 'required|in:pending,processing,shipped,delivered,cancelled',
            'notes' => 'nullable|string',
        ]);

        $order->update($validated);

        return back()->with('success', 'Order updated successfully.');
    }
}

