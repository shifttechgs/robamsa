<?php
namespace App\Http\Controllers\Payment;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\Order;
use App\Services\PaymentService; // Make sure to import the service

class PaymentController extends Controller
{
    protected $paymentService;

    // Inject the PaymentService into the controller
    public function __construct(PaymentService $paymentService)
    {
        $this->paymentService = $paymentService;
    }

    public function paymentSuccess(Request $request)
    {
        Log::info('Payment successfullll', $request->all());
        // $order = Order::where('order_id', $request->order_id)->first();
        session()->forget('cart');
        Log::info("Cart cleared after successful payment.");
        return redirect()->route('order.success')->with('message', 'Payment Successful!');

    }

    public function paymentCancel(Request $request)
    {
        Log::warning('Payment canceled', $request->all());
        return redirect('/order/failed')->with('error', 'Payment was canceled.');
    }

    public function paymentNotify(Request $request)
    {
        $pfData = $request->all();

        // Log received data
        Log::info('Received PayFast Notification Data:', $pfData);
        Log::info('Raw ITN Request:', ['data' => file_get_contents('php://input')]);
        Log::info('Parsed ITN Request:', $pfData);

        // Validate the IPN
        if (!$this->validatePayfastIPN($pfData)) {
            Log::error('Invalid PayFast IPN');
            return response()->json(['status' => 'error', 'message' => 'Invalid IPN'], 400);
        }

        // Use the PaymentService to handle the payment notification
        $this->paymentService->handlePaymentNotification($pfData);

        return response()->json(['status' => 'success', 'message' => 'Payment notification processed']);
    }



    // Validate the PayFast IPN using signature
    private function validatePayfastIPN($pfData)
    {
        // Extract the received signature from the data
        $receivedSignature = $pfData['signature'];

        // Remove the signature from the data for signature validation
        unset($pfData['signature']);

        // Generate the query string without the signature
        $queryString = $this->generatePayFastQueryString($pfData);

        // Generate the MD5 hash of the query string
        $generatedSignature = md5($queryString);

        // Log the received and generated signatures for debugging
        Log::info('Received Signature:', ['received_signature' => $receivedSignature]);
        Log::info('Generated Signature:', ['generated_signature' => $generatedSignature]);

        // Compare the generated signature with the one provided by PayFast
        return $receivedSignature === $generatedSignature;
    }


    private function generatePayFastQueryString($pfData)
    {
        // Define the order of parameters exactly as per PayFast documentation
        $params = [
            'm_payment_id' => $pfData['m_payment_id'],
            'pf_payment_id' => $pfData['pf_payment_id'],
            'payment_status' => $pfData['payment_status'],
            'item_name' => $pfData['item_name'],
            'item_description' => $pfData['item_description'] ?? '',
            'amount_gross' => $pfData['amount_gross'],
            'amount_fee' => $pfData['amount_fee'],
            'amount_net' => $pfData['amount_net'],
            'custom_str1' => $pfData['custom_str1'] ?? '',
            'custom_str2' => $pfData['custom_str2'] ?? '',
            'custom_str3' => $pfData['custom_str3'] ?? '',
            'custom_str4' => $pfData['custom_str4'] ?? '',
            'custom_str5' => $pfData['custom_str5'] ?? '',
            'custom_int1' => $pfData['custom_int1'] ?? '',
            'custom_int2' => $pfData['custom_int2'] ?? '',
            'custom_int3' => $pfData['custom_int3'] ?? '',
            'custom_int4' => $pfData['custom_int4'] ?? '',
            'custom_int5' => $pfData['custom_int5'] ?? '',
            'name_first' => $pfData['name_first'] ?? '',
            'name_last' => $pfData['name_last'] ?? '',
            'email_address' => $pfData['email_address'] ?? '',
            'merchant_id' => $pfData['merchant_id'],
        ];

        // Add the passphrase at the end if it's set in the environment
        if (!empty(env('PAYFAST_PASSPHRASE'))) {
            $params['passphrase'] = env('PAYFAST_PASSPHRASE');
        }

        // Build the query string from the parameters in the correct order
        $queryString = http_build_query($params, '', '&');

        // Log the generated query string for debugging
        Log::info('Generated Query String:', ['query_string' => $queryString]);

        return $queryString;
    }

}
