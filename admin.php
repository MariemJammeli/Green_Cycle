<?php
include 'connect.php';

$email = $_POST['email'];
$pass = $_POST['pass'];

$req = "SELECT * FROM `admin` WHERE `email` = ? AND `password` = ?";
$stmt = $conn->prepare($req);
$stmt->bind_param("ss", $email, $pass);
$stmt->execute();
$result6 = $stmt->get_result();

if ($result6->num_rows > 0) {
    $row = $result6->fetch_assoc();
    $name = $row['name'];
    header("Location: dashbord.php?name=" . urlencode($name));
    exit();
} else {
    echo "Check your email and password";
}
?>
