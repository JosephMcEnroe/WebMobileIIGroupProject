<?php 
$pageTitle="Tutorial Directory";
include '../assets/presets/header/header.php';
include "../dbConnect.php"; 
?>
<main>
    <div class="container">
    <h1>Basic Tutorial</h1>
    <ul>
    <?php
        if ($mysqli) {
            //get contents of table and send back...
            $sql = 'SELECT id, title, content FROM tutorial_links where tutorial_links.difficulty=0';
            $res=$mysqli->query($sql);
            if($res){
                while ($rowHolder = mysqli_fetch_array($res,MYSQLI_ASSOC)) {
                    $pageTitle= str_replace(' ', '%20', $rowHolder["title"]);
                    $html = "
                    <li><a href=\"tutorial.php?id={$rowHolder["id"]}&pageTitle={$rowHolder["title"]}\">{$rowHolder["content"]}</a></li>
                    ";
                    echo $html;
                }
            }
        }

    ?>
    </ul>
    <h1>Advanced Tutorial</h1>
    <ul>
    <?php
        if ($mysqli) {
            //get contents of table and send back...
            $sql = 'SELECT id, title, content FROM tutorial_links where tutorial_links.difficulty=1';
            $res=$mysqli->query($sql);
            if($res){
                while ($rowHolder = mysqli_fetch_array($res,MYSQLI_ASSOC)) {
                    $pageTitle= str_replace(' ', '%20', $rowHolder["title"]);
                    $html = "
                    <li><a href=\"tutorial.php?id={$rowHolder["id"]}&pageTitle={$rowHolder["title"]}\">{$rowHolder["content"]}</a></li>
                    ";
                    echo $html;
                }
            }
        }

    ?>
    </ul>
</main>
<?php include '../assets/presets/footer/footer.php';?>
