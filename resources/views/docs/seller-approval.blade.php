<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center">
            <a href="{{ route('docs.index') }}" class="mr-4 text-gray-600 hover:text-gray-900">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                </svg>
            </a>
            <h2 class="text-2xl font-bold text-gray-900 dark:text-gray-100">{{ $doc['title'] }}</h2>
        </div>
    </x-slot>

    <div class="max-w-4xl mx-auto">
        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-sm p-8">
            <div class="prose dark:prose-invert max-w-none">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-gray-100 mb-4">Admin: Seller Approval Process</h3>
                <p class="text-gray-600 dark:text-gray-400 mb-6">Guide for administrators on how to review and approve seller applications.</p>

                <div class="p-6 bg-indigo-50 dark:bg-indigo-900/30 border border-indigo-200 dark:border-indigo-800 rounded-lg mb-6">
                    <p class="text-indigo-800 dark:text-indigo-200">This guide is for administrators only.</p>
                </div>

                <div class="space-y-6">
                    <div class="p-6 bg-gray-50 dark:bg-gray-700 rounded-lg">
                        <h4 class="text-lg font-semibold text-gray-900 dark:text-gray-100 mb-3">Reviewing Seller Applications</h4>
                        <ol class="space-y-2 text-gray-600 dark:text-gray-400 list-decimal list-inside">
                            <li>Navigate to <strong>Sellers</strong> from the sidebar</li>
                            <li>Filter by "Pending" status to see new applications</li>
                            <li>Click "View" on any seller to see full details</li>
                            <li>Review business information and description</li>
                            <li>Click "Approve" to activate the seller account</li>
                        </ol>
                    </div>

                    <div class="p-6 bg-gray-50 dark:bg-gray-700 rounded-lg">
                        <h4 class="text-lg font-semibold text-gray-900 dark:text-gray-100 mb-3">What Happens After Approval</h4>
                        <ul class="space-y-2 text-gray-600 dark:text-gray-400 list-disc list-inside">
                            <li>Seller receives email notification of approval</li>
                            <li>Seller can now access their dashboard</li>
                            <li>Seller can add books and manage orders</li>
                            <li>Seller appears in approved sellers list</li>
                        </ul>
                    </div>

                    <div class="p-6 bg-yellow-50 dark:bg-yellow-900/30 border border-yellow-200 dark:border-yellow-800 rounded-lg">
                        <h4 class="text-lg font-semibold text-yellow-900 dark:text-yellow-100 mb-3">Revoking Approval</h4>
                        <p class="text-yellow-800 dark:text-yellow-200">
                            If needed, you can revoke a seller's approval from their profile page. 
                            This will prevent them from accessing seller features until re-approved.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

