<?php 
include 'connect.php';

if(isset($_POST['add1_product'])){
    $location_name = $_POST['name'];
    $location_price = $_POST['price'];
    $location_image = $_FILES['photo']['name'];
    $location_image_temp_name = $_FILES['photo']['tmp_name'];
    $location_description = $_POST['descr'];
    $location_image_folder = 'location/'.$location_image;
    $location_category = $_POST['category'];
    $insert_query = mysqli_query($conn, "INSERT INTO `location` (`name`, `price`, `img`, `description`,`category`) VALUES ('$location_name', '$location_price', '$location_image', '$location_description','$location_category')") or die("Insert query failed: " . mysqli_error($conn));    
    if($insert_query){
        move_uploaded_file($location_image_temp_name, $location_image_folder);
        echo "Insert Query Success";
    } else {
        echo "There is some error inserting product";
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
    <title>Add Location</title>
</head>
<body>
<nav>
    <div class="nav-bar">
        <i class='bx bx-menu sidebarOpen'></i>
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
                <li><a href="#">Walks</a></li>
                <li><a href="#">Contact Us</a></li>
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
    <div class="div1">
        <h1>Add Bike Rent</h1>
        <form action="" class="add_product" method="POST" enctype="multipart/form-data">
            <input type="text" placeholder="Enter Product Name" class="input_fields" required name="name">
            <input type="number" min="0" placeholder="Enter Product Price" class="input_fields" required name="price">
            <input type="file" class="input_fields" required name="photo" accept="image/png, image/jpg, image/jpeg">
            <input type="text" placeholder="Enter Product Description" class="input_fields" required name="descr">
            <input type="text" placeholder="Enter Product Category" class="input_fields" required name="category">
            <input type="submit" value="Add" class="submit_btn" name="add1_product">
        </form>
    </div>
</main>
</body>
</html>
