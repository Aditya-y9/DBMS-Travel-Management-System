<?php
// Database connection
require_once('db_connection.php');

// Fetch all hotels
$sql = "SELECT * FROM Hotel";
$result = $conn->query($sql);

echo '<table>';
echo '<tr><th>Name</th><th>Location</th><th>Rating</th><th>Actions</th></tr>';

if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo '<tr>';
        echo '<td>' . $row["Name"] . '</td>';
        echo '<td>' . $row["Location"] . '</td>';
        echo '<td>' . $row["Rating"] . '</td>';
        echo '<td>';
        echo '<a href="edit-hotels.php?id=' . $row["Hotel_Id"] . '">Edit</a> ';
        echo '<a href="delete-hotels.php?id=' . $row["Hotel_Id"] . '">Delete</a>';
        echo '</td>';
        echo '</tr>';
    }
} else {
    echo '<tr><td colspan="4">No hotels found</td></tr>';
}

echo '</table>';

echo '<a href="create-hotel.php">Create Hotel</a>';

$conn->close();
?>