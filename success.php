<?php
session_start();
include 'vendor/autoload.php';
\Stripe\Stripe::setApiKey('sk_test_XaFLBo1BiQOBde1BAJKOfIeq');
$stripe_session_id = $_GET['session_id'];
$session = \Stripe\Checkout\Session::retrieve($stripe_session_id);
// echo '<pre>'; print_r($session); echo '</pre>'; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Success</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header bg-success text-white">
                <h4>Payment Successful</h4>
            </div>
            <div class="card-body">
                <h5 class="card-title">Thank you for your payment!</h5>
                <p class="card-text">Your payment was processed successfully. Below are the details of your transaction:</p>
                <ul class="list-group">
                    <li class="list-group-item"><strong>Transaction ID:</strong> <?php echo $session->id; ?></li>
                    <li class="list-group-item"><strong>Amount:</strong> <?php echo $session->amount_total; ?></li>
                    <li class="list-group-item"><strong>Status:</strong> <?php echo $session->payment_status; ?></li>
                    <li class="list-group-item"><strong>Customer name:</strong> <?php echo $session->customer_details->name; ?></li>
                    <li class="list-group-item"><strong>Customer email:</strong> <?php echo $session->customer_details->email; ?></li>
                </ul>
            </div>
            <div class="card-footer text-muted">
                <a href="https://huongdan.quanlythietbitruonghoc.com/stripe-demo" class="btn btn-primary">Go to Homepage</a>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>