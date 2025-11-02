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
                <h3 class="text-xl font-semibold text-gray-900 dark:text-gray-100 mb-4">Seller Registration & Approval Process</h3>
                
                <p class="text-gray-600 dark:text-gray-400 mb-6">
                    Learn how to register as a seller on Booksmith and what to expect during the approval process.
                </p>

                <!-- Step 1 -->
                <div class="mb-8 p-6 bg-gray-50 dark:bg-gray-700 rounded-lg">
                    <div class="flex items-start">
                        <div class="flex-shrink-0">
                            <span class="flex items-center justify-center h-10 w-10 rounded-full bg-indigo-500 text-white font-bold text-lg">1</span>
                        </div>
                        <div class="ml-4 flex-1">
                            <h4 class="text-lg font-semibold text-gray-900 dark:text-gray-100 mb-2">Registration Process</h4>
                            <ol class="list-decimal list-inside space-y-2 text-gray-600 dark:text-gray-400">
                                <li>Visit the Booksmith registration page</li>
                                <li>Fill in your personal information:
                                    <ul class="list-disc list-inside ml-6 mt-2">
                                        <li>Full Name</li>
                                        <li>Email Address</li>
                                        <li>Phone Number</li>
                                        <li>Password</li>
                                    </ul>
                                </li>
                                <li>Provide your business details:
                                    <ul class="list-disc list-inside ml-6 mt-2">
                                        <li><strong>Business Name:</strong> Your bookstore or business name</li>
                                        <li><strong>Business Address:</strong> Physical address of your business</li>
                                        <li><strong>Business Description:</strong> Tell us about your business and the types of books you sell</li>
                                    </ul>
                                </li>
                                <li>Click <strong>"Register as Seller"</strong></li>
                            </ol>
                        </div>
                    </div>
                </div>

                <!-- Step 2 -->
                <div class="mb-8 p-6 bg-gray-50 dark:bg-gray-700 rounded-lg">
                    <div class="flex items-start">
                        <div class="flex-shrink-0">
                            <span class="flex items-center justify-center h-10 w-10 rounded-full bg-indigo-500 text-white font-bold text-lg">2</span>
                        </div>
                        <div class="ml-4 flex-1">
                            <h4 class="text-lg font-semibold text-gray-900 dark:text-gray-100 mb-2">Pending Approval</h4>
                            <p class="text-gray-600 dark:text-gray-400 mb-2">
                                After registration, your account will be in "Pending" status:
                            </p>
                            <ul class="list-disc list-inside space-y-2 text-gray-600 dark:text-gray-400">
                                <li>You'll see a pending approval page when you log in</li>
                                <li>Your account is under review by our admin team</li>
                                <li>You won't be able to add books or access seller features yet</li>
                                <li>This typically takes 1-3 business days</li>
                            </ul>
                            <div class="mt-4 p-4 bg-yellow-50 dark:bg-yellow-900/30 border border-yellow-200 dark:border-yellow-800 rounded">
                                <p class="text-sm text-yellow-800 dark:text-yellow-200">
                                    <strong>Note:</strong> Please provide accurate business information to speed up the approval process.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Step 3 -->
                <div class="mb-8 p-6 bg-gray-50 dark:bg-gray-700 rounded-lg">
                    <div class="flex items-start">
                        <div class="flex-shrink-0">
                            <span class="flex items-center justify-center h-10 w-10 rounded-full bg-indigo-500 text-white font-bold text-lg">3</span>
                        </div>
                        <div class="ml-4 flex-1">
                            <h4 class="text-lg font-semibold text-gray-900 dark:text-gray-100 mb-2">Approval Notification</h4>
                            <p class="text-gray-600 dark:text-gray-400 mb-2">
                                Once your account is approved:
                            </p>
                            <ul class="list-disc list-inside space-y-2 text-gray-600 dark:text-gray-400">
                                <li>You'll receive an email notification</li>
                                <li>You can log in and access your seller dashboard</li>
                                <li>All seller features will be available to you</li>
                                <li>You can start adding books immediately</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Step 4 -->
                <div class="mb-8 p-6 bg-gray-50 dark:bg-gray-700 rounded-lg">
                    <div class="flex items-start">
                        <div class="flex-shrink-0">
                            <span class="flex items-center justify-center h-10 w-10 rounded-full bg-indigo-500 text-white font-bold text-lg">4</span>
                        </div>
                        <div class="ml-4 flex-1">
                            <h4 class="text-lg font-semibold text-gray-900 dark:text-gray-100 mb-2">Getting Started</h4>
                            <p class="text-gray-600 dark:text-gray-400 mb-2">
                                After approval, follow these steps:
                            </p>
                            <ol class="list-decimal list-inside space-y-2 text-gray-600 dark:text-gray-400">
                                <li>Complete your profile if needed</li>
                                <li>Familiarize yourself with the seller dashboard</li>
                                <li>Start adding your first books</li>
                                <li>Review the documentation for managing books and orders</li>
                            </ol>
                        </div>
                    </div>
                </div>

                <!-- What We Review -->
                <div class="mt-8 p-6 bg-blue-50 dark:bg-blue-900/30 border border-blue-200 dark:border-blue-800 rounded-lg">
                    <h4 class="text-lg font-semibold text-blue-900 dark:text-blue-100 mb-3">What We Review During Approval</h4>
                    <ul class="space-y-2 text-blue-800 dark:text-blue-200">
                        <li class="flex items-start">
                            <svg class="w-5 h-5 mr-2 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>
                            Validity of business information provided
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 mr-2 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>
                            Completeness of registration details
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 mr-2 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>
                            Quality of business description
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 mr-2 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>
                            Compliance with platform policies
                        </li>
                    </ul>
                </div>

                <!-- Tips -->
                <div class="mt-8 p-6 bg-green-50 dark:bg-green-900/30 border border-green-200 dark:border-green-800 rounded-lg">
                    <h4 class="text-lg font-semibold text-green-900 dark:text-green-100 mb-3">Tips for Quick Approval</h4>
                    <ul class="space-y-2 text-green-800 dark:text-green-200">
                        <li class="flex items-start">
                            <svg class="w-5 h-5 mr-2 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>
                            Provide complete and accurate information
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 mr-2 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>
                            Write a detailed business description
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 mr-2 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>
                            Use a professional email address
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 mr-2 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>
                            Provide a valid phone number
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

