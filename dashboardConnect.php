<?php
session_start();
include 'connection.php';

// Check if main user is logged in
if (!isset($_SESSION['main_user_id'])) {
  header("Location: login.php");
  exit();
}

// Fetch main user data
$main_user_id = $_SESSION['main_user_id'];
$stmt = $conn->prepare("SELECT firstName, lastName, username, finalPassword, registrationdate, countrySelect FROM users WHERE id = ?");
$stmt->bind_param("i", $main_user_id);
$stmt->execute();
$stmt->bind_result($firstName, $lastName, $username, $finalPassword, $registrationdate, $countrySelect);
$stmt->fetch();
$stmt->close();

$date = new DateTime($registrationdate);
$formattedDate = $date->format('d-m-Y');
$username = ucfirst($username);
$firstName = ucfirst($firstName);
$lastName = ucfirst($lastName);

// Check if affiliate user is logged in
$affiliate_user_id = isset($_SESSION['affiliate_user_id']) ? $_SESSION['affiliate_user_id'] : null;

$affUsername ='';

if ($affiliate_user_id) {
  // Fetch affiliate user data
  $stmt = $conn->prepare("SELECT username FROM affiliate_users WHERE user_id = ?");
  $stmt->bind_param("i", $affiliate_user_id);
  $stmt->execute();
  $stmt->bind_result($affUsername);
  $stmt->fetch();
  $stmt->close();
}

$affUsername = ucfirst($affUsername);
?>
