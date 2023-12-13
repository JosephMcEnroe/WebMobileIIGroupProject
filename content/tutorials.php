<?php 
include '../assets/presets/header/headercontent.php';
include "../dbConnect.php"; 
?>
<main>
    <?php
        if($mysqli) {
            echo "YES";
        }
    ?>
    <h1>Tutorial</h1>
    <ul>
        <li>
            <a href = "tutorials/tutorial1.php">Hello World!</a>
        </li>
    </ul>
</main>
<?php include '../assets/presets/footer/footercontent.php';?>
