<?php 
$pageTitle="Home";
include 'assets/presets/header/header.php'; 
include 'dbConnect.php'; 
?>
<div class="container">
<div class="content">
    <div class="left-content">
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
        <button onclick="location.href='<?php echo $path . "content/tutorials.php" ?>'" type="button">
         Get Started</button>
    </div>

    <div class="right-content">
        <img src="<?php echo $path . "assets/img/python-code.jpg";?>" alt="Python Code">
    </div>
    </div>
</div>
<?php include 'assets/presets/footer/footer.php'; ?>
