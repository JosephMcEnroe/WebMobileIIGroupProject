<?php 
function clean_input($data) {
    $data = trim($data);
    $data = stripslashes($data);          
    $data = htmlspecialchars($data);  
    return $data;
}

$pageTitle="Python Programming Tutorial";
$id = 0;
if (!empty($_GET["pageTitle"])) {
    $pageTitle = clean_input($_GET["pageTitle"]);
}
if (!empty($_GET["id"])) {
    $id = clean_input($_GET["id"]);
}
include '../assets/presets/header/header.php';
include "../dbConnect.php";
?>
    <div class="container">
    <?php 
        if ($mysqli) {
            //get contents of table and send back...
            $sql = "SELECT content, exercise, next_step FROM tutorial where id=$id";
            $res=$mysqli->query($sql);
            if($res){
                while ($rowHolder = mysqli_fetch_array($res,MYSQLI_ASSOC)) {
                    echo $rowHolder["content"];
                    echo "<h2>Exercises</h2>";
                    echo "<div class=\"exercise\">";
                    echo $rowHolder["exercise"];
                    echo "</div>";
                    echo $rowHolder["next_step"];
                }
            }
            echo "<div class=\"nav-links\">";
            $sql = "SELECT COUNT(*) AS links_count FROM tutorial_links";
            $res= $mysqli->query($sql);
            if($res) {
                $row = mysqli_fetch_array($res,MYSQLI_ASSOC);
                $count = intval($row["links_count"]);
                if ($id-1 > 0) {
                    $prev = $id-1;
                    $sql = "SELECT title FROM tutorial_links where id=$prev";
                    $res= $mysqli->query($sql);
                    $row = mysqli_fetch_array($res,MYSQLI_ASSOC);
                    $pageTitle = str_replace(' ', '%20', $row["title"]);
                    echo "<div>";
                    echo "<a href=\"tutorial.php?id=$prev&pageTitle=$pageTitle\">Previous Tutorial</a>";
                    echo "</div>";
                }
                if ($id+1 <= $count) {
                    $next = $id+1;
                    $sql = "SELECT title FROM tutorial_links where id=$next";
                    $res= $mysqli->query($sql);
                    $row = mysqli_fetch_array($res,MYSQLI_ASSOC);
                    $pageTitle = str_replace(' ', '%20', $row["title"]);
                    echo "<div>";
                    echo "<a href=\"tutorial.php?id=$next&pageTitle=$pageTitle\">Next Tutorial</a>";
                    echo "</div>";
                }
            }
            echo "</div>";
        }
    ?>
    </div>
<?php 
include '../assets/presets/footer/footer.php';
?>
