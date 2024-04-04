<?php
ob_start();
session_start();

$servername = "localhost";
$username = "";
$password = "";

// Create connection
$conn = new mysqli("localhost", "root", "","sonic_view");

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}












?>