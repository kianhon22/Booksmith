<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Documentation') }}
            </h2>
            <a href="{{ route('docs.index') }}" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700">
                Back to Docs
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-8 prose prose-indigo max-w-none">
                    @if($section === 'getting-started')
                        <h1>Getting Started</h1>
                        <p>Welcome to Booksmith! This guide will help you get started with the platform.</p>
                        
                        <h2>For Sellers</h2>
                        <h3>Registration</h3>
                        <ol>
                            <li>Navigate to the registration page</li>
                            <li>Fill in your personal and business information</li>
                            <li>Submit your application</li>
                            <li>Wait for admin approval (typically 1-2 business days)</li>
                            <li>You'll receive an email once approved</li>
                        </ol>

                        <h3>After Approval</h3>
                        <p>Once your account is approved, you can:</p>
                        <ul>
                            <li>Add new books to your inventory</li>
                            <li>Manage existing book listings</li>
                            <li>Process customer orders</li>
                            <li>View sales analytics</li>
                            <li>Browse and purchase books from other sellers</li>
                        </ul>

                    @elseif($section === 'managing-books')
                        <h1>Managing Books</h1>
                        <p>Learn how to effectively manage your book inventory on Booksmith.</p>

                        <h2>Adding a New Book</h2>
                        <ol>
                            <li>Go to "Book Management" from the main menu</li>
                            <li>Click "Add New Book"</li>
                            <li>Fill in the required information:
                                <ul>
                                    <li><strong>Title:</strong> The book's title</li>
                                    <li><strong>Author:</strong> The book's author</li>
                                    <li><strong>Category:</strong> Select the appropriate category</li>
                                    <li><strong>Description:</strong> A detailed description of the book</li>
                                    <li><strong>Price:</strong> Set your selling price</li>
                                    <li><strong>Stock:</strong> Number of copies available</li>
                                </ul>
                            </li>
                            <li>Optionally add:
                                <ul>
                                    <li>Cover image</li>
                                    <li>Publisher</li>
                                    <li>Publication year</li>
                                    <li>Language</li>
                                </ul>
                            </li>
                            <li>Click "Create Book"</li>
                        </ol>

                        <h2>Editing a Book</h2>
                        <ol>
                            <li>Go to "Book Management"</li>
                            <li>Find the book you want to edit</li>
                            <li>Click "Edit"</li>
                            <li>Update the information</li>
                            <li>Click "Update Book"</li>
                        </ol>

                        <h2>Activating/Deactivating Books</h2>
                        <p>You can make a book inactive to temporarily remove it from the catalogue without deleting it. Simply uncheck the "Active" checkbox when editing the book.</p>

                    @elseif($section === 'orders')
                        <h1>Managing Orders</h1>
                        <p>Process and manage customer orders efficiently.</p>

                        <h2>Viewing Orders</h2>
                        <p>Navigate to "My Orders" to see all orders for your books. You can filter by:</p>
                        <ul>
                            <li>Order status</li>
                            <li>Payment status</li>
                            <li>Customer name or email</li>
                        </ul>

                        <h2>Order Statuses</h2>
                        <ul>
                            <li><strong>Pending:</strong> New order, awaiting processing</li>
                            <li><strong>Processing:</strong> Order is being prepared</li>
                            <li><strong>Shipped:</strong> Order has been shipped</li>
                            <li><strong>Delivered:</strong> Order has been delivered to customer</li>
                            <li><strong>Cancelled:</strong> Order has been cancelled</li>
                        </ul>

                        <h2>Updating Order Status</h2>
                        <ol>
                            <li>Go to "My Orders"</li>
                            <li>Click on an order to view details</li>
                            <li>Select the new status</li>
                            <li>Optionally add notes</li>
                            <li>Click "Update Status"</li>
                            <li>The customer will receive an email notification</li>
                        </ol>

                    @elseif($section === 'analytics')
                        <h1>Sales Analytics</h1>
                        <p>Track your sales performance and make data-driven decisions.</p>

                        <h2>Available Metrics</h2>
                        <ul>
                            <li><strong>Total Sales:</strong> Total revenue from paid orders</li>
                            <li><strong>Total Orders:</strong> Number of orders received</li>
                            <li><strong>Average Order Value:</strong> Average amount per order</li>
                        </ul>

                        <h2>Sales Over Time</h2>
                        <p>View your monthly sales trends with a visual chart showing revenue over time.</p>

                        <h2>Top Selling Books</h2>
                        <p>See which books are performing best, including:</p>
                        <ul>
                            <li>Units sold</li>
                            <li>Total revenue per book</li>
                            <li>Price per unit</li>
                        </ul>

                        <h2>Date Range Filtering</h2>
                        <p>Use the date range filter to view analytics for specific periods:</p>
                        <ol>
                            <li>Select start date</li>
                            <li>Select end date</li>
                            <li>Click "Apply Filter"</li>
                        </ol>

                    @elseif($section === 'account')
                        <h1>Account Settings</h1>
                        <p>Manage your profile and account settings.</p>

                        <h2>Updating Profile</h2>
                        <ol>
                            <li>Click on your name in the top right corner</li>
                            <li>Select "Profile"</li>
                            <li>Update your information</li>
                            <li>Click "Save"</li>
                        </ol>

                        <h2>Changing Password</h2>
                        <ol>
                            <li>Go to Profile settings</li>
                            <li>Enter your current password</li>
                            <li>Enter your new password</li>
                            <li>Confirm your new password</li>
                            <li>Click "Update Password"</li>
                        </ol>

                        <h2>Business Information</h2>
                        <p>Your business information (name, address, description) is displayed to customers. Keep it up to date and professional.</p>

                        <h2>Security Best Practices</h2>
                        <ul>
                            <li>Use a strong, unique password</li>
                            <li>Never share your login credentials</li>
                            <li>Log out when using shared computers</li>
                            <li>Keep your contact information current</li>
                        </ul>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

