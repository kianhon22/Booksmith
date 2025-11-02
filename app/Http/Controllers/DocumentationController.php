<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class DocumentationController extends Controller
{
    public function index()
    {
        $isAdmin = auth()->user()->hasRole('admin');
        $isSeller = auth()->user()->hasRole('seller');

        $sections = [
            'getting-started' => [
                'title' => 'Getting Started',
                'description' => 'Learn the basics and get started with Booksmith',
                'icon' => 'M13 10V3L4 14h7v7l9-11h-7z',
                'roles' => ['admin', 'seller'],
            ],
            'seller-registration' => [
                'title' => 'Seller Registration',
                'description' => 'Complete guide to registering as a seller',
                'icon' => 'M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z',
                'roles' => ['seller'],
            ],
            'seller-approval' => [
                'title' => 'Seller Approval Process',
                'description' => 'How to review and approve seller applications',
                'icon' => 'M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z',
                'roles' => ['admin'],
            ],
            'managing-books' => [
                'title' => 'Managing Books',
                'description' => 'Add, edit, and manage your book inventory',
                'icon' => 'M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253',
                'roles' => ['admin', 'seller'],
            ],
            'categories' => [
                'title' => 'Managing Categories',
                'description' => 'Create and manage book categories',
                'icon' => 'M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z',
                'roles' => ['admin'],
            ],
            'order-management' => [
                'title' => 'Order Management',
                'description' => 'Process and track customer orders',
                'icon' => 'M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z',
                'roles' => ['admin', 'seller'],
            ],
            'analytics' => [
                'title' => 'Sales Analytics',
                'description' => 'Understand your sales performance and metrics',
                'icon' => 'M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z',
                'roles' => ['seller'],
            ],
        ];

        // Filter sections based on user role
        $filteredSections = collect($sections)->filter(function ($section) use ($isAdmin, $isSeller) {
            if ($isAdmin && in_array('admin', $section['roles'])) {
                return true;
            }
            if ($isSeller && in_array('seller', $section['roles'])) {
                return true;
            }
            return false;
        });

        return view('docs.index', compact('filteredSections'));
    }

    public function show($section)
    {
        return view('docs.' . $section, compact('section'));
    }
}
