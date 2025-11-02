<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center">
            <a href="{{ route('docs.index') }}" class="mr-4 text-gray-600 hover:text-indigo-600 transition-colors">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                </svg>
            </a>
            <h2 class="text-2xl font-bold text-gray-900">Seller Approval Process</h2>
        </div>
    </x-slot>

    <div class="mx-auto sm:px-6 lg:px-8">
        <div class="bg-white rounded-lg shadow-sm p-8">
            <div class="prose max-w-none">
                <!-- Introduction -->
                <div class="mb-10">
                    <h3 class="text-3xl font-bold text-gray-900 mb-4">Admin: Seller Approval Process 🔐</h3>
                    <p class="text-lg text-gray-600 mb-6">
                        This guide is for administrators only. Learn how to efficiently review and approve seller applications on Booksmith. This process ensures quality sellers join the platform.
                    </p>
                    <div class="p-6 bg-indigo-50 border-l-4 border-indigo-500 rounded-lg">
                        <div class="flex items-start">
                            <svg class="w-6 h-6 text-indigo-600 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <div>
                                <p class="font-semibold text-indigo-900">Admin-Only Feature</p>
                                <p class="text-indigo-800 text-sm mt-1">Only users with admin role can access this feature. This helps maintain platform quality and security.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Reviewing Applications -->
                <div class="mb-10 p-8 bg-gradient-to-br from-blue-50 to-indigo-50 border-2 border-blue-200 rounded-xl">
                    <h4 class="text-2xl font-bold text-blue-900 mb-6 flex items-center">
                        <svg class="w-7 h-7 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                        </svg>
                        Reviewing Seller Applications
                    </h4>
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <p class="text-gray-700 mb-6">Follow these steps to review and approve seller applications:</p>
                        <div class="space-y-6">
                            <div class="flex items-start">
                                <div class="flex-shrink-0 w-10 h-10 bg-blue-600 rounded-full flex items-center justify-center text-white font-bold mr-4">1</div>
                                <div class="flex-1">
                                    <h5 class="font-bold text-gray-900 mb-2">Navigate to Sellers Page</h5>
                                    <p class="text-gray-700 text-sm">Go to <strong>Sellers</strong> from the sidebar menu to access the seller management page.</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <div class="flex-shrink-0 w-10 h-10 bg-blue-600 rounded-full flex items-center justify-center text-white font-bold mr-4">2</div>
                                <div class="flex-1">
                                    <h5 class="font-bold text-gray-900 mb-2">Filter by Pending Status</h5>
                                    <p class="text-gray-700 text-sm">Use the status filter to show only "Pending" sellers. This helps you focus on new applications that need review.</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <div class="flex-shrink-0 w-10 h-10 bg-blue-600 rounded-full flex items-center justify-center text-white font-bold mr-4">3</div>
                                <div class="flex-1">
                                    <h5 class="font-bold text-gray-900 mb-2">View Seller Details</h5>
                                    <p class="text-gray-700 text-sm">Click <strong>"View"</strong> on any seller to see complete information including personal details, business information, and business description.</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <div class="flex-shrink-0 w-10 h-10 bg-blue-600 rounded-full flex items-center justify-center text-white font-bold mr-4">4</div>
                                <div class="flex-1">
                                    <h5 class="font-bold text-gray-900 mb-2">Review Information</h5>
                                    <p class="text-gray-700 text-sm">Carefully review the business information, description, and contact details. Verify that all information is complete and accurate.</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <div class="flex-shrink-0 w-10 h-10 bg-blue-600 rounded-full flex items-center justify-center text-white font-bold mr-4">5</div>
                                <div class="flex-1">
                                    <h5 class="font-bold text-gray-900 mb-2">Approve Seller</h5>
                                    <p class="text-gray-700 text-sm">If the application meets requirements, click <strong>"Approve"</strong> to activate the seller account.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- What Happens After Approval -->
                <div class="mb-10 p-8 bg-gradient-to-br from-green-50 to-emerald-50 border-2 border-green-200 rounded-xl">
                    <h4 class="text-2xl font-bold text-green-900 mb-6 flex items-center">
                        <svg class="w-7 h-7 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        What Happens After Approval
                    </h4>
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <p class="text-gray-700 mb-6">When you approve a seller, the following actions occur automatically:</p>
                        <div class="grid md:grid-cols-2 gap-4">
                            <div class="p-5 bg-green-50 rounded-lg border-2 border-green-200">
                                <div class="flex items-center mb-3">
                                    <svg class="w-6 h-6 text-green-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                    </svg>
                                    <h5 class="font-bold text-green-900">Email Notification</h5>
                                </div>
                                <p class="text-sm text-green-800">Seller receives an automatic email notification confirming their approval and welcoming them to the platform.</p>
                            </div>
                            <div class="p-5 bg-indigo-50 rounded-lg border-2 border-indigo-200">
                                <div class="flex items-center mb-3">
                                    <svg class="w-6 h-6 text-indigo-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                                    </svg>
                                    <h5 class="font-bold text-indigo-900">Dashboard Access</h5>
                                </div>
                                <p class="text-sm text-indigo-800">Seller can immediately log in and access their seller dashboard with full features enabled.</p>
                            </div>
                            <div class="p-5 bg-purple-50 rounded-lg border-2 border-purple-200">
                                <div class="flex items-center mb-3">
                                    <svg class="w-6 h-6 text-purple-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                                    </svg>
                                    <h5 class="font-bold text-purple-900">Add Books</h5>
                                </div>
                                <p class="text-sm text-purple-800">Seller can start adding books to their inventory and managing their listings immediately.</p>
                            </div>
                            <div class="p-5 bg-blue-50 rounded-lg border-2 border-blue-200">
                                <div class="flex items-center mb-3">
                                    <svg class="w-6 h-6 text-blue-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                    </svg>
                                    <h5 class="font-bold text-blue-900">Visible in System</h5>
                                </div>
                                <p class="text-sm text-blue-800">Seller appears in the approved sellers list and can be viewed by other admins.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Revoking Approval -->
                <div class="mb-10 p-8 bg-gradient-to-br from-yellow-50 to-orange-50 border-2 border-yellow-200 rounded-xl">
                    <h4 class="text-2xl font-bold text-yellow-900 mb-6 flex items-center">
                        <svg class="w-7 h-7 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728A9 9 0 015.636 5.636m12.728 12.728L5.636 5.636"></path>
                        </svg>
                        Revoking Seller Approval
                    </h4>
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <p class="text-gray-700 mb-4">
                            In certain situations, you may need to revoke a seller's approval:
                        </p>
                        <div class="space-y-4">
                            <div class="flex items-start p-4 bg-yellow-50 border-l-4 border-yellow-500 rounded-lg">
                                <svg class="w-5 h-5 text-yellow-600 mr-3 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                <div>
                                    <h5 class="font-semibold text-yellow-900 mb-1">When to Revoke</h5>
                                    <p class="text-sm text-yellow-800">Revoke approval if a seller violates platform policies, provides false information, or engages in fraudulent activity.</p>
                                </div>
                            </div>
                            <div class="flex items-start p-4 bg-red-50 border-l-4 border-red-500 rounded-lg">
                                <svg class="w-5 h-5 text-red-600 mr-3 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path>
                                </svg>
                                <div>
                                    <h5 class="font-semibold text-red-900 mb-1">How to Revoke</h5>
                                    <p class="text-sm text-red-800">Go to the seller's profile page and click the <strong>"Revoke"</strong> button. This will immediately restrict their seller features.</p>
                                </div>
                            </div>
                            <div class="flex items-start p-4 bg-blue-50 border-l-4 border-blue-500 rounded-lg">
                                <svg class="w-5 h-5 text-blue-600 mr-3 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                <div>
                                    <h5 class="font-semibold text-blue-900 mb-1">After Revocation</h5>
                                    <p class="text-sm text-blue-800">The seller cannot access seller features until they are re-approved. They can still log in but will see the pending approval page.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Review Checklist -->
                <div class="p-8 bg-gradient-to-br from-indigo-50 to-purple-50 border-2 border-indigo-200 rounded-xl">
                    <h4 class="text-2xl font-bold text-indigo-900 mb-6 flex items-center">
                        <svg class="w-7 h-7 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path>
                        </svg>
                        Review Checklist
                    </h4>
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <p class="text-gray-700 mb-6">Use this checklist when reviewing seller applications:</p>
                        <div class="space-y-3">
                            <div class="flex items-start p-4 bg-indigo-50 rounded-lg">
                                <svg class="w-5 h-5 text-indigo-600 mr-3 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                <div>
                                    <h5 class="font-semibold text-gray-900 mb-1">Complete Information</h5>
                                    <p class="text-sm text-gray-700">All required fields are filled in (name, email, phone, business name, address, description)</p>
                                </div>
                            </div>
                            <div class="flex items-start p-4 bg-indigo-50 rounded-lg">
                                <svg class="w-5 h-5 text-indigo-600 mr-3 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                <div>
                                    <h5 class="font-semibold text-gray-900 mb-1">Valid Contact Information</h5>
                                    <p class="text-sm text-gray-700">Email address and phone number appear valid and professional</p>
                                </div>
                            </div>
                            <div class="flex items-start p-4 bg-indigo-50 rounded-lg">
                                <svg class="w-5 h-5 text-indigo-600 mr-3 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                <div>
                                    <h5 class="font-semibold text-gray-900 mb-1">Quality Business Description</h5>
                                    <p class="text-sm text-gray-700">Business description is detailed and clearly explains what the seller offers</p>
                                </div>
                            </div>
                            <div class="flex items-start p-4 bg-indigo-50 rounded-lg">
                                <svg class="w-5 h-5 text-indigo-600 mr-3 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                <div>
                                    <h5 class="font-semibold text-gray-900 mb-1">Compliance Check</h5>
                                    <p class="text-sm text-gray-700">Information appears legitimate and complies with platform policies</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Quick Links -->
                <div class="mt-10">
                    <h4 class="text-2xl font-bold text-gray-900 mb-6">Quick Actions</h4>
                    <div class="grid md:grid-cols-2 gap-6">
                        <a href="{{ route('sellers.index') }}" class="group flex items-center p-6 bg-gradient-to-br from-indigo-50 to-blue-50 border-2 border-indigo-200 rounded-xl hover:shadow-lg hover:border-indigo-400 transition-all transform hover:-translate-y-1">
                            <div class="flex-shrink-0 w-16 h-16 bg-indigo-600 rounded-lg flex items-center justify-center mr-4 group-hover:scale-110 transition-transform">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                </svg>
                            </div>
                            <div class="flex-1">
                                <h5 class="text-lg font-bold text-gray-900 mb-1 group-hover:text-indigo-600 transition-colors">Manage Sellers</h5>
                                <p class="text-sm text-gray-600">Review and approve seller applications</p>
                            </div>
                            <svg class="w-6 h-6 text-indigo-600 opacity-0 group-hover:opacity-100 transition-opacity" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
