<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SalesAnalyticsController extends Controller
{
    public function index(Request $request)
    {
        if (auth()->user()->cannot('view-analytics')) {
            abort(403, 'Unauthorized action.');
        }
        
        $seller = auth()->user();

        $startDateInput = $request->input('start_date', now()->subMonths(6)->format('Y-m-d'));
        $endDateInput = $request->input('end_date', now()->format('Y-m-d'));

        $startDate = \Carbon\Carbon::parse($startDateInput)->startOfDay();
        $endDate = \Carbon\Carbon::parse($endDateInput)->endOfDay();

        // Overall statistics
        $totalSales = $seller->orders()
            ->whereBetween('created_at', [$startDate, $endDate])
            ->sum('total');
        
        $totalOrders = $seller->orders()
            ->whereBetween('created_at', [$startDate, $endDate])
            ->count();
        
        $averageOrderValue = $totalOrders > 0 ? $totalSales / $totalOrders : 0;

        // Sales over time (by month)
        $salesOverTime = $seller->orders()
            ->whereBetween('created_at', [$startDate, $endDate])
            ->selectRaw('DATE_FORMAT(created_at, "%Y-%m") as month, SUM(total) as revenue')
            ->groupBy('month')
            ->orderBy('month')
            ->get()
            ->pluck('revenue', 'month');

        return view('analytics.index', compact(
            'startDate',
            'endDate',
            'totalSales',
            'totalOrders',
            'averageOrderValue',
            'salesOverTime',
        ));
    }
}

