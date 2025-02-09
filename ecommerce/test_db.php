<?php
include 'includes/db.php'; // Include DB connection file

if (isset($conn)) {  // Check if $conn is set
    echo "Database connected successfully!";
} else {
    echo "Failed to connect to the database.";
}
?>
