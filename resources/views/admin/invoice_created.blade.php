<!DOCTYPE html>
<html>
<head>
    <title>Invoice Created</title>
</head>
<body>
    <h1>Invoice Created</h1>

    <p>Invoice Details:</p>
    <ul>
        <li>User: {{ $invoice->user->name }}</li>
        <li>Amount: ${{ $invoice->amount }}</li>
        <li>Status: {{ $invoice->status }}</li>
    </ul>
    <p>Click <a href="#">here</a> to pay</p>
    <p>Thank you for using our services.</p>
</body>
</html>
