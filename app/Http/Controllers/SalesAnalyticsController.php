<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SalesAnalyticsController extends Controller
{
    public function index()
    {
        $seller = auth()->user();

        // Overall statistics
        $totalBooks = $seller->books()->count();
        $totalOrders = $seller->orders()->count();
        $totalRevenue = $seller->orders()->sum('total');
        $totalSold = $seller->books()
            ->join('order_items', 'books.id', '=', 'order_items.book_id')
            ->join('orders', 'order_items.order_id', '=', 'orders.id')
            ->sum('order_items.quantity');

        // Revenue by month (last 6 months)
        $monthlyRevenue = $seller->orders()
            ->where('created_at', '>=', now()->subMonths(6))
            ->selectRaw('DATE_FORMAT(created_at, "%Y-%m") as month, SUM(total) as revenue, COUNT(*) as orders')
            ->groupBy('month')
            ->orderBy('month')
            ->get();

        // Top selling books
        $topBooks = $seller->books()
            ->select('books.*')
            ->selectRaw('SUM(order_items.quantity) as total_sold, SUM(order_items.total_price) as total_revenue')
            ->join('order_items', 'books.id', '=', 'order_items.book_id')
            ->join('orders', 'order_items.order_id', '=', 'orders.id')
            ->groupBy('books.id')
            ->orderByDesc('total_sold')
            ->limit(10)
            ->with('category')
            ->get();

        // Orders by status
        $ordersByStatus = $seller->orders()
            ->selectRaw('status, COUNT(*) as count')
            ->groupBy('status')
            ->get()
            ->pluck('count', 'status');

        // Recent sales activity
        $recentSales = $seller->orders()
            ->with('items.book')
            ->latest()
            ->take(10)
            ->get();

        return view('analytics.index', compact(
            'totalBooks',
            'totalOrders',
            'totalRevenue',
            'totalSold',
            'monthlyRevenue',
            'topBooks',
            'ordersByStatus',
            'recentSales'
        ));
    }
}

