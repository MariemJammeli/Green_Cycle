
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="style6.css">
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

    <div class="login-container">
        <form class="login-form" action="admin.php" method="POST">
            <h2>Admin Login</h2>
            <div class="input-group">
                <input type="text" id="email" name="email" required>
                <label for="email">Email</label>
            </div>
            <div class="input-group">
                <input type="password" id="pass" name="pass" required>
                <label for="pass">Password</label>
            </div>
            <button type="submit">Login</button>
        </form>
    </div><section class="section1"></section>
<footer class="footer-distributed">
    
      <div class="footer-left">

        <h3>Green<span>Cycle</span></h3>

        <p class="footer-links">
          <a href="#" class="link-1">Home</a>
          
          <a href="#">About Us</a>
        
          <a href="#">Bikes</a>
        
          <a href="#">Tours</a>
          
          <a href="#">Contact US</a>
          
        </p>

        <p class="footer-company-name">Green Cycle © 2024</p>
      </div>

      <div class="footer-center">

        <div>
          <i class="fas fa-map-marker-alt"></i>
          <p><span>Rue Ibn Sina</span> Tunisie, Sousse</p>
        </div>

        <div>
          <i class="fas fa-phone"></i>
          <p>(+216) 50 234 911</p>
        </div>

        <div>
          <i class="fas fa-envelope"></i>
          <p><a href="mailto:contact@lab-it.tn ">contact@lab-it.tn </a></p>
        </div>

      </div>

      <div class="footer-right">

        <p class="footer-company-about">
          <span>Chez LAB-IT, nous comprenons l’importance cruciale de la performance informatique dans le monde moderne. 
        </p>

        <div class="footer-icons">

          <a href="#"><i class="fab fa-facebook"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="#"><i class="fab fa-linkedin"></i></a>
          <a href="#"><i class="fab fa-github"></i></a>

        </div>

      </div>
</footer> 
</body>
</html>
