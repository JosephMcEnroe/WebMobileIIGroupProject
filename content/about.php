<?php 
include '../assets/presets/header/header.php';
include "../dbConnect.php";
?>

    <div class="container">
        <div class="content-center">
            <h1>About Us</h1>
            <p>We aim to provide accessible information for beginners to learn about the Python programming
                language.</p>
        </div>
    </div>

    <div class="container">
        <div class="content-center">
            <h1>Meet The Team!</h1>
            <div class="slideshow-container">
                <?php
                if ($mysqli) {
                    //get contents of table and send back...
                    $sql = "SELECT src, alt, caption, description FROM about";
                    $res=$mysqli->query($sql);
                    if($res){
                        while ($rowHolder = mysqli_fetch_array($res,MYSQLI_ASSOC)) {
                            $src = $path . "assets/img/" . $rowHolder["src"];
                            $alt = $rowHolder["alt"];
                            echo "<div class=\"mySlides\">";
                            echo "<div class=\"team-member\">";
                            echo "<img src='$src' alt='$alt'>";
                            echo "<div class='caption'>{$rowHolder["caption"]}</div>";
                            echo "<div class='caption2'>{$rowHolder["description"]}</div>";
                            echo "</div>";
                            echo "</div>";
                        }
                    }
                }
                ?>
            </div>
        </div>
    </div>
<?php
include '../assets/presets/footer/footer.php';
?>
