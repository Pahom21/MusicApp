<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic Subscription</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> <!-- Include jQuery library -->
</head>
<body>
    <div class="container">
        <h1>Basic Subscription</h1>
        <p>Choose a payment method to subscribe to the Basic Plan.</p>
        
        <!-- Payment method selection dropdown -->
        <select id="payment-method" name="payment-method">
            <option value="credit-card">Credit Card</option>
            <option value="mpesa">M-Pesa</option>
            <!-- Add more payment options as needed -->
        </select>

        <div id="credit-card-details" class="payment-details" style="display: none;">
    <form method="post" >
        @csrf <!-- Add a CSRF token for security -->

        <!-- Credit card number input -->
        <label for="credit-card-number">Credit Card Number:</label>
        <input type="text" id="credit-card-number" name="credit-card-number" required>

        <!-- Expiration date input -->
        <label for="expiration-date">Expiration Date:</label>
        <input type="text" id="expiration-date" name="expiration-date" placeholder="MM/YY" required>

        <!-- CVV input -->
        <label for="cvv">CVV:</label>
        <input type="text" id="cvv" name="cvv" required>

        <!-- Display payment amount and other details here -->

        <button type="submit">Pay with Credit Card</button>
    </form>
</div>

        <!-- Payment details form for M-Pesa -->
        <div id="mpesa-details" class="payment-details" style="display: none;">
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

    <script>
    $(document).ready(function () {
        // Listen for changes in the dropdown selection
        $("#payment-method").change(function () {
            var selectedValue = $(this).val();
            
            if (selectedValue === "mpesa") {
                $("#mpesa-details").show();
                $("#credit-card-details").hide();
            } else if(selectedValue === "credit-card") {
                $("#mpesa-details").hide();
                $("#credit-card-details").show();
            } else {
                // Hide both forms if neither M-Pesa nor Credit Card is selected
                $("#mpesa-details").hide();
                $("#credit-card-details").hide();
            }
        });
    });
</script>

</body>
</html>