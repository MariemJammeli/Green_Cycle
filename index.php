<?php
include 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Green Cycle </title>
    <link rel="stylesheet" href="style.css">
    <link href="img/favicon.ico" rel="icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Poppins:wght@200;600;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,500,300,700">
</head>
<body>  
<div class="hero">
  <nav>
    <a href="#"><img src="logo (2).png" class="logo" alt="Green Cycle Logo"></a>
    <!-- Menu button -->
    <div class="menu" id="menuBtn"><i class="fa fa-bars"></i></div>
    <ul id="navMenu">
      <li><a href="index.php" class="nav1">Home</a></li>
      <li><a href="Aboutus.html" class="nav2">About Us</a></li>
      <li><a href="bikes.php" class="nav3">Bikes</a></li>
      <li><a href="walks.php" class="nav4">Walks</a></li>
      <li><a href="contactus.html" class="nav5">Contact Us</a></li>
      <div class="close" id="closeBtn">
        <i class="fas fa-times"></i>
      </div>
    </ul>
  </nav>
</div>



<div class="content">
  <h1 class="title">Green Cycle</h1>
  <a href="#" class="description">Explore</a>
</div>

</div>
<div class="container2" id="container">
      <div class="form-container sign-up-container">
        <form action="signup.php" method="post">
          <h1 class="h88">Create Account</h1>
          <div class="social-container">
            <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
            <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
            <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
          </div>
          <span class="h99">or use your email for registration</span>
          <input type="text" placeholder="Name" name="user_name" />
          <input type="email" placeholder="Email" name="user_email"/>
          <input type="password" placeholder="Password" name="user_password" />
          <button class="h10" name="signup">Sign Up</button>
        </form>
</div>
<div class="form-container sign-in-container">
  <form action="signin.php" method="post">
    <h1 class="h11">Sign in</h1>
      <div class="social-container">
        <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
        <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
        <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
      </div>
      <span class="h22">or use your account</span>
      <input type="email" placeholder="Email" name="user_email"/>
      <input type="password" placeholder="Password" name="user_password"/>
      <a href="#"><p class="h85">Forgot your password?</p></a>
      <button class="h11">Sign In</button>
  </form>
</div>
      <div class="overlay-container">
        <div class="overlay">
          <div class="overlay-panel overlay-left">
            <h1 class="h44">Welcome Back!</h1>
            <p class="h55">To keep connected with us please login with your personal info</p>
            <button class="ghost" id="signIn">Sign In</button>
          </div>
          <div class="overlay-panel overlay-right">
            <h1 class="h66">Hello, Friend!</h1>
            <p class="h77">Enter your personal details and start journey with us</p>
            <button class="ghost" id="signUp">Sign Up</button>
          </div>
        </div>
      </div>
    </div>
      <!----------------------Hero2---------------------------->
    
    <div class="hero2">
        <h2 class="q1">Pourquoi Choisir Green Cycle?</h2>
        <div>
            <h3 class="q2">QUALITÉ GARANTIE</h3>
            <img src="images/images-removebg-preview.png" alt=""class="img-hero">
            <p class="q3">Chaque vélo est reconditionné et certifié dans nos ateliers.</p>
        </div>
        <div> 
            <h3 class="q4">PRIX ENCADRÉ</h3>
            <img src="images/prix-removebg-preview.png" alt=""class="img-hero">
            <p class="q5">Chaque prix de vente est ajusté sur la cote brute de CoteVélo.</p>
        </div>
        <div>
            <h3 class="q6">CONSEILS AVISÉS</h3>
            <img src="images/3938366.png" alt=""class="img-hero">
            <p class="q7">Chaque client fait l'objet d'un suivi personnalisé.</p>
        </div>
        <div>
            <h3 class="q8">PROPRIÉTÉ VÉRIFIÉE</h3>
            <img src="images/7339329.png" alt=""class="img-hero">
            <p class="q9">Tous les vélos font l'objet d'une vérification de propriété.</p>
        </div>
    </div>
      <!----------------------Main---------------------------->
      <div class="main">
    <div>
        <div class="infos">
            <h1 class="Title"> Our Best Sellers </h1>
            <h4 class="subtitle"> Discover Our New Products!</h4>

            <div class="slider__wrapper">
                <button class="arrow-btn prev" x-on:click="scrollSlider(-1)">
                    &#10094;
                </button>

                <div class="slider__content">
                    <?php 
                        while($row = mysqli_fetch_assoc($result)){  
                            echo"         
                            <div class='slider__item'>
                                <img src='image/".$row['product_img']."' class='slider__image'>
                                <div class='slider__info'>
                                    <h2>".$row['product_name']."</h2>
                                    <p class='descr'>".$row['product_category']."</p>
                                </div>
                            </div>";
                        }
                    ?>
                </div>

                <button class="arrow-btn next" x-on:click="scrollSlider(1)">
                    &#10095;
                </button>
            </div>

            <script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/3.10.2/cdn.js"></script>
        </div>
    </div>
</div>


    <!----------------------Tours---------------------------->
    
    <article>
        <section class="card3">
          <div class="text-content">
            <h3 class="world">Explore The World !</h3>
            <p class="dataa">With our tours, you are sure to have an unforgettable visit to Tunisia, at an affordable price.</p>  
            <a href="walks.php" class="bouton">Our Tours</a>
          </div>
          <div class="visual">
            <img src="images/ride.jpg" alt="" />
          </div>
        </section> 
      </article> 
      

    <!----------------------ContactUS---------------------------->
    
    <div class="hero3">
        <div class="container5">
            <form class="form1">
              <div class="descr">Contact Us</div>
              <div class="input1">
                  <input required="" autocomplete="off" type="text">
                  <label for="name" class="namee">Name</label>
              </div>
        
              <div class="input1">
                  <input required="" autocomplete="off" name="email" type="text">
                  <label for="email">E-mail</label>
              </div>
        
              <div class="input1">
                  <textarea required="" cols="30" rows="1" id="message"></textarea>
                  <label for="message">Message</label>
              </div>
              <button class="send">Send message →</button>
            </form>
        </div>     
    </div>
  
    <!----------------------Footer---------------------------->
<section class="section1"></section>
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
              <p>+216 50 234 911</p>
            </div>
    
            <div>
              <i class="fa fa-envelope"></i>
              <p><a href="mailto:support@company.com">contact@lab-it.tn </a></p>
            </div>
    
          </div>
    
          <div class="footer-right">
    
            <p class="footer-company-about">
              <span>About the company</span>
              Chez LAB-IT, nous comprenons l’importance cruciale de la performance informatique dans le monde moderne. 
            </p>
    
            <div class="footer-icons">
    
              <a href="#"><i class="fa fa-facebook"></i></a>
              <a href="#"><i class="fa fa-twitter"></i></a>
              <a href="#"><i class="fa fa-linkedin"></i></a>
              <a href="#"><i class="fa fa-github"></i></a>
    
            </div>
    
          </div>
</footer>
<script src="script.js"></script>
    
</body>
</html>