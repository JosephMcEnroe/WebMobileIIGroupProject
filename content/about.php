<?php 
include '../assets/presets/header/header.php';
include "../dbConnect.php";
?>

    <div class="container">
        <div class="content-center">
            <h1>About Us</h1>
            <p>
            Our goal is to make education about the Python programming language as accessible as possible for beginners. We focus on presenting Python as a user-friendly language, emphasizing its simplicity and readability, which are ideal for those just starting their programming journey. By offering resources that cover various programming paradigms supported by Python, including object-oriented and functional programming, we cater to a wide range of learning styles and interests. //change the about.php sentence to this
            </p>
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
