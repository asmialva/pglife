<?php
$conn = mysqli_connect("localhost", "dummy", "123456789", "pglife","3307");

if (mysqli_connect_errno()) {
    // Throw error message based on ajax or not
    echo "Failed to connect to MySQL! Please contact the admin.";
    return;
}
