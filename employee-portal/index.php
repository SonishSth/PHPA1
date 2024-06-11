<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>Add Employee Hours</title>
</head>
<body>
    <header>
        <img src="images/logos.png" alt="Company Logo">
        <nav>
            <a href="index.php">Add Hours</a>
            <a href="view.php">View Hours</a>
        </nav>
    </header>

    <main>
        <h1 style = "text-align: center;">Employee Portal</h1>
        <form action="submit.php" method="POST">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
            
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            
            <label for="hours_worked">Hours:</label>
            <input type="number" id="hours_worked" name="hours_worked" required>
            
            <label for="date_worked">Date:</label>
            <input type="date" id="date_worked" name="date_worked" required>
            
            <button type="submit">Submit</button>
        </form>
    </main>

    <footer>
        <p>&copy; 2024 Island Spice Flava.</p>
    </footer>
</body>
</html>
