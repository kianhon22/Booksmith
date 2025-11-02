<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center">
            <a href="{{ route('docs.index') }}" class="mr-4 text-gray-600 hover:text-indigo-600 transition-colors">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                </svg>
            </a>
            <h2 class="text-2xl font-bold text-gray-900">Seller Registration</h2>
        </div>
    </x-slot>

    <div class="mx-auto sm:px-6 lg:px-8">
        <div class="bg-white rounded-lg shadow-sm p-8">
            <div class="prose max-w-none">
                <!-- Introduction -->
                <div class="mb-10">
                    <h3 class="text-3xl font-bold text-gray-900 mb-4">Seller Registration Guide 🏪</h3>
                    <p class="text-lg text-gray-600 mb-6">
                        Ready to start selling books on Booksmith? This comprehensive guide will walk you through the registration process step by step. Learn what information you'll need and what to expect during approval.
                    </p>
                </div>

                <!-- Registration Process -->
                <div class="mb-10 p-8 bg-gradient-to-br from-blue-50 to-indigo-50 border-2 border-blue-200 rounded-xl">
                    <div class="flex items-start">
                        <div class="flex-shrink-0 w-14 h-14 bg-blue-600 rounded-full flex items-center justify-center text-white font-bold text-xl mr-6">1</div>
                        <div class="flex-1">
                            <h4 class="text-2xl font-bold text-blue-900 mb-4 flex items-center">
                                <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"></path>
                                </svg>
                                Registration Process
                            </h4>
                            <div class="bg-white p-6 rounded-lg shadow-md">
                                <p class="text-gray-700 mb-4">Follow these steps to register as a seller on Booksmith:</p>
                                <ol class="space-y-4 text-gray-700">
                                    <li class="flex items-start">
                                        <span class="font-bold text-blue-600 mr-3">Step 1:</span>
                                        <span>Visit the Booksmith registration page and click <strong>"Register as Seller"</strong></span>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="font-bold text-blue-600 mr-3">Step 2:</span>
                                        <span>Fill in your personal information:</span>
                                        <div class="ml-6 mt-2 p-3 bg-gray-50 rounded-lg">
                                            <ul class="space-y-1 text-sm">
                                                <li>• Full Name</li>
                                                <li>• Email Address (will be used for login and notifications)</li>
                                                <li>• Phone Number</li>
                                                <li>• Password (choose a strong, secure password)</li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="font-bold text-blue-600 mr-3">Step 3:</span>
                                        <span>Provide your business details:</span>
                                        <div class="ml-6 mt-2 p-3 bg-gray-50 rounded-lg">
                                            <ul class="space-y-1 text-sm">
                                                <li>• <strong>Business Name:</strong> Your bookstore, online shop, or business name</li>
                                                <li>• <strong>Business Address:</strong> Complete physical or mailing address</li>
                                                <li>• <strong>Business Description:</strong> Tell us about your business and the types of books you sell</li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="font-bold text-blue-600 mr-3">Step 4:</span>
                                        <span>Review all information for accuracy, then click <strong>"Register as Seller"</strong> to submit your application</span>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Pending Approval -->
                <div class="mb-10 p-8 bg-gradient-to-br from-yellow-50 to-orange-50 border-2 border-yellow-200 rounded-xl">
                    <div class="flex items-start">
                        <div class="flex-shrink-0 w-14 h-14 bg-yellow-500 rounded-full flex items-center justify-center text-white font-bold text-xl mr-6">2</div>
                        <div class="flex-1">
                            <h4 class="text-2xl font-bold text-yellow-900 mb-4 flex items-center">
                                <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                Pending Approval
                            </h4>
                            <div class="bg-white p-6 rounded-lg shadow-md">
                                <p class="text-gray-700 mb-4">
                                    After registration, your account will be in "Pending" status while our admin team reviews your application:
                                </p>
                                <div class="space-y-3">
                                    <div class="flex items-start p-4 bg-yellow-50 rounded-lg border-l-4 border-yellow-500">
                                        <svg class="w-5 h-5 text-yellow-600 mr-3 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        <div>
                                            <p class="font-semibold text-yellow-900">Pending Approval Page</p>
                                            <p class="text-sm text-yellow-800">You'll see a pending approval message when you log in</p>
                                        </div>
                                    </div>
                                    <div class="flex items-start p-4 bg-yellow-50 rounded-lg border-l-4 border-yellow-500">
                                        <svg class="w-5 h-5 text-yellow-600 mr-3 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        <div>
                                            <p class="font-semibold text-yellow-900">Under Review</p>
                                            <p class="text-sm text-yellow-800">Your account is being reviewed by our admin team</p>
                                        </div>
                                    </div>
                                    <div class="flex items-start p-4 bg-yellow-50 rounded-lg border-l-4 border-yellow-500">
                                        <svg class="w-5 h-5 text-yellow-600 mr-3 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        <div>
                                            <p class="font-semibold text-yellow-900">Typical Wait Time</p>
                                            <p class="text-sm text-yellow-800">Review typically takes 1-2 business days</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-4 p-4 bg-blue-50 border-l-4 border-blue-500 rounded">
                                    <p class="text-sm text-blue-800">
                                        <strong>💡 Note:</strong> Please provide accurate and complete business information to speed up the approval process. Incomplete or inaccurate information may delay approval.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Approval Notification -->
                <div class="mb-10 p-8 bg-gradient-to-br from-green-50 to-emerald-50 border-2 border-green-200 rounded-xl">
                    <div class="flex items-start">
                        <div class="flex-shrink-0 w-14 h-14 bg-green-600 rounded-full flex items-center justify-center text-white font-bold text-xl mr-6">3</div>
                        <div class="flex-1">
                            <h4 class="text-2xl font-bold text-green-900 mb-4 flex items-center">
                                <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                                Approval Notification
                            </h4>
                            <div class="bg-white p-6 rounded-lg shadow-md">
                                <p class="text-gray-700 mb-4">
                                    Once your account is approved, you'll receive notification and can start using all seller features:
                                </p>
                                <div class="grid md:grid-cols-2 gap-4">
                                    <div class="p-4 bg-green-50 rounded-lg border-2 border-green-200">
                                        <div class="flex items-center mb-2">
                                            <svg class="w-6 h-6 text-green-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                            </svg>
                                            <h5 class="font-bold text-green-900">Email Notification</h5>
                                        </div>
                                        <p class="text-sm text-green-800">You'll receive an approval email with next steps</p>
                                    </div>
                                    <div class="p-4 bg-indigo-50 rounded-lg border-2 border-indigo-200">
                                        <div class="flex items-center mb-2">
                                            <svg class="w-6 h-6 text-indigo-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                                            </svg>
                                            <h5 class="font-bold text-indigo-900">Access Dashboard</h5>
                                        </div>
                                        <p class="text-sm text-indigo-800">Log in to access your seller dashboard</p>
                                    </div>
                                    <div class="p-4 bg-purple-50 rounded-lg border-2 border-purple-200">
                                        <div class="flex items-center mb-2">
                                            <svg class="w-6 h-6 text-purple-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                            </svg>
                                            <h5 class="font-bold text-purple-900">All Features Available</h5>
                                        </div>
                                        <p class="text-sm text-purple-800">Full access to seller features and tools</p>
                                    </div>
                                    <div class="p-4 bg-blue-50 rounded-lg border-2 border-blue-200">
                                        <div class="flex items-center mb-2">
                                            <svg class="w-6 h-6 text-blue-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                            </svg>
                                            <h5 class="font-bold text-blue-900">Start Adding Books</h5>
                                        </div>
                                        <p class="text-sm text-blue-800">Begin listing books immediately</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Getting Started After Approval -->
                <div class="mb-10 p-8 bg-gradient-to-br from-indigo-50 to-purple-50 border-2 border-indigo-200 rounded-xl">
                    <div class="flex items-start">
                        <div class="flex-shrink-0 w-14 h-14 bg-indigo-600 rounded-full flex items-center justify-center text-white font-bold text-xl mr-6">4</div>
                        <div class="flex-1">
                            <h4 class="text-2xl font-bold text-indigo-900 mb-4 flex items-center">
                                <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                </svg>
                                Getting Started After Approval
                            </h4>
                            <div class="bg-white p-6 rounded-lg shadow-md">
                                <p class="text-gray-700 mb-4">After approval, follow these steps to set up your seller account:</p>
                                <div class="space-y-3">
                                    <div class="flex items-start p-4 bg-indigo-50 rounded-lg">
                                        <span class="font-bold text-indigo-600 mr-3">1.</span>
                                        <span class="text-gray-700">Complete your profile if needed - ensure all information is up to date</span>
                                    </div>
                                    <div class="flex items-start p-4 bg-indigo-50 rounded-lg">
                                        <span class="font-bold text-indigo-600 mr-3">2.</span>
                                        <span class="text-gray-700">Familiarize yourself with the seller dashboard and navigation</span>
                                    </div>
                                    <div class="flex items-start p-4 bg-indigo-50 rounded-lg">
                                        <span class="font-bold text-indigo-600 mr-3">3.</span>
                                        <span class="text-gray-700">Start adding your first books using the Book Management section</span>
                                    </div>
                                    <div class="flex items-start p-4 bg-indigo-50 rounded-lg">
                                        <span class="font-bold text-indigo-600 mr-3">4.</span>
                                        <span class="text-gray-700">Review the documentation for managing books and processing orders</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Tips for Quick Approval -->
                <div class="p-8 bg-gradient-to-br from-green-50 to-emerald-50 border-2 border-green-200 rounded-xl">
                    <h4 class="text-2xl font-bold text-green-900 mb-6 flex items-center">
                        <svg class="w-7 h-7 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                        Tips for Quick Approval
                    </h4>
                    <div class="space-y-4">
                        <div class="flex items-start bg-white p-5 rounded-lg shadow-md">
                            <div class="flex-shrink-0 w-10 h-10 bg-green-500 rounded-lg flex items-center justify-center mr-4">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <div>
                                <h5 class="font-bold text-gray-900 mb-1">Provide Complete Information</h5>
                                <p class="text-gray-700 text-sm">Fill in all required fields completely and accurately. Incomplete applications take longer to review.</p>
                            </div>
                        </div>
                        <div class="flex items-start bg-white p-5 rounded-lg shadow-md">
                            <div class="flex-shrink-0 w-10 h-10 bg-green-500 rounded-lg flex items-center justify-center mr-4">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <div>
                                <h5 class="font-bold text-gray-900 mb-1">Write a Detailed Business Description</h5>
                                <p class="text-gray-700 text-sm">A well-written description helps admins understand your business better and speeds up the approval process.</p>
                            </div>
                        </div>
                        <div class="flex items-start bg-white p-5 rounded-lg shadow-md">
                            <div class="flex-shrink-0 w-10 h-10 bg-green-500 rounded-lg flex items-center justify-center mr-4">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <div>
                                <h5 class="font-bold text-gray-900 mb-1">Use a Professional Email Address</h5>
                                <p class="text-gray-700 text-sm">A professional email address (e.g., yourname@yourbusiness.com) builds credibility and trust.</p>
                            </div>
                        </div>
                        <div class="flex items-start bg-white p-5 rounded-lg shadow-md">
                            <div class="flex-shrink-0 w-10 h-10 bg-green-500 rounded-lg flex items-center justify-center mr-4">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <div>
                                <h5 class="font-bold text-gray-900 mb-1">Provide a Valid Phone Number</h5>
                                <p class="text-gray-700 text-sm">Ensure your phone number is correct and reachable. Admins may need to contact you for verification.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Quick Links -->
                <div class="mt-10">
                    <h4 class="text-2xl font-bold text-gray-900 mb-6">Next Steps</h4>
                    <div class="grid md:grid-cols-2 gap-6">
                        <a href="{{ route('docs.show', 'getting-started') }}" class="group flex items-center p-6 bg-gradient-to-br from-indigo-50 to-blue-50 border-2 border-indigo-200 rounded-xl hover:shadow-lg hover:border-indigo-400 transition-all transform hover:-translate-y-1">
                            <div class="flex-shrink-0 w-16 h-16 bg-indigo-600 rounded-lg flex items-center justify-center mr-4 group-hover:scale-110 transition-transform">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                </svg>
                            </div>
                            <div class="flex-1">
                                <h5 class="text-lg font-bold text-gray-900 mb-1 group-hover:text-indigo-600 transition-colors">Getting Started</h5>
                                <p class="text-sm text-gray-600">Learn the basics of the platform</p>
                            </div>
                            <svg class="w-6 h-6 text-indigo-600 opacity-0 group-hover:opacity-100 transition-opacity" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </a>
                        <a href="{{ route('docs.show', 'managing-books') }}" class="group flex items-center p-6 bg-gradient-to-br from-green-50 to-emerald-50 border-2 border-green-200 rounded-xl hover:shadow-lg hover:border-green-400 transition-all transform hover:-translate-y-1">
                            <div class="flex-shrink-0 w-16 h-16 bg-green-600 rounded-lg flex items-center justify-center mr-4 group-hover:scale-110 transition-transform">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                                </svg>
                            </div>
                            <div class="flex-1">
                                <h5 class="text-lg font-bold text-gray-900 mb-1 group-hover:text-green-600 transition-colors">Managing Books</h5>
                                <p class="text-sm text-gray-600">Prepare to add your first books</p>
                            </div>
                            <svg class="w-6 h-6 text-green-600 opacity-0 group-hover:opacity-100 transition-opacity" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
