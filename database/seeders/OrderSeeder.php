<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Book;
use App\Models\User;
use Carbon\Carbon;

class OrderSeeder extends Seeder
{
    public function run(): void
    {
        $sellers = User::whereHas('roles', function ($query) {
            $query->where('name', 'seller');
        })->where('is_approved', true)->get();

        $books = Book::where('is_active', true)->where('stock', '>', 0)->get();

        if ($sellers->isEmpty()) {
            $this->command->warn('No approved sellers found. Please seed sellers first.');
            return;
        }

        if ($books->isEmpty()) {
            $this->command->warn('No active books found. Please seed books first.');
            return;
        }

        $statuses = ['pending', 'processing', 'shipped', 'delivered', 'cancelled'];
        $customerNames = [
            'John Smith', 'Emily Johnson', 'Michael Brown', 'Sarah Davis', 'David Wilson',
            'Jennifer Martinez', 'James Taylor', 'Lisa Anderson', 'Robert Thomas', 'Maria Garcia',
            'William Jackson', 'Patricia White', 'Richard Harris', 'Linda Martin', 'Joseph Thompson'
        ];
        $customerEmails = [
            'john.smith@example.com', 'emily.j@example.com', 'michael.brown@example.com',
            'sarah.davis@example.com', 'david.wilson@example.com', 'jennifer.m@example.com',
            'james.taylor@example.com', 'lisa.anderson@example.com', 'robert.thomas@example.com',
            'maria.garcia@example.com', 'william.jackson@example.com', 'patricia.white@example.com',
            'richard.harris@example.com', 'linda.martin@example.com', 'joseph.thompson@example.com'
        ];
        $customerPhones = [
            '+1234567890', '+1234567891', '+1234567892', '+1234567893', '+1234567894',
            '+1234567895', '+1234567896', '+1234567897', '+1234567898', '+1234567899',
            '+1234567900', '+1234567901', '+1234567902', '+1234567903', '+1234567904'
        ];
        $addresses = [
            '123 Main Street, New York, NY 10001',
            '456 Oak Avenue, Los Angeles, CA 90001',
            '789 Pine Road, Chicago, IL 60601',
            '321 Elm Street, Houston, TX 77001',
            '654 Maple Drive, Phoenix, AZ 85001',
            '987 Cedar Lane, Philadelphia, PA 19101',
            '147 Birch Court, San Antonio, TX 78201',
            '258 Willow Way, San Diego, CA 92101',
            '369 Spruce Circle, Dallas, TX 75201',
            '741 Poplar Place, San Jose, CA 95101',
            '852 Ash Boulevard, Austin, TX 78701',
            '963 Hickory Street, Jacksonville, FL 32201',
            '159 Cypress Road, Fort Worth, TX 76101',
            '357 Walnut Avenue, Columbus, OH 43201',
            '468 Chestnut Drive, Charlotte, NC 28201'
        ];

        for ($i = 1; $i <= 10; $i++) {
            $seller = $sellers->random();

            $numItems = rand(1, 3);
            $selectedBooks = $books->random(min($numItems, $books->count()));

            $subtotal = 0;
            $orderItems = [];

            foreach ($selectedBooks as $book) {
                $quantity = rand(1, min(3, $book->stock));
                $unitPrice = $book->price;
                $totalPrice = $unitPrice * $quantity;
                $subtotal += $totalPrice;

                $orderItems[] = [
                    'book_id' => $book->id,
                    'quantity' => $quantity,
                    'unit_price' => $unitPrice,
                    'total_price' => $totalPrice,
                ];
            }

            $tax = $subtotal * 0.06;
            $shippingFee = rand(0, 50) / 10;
            $total = $subtotal + $tax + $shippingFee;

            $orderNumber = 'ORD-' . str_pad($i, 6, '0', STR_PAD_LEFT) . '-' . strtoupper(substr(md5(time() + $i), 0, 6));

            $customerIndex = $i - 1;
            $customerName = $customerNames[$customerIndex] ?? 'Customer ' . $i;
            $customerEmail = $customerEmails[$customerIndex] ?? 'customer' . $i . '@example.com';
            $customerPhone = $customerPhones[$customerIndex] ?? '+1234567' . str_pad($i, 3, '0', STR_PAD_LEFT);
            $shippingAddress = $addresses[$customerIndex] ?? $addresses[0];

            $order = Order::create([
                'order_number' => $orderNumber,
                'seller_id' => $seller->id,
                'customer_name' => $customerName,
                'customer_email' => $customerEmail,
                'customer_phone' => $customerPhone,
                'shipping_address' => $shippingAddress,
                'subtotal' => $subtotal,
                'tax' => round($tax, 2),
                'shipping_fee' => round($shippingFee, 2),
                'total' => round($total, 2),
                'status' => $statuses[array_rand($statuses)],
                'notes' => rand(0, 1) ? 'Please handle with care.' : null,
                'created_at' => Carbon::now()->subDays(rand(0, 30)),
                'updated_at' => Carbon::now()->subDays(rand(0, 30)),
            ]);

            foreach ($orderItems as $item) {
                OrderItem::create([
                    'order_id' => $order->id,
                    'book_id' => $item['book_id'],
                    'quantity' => $item['quantity'],
                    'unit_price' => $item['unit_price'],
                    'total_price' => $item['total_price'],
                ]);
            }
        }

        $this->command->info('Created 10 orders with random sellers and books.');
    }
}

