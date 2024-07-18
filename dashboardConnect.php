<?php
session_start();
include 'connection.php';

// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
  header("Location: login.php");
  exit();
}

// Fetch user data
$user_id = $_SESSION['user_id'];
$stmt = $conn->prepare("SELECT firstName, lastName, username, finalPassword, registrationdate, countrySelect FROM users WHERE id = ?");
$stmt->bind_param("i", $user_id);
$stmt->execute();
$stmt->bind_result($firstName, $lastName, $username, $finalPassword, $registrationdate, $countrySelect);
$stmt->fetch();
$stmt->close();

// Capitalize first letter of username
$username = ucfirst($username);
$firstName = ucfirst($firstName);
$lastName = ucfirst($lastName);

$conn->close();
?>