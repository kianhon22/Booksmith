<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Book;
use App\Models\Order;
use App\Models\Category;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $user = auth()->user();

        if ($user->hasRole('admin')) {
            return $this->adminDashboard();
        }

        if ($user->hasRole('seller')) {
            if (!$user->is_approved) {
                return redirect()->route('pending');
            }
            return $this->sellerDashboard();
        }

        abort(403);
    }

    protected function adminDashboard()
    {
        $totalSellers = User::role('seller')->count();
        $pendingSellers = User::role('seller')->where('is_approved', false)->count();
        $approvedSellers = User::role('seller')->where('is_approved', true)->count();
        $totalBooks = Book::count();
        $activeBooks = Book::where('is_active', true)->count();
        $totalOrders = Order::count();
        $totalRevenue = Order::sum('total');
        $totalCategories = Category::count();

        $recentOrders = Order::with(['seller', 'items'])
            ->latest()
            ->take(5)
            ->get();

        $recentBooks = Book::with(['seller', 'category'])
            ->latest()
            ->take(5)
            ->get();

        return view('dashboard.admin', compact(
            'totalSellers',
            'pendingSellers',
            'approvedSellers',
            'totalBooks',
            'activeBooks',
            'totalOrders',
            'totalRevenue',
            'totalCategories',
            'recentOrders',
            'recentBooks'
        ));
    }

    protected function sellerDashboard()
    {
        $seller = auth()->user();

        $totalBooks = $seller->books()->count();
        $activeBooks = $seller->books()->where('is_active', true)->count();
        $totalOrders = $seller->orders()->count();
        $totalRevenue = $seller->orders()->sum('total');
        $pendingOrders = $seller->orders()->where('status', 'pending')->count();

        $recentOrders = $seller->orders()
            ->with('items')
            ->latest()
            ->take(5)
            ->get();

        $recentBooks = $seller->books()
            ->with('category')
            ->latest()
            ->take(5)
            ->get();

        $lowStockBooks = $seller->books()
            ->where('stock_quantity', '<=', 5)
            ->where('stock_quantity', '>', 0)
            ->with('category')
            ->get();

        return view('dashboard.seller', compact(
            'totalBooks',
            'activeBooks',
            'totalOrders',
            'totalRevenue',
            'pendingOrders',
            'recentOrders',
            'recentBooks',
            'lowStockBooks'
        ));
    }

    public function pending()
    {
        return view('dashboard.pending');
    }
}

