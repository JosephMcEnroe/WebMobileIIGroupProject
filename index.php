<?php 
$pageTitle="Home";
include 'assets/presets/header/header.php'; 
include 'dbConnect.php'; 
?>
<div class="container">
<?php
    if ($mysqli) {
        //get contents of table and send back...
        $sql = 'SELECT id, header, content FROM homepage';
        $res=$mysqli->query($sql);
        if($res){
            while ($rowHolder = mysqli_fetch_array($res,MYSQLI_ASSOC)) {
                $html = "
                <h1 id='{$rowHolder["id"]}'>{$rowHolder["header"]}</h1>
                <p>{$rowHolder["content"]}</p>
                ";
                echo $html;
            }
        }
    }

?>
</div>
<?php include 'assets/presets/footer/footer.php'; ?>
