<?php

namespace App\Services;

use App\Models\Order;
use App\Models\Payment;
use Illuminate\Support\Facades\Log;

class PaymentService
{
    public function processPayment(Order $order)
    {
        $cartTotal = number_format($order->total_amount, 2, '.', '');

        $merchantId = env('PAYFAST_MERCHANT_ID');
        $merchantKey = env('PAYFAST_MERCHANT_KEY');
        $passphrase = env('PAYFAST_PASSPHRASE');
        $pfHost = env('PAYFAST_MODE') === 'sandbox' ? 'sandbox.payfast.co.za' : 'www.payfast.co.za';

        $data = [
            'merchant_id'   => $merchantId,
            'merchant_key'  => $merchantKey,
            'amount'        => $cartTotal,
            'item_name'     => $order->order_number,
            'm_payment_id'  => $order->order_number, // Ensure this is included
            //urls
            'return_url'    => env('PAYFAST_RETURN_URL'),
            'cancel_url'    => env('PAYFAST_CANCEL_URL'),
            'notify_url'    => env('PAYFAST_NOTIFY_URL'),
            'passphrase'    => $passphrase,
        ];
//dd($data);
        $data['signature'] = $this->generateSignature($data);


       // Log::info('Signature Data: ' . json_encode($data));
        $queryString = http_build_query($data);
        $fullUrl = "https://{$pfHost}/eng/process?" . $queryString;
       // dd($fullUrl);
        //Log::info("PayFast Payment URL: " . $fullUrl);

        // Redirect user to PayFast
        return redirect()->away($fullUrl);
    }


    public function handlePaymentNotification($data)
    {
        Log::info("Payment Notification Received", $data);

        // Trim and log the m_payment_id to avoid extra spaces or characters
        $order_number = trim($data['m_payment_id']);
        Log::info('Received m_payment_id:', ['m_payment_id' => $order_number]);

        $paymentStatus = $data['payment_status'] === 'COMPLETE' ? 'Paid' : 'Failed';
        $transactionId = $data['pf_payment_id'] ?? null;

        // Use where clause to find the order by m_payment_id
        $order = Order::where('order_number', $order_number)->first();
        // Log the fetched order to inspect the data
        Log::info('Order Retrieved:', ['order' => $order]);
        // If no order is found, log the error and return early
        if (!$order) {
            Log::error("Order not found for Order ID: {$order_number}");
            return;  // Return early if the order is not found
        }

        Log::info("Updating Order with ID: {$order_number}, Payment Status: {$paymentStatus}");

        try {
            // Update Order Payment Status
            $order->payment_status = $paymentStatus;
            $order->save();

            // Save Payment Record
            Payment::updateOrCreate(
                [
                    'order_id' => $order_number,
                    'amount' => $order->total_amount,
                    'payment_status' => $paymentStatus,
                    'payment_method' => 'PayFast',
                    'm_payment_id' => $transactionId,
                    'pf_payment_id' => $data['pf_payment_id'],
                    'user_id' => $order->user_id,
                ]
            );
           // $cart = session('cart', []);
//            session()->forget('cart'); // Assuming you store the cart in a session called 'cart'
//            Log::info("Session data:", session()->all());
//

           // Log::info("Cart session cleared after successful payment.");
           // Log::info("Payment saved for Order ID: {$order_number}, Status: {$paymentStatus}");
        } catch (\Exception $e) {
            Log::error("Error saving payment for Order ID: {$order_number}", ['error' => $e->getMessage()]);
        }
    }



//    private function generateSignature(array $data, $passphrase)
//    {
//        ksort($data);
//
//        $queryString = http_build_query($data, '', '&', PHP_QUERY_RFC3986); // Ensures correct encoding
//        return md5($queryString . ($passphrase ? '&passphrase=' . $passphrase : ''));
//    }

    private function generateSignature(array $data)
    {
        // Exclude the signature
        unset($data['signature']);

        // Sort the data
        ksort($data);

        // Log the sorted data for debugging
       // Log::info("Sorted Data: ", ['sorted_data' => $data]);

        // Build the query string
        $queryString = http_build_query($data, '', '&', PHP_QUERY_RFC3986);

        // Log the query string before adding the passphrase
       // Log::info("Query String Before Passphrase: ", ['query_string' => $queryString]);

        // Append passphrase if provided
//        if (!empty($passphrase)) {
//            $queryString .= '&passphrase=' . $passphrase;
//        }

        // Log the final query string
       // Log::info("Final Query String with Passphrase: ", ['final_query_string' => $queryString]);

        // Generate and return the signature
        return md5($queryString);
    }


}
