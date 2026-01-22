<?php
include 'config.php';

$data = json_decode(file_get_contents("php://input"), true);

$desc = $data['description'];
$amount = $data['amount'];

$stmt = $conn->prepare("INSERT INTO transactions (description, amount) VALUES (?, ?)");
$stmt->bind_param("sd", $desc, $amount);
$stmt->execute();

echo json_encode(["status" => "success"]);
?>
