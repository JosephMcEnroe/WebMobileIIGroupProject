# WebMobileIIGroupProject

# Add Database Configuration
Create `dbConnect.inc` file in `adminer/` folder. and replace `<groupname>`, `<password>`, `<dbname>` accordingly
``` dbConnect.inc
<?php
$servername = "localhost";
$username = "<groupname>";
$password = "<password>";
$db = "<dbname>";

// Create connection
$mysqli = new mysqli($servername, $username, $password, $db);

// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}
echo "Connected successfully";
?>
```
