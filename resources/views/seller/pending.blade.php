<x-guest-layout>
    <div class="min-h-screen flex flex-col justify-center items-center bg-gray-100">
        <div class="max-w-md w-full bg-white shadow-md rounded-lg p-8">
            <div class="text-center">
                <svg class="mx-auto h-16 w-16 text-yellow-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
                
                <h2 class="mt-6 text-2xl font-bold text-gray-900">
                    {{ __('Account Pending Approval') }}
                </h2>
                
                <p class="mt-4 text-sm text-gray-600">
                    Thank you for registering as a seller on our platform! Your account is currently under review by our administrators.
                </p>
                
                <p class="mt-4 text-sm text-gray-600">
                    You will receive an email notification once your account has been approved. This typically takes 1-2 business days.
                </p>
                
                <div class="mt-8">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="inline-flex items-center px-4 py-2 bg-indigo-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-indigo-700">
                            {{ __('Logout') }}
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>

