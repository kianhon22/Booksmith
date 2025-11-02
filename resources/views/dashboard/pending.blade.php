<x-guest-layout>
    <div class="text-center">
        <svg class="mx-auto h-16 w-16 text-yellow-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
        </svg>
        
        <h2 class="mt-6 text-3xl font-bold text-gray-900 dark:text-gray-100">
            Pending Approval
        </h2>
        
        <p class="mt-4 text-lg text-gray-600 dark:text-gray-400">
            Thank you for registering as a seller on Booksmith!
        </p>
        
        <div class="mt-6 bg-yellow-50 dark:bg-yellow-900/20 border border-yellow-200 dark:border-yellow-800 rounded-lg p-6">
            <p class="text-sm text-yellow-800 dark:text-yellow-200">
                Your seller account is currently pending approval from our admin team. 
                Once approved, you'll be able to:
            </p>
            
            <ul class="mt-4 text-left text-sm text-yellow-800 dark:text-yellow-200 space-y-2">
                <li class="flex items-start">
                    <svg class="h-5 w-5 mr-2 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                    </svg>
                    Upload and manage your book inventory
                </li>
                <li class="flex items-start">
                    <svg class="h-5 w-5 mr-2 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                    </svg>
                    Manage orders and track sales
                </li>
                <li class="flex items-start">
                    <svg class="h-5 w-5 mr-2 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                    </svg>
                    Access detailed analytics and reports
                </li>
            </ul>
        </div>
        
        <p class="mt-6 text-sm text-gray-600 dark:text-gray-400">
            We'll send you an email notification once your account is approved.
        </p>
        
        <div class="mt-8">
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 dark:bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150">
                    Logout
                </button>
            </form>
        </div>
    </div>
</x-guest-layout>

