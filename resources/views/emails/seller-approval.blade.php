@component('mail::message')
# @if($isApproved) Congratulations! Your Seller Account Has Been Approved @else Update on Your Seller Account Application @endif

Hello {{ $sellerName }},

@if($isApproved)
We're excited to inform you that your seller account for **{{ $businessName }}** has been approved!

You can now:
- Add and manage book listings
- Process customer orders
- View sales analytics
- Purchase books from other sellers

@component('mail::button', ['url' => route('login')])
Login to Your Account
@endcomponent

Thank you for joining Booksmith. We look forward to seeing your books on our platform!

@else
Thank you for your interest in becoming a seller on Booksmith.

After careful review, we regret to inform you that we are unable to approve your seller account for **{{ $businessName }}** at this time.

If you have any questions or would like to discuss this decision, please don't hesitate to contact our support team.

@endif

Best regards,<br>
{{ config('app.name') }} Team
@endcomponent

