<?php
include 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $hours_worked = $_POST['hours_worked'];
    $date_worked = $_POST['date_worked'];

    // Validate inputs
    if (!empty($name) && !empty($email) && !empty($hours_worked) && !empty($date_worked)) {
        $sql = "INSERT INTO employees (name, email, hours_worked, date_worked) VALUES ('$name', '$email', '$hours_worked', '$date_worked')";

        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "All fields are required.";
    }

    $conn->close();
}
?>
