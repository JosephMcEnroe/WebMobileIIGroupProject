<?php 
function clean_input($data) {
    $data = trim($data);
    $data = stripslashes($data);          
    $data = htmlspecialchars($data);  
    return $data;
}

$pageTitle="Quiz";
$total = 3;
$list = array();
if (!empty($_GET["q1"])) {
    $list[] = clean_input($_GET["q1"]);
}
if (!empty($_GET["q2"])) {
    $list[] = clean_input($_GET["q2"]);
}
if (!empty($_GET["q3"])) {
    $list[] = clean_input($_GET["q3"]);
}
include '../assets/presets/header/header.php';
include "../dbConnect.php"; 
?>
<div class="container">
    <div class="content-center">
        <div class="quiz-container">
            <h2>Python Programming Quiz</h2>
            <form id="quiz-form" action="quiz.php">
                <div class="question">
                    <p>1. What is the correct syntax for printing "Hello, World!" in Python?</p>
                    <label>
                        <input type="radio" name="q1" value="a"> a) print("Hello, World!")
                    </label>
                    <label>
                        <input type="radio" name="q1" value="b"> b) console.log("Hello, World!")
                    </label>
                    <label>
                        <input type="radio" name="q1" value="c"> c) System.out.println("Hello, World!")
                    </label>
                </div>

                <div class="question">
                    <p>2. Which data type is used to store a sequence of characters in Python?</p>
                    <label>
                        <input type="radio" name="q2" value="a"> a) int
                    </label>
                    <label>
                        <input type="radio" name="q2" value="b"> b) float
                    </label>
                    <label>
                        <input type="radio" name="q2" value="c"> c) str
                    </label>
                </div>

                <div class="question">
                    <p>3. What does the % operator do in Python?</p>
                    <label>
                        <input type="radio" name="q3" value="a"> a) Division
                    </label>
                    <label>
                        <input type="radio" name="q3" value="b"> b) Multiplication
                    </label>
                    <label>
                        <input type="radio" name="q3" value="c"> c) Modulus
                    </label>
                </div>

                <input type="submit" value="Submit Quiz">
            </form>
            <div id="quiz-results">
            <?php
                if ($mysqli && count($list) > 0) {
                    $html = "Your Score is : ";              
                    $score = 0;
                    //get contents of table and send back...
                    for ($i = 0; $i < count($list); $i++) {
                        $id = $i+1;
                        $sql = "SELECT as num, answer from quiz where id=$id";
                        $res=$mysqli->query($sql);
                        if($res){
                            $rowHolder = mysqli_fetch_array($res,MYSQLI_ASSOC);
                            if ($rowHolder["answer"] == $list[$i]) {
                                $score += 1;
                            }
                        }
                        
                    }
                    $html = $html . $score . "/" . $total;
                    echo $html;
                }

            ?>
            </div>
        </div>
    </div>
</div>

<?php
include '../assets/presets/footer/footer.php';
?>
