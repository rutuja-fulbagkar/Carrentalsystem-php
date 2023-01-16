<?php
	include 'config.php';
	$id = $_REQUEST['id'];
		$query = "DELETE FROM cars WHERE car_id = '$id'";
	$result = $conn->query($query);
	if($result === TRUE){
		echo "<script type = \"text/javascript\">
					alert(\"Car Successfully Send\");
					window.location = (\"view_car.php\")
				</script>";
	}
?>
