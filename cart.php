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
	<title>Burger | Online Food</title>
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
		
		.headd {
			font-weight: 400;
			font-size: 2.20em;
			letter-spacing: 4px;
			text-transform: capitalize;
			text-align: center;
		}
		
		.topp {
			background-color: #ff851b;
			text-align: center;
			padding: 5px;
		}
		
		.topp:hover {
			background-color: #fb6009;
			box-shadow: 0px 2px 10px black;
			
		}
		
		.headd1 {
			color: #686868;
			font-weight: 400;
			font-size: 1.20em;
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
		
		.headd3 {
			color: red;
			font-weight: 400;
			font-size: 1.00em;
		}
		
		.headd4 {
			color: #686868;
			font-weight: 500;
			font-size: 1.30em;
			text-transform: capitalize;
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
	include('navbar1.php');
	?>


<div id="ab" style="background-color: rgba(255,255,255,0); height: 80px;">
</div>


<div class="container-fluid">



<div class="det1">
	<div class="row">
		<div class="col-sm-2 det2">
			<p class="headd2">s.no.</p>
		</div>
		<div class="col-sm-4 det2">
			<p class="headd2">product description</p>
		</div>
		<div class="col-sm-1 det2">
			<p class="headd2">quantity </p>
		</div>
		<div class="col-sm-2 det2">
			<p class="headd2">price</p>
		</div>
		<div class="col-sm-2 det2">
			<p class="headd2">subtotal</p>
		</div>
		<div class="col-sm-1 det2">
			<p class="headd2">delete</p>
		</div>
	</div>
</div>

<?php
$c=0;
$s=0;
$sql = "SELECT * FROM cart WHERE uid='$sid'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $s=$s+(int)$row["total"];
		$c++;
		$aa1=$row["item"];
		$aa2=$row["addings"];
		$aa3=$row["qty"];
		$aa4=$row["uid"];
		$aa5=$row["price"];
		$aa6=$row["total"];
		
		
		echo '<div class="det">
	<div class="row">
		<div class="col-sm-2 det2">
			<p class="headd">'.$c.'</p>
		</div>
		<div class="col-sm-4 det2">
			<p class="headd4">'. $row["item"].'</p><br>
			<p class="headd1">'. $row["addings"].'</p>
		</div>
		<div class="col-sm-1 det2">
			<p class="headd1">'. $row["qty"].'</p>
		</div>
		<div class="col-sm-2 det2">
			<p class="headd1">'. $row["price"].'</p>
		</div>
		<div class="col-sm-2 det2">
			<p class="headd1">'. $row["total"].'</p>
		</div>
		<div class="col-sm-1 det2">
			<p class="headd1"><a href="cart.php?delitem='.$row["id"].'" class="btn" name="remove" value="remove"><span class="glyphicon glyphicon-trash white" aria-hidden="true"></span></a></p>
		</div>
	</div>
</div>
<br>';




 if(isset($_GET['confirmord']))
 {
     $id = (int)$_GET['confirmord'];


	 
	 $sqll2 = "INSERT INTO `confirm` (`item`, `addings`, `qty`, `uid`, `price`, `total`)
VALUES ('$aa1', '$aa2', '$aa3', '$aa4', '$aa5', '$aa6')";
$removeQuery = "DELETE FROM `cart` WHERE `uid` = '$id'";
if ($conn->query($sqll2) === TRUE)	
{
	if (mysqli_query($conn, $removeQuery))
	{
		echo '<script>
		alert("Order placed Successfully")
		location.href = "cart.php"</script>';
		
	}
} 

else 
{
    echo '<script>alert("Order not placed")</script>';
}
     
 }






		}
} else {
    echo "0 results";
}


echo '<div class="row">
	<div class="col-sm-9">
	</div>
	<div class="col-sm-3">
		<p class="headd1">Total&nbsp;&nbsp;&nbsp;&nbsp;Rs.'.$s.'&nbsp;</p>
	</div>
</div><br>';

if(isset($_GET['delitem']))
 {
     $id = (int)$_GET['delitem'];
     $removeQuery = "DELETE FROM `cart` WHERE `id` = '$id'";

if (mysqli_query($conn, $removeQuery))
{
    echo "
   <script> 
          alert('Product Deleted Successfully'); 
          location.href = 'cart.php';
    </script>     

    ";
}
     
 }
 


?>
<?php
echo '<div class="row">
	<div class="col-sm-9">
	</div>
	<div class="col-sm-3">
		<a href="cart.php?confirmord='.$sid.'" class="btn sub" name="confirm" value="confirm">confirm order</a>
	</div>
</div>';
?>

<br>
<div id="cu" style="background-color: #d8d8d8; height: 10px;">
</div>
</div>


	
	</body>
</html>