<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Safaricom\Mpesa\Mpesa;
use Illuminate\Support\Facades\Http;

class PaymentController extends Controller
{
    public function stk(Request $request)
    {
        // Replace 'your_consumer_key' and 'your_consumer_secret' with your actual M-Pesa credentials
        $consumerKey = 'AICRFdE9GvUoHkqvuT10eEI2XREqW58j';
        $consumerSecret = '203XpgqWZ6f1TEEM';

        // Combine the Consumer Key and Consumer Secret for Basic Authentication
        $credentials = base64_encode($consumerKey . ':' . $consumerSecret);

        // Make a request to M-Pesa OAuth API to obtain the access token
        $response = Http::asForm()
            ->post('https://sandbox.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials', [
                'headers' => [
                    'Authorization' => 'Basic ' . $credentials,
                ],
            ]);

        $data = $response->json();

        // Check if the response is successful and contains the 'access_token' key
        if (!$response->successful() || !isset($data['access_token'])) {
            // Handle the case where access token retrieval failed
            return response()->json(['error' => 'Failed to obtain access token.']);
        }

        // Obtain the access token from the response
        $accessToken = $data['access_token'];

        // Your M-Pesa parameters
        $PhoneNumber = $request->input('phone-number');
        $BusinessShortCode = '174379';
        $LipaNaMpesaPasskey = 'bfb279f9aa9bdbcf158e97dd71a467cd2e0c893059b10f78e6b72ada1ed2c919';
        $TransactionType = 'CustomerPayBillOnline';
        $Amount = '1';
        $PartyA = '254743790522';
        $PartyB = '174379';
        $CallBackURL = 'http://yourdomain.com/mpesa/confirmation';
        $AccountReference = 'AccountReference';
        $TransactionDesc = 'TransactionDesc';
        $Remarks = 'Payment';

        // Create an instance of the Mpesa class
        $mpesa = new Mpesa();

        // Make the STK Push Simulation API request using the obtained access token
        $stkPushSimulation = $mpesa->STKPushSimulation(
            $BusinessShortCode,
            $LipaNaMpesaPasskey,
            $TransactionType,
            $Amount,
            $PartyA,
            $PartyB,
            $PhoneNumber,
            $CallBackURL,
            $AccountReference,
            $TransactionDesc,
            $Remarks,
            $consumerKey,
            $consumerSecret,
            $accessToken
        );

        // Log the STK Push simulation response for debugging
        \Log::info('STK Push Simulation Response: ' . json_encode($stkPushSimulation));

        // Optionally, you can return a response to the user
        return response()->json(['message' => 'STK Push simulation successful.']);
    }
}
