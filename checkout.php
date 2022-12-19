<?php
require './vendor/autoload.php';
header('Content-Type');

$stripe = new Stripe\StripeClient("sk_test_51MGjlgErwAmkvHMKB2q2KVFy2Ff0FiHRq6s1BpL4DgNjBMtnxxnl78nNJYAJcVikl8hTSpOZnSJc9SRcXD6oEswv00flWI52Q7");
$session = $stripe->checkout->sessions->create([
    "success_url" => "http://localhost/flightbooking/success.php", 
    "cancel_url" => "http://localhost/cancel.php", 
    "payment_method_types" => ['card', 'alippay'], 
    "mode" => 'payment', 
    "line_items" => [
        [
            "price_data" =>[
                "currency" => "eur", 
                "product_data" => [
                    "name" => "FlightTicket", 
                    "description" => "Air transport tickets"
                ], 
                "unit_amount" => 10000
            ], 
            "quantity" => 1
        ]
    ]
]);

echo json_encode($session); 