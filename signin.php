<?php
include 'connect.php';
$email = $_POST['user_email'];
$pass = $_POST['user_password'];



// Sanitize user input (optional but recommended)
$email = mysqli_real_escape_string($conn, $email);
$pass = mysqli_real_escape_string($conn, $pass);

// Query to retrieve user
$req = "select  * from `user` WHERE `user_email`='$email'";
$result = mysqli_query($conn, $req);
if ($result && mysqli_num_rows($result) > 0) {
    // User found, verify password
    $user = mysqli_fetch_assoc($result);
        if ($pass == $user['user_password']) {
            // Redirect if authentication successful
            header("Location: bikes.php");
            exit();
        } else {
            // Password incorrect
            echo "Incorrect password";
        }
    } else {
        // User not found
        echo "User not found";
    }

// Close database connection
mysqli_close($conn);
?>
