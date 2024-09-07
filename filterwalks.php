<?php
include 'connect.php';
$data = json_decode(file_get_contents('php://input'), true);

// Construire la requête SQL en fonction des filtres
$sql = "SELECT * FROM walks WHERE 1=1"; // Base de la requête

if (!empty($data['date'])) {
    $sql .= " AND date >= '" . $data['date'] . "'";
}
if (!empty($data['timeOfDay'])) {
    $timeOfDay = implode("','", $data['timeOfDay']);
    $sql .= " AND timeOfDay IN ('" . $timeOfDay . "')";
}
if (!empty($data['duration'])) {
    $duration = implode("','", $data['duration']);
    $sql .= " AND duree IN ('" . $duration . "')";
}
if (!empty($data['price'])) {
    $sql .= " AND price <= " . intval($data['price']);
}

// Exécuter la requête
$result = mysqli_query($conn, $sql);

// Retourner les résultats en HTML
while ($row = mysqli_fetch_assoc($result)) {
    $id = urlencode($row['id']); // Ensure ID is URL-safe
    echo "<div class='tour'>
            <img src='walks/" . $row['image'] . "'>
            <h2><a href='article.php?id=$id'>" . $row['title'] . "</a></h2>
            <p class='des'>" . $row['description'] . "<br></p>
            <p><strong>Dénivelé:</strong> " . $row['denivele'] . "m+ | <strong>Durée:</strong>  " . $row['duree'] . "h | <strong>Distance:</strong>" . $row['distance'] . " km | <strong>Niveau:</strong> " . $row['niveau'] . "</p>
        </div>";
}
?>
