<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="php" href="display.php">
    <title>View Employee Hours</title>
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
        <h1>Employee Hours Worked</h1>
        <?php include 'display.php'; ?>
    </main>

    <footer>
        <p>&copy; 2024 Island Spice Flava</p>
    </footer>
</body>
</html>
