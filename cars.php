<?php
require_once "settings.php";
if (!$conn) {
    echo "<p>Unable to connect to the database. Please try again later.</p>";
    exit;
}
$query = "SELECT * FROM cars";
$result = mysqli_query($conn, $query);
if ($result) {
    include "car_data.php";
} else {
    echo "<p>Query failed: " . mysqli_error($conn) . "</p>";
}
mysqli_close($conn);
?>
