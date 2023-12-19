<?php
$page="feedBack";
include '../assets/presets/header/header.php';
include '../assets/js/header/feedback.js';
include "../dbConnect.php";
?>

<?php
	
	$sql = "SELECT content FROM feedback where page='$page'";
		$result = $mysqli->query($sql);

		if($result->num_rows > 0){
			//output the data for each row
			while ($row = $result->FETCH_ASSOC()) {
				echo $row['content'];
			}
		}else{
			echo "0 results, did something wrong!";
		}
	?>

<?php
include '../assets/presets/footer/footer.php';
?>
