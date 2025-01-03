<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="payment-container">
        <div class="payment-header">
            <img src="logo.png" alt="SSDN Technologies Ltd." class="logo">
            <h1>Vip Payment</h1>
            <p>Pay with your credit card</p>
        </div>
        <!-- Payment Form -->
        <form action="process.php" method="POST" class="payment-form">
            <!-- Email -->
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Enter your email" required>
            </div>

            <!-- Card Information -->
            <div class="form-group">
                <label for="card-info">Card Information</label>
                <div class="card-input">
                    <input type="text" id="card-number" name="card_number" placeholder="1234 1234 1234 1234" maxlength="19" required>
                    <input type="text" id="expiry-date" name="expiry_date" placeholder="MM / YY" maxlength="5" required>
                    <input type="text" id="cvv" name="cvv" placeholder="CVC" maxlength="4" required>
                </div>
                <div class="card-icons">
                    <img src="visa.png" alt="Visa">
                    <img src="mastercard.png" alt="Mastercard">
                    <img src="amex.png" alt="American Express">
                    <img src="unionpay.png" alt="UnionPay">
                </div>
            </div>

            <!-- Cardholder Name -->
            <div class="form-group">
                <label for="cardholder-name">Cardholder Name</label>
                <input type="text" id="cardholder-name" name="cardholder_name" placeholder="Full name on card" required>
            </div>

            <!-- Country or Region -->
            <div class="form-group">
                <label for="country">Country or Region</label>
                <select id="country" name="country" required>
                    <option value="United States">United States</option>
                    <option value="United Kingdom">United Kingdom</option>
                    <option value="Canada">Canada</option>
                    <option value="Australia">Australia</option>
                    <!-- Add more countries as needed -->
                </select>
                <input type="text" id="zip" name="zip" placeholder="ZIP" required>
            </div>

            <!-- Submit Button -->
            <button type="submit" class="pay-button">Pay 10.00$</button>
        </form>
    </div>
</body>
</html>