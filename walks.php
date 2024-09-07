<?php
include 'connect.php';
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

<nav>
<div class="nav-bar">
        <i class='bx bx-menu sidebarOpen menu-toggle'></i>
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

    <div class="balade">
        <h1 class="headerr"><?php $num = mysqli_num_rows($result2); echo($num) ?> Sorties Nature Vous Attendent</h1>
        <div class="filterss">
            <button id="apply-filters">Appliquer les filtres</button>
            <button id="reset-filters">Réinitialiser les filtres</button>
        </div>
        <?php
        while($row = mysqli_fetch_assoc($result2)){ 
          $id = urlencode($row['id']); // Ensure ID is URL-safe
        echo"<div class='tour'>
            <img src='walks/".$row['image']."'>
            <h2><a href='article.php?id=$id'>".$row['title']."</a></h2>
            <p class='des'>".$row['description']." <br></p>
            <p><strong>Dénivelé:</strong> ".$row['denivele']."m+ | <strong>Durée:</strong>  ".$row['duree']."h | <strong>Distance:</strong>".$row['distance']." km | <strong>Niveau:</strong> ".$row['niveau']."</p>
        </div>
        ";}
       ?>
    </div>
    <div id="walks-container">
            <?php
            while($row = mysqli_fetch_assoc($result2)){ 
              $id = urlencode($row['id']); // Ensure ID is URL-safe
            echo"<div class='tour' data-id='$id' data-title='".$row['title']."' data-description='".$row['description']."' data-denivele='".$row['denivele']."' data-duree='".$row['duree']."' data-distance='".$row['distance']."' data-niveau='".$row['niveau']."' data-image='".$row['image']."'>
                <img src='walks/".$row['image']."'>
                <h2><a href='article.php?id=$id'>".$row['title']."</a></h2>
                <p class='des'>".$row['description']." <br></p>
                <p><strong>Dénivelé:</strong> ".$row['denivele']."m+ | <strong>Durée:</strong>  ".$row['duree']."h | <strong>Distance:</strong>".$row['distance']." km | <strong>Niveau:</strong> ".$row['niveau']."</p>
            </div>";
            }
           ?>
        </div>
    </div>
    <div class="filtrage">
        <div class="day">
            <h3>When are you leaving? </h3>
            <input type="date" name="date">
        </div>
        <div class="moment">
            <h3>Time of day</h3>
            <input type="checkbox" id="morning" name="timeOfDay" value="Matin"> Matin <br>
            <input type="checkbox" id="afternoon" name="timeOfDay" value="Aprés-Midi"> Aprés-Midi <br>
            <input type="checkbox" id="evening" name="timeOfDay" value="soirée"> Soirée et nuit <br>
        </div>
        <hr>
        <div class="duree">
            <h3>Durée</h3>
            <input type="checkbox" id="duration1" name="duration" value="1h"> 1 heure maximum <br>
            <input type="checkbox" id="duration2" name="duration" value="1-2h"> 1 à 2 heures <br>
            <input type="checkbox" id="duration3" name="duration" value="2-3d"> 2 heures à 3 jours <br>
            <input type="checkbox" id="duration4" name="duration" value="3-4h"> 3 à 4 heures
        </div>
        <hr>
        <div class="price">
            <h3>Prix</h3>
            0 Dt <input type="range" id="priceRange" name="price" min="0" max="1000" value="0"> 1000 DT
        </div>
        <hr>
    </div>

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
<script src="script2.js"></script>
  </footer>
</body>
</html>