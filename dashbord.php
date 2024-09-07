<?php
include 'connect.php';
$bikes = mysqli_num_rows($result);
$users = mysqli_num_rows($result4);
$location = mysqli_num_rows($result5);
$req = "select name from admin where id = ";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
    body {
        font-family: 'Arial', sans-serif;
        margin: 0;
        padding: 20px;
        background-color: #f4f4f4;
        transition: background-color 0.5s ease;
    }

    .container8 {
        display: flex;
        flex-direction: column;
        min-height: 100vh;
        margin-top: 100px;
    }

    .sidebar {
        width: 100%;
        background: #333;
        color: white;
        padding: 15px;
        height: auto;
        transition: all 0.3s ease;
        background-color: #94c49f;
        
    }

    .sidebar h2 {
        text-align: center;
    }

    .sidebar a {
        color: white;
        text-decoration: none;
        display: block;
        margin: 10px 0;
        font-size: 18px;
        position: relative;
        transition: all 0.3s ease;
    }

    .sidebar a:hover {
        padding-left: 10px;
    }

    .dashboard {
        flex: 1;
        padding: 20px;
        transition: padding 0.5s ease;
        margin-top: 50px;
    }

    .header4 {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        align-items: center;
    }

    .header4 h1 {
        margin: 0;
        font-size: 28px;
        animation: fadeInDown 0.5s ease;
        color: #333;
    }

    .header4 input {
        margin-top: 10px;
        padding: 10px;
        width: 100%;
        max-width: 300px;
        font-size: 16px;
        border: 1px solid #ddd;
        border-radius: 5px;
        transition: border-color 0.3s ease;
    }

    .header4 input:focus {
        border-color: #333;
    }

    /* Flexbox for equal height and width cards */
    .cards-container {
        display: flex;
        justify-content: space-between;
        gap: 10px;
        flex-wrap: wrap;
    }

    .card4 {
        background: white;
        border-radius: 8px;
        padding: 20px;
        margin: 10px 0;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        text-align: center;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        animation: fadeInUp 0.6s ease-in-out;
        color: #333;
        flex: 1;
        min-width: calc(33.333% - 20px);
    }

    .card4:hover {
        transform: translateY(-5px);
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
    }

    .card4 h2 {
        margin: 0;
        font-size: 22px;
        color: #333;
    }

    .card4 p {
        font-size: 28px;
        font-weight: bold;
        margin: 15px 0 0;
        color: #333;
    }

    .recent-activity {
        margin-top: 20px;
        background: white;
        border-radius: 8px;
        padding: 20px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        animation: fadeInUp 0.8s ease-in-out;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 10px;
    }

    table, th, td {
        border: 1px solid #ddd;
        color: #333;
    }

    th, td {
        padding: 12px;
        text-align: left;
    }

    th {
        background-color: #f2f2f2;
        color: #333;
    }

    tr:hover {
        background-color: #f9f9f9;
        transition: background-color 0.3s ease;
    }

    @keyframes fadeInDown {
        from {
            opacity: 0;
            transform: translateY(-20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @media (min-width: 768px) {
        .container8 {
            flex-direction: row;
        }

        .sidebar {
            width: 220px;
            height: 100vh;
        }

        .dashboard {
            padding: 20px 40px;
        }

        .header4 h1 {
            font-size: 32px;
        }

        .card4 {
            width: calc(33.333% - 20px);
        }
    }

    @media (min-width: 1024px) {
        .header4 input {
            width: 250px;
        }
    }
</style>

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

<div class="container8">
<div class="sidebar">
    <div class="admin-box">
        <img src="images/profilePic.jpg" alt="Admin Profile Picture" class="admin-pic">
        <?php
            if (isset($_GET['name'])) {
                $name = $_GET['name'];
        ?>
        <h3><?php  echo (htmlspecialchars($name));
        } else {
            echo "No name provided!";
        }; ?></h3>
        <a href="#">Edit Profile</a>
        <a href="adminlogin.php">Logout</a>
    </div>
    <hr>
    <h2>Green Cycle</h2>
    <a href="add_location.php">Add Location Bike</a>
    <a href="add_product.php">Add product</a>
    <a href="add_walk.php">Add Walk</a>
    <a href="#">Consult Messages</a>
    <hr>
    
</div>


    <div class="dashboard">
    <div class="header4">
        <h1>Dashboard</h1>
        <input type="text" placeholder="Search here..." />
    </div>
    <div class="cards-container">
        <div class="card4">
            <h2>Total Registered Accounts</h2>
            <p style="color: blue;"><?php echo($users) ;?></p>
        </div>
        <div class="card4">
            <h2>Total Products</h2>
            <p style="color: orange;"><?php echo($bikes) ;?></p>
        </div>
        <div class="card4">
            <h2>Total Available Bikes For location</h2>
            <p style="color: purple;"><?php echo($location) ;?></p>
        </div>
    </div>
    <div class="recent-activity">
        <h2>Recent purchases</h2>
        <table>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Status</th>
            </tr>
            <tr>
                <td>Hadil Khedher</td>
                <td>asmal@yahoo.com</td>
                <td>Activated</td>
            </tr>
            <tr>
                <td>Amira Khedher</td>
                <td>khedher.hadil05@gmail.com</td>
                <td>Activated</td>
            </tr>
        </table>
    </div>
</div>

</div>

</body>
</html>
