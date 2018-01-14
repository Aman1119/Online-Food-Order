<?php
require("functions.php");

$wrongpass = '';
$wronginfo = '<div class="alert alert-danger" role="alert">  <span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Wrong login detail</div>';

if(isloggedin()==FALSE)
{
}
else
{
header("location:home.php");  
  
}
  
  if(isset($_POST['email']) && ($_POST['pass']))
{
$pass= mysqli_real_escape_string($conn, $_POST['pass']);
$email= mysqli_real_escape_string($conn, $_POST['email']);
$query="SELECT * from users where uemail='$email'";
$result = $conn->query($query);

if ($result->num_rows < 1) 
  {
      $query="SELECT * from admin where uemail='$email'";
$result = $conn->query($query);

if ($result->num_rows < 1) 
  {
      //$wrongpass = $wronginfo;
      $wrongpass ='<div class="alert alert-danger" role="alert">  <span class="glyphicon glyphicon-remove" aria-hidden="true"</span>wrong Password</div>';;
  }

 while($row = $result->fetch_assoc()) 
    {
  if($pass==$row['upass'])
  {
    $_SESSION['logged_in']=TRUE;
    $_SESSION['id']=$row['uid'];
    $_SESSION['unaam']=$row['uname'];
    session_start();
    header("location:homee.php");
  }
  else
   {
    $wrongpass = $wronginfo;
   }
    }
  }

 while($row = $result->fetch_assoc()) 
    {
  if($pass==$row['upass'])
  {
    $_SESSION['logged_in']=TRUE;
    $_SESSION['id']=$row['uid'];
    $_SESSION['unaam']=$row['uname'];
    session_start();
    header("location:home.php");
  }
  else
   {
    $wrongpass = $wronginfo;
   }
    }
  }


?>
<html>
<head>
<title>
Log in
</title>
<?php
include('header.php');
?>




<script type="text/javascript">
$(document).ready(function(){
$("#name").keyup(function() {
var name = $('#name').val();
if(name=="")
{
$("#disp").html("");
}
else
{
$.ajax({
type: "POST",
url: "check.php",
data: "name="+ name ,
success: function(html){
$("#disp").html(html);
}
});
return false;
}
});
});
</script>
</head>
<body>
<?php
include('navbar.php');
?>


<div style="background-color: #d8d8d8;">

	<div class="container-fluid" style="margin-top: 5em;">
		<div class="col-sm-6">
		
		<div class="row">
			<div class="col-sm-4">
			</div>
			<div class="col-sm-4 abus1">

				<p class="abus2">log in</p>

			</div>
			<div class="col-sm-4">
			</div>
		</div>

		<div class="row">
			<div class="col-sm-2">
			</div>
			<div class="col-sm-8 sign1">
				<form class="form" action="signup.php" method="post">
					
					
					<div class="form-group">
						<input type="email" class="form-control" name="email" id="Email" placeholder="E-mail" required>
					</div>
					<div class="form-group">
						<input type="password" class="form-control" name="pass" id="Password" placeholder="Password" required>
					</div>
					<?php
						echo $wrongpass;
					?>
					<div class="form-group">
						<button class="sub" type="submit" class="btn btn-default">Submit</button>
					</div>
					
				</form>
			</div>
			<div class="col-sm-2">
			</div>
		</div>
		
		
		
		
		
		
		
		
		
		
		
		</div>
		
		<div class="col-sm-6">
		
		
		
		
		<div class="row">
			<div class="col-sm-4">
			</div>
			<div class="col-sm-4 abus1">

				<p class="abus2">sign up</p>

			</div>
			<div class="col-sm-4">
			</div>
		</div>

		<div class="row">
			<div class="col-sm-2">
			</div>
			<div class="col-sm-8 sign1">
				<form class="form" action="signup.php" method="post">
					<div class="form-group">
						<input type="text" class="form-control" id="fname" name="fname" autocomplete="off" required placeholder="Full Name">
					</div>
					<div class="form-group">
						<input type="email" id="name" name="name" class="form-control"  autocomplete="off" required placeholder="Email">
					</div>
					<div class="form-group">
						<input type="password" name="password" class="form-control" id="inputPassword3" required placeholder="Password">
					</div>
					<div class="form-group">
						<button class="sub" type="submit" class="btn btn-default">Submit</button>
					</div>
					<div class="form-group">
					<div class="checkbox">
					<label>
					<input type="checkbox" required> Agreed terms and conditions
					</label>
					</div>
					</div>
				</form>
				<?php

if(isset($_POST['name']) && trim($_POST['password']) != "")
{

$name= mysqli_real_escape_string($conn, $_POST['name']);
$query="SELECT * from users where uemail='$name'";
$result = $conn->query($query);
if ($result->num_rows < 1) 
  {
$uname = mysqli_real_escape_string($conn, $_POST['fname']);
$uname = strip_tags($uname);
$uname = ucwords($uname);
$uemail = mysqli_real_escape_string($conn, $_POST['name']);
$uemail = strip_tags($uemail);
$upass = mysqli_real_escape_string($conn, $_POST['password']);
$upass = $upass;

$sql = "INSERT INTO users (uname, uemail, upass)
VALUES ('$uname','$uemail','$upass')";
if ($conn->query($sql) === TRUE) 
  {
  echo '<div class="alert alert-success" role="alert">
  <span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Your account has been created successfully!
</div>';
  } else 
  {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
} else
{
   echo '<div class="alert ss1" role="alert">
  <span class="glyphicon glyphicon-remove" aria-hidden="true"></span> You already have an account and can access from login form
</div>';
}
}
?>
			</div>
			<div class="col-sm-2">
			</div>
		</div>
		
		
		
		
		
		</div>
	
	
	
	
	
	
	
	
	
		
	</div>

</div>



</body>
</html>