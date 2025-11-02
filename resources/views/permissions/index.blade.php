<x-app-layout>
    <x-slot name="header">
        <h2 class="text-2xl font-bold text-black">Permissions Management</h2>
    </x-slot>

    <div class=" mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6">
                <p class="text-sm text-gray-600 mb-6">Manage permissions for different roles. Check the boxes to grant permissions to Admin or Seller roles.</p>
                
                <form method="POST" action="{{ route('permissions.update') }}" id="permissions-form"> @csrf @method('PUT')
                    
                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead>
                                <tr>
                                    <x-table-header class="w-1/2">Permission</x-table-header>
                                    <x-table-header class="text-center">Admin</x-table-header>
                                    <x-table-header class="text-center">Seller</x-table-header>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @foreach($permissions as $group => $groupPermissions)
                                    <tr class="bg-indigo-100">
                                        <td colspan="3" class="px-6 py-3">
                                            <h3 class="text-sm font-semibold text-black uppercase tracking-wider">{{ ucfirst($group) }} Permissions</h3>
                                        </td>
                                    </tr>
                                    @foreach($groupPermissions as $permission)
                                        <tr class="hover:bg-gray-50">
                                            <td class="px-6 py-4">
                                                <div class="flex items-center">
                                                    <div class="text-sm font-medium text-black">
                                                        {{ ucwords(str_replace('-', ' ', $permission->name)) }}
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="px-6 py-4 text-center">
                                                <input 
                                                    type="checkbox" 
                                                    name="permissions[admin][]" 
                                                    value="{{ $permission->name }}" 
                                                    id="admin_{{ $permission->name }}"
                                                    {{ $roles->firstWhere('name', 'admin')->hasPermissionTo($permission->name) ? 'checked' : '' }}
                                                    class="w-4 h-4 rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                                >
                                            </td>
                                            <td class="px-6 py-4 text-center">
                                                <input 
                                                    type="checkbox" 
                                                    name="permissions[seller][]" 
                                                    value="{{ $permission->name }}" 
                                                    id="seller_{{ $permission->name }}"
                                                    {{ $roles->firstWhere('name', 'seller')->hasPermissionTo($permission->name) ? 'checked' : '' }}
                                                    class="w-4 h-4 rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                                >
                                            </td>
                                        </tr>
                                    @endforeach
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    
                    <div class="mt-7 flex justify-center">
                        <button type="submit" class="inline-flex items-center px-6 py-3 bg-indigo-600 border border-transparent rounded-md font-semibold text-sm text-white uppercase tracking-wider hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition">
                            Update Permissions
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>

