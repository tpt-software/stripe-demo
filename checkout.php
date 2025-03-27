<?php
session_start();
include 'vendor/autoload.php';
$product_id = $_POST["product_id"];
$product_name = $_POST["product_name"];
$product_price = $_POST["product_price"];

$base_url = 'https://huongdan.quanlythietbitruonghoc.com/stripe-demo';

\Stripe\Stripe::setApiKey('sk_test_XaFLBo1BiQOBde1BAJKOfIeq');
$checkout_session = \Stripe\Checkout\Session::create([
    "mode" => "payment",
    // 'payment_method_types' => ['card'],
    // 'payment_intent_data' => [ // For capture
    //     'capture_method' => 'manual',
    // ],
    "success_url"   =>  $base_url.'/success.php?session_id={CHECKOUT_SESSION_ID}',
    "cancel_url"    => $base_url.'/cancel.php',
    "line_items"    => [
        [
            "quantity" => 1,
            "price_data" => [
                "currency" => "usd",
                "unit_amount" => $product_price * 100,
                "product_data" => [
                    "name" => $product_name,
                    "description" => "Product Description",
                    "images" => ["https://placehold.co/600x400"]
                ]
            ]
        ]
    ]
]);

$stripe_session_id = $checkout_session->id;
// Save the session ID to the database for later use
$_SESSION['stripe_session_id'] = $stripe_session_id;
$redirect_url = $checkout_session->url;
header("Location: $redirect_url"); 
exit;
