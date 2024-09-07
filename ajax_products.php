<?php
include 'connect.php'; // Ensure this path is correct

$sort = isset($_GET['sort']) ? $_GET['sort'] : ''; // Get sorting option
$category = isset($_GET['category']) ? $_GET['category'] : ''; // Get filter option

// Determine sort order based on the selected option
switch ($sort) {
    case 'lowest':
        $orderBy = 'product_price ASC';
        break;
    case 'highest':
        $orderBy = 'product_price DESC';
        break;
    default:
        $orderBy = 'product_id ASC'; // Default sorting
        break;
}

// Build the SQL query with filter if category is selected
$query = "SELECT * FROM products";
if (!empty($category) && $category !== 'all') {
    $query .= " WHERE product_category = '" . mysqli_real_escape_string($conn, $category) . "'";
}
$query .= " ORDER BY $orderBy";

// Execute the query
$result = mysqli_query($conn, $query);

// Check if the query was successful
if (!$result) {
    echo '<p>Error retrieving products.</p>';
    exit;
}

// Generate product HTML
while ($row = mysqli_fetch_assoc($result)) {
    $product_id = urlencode($row['product_id']);
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
            <input type='hidden' name='product_image' value='$product_img'>
            <div class='options'>
                <button class='btn' type='submit' name='addtocart'> Add To Cart </button>
                <a href='product.php?id=$product_id' class='btn'>View Product</a>
            </div>
        </form>
    </div>";
}
?>
