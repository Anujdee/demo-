<?php
include 'config.php';

$first_name = $_POST['first_name'];
$last_name  = $_POST['last_name'];
$email      = $_POST['email'];
$phone      = $_POST['phone'];
$subject    = $_POST['subject'];
$message    = $_POST['message'];

$sql = "INSERT INTO tbl_d2c (first_name, last_name, email, phone, subject, message)
        VALUES (?, ?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);
$stmt->bind_param("ssssss", $first_name, $last_name, $email, $phone, $subject, $message);

if ($stmt->execute()) {
    // Redirect with success flag
    header("Location: index.php?success=1");
    exit();
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
