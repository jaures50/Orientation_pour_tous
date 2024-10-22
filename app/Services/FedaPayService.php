<?php

namespace App\Services;

use FedaPay\FedaPay;
use FedaPay\Transaction;

class FedaPayService
{
    public function __construct()
    {
        FedaPay::setApiKey(env('FEDAPAY_SECRET_KEY')); // Assure-toi que la clé est correcte
    }

    public function createTransaction($amount, $currency = 'XOF', $description = 'Achat')
    {
        try {
            $transaction = Transaction::create([
                'description' => $description,
                'amount' => $amount,
                'currency' => $currency,
                'callback_url' => route('fedapay.callback'), // URL de callback
                'customer' => [
                    'firstname' => 'Nom du client',
                    'lastname' => 'Prénom du client',
                    'email' => 'email@example.com',
                ],
            ]);

            return $transaction;
        } catch (\Exception $e) {
            \Log::error('Erreur lors de la création de la transaction: '.$e->getMessage());
            throw $e; // Relève l'exception pour la gérer ailleurs
        }
    }

    public function getPaymentUrl($transaction)
    {
        return $transaction->generateToken()->url; // Assure-toi que cette méthode est correcte
    }
}
