<!DOCTYPE html>
<html lang="en">
<head>
	<title>Car Rental</title>
	<meta charset="utf-8">
	<meta name="author" content="pixelhint.com">
	<meta name="description" content="La casa free real state fully responsive html5/css3 home page website template"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/responsive.css">

	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
	
</head>
<body>
<section class="">
<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand page-scroll" href="index.php">
                 <b>  Car Rentals </b></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="messages.php"><b>messages</b></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="entercar.php"><b>Add Car</b></a>
        </li>
		<li class="nav-item">
          <a class="nav-link"href="enterdriver.php"><b> Add Driver</b></a>
        </li>
		<li class="nav-item">
          <a class="nav-link"  href="customer_request.php"><b>Customer's Requests</b></a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="clientview.php"><b>View Booked car</b></a>
        </li>
		
             
           
             


      </ul>
      
    </div>
  </div>
</nav>

	</section><!--  end hero section  -->
	<style>
body {
  background-image: url('bg.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}
</style>
<div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <!-- <li>
                        <a href="#"><span class="glyphicon glyphicon-user"></span> Welcome <?php echo $_SESSION['login_customer']; ?></a>
                    </li> -->
                    <ul class="nav navbar-nav">
            <li><a href="#" class="dropdown-toggle active" 
            data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Garagge <span class="caret"></span> </a>
                <ul class="dropdown-menu">
              <li> <a href="prereturncar.php">Return Now</a></li>
              <li> <a href="mybookings.php"> My Bookings</a></li>
              <li> <a href="message_admin.php"> Message Admin</a></li>
			  
            </ul>
            </li>
          </ul>
                    <li>
                        <a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a>
                    </li>
                </ul>
            </div>


	<section class="listings">
		<div class="wrapper">
		<h1 style="text-align:center; background-image: url('bg.jpg'); font-weight:bold;
		 text-decoration:underline">Message Admin Here</h1>
				
		
			<ul class="properties_list">
			<form method="post" class="form-floating offset-3">
				<table>
					<tr>
						<td style="color:black; font-weight: bold; font-size: 24px">Enter Your Message Here:</td>
					</tr>
					<tr>
						<td>&nbsp;</td>
					</tr> 
					<tr>
						<td class="col-12 form-control">
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
						
						$admin_rply = $_POST['admin_rply'];
						
						$qry = "INSERT INTO admin_rply (admin_rply,client_id,time,status)
							VALUES('$admin_rply','$_SESSION[email]',NOW(),'Unread')";
							$result = $conn->query($qry);
							if($result == TRUE){
								echo "<script type = \"text/javascript\">
											alert(\"Message Successfully Send\");
											window.location = (\"success.php\")
											</script>";
							} else{
								echo "<script type = \"text/javascript\">
											alert(\"Message Not Send. Try Again\");
											window.location = (\"msg_admin_through.php\")
											</script>";
							}
					}
				?>
			</ul>
		</div>
	</section>	<!--  end listing section  -->

	<footers >
        <div >
            <hr>
            <div class="row">
                <div class="col-sm-12" style="background-color:#33475b" color:white>
                    <h5>© <?php echo date("Y"); ?> Car Rentals</h5>
                </div>
                
            </div>
        </div>
    </footers>

