<?php
$conn = new mysqli("localhost", "root", "", "transaction_manager");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
