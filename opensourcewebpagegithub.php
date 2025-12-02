<?php
// --- MySQL CONNECTION (Update with your credentials) ---
$host = "localhost";
$user = "root";       // default XAMPP user
$pass = "";           // default XAMPP password is blank
$db   = "testdb";     // your database name

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Database Connection Failed: " . $conn->connect_error);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP + XAMPP Demo</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #eef1f5;
            margin: 0;
        }

        header {
            background: #222;
            color: #fff;
            padding: 1.5rem;
            text-align: center;
        }

        .container {
            width: 90%;
            max-width: 900px;
            margin: 2rem auto;
            background: white;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        h2 {
            border-bottom: 2px solid #ddd;
            padding-bottom: .5rem;
        }

        footer {
            margin-top: 3rem;
            background: #222;
            padding: 1rem;
            color: white;
            text-align: center;
        }
    </style>
</head>

<body>

<header>
    <h1>My PHP + MySQL Demo Page</h1>
    <p>Running on XAMPP Apache & MySQL</p>
</header>

<div class="container">
    <h2>Database Test</h2>

    <?php
        // --- Example QUERY ---
        $sql = "SELECT 'Hello from MySQL!' AS message";
        $result = $conn->query($sql);

        if ($result && $result->num_rows > 0) {
            $row = $result->fetch_assoc();
            echo "<p><strong>MySQL says:</strong> " . $row['message'] . "</p>";
        } else {
            echo "<p>No data returned.</p>";
        }
    ?>

    <h2>About This Page</h2>
    <p>
        This is a simple PHP webpage with HTML embedded inside PHP, 
        styled with basic CSS, and connected to a MySQL database using XAMPP.
    </p>

    <h2>Contact</h2>
    <p>You can modify this page however you like!</p>
</div>

<footer>
    <p>&copy; <?php echo date("Y"); ?> PHP Demo Site</p>
</footer>

</body>
</html>
