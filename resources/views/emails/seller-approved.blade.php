<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seller Approved</title>
</head>
<body style="font-family: Arial, sans-serif; line-height: 1.6; color: #333; max-width: 600px; margin: 0 auto; padding: 20px;">
    <div style="background-color: #6366f1; color: white; padding: 20px; text-align: center; border-radius: 8px 8px 0 0;">
        <h1 style="margin: 0;">Booksmith</h1>
    </div>
    
    <div style="background-color: #f9fafb; padding: 30px; border-radius: 0 0 8px 8px;">
        <h2 style="color: #6366f1; margin-top: 0;">Congratulations, {{ $seller->name }}!</h2>
        
        <p>Your seller account has been approved by our admin team.</p>
        
        <p>You can now start uploading and selling your books on Booksmith.</p>
        
        <div style="margin: 30px 0;">
            <a href="{{ route('dashboard') }}" style="display: inline-block; background-color: #6366f1; color: white; padding: 12px 30px; text-decoration: none; border-radius: 6px; font-weight: bold;">Go to Dashboard</a>
        </div>
        
        <p>Here's what you can do now:</p>
        <ul style="color: #666;">
            <li>Upload and manage your book inventory</li>
            <li>Manage customer orders</li>
            <li>Track your sales analytics</li>
            <li>Update your profile and business information</li>
        </ul>
        
        <p style="margin-top: 30px;">Thank you for joining our platform!</p>
        
        <p style="color: #666; font-size: 14px; margin-top: 30px; padding-top: 20px; border-top: 1px solid #ddd;">
            Best regards,<br>
            The Booksmith Team
        </p>
    </div>
</body>
</html>

