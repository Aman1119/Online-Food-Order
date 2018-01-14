<?php
include("functions.php");

if(isloggedin()==FALSE)
{
header("location:index.php");  
}
else
{
  
}
$sid=$_SESSION['id'];
?>

<html>
<head>
	<title>Online food</title>
	<?php include('header.php');
	?>

	<script>
	$(document).ready(function(){
  // Add smooth scrolling to all links
  $("a").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 2000, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});
	</script>
	
  <script>

 $(function() {
    $( "#datepicker1" ).datepicker({dateFormat: "dd-mm-yy"});
    $( "#datepicker2" ).datepicker({dateFormat: "dd-mm-yy"});
    $( "#datepicker3" ).datepicker({dateFormat: "dd-mm-yy"});

  });
  </script>
	
	
	
	<style>
		
		.navbar-inverse .navbar-nav>li>a:hover {
			color: white;
		}
		
		.ss1 {
			background-color: #fb6009;
			border: 0px;
			border-radius: 10px 10px 0px 0px;
			box-shadow: 0px 2px 10px black;
		}
		
		.ss2 {
			background-color: #fb6009;
			width: 200px;
			border: 0px;
			border-radius: 0px 0px 10px 10px;
			box-shadow: 0px 2px 10px black;
		}
		
		.ss3 {
			width: 100%;
			text-align: center;
		}
		
		.ss3:hover {
			background-color: #fb6009;
			border-radius: 0px 0px 10px 10px;
			box-shadow: 0px 3px 10px black;
		}
		
		.headd1 {
			color: #404040;
			font-weight: 500;
			font-size: 2.50em;
			text-transform: capitalize;
			text-align: center;
		}
		
		.headd2 {
			color: #404040;
			font-weight: 500;
			font-size: 1.50em;
			text-transform: capitalize;
			text-align: center;
		}
		
		.headd4 {
			color: #404040;
			font-weight: 500;
			font-size: 1.50em;
			text-align: center;
		}
		
		.det {
			background-color: #e8e8e8;
			box-shadow: 0px 2px 10px #c8c8c8;
		}
		
		.det1 {
			background-color: #909090;
			box-shadow: 0px 2px 10px #c8c8c8;
		}
		
		.det2{
			padding: 20px;
		}
		
	
	</style>
	
	
</head>
<body>

	
	<?php
	include('navbar2.php');
	?>


<div id="ab" style="background-color: rgba(255,255,255,0); height: 80px;">
</div>
<div class="container-fluid">
	<p class="headd1">Users</p><br>
	<div class="det1">
		<div class="row">
			<div class="col-sm-12">
				<div class="row">
					<div class="col-sm-2 det2">
						<p class="headd2">s.no.</p>
					</div>
					<div class="col-sm-4 det2">
						<p class="headd2">name</p>
					</div>
					<div class="col-sm-4 det2">
						<p class="headd2">e-mail</p>
					</div>
					<div class="col-sm-2 det2">
						<p class="headd2">delete</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	
	
	
	
	
	<?php
$c=0;
$sql = "SELECT * FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		$c++;
		$aa1=$row["uname"];
		$aa2=$row["uemail"];
		$aa3=$row["uid"];
		
		
		echo '<div class="det">
		<div class="row">
			<div class="col-sm-12">
				<div class="row">
					<div class="col-sm-2 det2">
						<p class="headd2">'.$c.'</p>
					</div>
					<div class="col-sm-4 det2">
						<p class="headd2">'.$aa1.'</p>
					</div>
					<div class="col-sm-4 det2">
						<p class="headd4">'.$aa2.'</p>
					</div>
					<div class="col-sm-2 det2">
						<p class="headd2"><a href="homee.php?delite='.$aa3.'" class="btn" name="remove" value="remove"><span class="glyphicon glyphicon-trash white" aria-hidden="true"></span></a></p>
					</div>
				</div>
			</div>
		</div>
	</div>';
}
}


if(isset($_GET['delite']))
 {
     $id = (int)$_GET['delite'];
     $removeQuery = "DELETE FROM `users` WHERE `uid` = '$id'";

if (mysqli_query($conn, $removeQuery))
{
    echo "
   <script> 
          alert('User Deleted Successfully'); 
          location.href = 'homee.php';
    </script>     

    ";
}
     
 }
?>
	
</div>






	
	</body>
</html>