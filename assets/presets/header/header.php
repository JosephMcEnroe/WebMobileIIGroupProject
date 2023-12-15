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
</head>
<body>
    <div class="navbar" id="myNavbar">
        <a href="<?php echo $path . "index.php";?>">Home</a>
        <a href="<?php echo $path . "content/tutorials.php";?>">Tutorials</a>
        <a href="<?php echo $path . "content/quiz.php";?>">Quiz</a>
        <a href="<?php echo $path . "content/about.php";?>">About</a>
        <a href="<?php echo $path . "content/feedback.php";?>">Feedback</a>
        <a href="<?php echo $path . "content/resources.php";?>">Resources</a>
        <a href="javascript:void(0);" class="icon" onclick="toggleHamburgerMenu()">
            &#9776;
        </a>
    </div>
