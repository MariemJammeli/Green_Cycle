<?php 
include 'connect.php';
if(isset($_POST['addtocart'])){
  $bike_name=$_POST['product_name'];
  $bike_price = $_POST['product_price'];
  $bike_image = $_POST['product_image'];
  $bike_quantity = 1;
  // select cart data based on condition
  $select_cart = mysqli_query($conn,"select * from cart where name='$bike_name'"); 
  if(mysqli_num_rows($select_cart)>0){
    echo"product already added to cart ";
  }
  else{
  //insert cart data in cart table
  $insert_product = mysqli_query($conn,"insert into cart (name,price,image,quantity) values('$bike_name','$bike_price','$bike_image',$bike_quantity)");
  echo"product added to cart ";
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="../node_modules/nouislider/dist/nouislider.min.css">
    <link rel="stylesheet" href="../node_modules/tom-select/dist/css/tom-select.bootstrap5.css">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <title>Our Bikes</title>
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
                    <li><a href="bikes.php">Bikes</a></li>
                    <li><a href="walks.php">Walks</a></li>
                    <li><a href="contactus.html">Contact Us</a></li>
                </ul>
            </div>
            <div class="darkLight-searchBox">
                <div class="dark-light">
                    <i class='bx bx-moon moon'></i>
                    <i class='bx bx-sun sun'></i>
                </div>
                <a href="cart.php"><i class='bx bx-cart'></i></a>
                <div class="searchBox">
                    <div class="searchToggle">
                        <i class='bx bx-x cancel'></i>
                        <i class='bx bx-search search'><a href="search.php"></a></i>
                    </div>
                    <div class="search-field">
                        <form action="search.php">
                        <input type="text" placeholder="Search..." name="querry">
                        <button type="submit" onclick="search.php"><i class='bx bx-search'></i></button>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </nav>

   <!-- Products -->
<div class="main-products">
    <h1 class="filtertitle">Product Filter and Search</h1>
    <div class="filters">
        <button><a href="bikes.php" class="categoriess">All</a></button>
        <button><a href="roadbikes.php" class="categoriess">Road Bikes</a></button>
        <button><a href="moutainbikes.php" class="categoriess">Mountain Bikes</a></button>
        <button><a href="gravelbikes.php" class="categoriess">Gravel Bikes</a></button>
        <button><a href="recycledbikes.php" class="categoriess">Recycled Bikes</a></button>
        <button><a href="location.php" class="categoriess">Bike Location</a></button>
        <select id="sortOrder">
            <option value="">Sort by</option>
            <option value="lowest">Lowest Price</option>
            <option value="highest">Highest Price</option>
        </select>
        <form action="search.php" method="post">
            <input type="text" id="searchProduct" placeholder="Search product" name="querry" class="search_bikes">
        </form>
    </div>

      <div class="containerrr">
    <?php 
        while($row = mysqli_fetch_assoc($result)){ 
            $product_id = urlencode($row['product_id']); // Ensure ID is URL-safe
            $product_name = htmlspecialchars($row['product_name']);
            $product_description = htmlspecialchars($row['product_description']);
            $product_price = htmlspecialchars($row['product_price']);
            $product_img = htmlspecialchars($row['product_img']);

            echo "<div class='box'>
            <form method='post' action=''>
                    <img src='images/$product_img' alt='$product_name'>
                    <h2>$product_name</h2>
                    <p>$product_description</p>
                    <span>$product_price DT</span>
                    <div class='rate'>
                        <i class='filled fas fa-star'></i>
                        <i class='filled fas fa-star'></i>
                        <i class='filled fas fa-star'></i>
                        <i class='filled fas fa-star'></i>
                        <i class='fa-regular fa-star'></i>
                    </div>
                    <input type='hidden' name='product_name' value='$product_name'>
                    <input type='hidden' name='product_price' value='$product_price'>
                    <input type='hidden' name='product_image'value='$product_img'>
                    
                    <div class='options'>
                        <button class='btn' type='submit' name='addtocart'> Add To Cart </button>
                        <a href='product.php?id=$product_id' class='btn'>View Product</a>
                    </div>
                </div>
                </form>";
        }
    ?>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
    // Load products on page load
    loadProducts();

    // Handle sort order change
    $('#sortOrder').change(function() {
        loadProducts();
    });

    // Handle filter change
    $('.filters button').click(function() {
        loadProducts();
    });

    function loadProducts() {
        var sortOrder = $('#sortOrder').val(); // Get selected sort option
        var category = $('.filters button.active').data('category'); // Get selected filter option

        $.ajax({
            url: 'ajax_products.php',
            type: 'GET',
            data: {
                sort: sortOrder,
                category: category // Send filter parameter
            },
            success: function(response) {
                $('#productContainer').html(response); // Update product container
            },
            error: function() {
                $('#productContainer').html('<p>An error occurred while loading products.</p>');
            }
        });
    }
});
</script>


    <!--Footer -->
<footer class="footer-distributed">
  <div class="footer-left">
    <h3>Green<span>Cycle</span></h3>
    <p class="footer-links">
      <a href="#" class="link-1">Home</a>
      <a href="#">About Us</a>
      <a href="#">Bikes</a>
      <a href="#">Tours</a>
      <a href="#">Contact Us</a>
    </p>
    <p class="footer-company-name">Green Cycle © 2024</p>
  </div>
  <div class="footer-center">
    <div>
      <i class="fa fa-map-marker"></i>
      <p><span>Rue Ibn Sina</span> Tunisie, Sousse</p>
    </div>
    <div>
      <i class="fa fa-phone"></i>
      <p>+1.555.555.5555</p>
    </div>
    <div>
      <i class="fa fa-envelope"></i>
      <p><a href="mailto:support@company.com">support@company.com</a></p>
    </div>
  </div>
  <div class="footer-right">
    <p class="footer-company-about">
      <span>About the company</span>
      Lorem ipsum dolor sit amet, consectateur adispicing elit. Fusce euismod convallis velit, eu auctor lacus vehicula sit amet.
    </p>
    <div class="footer-icons">
      <a href="#"><i class="fa fa-facebook"></i></a>
      <a href="#"><i class="fa fa-twitter"></i></a>
      <a href="#"><i class="fa fa-linkedin"></i></a>
      <a href="#"><i class="fa fa-github"></i></a>
    </div>
  </div>
</footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // JS for navigation and dark/light mode
    </script>
</body>
</html>
