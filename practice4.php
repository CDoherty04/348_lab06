<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practice 4</title>
    <link rel="stylesheet" href="shared.css">
</head>
<body>
    <form method="POST">
        <label for="number">Enter a number:</label>
        <br>
        <input type="number" id="number" name="number" required>
        <br>
        <button type="submit">Submit</button>
    </form>
    
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = intval($_POST['number']);
        
        echo "<table>";
        // Create the header row
        echo "<tr><th>X</th>";
        for ($i = 1; $i <= $number; $i++) {
            echo "<th>$i</th>";
        }
        echo "</tr>";
    
        // Create the multiplication rows
        for ($i = 1; $i <= $number; $i++) {
            echo "<tr><th>$i</th>"; // Row header
            for ($j = 1; $j <= $number; $j++) {
                echo "<td>" . ($i * $j) . "</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    }
    ?>

<a href="index.html">Go Back</a>

</body>
</html>