<?php 
include 'connect.php';
$query = "select * from cart ";
$result4 = mysqli_query($conn,$query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Walks</title>
    <link rel="stylesheet" href="style2.css">

</head>
<body>
<nav>
        <div class="nav-bar">
            <i class='bx bx-menu sidebarOpen' ></i>
            <span class="logo navLogo"><img src="images/logo (2).png" alt="" class="logo1"></span>

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

    <div class="cart">
        <h2>Your Shopping Cart</h2>
        <div class="cart-items">
        <?php
        $total = 0;
        while($row = mysqli_fetch_assoc($result4)){
            $total = $total + $row['price'];
            $product_image = $row['image'];
            $product_name = $row['name'];
            $product_price = $row['price'];
            $product_quantity= $row['quantity'];
            echo"<div class='cart-item'>
                <img src='image/$product_image' class='item-image'>
                <div class='item-details'>
                    <span class='item-name'>".$product_name."</span>
                    <span class='item-quantity'>".$product_quantity."</span>
                    <span class='item-price'>".$product_price."DT</span>
                </div>
            </div>";
        }
        ?>
        </div>
        <div class="cart-total">
            <span>Total:</span>
            <span class="total-price"><?php echo($total) ?> DT</span>
        </div>
        <form action="payment.php">
        <button class="checkout-button">Checkout</button></form>
    </div>
</body>
</html>
