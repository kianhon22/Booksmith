<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Permissions Management') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <p class="text-sm text-gray-600 mb-6">Manage permissions for different roles. Assign or remove permissions to control access to various features.</p>
                    
                    @foreach($roles as $role)
                        <div class="mb-8 p-6 border border-gray-200 rounded-lg">
                            <h3 class="text-lg font-semibold text-gray-900 mb-4 capitalize">{{ $role->name }} Role</h3>
                            
                            <form method="POST" action="{{ route('permissions.update', $role) }}">
                                @csrf
                                @method('PUT')
                                
                                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                                    @foreach($permissions as $permission)
                                        <div class="flex items-center">
                                            <input 
                                                type="checkbox" 
                                                name="permissions[]" 
                                                value="{{ $permission->name }}" 
                                                id="{{ $role->name }}_{{ $permission->name }}"
                                                {{ $role->hasPermissionTo($permission->name) ? 'checked' : '' }}
                                                class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                            >
                                            <label for="{{ $role->name }}_{{ $permission->name }}" class="ml-2 text-sm text-gray-700">
                                                {{ ucwords(str_replace('_', ' ', $permission->name)) }}
                                            </label>
                                        </div>
                                    @endforeach
                                </div>
                                
                                <div class="mt-4">
                                    <button type="submit" class="inline-flex items-center px-4 py-2 bg-indigo-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-indigo-700">
                                        Update {{ ucfirst($role->name) }} Permissions
                                    </button>
                                </div>
                            </form>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

