@component('mail::message')
# Order Status Update - Order #{{ $orderNumber }}

Hello {{ $customerName }},

Your order status has been updated!

**Order Number:** {{ $orderNumber }}  
**New Status:** {{ ucfirst($status) }}

@if($status === 'processing')
Your order is being prepared and will be shipped soon.
@elseif($status === 'shipped')
Great news! Your order has been shipped and is on its way to you.
@elseif($status === 'delivered')
Your order has been delivered. We hope you enjoy your books!
@elseif($status === 'cancelled')
Your order has been cancelled. If you have any questions, please contact the seller.
@endif

**Sold by:** {{ $sellerName }}

@component('mail::button', ['url' => route('orders.show', $order->id)])
View Order Details
@endcomponent

Thank you for shopping with us!

Best regards,<br>
{{ config('app.name') }} Team
@endcomponent

