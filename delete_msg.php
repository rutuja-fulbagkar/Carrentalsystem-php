<?php
	include 'config.php';
	$id = $_REQUEST['id'];
		$query = "DELETE FROM message WHERE msg_id = '$id'";
	$result = $conn->query($query);
	if($result === TRUE){
		echo "<script type = \"text/javascript\">
					alert(\"Message Successfully Send\");
					window.location = (\"messages.php\")
				</script>";
	}
?>
