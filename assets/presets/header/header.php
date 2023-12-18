
<?php
$path = "//" . $_SERVER['SERVER_NAME'] . "/~tth6714/WebMobileIIGroupProject/";
?>
<!DOCTYPE html>
<!-- header used for all content files except for everything within the tutorial folder -->
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php echo $pageTitle; ?></title>
<link rel="stylesheet" type="text/css" href="<?php echo $path . "/assets/css/style.css"; ?>">
<style>
</style>
</head>
<body>

<header>
<img id="top-logo" src="<?php echo $path . "assets/img/logo.png";?>" alt="Logo">
</header>
<nav>
<img id="logo" src="<?php echo $path . "assets/img/logo.png"; ?>" alt="Logo">
    <div class="hamburger-menu" onclick="toggleMenu()">&#9776;</div>
    <ul>
    <li><a onclick="toggleMenu()"  href="<?php echo $path . "index.php";?>">Home</a></li>
    <li><a onclick="toggleMenu()"  href="<?php echo $path . "content/tutorials.php";?>">Tutorials</a></li>
    <li><a onclick="toggleMenu()"  href="<?php echo $path . "content/chat.php";?>">Chat</a></li>
    <li><a onclick="toggleMenu()"  href="<?php echo $path . "content/about.php";?>">About</a></li>
    <li><a onclick="toggleMenu()"  href="<?php echo $path . "content/feedback.php";?>">Feedback</a></li>
    <li><a onclick="toggleMenu()"  href="<?php echo $path . "content/resources.php";?>">Resources</a></li>
    </ul>
</nav>

