<?php 
include '../assets/presets/header/header.php';
include "../dbConnect.php"; 
?>
<main>
    <h1>Tutorial</h1>
    <ul>
    <?php
        if ($mysqli) {
            //get contents of table and send back...
            $sql = 'SELECT id, url, content FROM tutorial_links';
            $res=$mysqli->query($sql);
            if($res){
                while ($rowHolder = mysqli_fetch_array($res,MYSQLI_ASSOC)) {
                    $html = "
                    <li><a href=\"{$rowHolder["url"]}\">{$rowHolder["content"]}</a></li>
                    ";
                    echo $html;
                }
            }
        }

    ?>
    </ul>
</main>
<?php include '../assets/presets/footer/footer.php';?>
