<!DOCTYPE html>
<html lang="en">
<head>
	<title>Car Rental</title>
	<meta charset="utf-8">
	<meta name="author" content="pixelhint.com">
	<meta name="description" content="La casa free real state fully responsive html5/css3 home page website template"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
	
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/responsive.css">

	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
</head>
<body>
<section class="">
		
			<section class="caption">
				<h1 class="caption" style="text-align: center">Find You Dream Cars For Hire</h1>
				<h3 class="properties" style="text-align: center">Range Rovers - Mercedes Benz - Landcruisers</h3>
			</section>
	</section><!--  end hero section  -->
	<style>
body {
  background-image: url('bg.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}
</style>


	<section class="listings">
		<div class="wrapper">
		<h1 style="text-align:center; background-image: url('bg.jpg'); font-weight:bold;
		 text-decoration:underline">Message Admin Here</h1>
				
		
			<ul class="properties_list">
			<form method="post">
				<table>
					<tr>
						<td style="color:#88f5be; font-weight: bold; font-size: 24px">Enter Your Message Here:</td>
					</tr>
					<tr>
						<td>&nbsp;</td>
					</tr>
					<tr>
						<td>
							<textarea name="message" color="#88f5be" placeholder="Enter Message Here" class="txt"></textarea>
						</td>
					</tr>
					<tr>
						<td><input type="submit" name="send" class="btn" value="Send Message"></td>
					</tr>
				</table>
			</form>
				<?php
					if(isset($_POST['send'])){
						include 'includes/config.php';
						
						$message = $_POST['message'];
						
						$qry = "INSERT INTO message (message,client_id,time,status)
							VALUES('$message','$_SESSION[email]',NOW(),'Unread')";
							$result = $conn->query($qry);
							if($result == TRUE){
								echo "<script type = \"text/javascript\">
											alert(\"Message Successfully Send\");
											window.location = (\"success.php\")
											</script>";
							} else{
								echo "<script type = \"text/javascript\">
											alert(\"Message Not Send. Try Again\");
											window.location = (\"message_admin.php\")
											</script>";
							}
					}
				?>
			</ul>
		</div>
	</section>	<!--  end listing section  -->

	