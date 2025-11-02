<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class PermissionController extends Controller
{
    public function index()
    {
        if (auth()->user()->cannot('manage-permissions')) {
            abort(403, 'Unauthorized action.');
        }
        
        $roles = Role::with('permissions')->get();
        $permissions = Permission::all()->groupBy(function ($permission) {
            // Group permissions by their prefix (e.g., "manage", "view")
            $group = explode('-', $permission->name);
            return $group[0];
        });

        return view('permissions.index', compact('roles', 'permissions'));
    }

    public function update(Request $request)
    {
        if (auth()->user()->cannot('manage-permissions')) {
            abort(403, 'Unauthorized action.');
        }
        
        $record = $request->validate([
            'permissions.admin' => 'nullable|array',
            'permissions.admin.*' => 'exists:permissions,name',
            'permissions.seller' => 'nullable|array',
            'permissions.seller.*' => 'exists:permissions,name',
        ]);

        $admin = Role::where('name', 'admin')->first();
        if ($admin) {
            $admin->syncPermissions($record['permissions']['admin'] ?? []);
        }

        $seller = Role::where('name', 'seller')->first();
        if ($seller) {
            $seller->syncPermissions($record['permissions']['seller'] ?? []);
        }

        return back()->with('success', 'Permissions updated successfully for both roles');
    }
}

