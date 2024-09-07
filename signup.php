<?php
include 'connect.php';

$nom = mysqli_real_escape_string($conn, $_POST['user_name']);
$email = mysqli_real_escape_string($conn, $_POST['user_email']);
$password = mysqli_real_escape_string($conn, $_POST['user_password']);

// Vérifier si l'utilisateur existe déjà
$check_query = "SELECT * FROM user WHERE user_email = '$email'";
$check_result = mysqli_query($conn, $check_query);

if (mysqli_num_rows($check_result) > 0) {
    echo("You already have an account try to sign in");
    exit(); // Terminer le script après la redirection
} else {
    // Insertion des données dans la base de données
    $req = "INSERT INTO `user` (`user_name`, `user_email`, `user_password`) 
            VALUES ('$nom', '$email', '$password')";
    $result = mysqli_query($conn, $req);
    if ($result) {
        header("Location: bikes.php");
        exit(); // Terminer le script après la redirection
    } else {
        echo "Erreur lors de l'insertion dans la base de données.";
    }
}
?>
