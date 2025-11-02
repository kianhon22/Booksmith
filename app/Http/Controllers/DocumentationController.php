<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DocumentationController extends Controller
{
    public function index()
    {
        $sections = [
            'getting-started' => 'Getting Started',
            'managing-books' => 'Managing Books',
            'orders' => 'Managing Orders',
            'analytics' => 'Sales Analytics',
            'account' => 'Account Settings',
        ];

        return view('docs.index', compact('sections'));
    }

    public function show($section)
    {
        return view('docs.show', compact('section'));
    }
}
