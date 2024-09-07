<?php
include 'connect.php';

// Get the product ID from the URL
$id = isset($_GET['id']) ? intval($_GET['id']) : 0;

// Ensure the ID is valid before proceeding
if ($id > 0) {
    // Execute the query
    $sql = "SELECT * FROM walks WHERE id = $id";
    $result = mysqli_query($conn, $sql);

    // Check if the query ran successfully
    if ($result && mysqli_num_rows($result) > 0) {
        $product = mysqli_fetch_assoc($result);
    } else {
        echo "No product found with ID $id";
    }
} else {
    echo "Invalid ID";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <!-- ===== CSS ===== -->
    <link rel="stylesheet" href="style2.css">
        
    <!-- ===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    
    <!-- ===== Font Awesome CSS ===== -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    
    <title>Walk</title>
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
                    <li><a href="#">Walks</a></li>
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
    <div class="container6">
    <img src='walks/<?php echo htmlspecialchars($product['image']); ?>' alt=''>
    <div class="apropos">
        <h4>A propos</h4>
        <p><?php echo($product['description']); ?></p>
        <p>A partir de <?php echo($product['price']); ?> <i class="fa-solid fa-dollar-sign"></i> par personne</p>
        <hr>
        <i class="fa-solid fa-person-circle-check"></i> 20 Personnes Par Groupe Maximum <br>
        <i class="fa-light fa-timer"></i> <?php echo($product['duree']) ; ?>h <br>
        <i class="fa-regular fa-clock"></i> Horaire de début : Vérifier la disponibilité <br>
        <i class="fa-sharp fa-light fa-globe"></i> Guide en direct : Anglais, Français <br>
        <br>
        <form action="payment.php">
        <button >Book Now</button></form>

    </div>
</div>


    

</body>
</html>