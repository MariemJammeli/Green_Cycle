<?php 
include 'connect.php';

if(isset($_POST['add1_walk'])){

    // Sanitize inputs to prevent SQL injection and handle special characters
    $walk_title = mysqli_real_escape_string($conn, $_POST['walk_title']);
    $walk_desc = mysqli_real_escape_string($conn, $_POST['walk_desc']);
    $walk_unev = mysqli_real_escape_string($conn, $_POST['walk_unev']); // For dénivelé
    $walk_duration = mysqli_real_escape_string($conn, $_POST['walk_duration']);
    $walk_distance = mysqli_real_escape_string($conn, $_POST['walk_distance']);
    $walk_difficulty = mysqli_real_escape_string($conn, $_POST['walk_difficulty']);
    $walk_date = mysqli_real_escape_string($conn, $_POST['walk_date']);
    $walk_location = mysqli_real_escape_string($conn, $_POST['walk_location']); // For emplacement
    $walk_price = mysqli_real_escape_string($conn, $_POST['walk_price']); 
    $walk_time = mysqli_real_escape_string($conn, $_POST['timeOfDay']);
    /* Image Handling */ 
    $walk_photo = $_FILES['walk_photo']['name'];
    $walk_photo_temp_name = $_FILES['walk_photo']['tmp_name'];
    $walk_image_folder = 'walks/'.$walk_photo;

    // SQL Query - Now with sanitized input data
    $insert_query = mysqli_query($conn, "INSERT INTO `walks` (`title`, `description`, `denivele`, `duree`, `distance`, `niveau`, `image`, `date`, `emplacement`,`timeOfDay`,`price`) 
    VALUES ('$walk_title', '$walk_desc', '$walk_unev', '$walk_duration', '$walk_distance', '$walk_difficulty', '$walk_photo', '$walk_date', '$walk_location','$walk_time','$walk_price')");

    // Check success or failure
    if($insert_query){
        move_uploaded_file($walk_photo_temp_name, $walk_image_folder);
        echo "Insert Query Success";
    } else {
        // Display SQL error
        echo "Insert query failed: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style3.css">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <title>Add Walk</title>
</head>
<body>
<nav>
        <div class="nav-bar">
            <i class='bx bx-menu sidebarOpen' ></i>
            <span class="logo navLogo"><img src="logo (2).png" alt="" class="logo1"></span>

            <div class="menu">
                <div class="logo-toggle">
                    <span class="logo"><a href="#">Green Cycle</a></span>
                    <i class='bx bx-x siderbarClose'></i>
                </div>

                <ul class="nav-links">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="Aboutus.html">About Us</a></li>
                    <li><a href="bikes.html">Bikes</a></li>
                    <li><a href="walks.php">Walks</a></li>
                    <li><a href="contactus.html">Contact Us</a></li>
                </ul>
            </div>

            <div class="darkLight-searchBox">
                <div class="dark-light">
                    <i class='bx bx-moon moon'></i>
                    <i class='bx bx-sun sun'></i>
                </div>

                <div class="searchBox">
                   <div class="searchToggle">
                    <i class='bx bx-x cancel'></i>
                    <i class='bx bx-search search'></i>
                   </div>

                    <div class="search-field">
                        <input type="text" placeholder="Search...">
                        <i class='bx bx-search'></i>
                    </div>
                </div>
            </div>
        </div>
    </nav>

<main class="main22">
    <div class="div11">
        <h1>Add A New Walk</h1>
        <form action="" class="add_product" method="POST" enctype="multipart/form-data">
            <input type="text" placeholder="Enter Walk Title" class="input_fields" required name="walk_title">
            <input type="text" placeholder="Enter Walk description" class="input_fields" required name="walk_desc">
            <input type="text" placeholder="Enter Walk dénivelé" class="input_fields" required name="walk_unev"> <!-- Changed name to match the column -->
            <input type="number" min="0" placeholder="Enter Walk duration" class="input_fields" required name="walk_duration">
            <input type="number" min="0" placeholder="Enter Walk distance" class="input_fields" required name="walk_distance">
            <input type="text" placeholder="Enter Walk difficulty" class="input_fields" required name="walk_difficulty">
            <input type="file" class="input_fields" required name="walk_photo" accept="image/png, image/jpg, image/jpeg">
            <input type="date" placeholder="Enter walk date" class="input_fields" required name="walk_date">
            <input type="text" placeholder="Enter walk location" class="input_fields" required name="walk_location"> <!-- Changed name to match the column -->
            <input type="text" placeholder="Enter walk price" class="input_fields" required name="walk_price"> <!-- Changed name to match the column -->
            <input type="text" placeholder="Enter walk time" class="input_fields" required name="timeOfDay"> <!-- Changed name to match the column -->
            <input type="submit" value="Add" class="submit_btn" name="add1_walk">
        </form>
    </div>
    
</main>
</body>
</html>
