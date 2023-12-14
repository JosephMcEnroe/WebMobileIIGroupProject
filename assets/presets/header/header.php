<?php
$path = "//" . $_SERVER['SERVER_NAME'] . "/~iste240t60/WebMobileIIGroupProject/";
?>
<!DOCTYPE html>
<!-- header used for all content files except for everything within the tutorial folder -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learn Python</title>
    <link rel="stylesheet" type="text/css" href="<?php echo $path . "/assets/css/style.css"; ?>">
</head>
<body>
<header>
        <nav>
            <a class="nav-logo" href="../index.php">Learn Python</a>
            <ul class="nav-menu">
            <li class="nav-item"><a class="nav-link" href="<?php echo $path . "index.php";?>">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="<?php echo $path . "content/tutorials.php";?>">Tutorials</a></li>
                <li class="nav-item"><a class="nav-link" href="<?php echo $path . "content/quiz.php";?>">Quiz</a></li>
                <li class="nav-item"><a class="nav-link" href="<?php echo $path . "content/about.php";?>">About</a></li>
                <li class="nav-item"><a class="nav-link" href="<?php echo $path . "content/feedback.php";?>">Feedback</a></li>
                <li class="nav-item"><a class="nav-link" href="<?php echo $path . "content/resources.php";?>">Resources</a></li>
            </ul>
            <div class="hamburger-menu">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
        </nav>
    </header>
