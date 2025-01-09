
  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Options</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .payment-form {
            max-width: 500px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
            background-color: #f9f9f9;
        }
        .payment-method {
            margin-bottom: 20px;
        }
        label {
            font-weight: bold;
        }
        .payment-method input[type="radio"] {
            margin-right: 10px;
        }
        .payment-button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .payment-button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
   <?php session_start();?>
    <div class="payment-form">
        <h2>Choose Your Payment Option</h2>
        
        <form action="payment_action.php" method="POST">
            <input type="hidden" name="uid" value="<?php echo $_SESSION['id']; ?>
            <div class="payment-method">
                <label>
                    <input type="radio" name="method" value="credit-card" required>
                    Credit Card/Debit Card
                </label>
            </div>

            <div class="payment-method">
                <label>
                    <input type="radio" name="method" value="paypal">
                    PayPal
                </label>
            </div>

            <div class="payment-method">
                <label>
                    <input type="radio" name="method" value="bank-transfer">
                    Bank Transfer
                </label>
            </div>

            <button type="submit" class="payment-button">Proceed with Payment</button>
        </form>
    </div>

</body>
</html>
