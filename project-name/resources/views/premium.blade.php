<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Premium Subscription</title>
    <link rel="stylesheet" href="{{ asset('css/style2.css') }}">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> <!-- Include jQuery library -->
</head>
<body>
    <div class="container">
        <h1>Premium Subscription</h1>
        <p>Choose a payment method to subscribe to the Premium Plan.</p>
        
        <!-- Payment method selection dropdown -->
        <select id="payment-method" name="payment-method">
            <option value="credit-card">Credit Card</option>
            <option value="mpesa">M-Pesa</option>
            <!-- Add more payment options as needed -->
        </select>

        <!-- Payment details form for M-Pesa -->
        <div id="mpesa-details" class="payment-details" style="display: none;">
            <form method="post" >
                @csrf <!-- Add a CSRF token for security -->

                <!-- Phone number input for M-Pesa -->
                <label for="phone-number">Enter your M-Pesa Phone Number:</label>
                <input type="text" id="phone-number" name="phone-number" required>

                <!-- Display payment amount and other details here -->

                <button type="submit">Pay with M-Pesa</button>
            </form>
        </div>
    </div>

    <script>
        $(document).ready(function () {
            // Listen for changes in the dropdown selection
            $("#payment-method").change(function () {
                var selectedValue = $(this).val();
                if (selectedValue === "mpesa") {
                    $("#mpesa-details").show();
                } else {
                    $("#mpesa-details").hide();
                }
            });
        });
    </script>
</body>
</html>