<?php 
include 'connect.php';

if(isset($_POST['add1_product'])){
    $product_name = $_POST['name_product'];
    $product_price = $_POST['price_product'];
    $product_image = $_FILES['photo_product']['name'];
    $product_image_temp_name = $_FILES['photo_product']['tmp_name'];
    $product_description = $_POST['descr_product'];
    $product_image_folder = 'image/'.$product_image;
    $product_id = 0;
    $product_category = $_POST['product_category'];
    $insert_query = mysqli_query($conn, "INSERT INTO `bike` (`product_id`,`product_name`, `product_price`, `product_img`, `product_description`,`product_category`) VALUES ('$product_id','$product_name', '$product_price', '$product_image', '$product_description','$product_category')") or die("Insert query failed");
    
    if($insert_query){
        move_uploaded_file($product_image_temp_name, $product_image_folder);
        echo "Insert Query Success";
        $product_id = $product_id + 1;
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
    <title>Add Product</title>
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
        <h1>Add Products</h1>
        <form action="" class="add_product" method="POST" enctype="multipart/form-data">
            <input type="text" placeholder="Enter Product Name" class="input_fields" required name="name_product">
            <input type="number" min="0" placeholder="Enter Product Price" class="input_fields" required name="price_product">
            <input type="file" class="input_fields" required name="photo_product" accept="image/png, image/jpg, image/jpeg">
            <input type="text" placeholder="Enter Product Description" class="input_fields" required name="descr_product">
            <input type="text" placeholder="Enter Product Category" class="input_fields" required name="product_category">
            <input type="submit" value="Add" class="submit_btn" name="add1_product">
        </form>
    </div>
</main>
</body>
</html>
