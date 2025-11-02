<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class PermissionController extends Controller
{
    public function index()
    {
        $roles = Role::with('permissions')->get();
        $permissions = Permission::all()->groupBy(function ($permission) {
            // Group permissions by their prefix (e.g., "manage", "view")
            $parts = explode('-', $permission->name);
            return $parts[0];
        });

        return view('permissions.index', compact('roles', 'permissions'));
    }

    public function update(Request $request, Role $role)
    {
        $validated = $request->validate([
            'permissions' => 'array',
            'permissions.*' => 'exists:permissions,name',
        ]);

        $role->syncPermissions($validated['permissions'] ?? []);

        return back()->with('success', 'Permissions updated successfully for ' . $role->name . ' role.');
    }
}

