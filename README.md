# WebMobileIIGroupProject

# Add Database Configuration
Create `dbConnect.inc` file in `adminer/` folder.
```
<?php
$servername = "localhost";
$username = "<groupname>";
$password = "<password>";
$db = "<databasename>";

// Create connection
$mysqli = new mysqli($servername, $username, $password, $db);

// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}
echo "Connected successfully";
?>
```
