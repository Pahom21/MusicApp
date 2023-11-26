<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Music Player Subscription</title>
    <link rel="stylesheet" href="{{ asset('css/style2.css') }}">
</head>
<body>
    <div class="container">
        <h1>Music Player Subscription Plans</h1>
        <p>Choose a subscription plan to access our music library.</p>
        <div class="subscription-plans">
            <div class="plan">
                <h2>Basic Plan</h2>
                <p>Access to a limited music library.</p>
                <span class="price">Ksh 1/month</span>
                <button> <a href="{{ route('basic-subscription') }}" class="basic-link">Subscribe </a></button>
            </div>
            <div class="plan">
                <h2>Premium Plan</h2>
                <p>Unlimited access to our full music library.</p>
                <span class="price">Ksh 3/month</span>
                <button> <a href="{{ route('premium-subscription') }}" class="premium-link">Subscribe </a></button>
        </div>
    </div>
    <script src="index.js"></script>
    
</body>
</html>