<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;

class RolePermissionSeeder extends Seeder
{
    public function run(): void
    {
        $permissions = [
            // User Management
            'manage-users',
            'view-users',
            
            // Category Management
            'manage-categories',
            'view-categories',
            
            // Book Management
            'manage-books',
            'view-books',
            
            // Order Management
            'manage-orders',
            'view-orders',
            
            // Seller Management
            'approve-sellers',
            'view-sellers',
            
            // Analytics
            'view-analytics',
            
            // Permissions
            'manage-permissions',
        ];

        foreach ($permissions as $permission) {
            Permission::firstOrCreate(['name' => $permission]);
        }

        $admin = Role::firstOrCreate(['name' => 'admin']);
        $admin->givePermissionTo([
            'manage-users',
            'view-users',
            'manage-categories',
            'view-categories',
            'manage-books',
            'view-books',
            'manage-orders',
            'view-orders',
            'approve-sellers',
            'view-sellers',
            'manage-permissions',
        ]);

        $seller = Role::firstOrCreate(['name' => 'seller']);
        $seller->givePermissionTo([
            'view-categories',
            'manage-books',
            'view-books',
            'manage-orders',
            'view-orders',
            'view-analytics',
        ]);

        $admin = User::firstOrCreate([
            'name' => 'Admin',
            'email' => 'admin@booksmith.com',
            'password' => Hash::make('password'),
            'email_verified_at' => now(),
        ]);
        $admin->assignRole('admin');

        $seller = User::firstOrCreate([
            'name' => 'John Seller',
            'email' => 'seller@booksmith.com',
            'password' => Hash::make('password'),
            'email_verified_at' => now(),
            'phone' => '123-456-7890',
            'business_name' => 'John\'s Books',
            'business_address' => '123 Book Street, Reading City, RC 12345',
            'business_description' => 'Quality books at affordable prices',
            'is_approved' => true,
            'approved_at' => now(),
        ]);
        $seller->assignRole('seller');

        $seller = User::firstOrCreate([
            'name' => 'Jane Pending',
            'email' => 'pending@booksmith.com',
            'password' => Hash::make('password'),
            'email_verified_at' => now(),
            'phone' => '098-765-4321',
            'business_name' => 'Jane\'s Library',
            'business_address' => '456 Novel Avenue, Story Town, ST 54321',
            'business_description' => 'Rare and collectible books',
            'is_approved' => true,
            'approved_at' => null,
        ]);
        $seller->assignRole('seller');
    }
}
