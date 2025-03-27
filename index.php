<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Detail</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <img src="https://placehold.co/600x400" class="img-fluid" alt="Product Image">
            </div>
            <div class="col-md-6">
                <h1>Product Name</h1>
                <p class="text-muted">Category: Electronics</p>
                <h2>$1.99</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                <form action="checkout.php" method="POST">
                    <input type="hidden" name="product_id" value="123">
                    <input type="hidden" name="product_name" value="Product Name">
                    <input type="hidden" name="product_price" value="1.99">
                    <button type="submit" class="btn btn-primary">Buy Now</button>
                </form>
            </div>
            
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>