<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic Subscription</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    
</head>
<body>
    <div class="container">
        <h1>Basic Subscription</h1>
        <p>Pay with Mpesa to subscribe to the Basic Plan.</p>
        
      
        
    

        <!-- Payment details form for M-Pesa -->
        <div id="mpesa-details" class="payment-details" >
            <form method="post" action="{{ route('pay-stk') }}" >
                @csrf <!-- Add a CSRF token for security -->

                <!-- Phone number input for M-Pesa -->
                <label for="phone-number">Enter your M-Pesa Phone Number:</label>
                <input type="text" id="phone-number" name="phone-number" required>

                <!-- Display payment amount and other details here -->

                <button type="submit">Pay with M-Pesa</button>
            </form>
        </div>
    </div>

    

</body>
</html>