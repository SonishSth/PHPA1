<?php
include 'connection.php';

$sql = "SELECT id, name, email, hours_worked, date_worked FROM employees";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table>";
    echo "<tr><th>ID</th><th>Name</th><th>Email</th><th>Hours Worked</th><th>Date Worked</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["id"]."</td><td>".$row["name"]."</td><td>".$row["email"]."</td><td>".$row["hours_worked"]."</td><td>".$row["date_worked"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>
