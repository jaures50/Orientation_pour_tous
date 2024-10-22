<?php

namespace App\Http\Controllers;

use App\Services\FedaPayService;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    protected $fedapayService;

    public function __construct(FedaPayService $fedapayService)
    {
        $this->fedapayService = $fedapayService;
    }

    public function initiatePayment()
    {
        $amount = 10000; // Montant en XOF (CFA)
        try {
            $transaction = $this->fedapayService->createTransaction($amount);
            return redirect($this->fedapayService->getPaymentUrl($transaction));
        } catch (\Exception $e) {
            return response()->json(['error' => 'Erreur lors de l\'initiation du paiement.'], 500);
        }
    }

    public function handleCallback(Request $request)
    {
        $status = $request->input('status');

        if ($status === 'approved') {
            return redirect()->route('payment.success');
        }

        return redirect()->route('payment.failure');
    }
}
