<?php 
$pageTitle="Tutorial Directory";
include '../assets/presets/header/header.php';
include "../dbConnect.php"; 
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);          
    $data = htmlspecialchars($data);  
    return $data;
}
?>
<div class="container">
    <div class="content-center">
        <form action="chat.php" method="GET">
            <h1>Leave us a Comments</h1>
            <input type="text" id="name" name="name" placeholder="Your Name" required>
            <textarea name="comment" placeholder="Your Comment" required></textarea>
            <button type="submit">Send</button>
        <?php
        if ($mysqli) {
         if (!empty($_GET['name']) && !empty($_GET['comment'])) {

                    /*
                        we are using client entered data - therefore we HAVE TO USE a prepared statement
                        1)prepare my query
                        2)bind
                        3)execute
                        4)close
                    */     
                    $stmt=$mysqli->prepare("insert into chat (name, comment) values (?, ?)");
           
                    $name    = test_input($_GET['name']);
                    $comment = test_input($_GET['comment']);
         
         
         
                    $stmt->bind_param("ss",$name, $comment);
                    $stmt->execute();
                    $stmt->close(); //  }//end of if to make sure data is sent using $_GET
                    $name = false;
              }//end of not empty if

         //get contents of table and send back...
             $sql = 'SELECT name, comment, modified_date FROM chat ORDER BY modified_date DESC';
              $res=$mysqli->query($sql);
              if($res){
                echo "<h1>CHAT</h1>";
                while($rowHolder = mysqli_fetch_array($res,MYSQLI_ASSOC)){ // $rowHolder['name'] $rowHolder['comment']
                    echo "<div class=\"comment\"><p>" ."<span style='color:blue;'>" . $rowHolder["name"] . "</span>: " . $rowHolder["comment"] . " @ <span style='color:grey;'>" . $rowHolder["modified_date"] . "</span></p></div>";

                }
              }
            }
        ?>
        </form>
    </div>
</div>
<?php 
    include '../assets/presets/footer/footer.php';
?>
