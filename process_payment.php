<?php
require 'vendor/autoload.php';

use ParagonIE\Halite\Symmetric\Crypto as SymmentricCrypto;
use ParagonIE\Halite\KeyFactory;
use ParagonIE\Halite\HiddenString;

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$dbHost = $_ENV['localhost'];
$dbUser = $_ENV['root'];
$dbPass = $_ENV[''];
$dbName = $_ENV['betradesdb'];
$secretKey = $_ENV['SECRET_KEY'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $cardNumber = $_POST['cnumber'];
  $cardExpiry = $_POST['cexpiry'];
  $cardCvc = $_POST['ccvc'];
  $amount = $_POST['amount'];

  if (empty($cardNumber) || empty($cardExpiry) || empty($cardCvc) || empty($amount)) {
    echo "All fields are required.";
    exit;
  }

  // Encryption key
  $encryptionKey = KeyFactory::importEncryptionKey(new HiddenSting($secretKey));

  $encryptedCardNumber = SymmetricCrypto::encrypt(new HiddenString($cardNumber), $encryptionKey);
  $encryptedCardExpiry = SymmetricCrypto::encrypt(new HiddenString($cardExpiry), $encryptionKey);
  $encryptedCardCvc = SymmetricCrypto::encrypt(new HiddenString($cardCvc), $encryptionKey);

  $conn = new mysqli($dbHost, $dbUser, $dbPass, $dbName);

  if ($conn->connect_erro) {
    die("Connection failed: " . $conn->connect_error);
  }

  echo "Connection successful.";

  $stmt = $conn->prepare("INSERT INTO transactions (cnumber, cexpiry, ccvc, amount, status_) VALUES (?, ?, ?, ?, ?)");
  $status = 'Pending';
  $stmt->bind_param('sssds', $encryptedCardNumber, $encryptedCardExpiry, $encryptedCardCvc, $amount, $status);
  
  if ($stmt->execute()) {
    echo "Payment submitted for processing.";
  } else {
    echo "Error: " . $stmt->error;
  }
} else {
  echo "Invalid request method.";
}

?>