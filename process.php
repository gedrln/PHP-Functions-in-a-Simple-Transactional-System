<?php
// ==============================
// Retrieve POST Data
// ==============================
$itemName = strtoupper($_POST['item_name']);  // Built-in #1
$price = $_POST['price'];
$quantity = $_POST['quantity'];

// ==============================
// User-Defined Functions
// ==============================

// 1. Compute Subtotal
function computeSubtotal($price, $quantity) {
    return $price * $quantity;
}

// 2. Compute Discount (5% if subtotal > 1000)
function computeDiscount($subtotal) {
    if ($subtotal > 1000) {
        return $subtotal * 0.05;
    }
    return 0;
}

// 3. Compute Tax (12% after discount)
function computeTax($amountAfterDiscount) {
    return $amountAfterDiscount * 0.12;
}

// 4. Compute Final Amount
function computeFinalAmount($subtotal, $discount, $tax) {
    return ($subtotal - $discount) + $tax;
}

// 5. Format Currency
function formatCurrency($amount) {
    return number_format($amount, 2); // Built-in #2
}

// ==============================
// Processing
// ==============================

$subtotal = computeSubtotal($price, $quantity);
$discount = computeDiscount($subtotal);
$afterDiscount = $subtotal - $discount;
$tax = computeTax($afterDiscount);
$finalAmount = computeFinalAmount($subtotal, $discount, $tax);

$itemLength = strlen($itemName); // Built-in #3
?>

<!DOCTYPE html>
<html>
<head>
    <title>Transaction Summary</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .summary {
            background: #ffffff;
            padding: 30px;
            width: 450px;
            border-radius: 10px;
            box-shadow: 0px 10px 25px rgba(0, 0, 0, 0.2);
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
        }

        .total {
            font-size: 18px;
            font-weight: bold;
            color: #e74a3b;
        }

        a {
            display: block;
            text-align: center;
            margin-top: 20px;
            text-decoration: none;
            background: #4e73df;
            color: white;
            padding: 10px;
            border-radius: 5px;
        }

        a:hover {
            background: #2e59d9;
        }
    </style>
</head>
<body>

<div class="summary">
    <h2>Transaction Summary</h2>

    <div class="row">
        <span>Item Name:</span>
        <span><?php echo $itemName; ?></span>
    </div>

    <div class="row">
        <span>Name Length:</span>
        <span><?php echo $itemLength; ?> characters</span>
    </div>

    <div class="row">
        <span>Price:</span>
        <span>₱<?php echo formatCurrency($price); ?></span>
    </div>

    <div class="row">
        <span>Quantity:</span>
        <span><?php echo $quantity; ?></span>
    </div>

    <div class="row">
        <span>Subtotal:</span>
        <span>₱<?php echo formatCurrency($subtotal); ?></span>
    </div>

    <div class="row">
        <span>Discount:</span>
        <span>₱<?php echo formatCurrency($discount); ?></span>
    </div>

    <div class="row">
        <span>Tax (12%):</span>
        <span>₱<?php echo formatCurrency($tax); ?></span>
    </div>

    <hr>

    <div class="row total">
        <span>Final Amount to Pay:</span>
        <span>₱<?php echo formatCurrency($finalAmount); ?></span>
    </div>

    <a href="index.php">New Transaction</a>
</div>

</body>
</html>