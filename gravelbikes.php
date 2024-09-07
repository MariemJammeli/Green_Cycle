<?php 
include 'connect.php';
$query2 = "select * from `bike` where `product_category` = 'gravel' ";
$roadresult = mysqli_query($conn,$query2) ;
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
                    <li><a href="bikes.html">Bikes</a></li>
                    <li><a href="walks.html">Walks</a></li>
                    <li><a href="contact.html">Contact Us</a></li>
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

<!--   Products   -->
<div class="main-products">
  <h1 class="filtertitle">Product Filter and Search</h1>
  <div class="filters">
  <button > <a href="bikes.php"  class="categoriess">All</a></button>
      <button><a href="roadbikes.php" class="categoriess">Road Bikes</a></button>
      <button><a href="moutainbikes.php" class="categoriess">Moutain Bikes</a></button>
      <button><a href="gravelbikes.php" class="categoriess">Gravel Bikes</a></button>
      <button><a href="recycledbikes.php" class="categoriess">Recycled Bikes</a></button>
      <select id="sortOrder">
          <option value="">Sort by</option>
          <option value="lowest">Lowest Price</option>
          <option value="highest">Highest Price</option>
      </select>
      <form action="search.php" method="post">
      <input type="text" id="searchProduct" placeholder="Search product" name="querry">
      <button type="submit"> Search </button>
      </form>
  </div>

  <div class="containerrr">
    <?php 
        while($row = mysqli_fetch_assoc($roadresult)){ 
            echo "<div class='box'>
                    <img src='images/".$row['product_img']."' alt='".$row['product_name']."'>
                    <h2>".$row['product_name']."</h2>
                    <p>".$row['product_description']."</p>
                    <span>".$row['product_price']."</span>
                    <div class='rate'>
                        <i class='filled fas fa-star'></i>
                        <i class='filled fas fa-star'></i>
                        <i class='filled fas fa-star'></i>
                        <i class='filled fas fa-star'></i>
                        <i class='fa-regular fa-star'></i>
                    </div>
                    <div class='options'>
                        <a href='#'>Buy It Now</a>
                        <a href='#'>Add to Cart</a>
                    </div>
                </div>";
        }
    ?>
  </div>
</div>

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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script>
const body = document.querySelector("body"),
      nav = document.querySelector("nav"),
      modeToggle = document.querySelector(".dark-light"),
      searchToggle = document.querySelector(".searchToggle"),
      sidebarOpen = document.querySelector(".sidebarOpen"),
      siderbarClose = document.querySelector(".siderbarClose");

let getMode = localStorage.getItem("mode");
if(getMode && getMode === "dark-mode"){
    body.classList.add("dark");
}

// js code to toggle dark and light mode
modeToggle.addEventListener("click" , () =>{
    modeToggle.classList.toggle("active");
    body.classList.toggle("dark");

    // js code to keep user selected mode even page refresh or file reopen
    if(!body.classList.contains("dark")){
        localStorage.setItem("mode" , "light-mode");
    }else{
        localStorage.setItem("mode" , "dark-mode");
    }
});

// js code to toggle search box
searchToggle.addEventListener("click" , () =>{
    searchToggle.classList.toggle("active");
});

// js code to toggle sidebar
sidebarOpen.addEventListener("click" , () =>{
    nav.classList.add("active");
});

body.addEventListener("click" , e =>{
    let clickedElm = e.target;

    if(!clickedElm.classList.contains("sidebarOpen") && !clickedElm.classList.contains("menu")){
        nav.classList.remove("active");
    }
});
</script>
</body>
</html>
