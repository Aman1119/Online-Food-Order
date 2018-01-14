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
	<title>Dessert | Online Food</title>
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
			color: white;
			font-weight: 400;
			font-size: 1.10em;
			text-transform: capitalize;
		}
		
		.headd2 {
			color: #404040;
			font-weight: 400;
			font-size: 1.20em;
			text-transform: capitalize;
		}
		
		.headd3 {
			color: red;
			font-weight: 400;
			font-size: 1.00em;
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
	<div class="row">
		<div class="col-sm-6">
			<img class="responsive" src="./images/menui/dchoco.jpg" width="100%">
		</div>
		<div class="col-sm-6">
			<div style="background-color: rgba(255,255,255,0); height: 20px;">
			</div>
			<h1 class="headd">pastry</h1><br>
			<h5 class="headd3">Note:- Default pastry is of Rs.80 with Vanilla cream & Chocolate syrup.</h5>
			<div style="background-color: rgba(255,255,255,0); height: 20px;">
			</div>
			<h1 class="headd">rs. 80/-</h1>
			<div style="background-color: rgba(255,255,255,0); height: 20px;">
			</div>
			<form action="#" method="post">
				<div class="row">
					<div class="col-sm-9">
						<div class="form-group">
							<label class="headd2">Select Cream</label>
						</div>
					</div>
					<div class="col-sm-3">
						<select class="form-control" name="cream" autocomplete="off">
								<option value="0">Vanilla</option>
								<option value="1">Chocolate</option>
								<option value="2">Strawberry</option>
								<option value="3">Orange</option>
						</select><br>
					</div>
				</div>
				
				<div class="row">
					<div class="col-sm-9">
						<div class="form-group">
							<label class="headd2">Select Syrup</label>
						</div>
					</div>
					<div class="col-sm-3">
						<select class="form-control" name="syrup" autocomplete="off">
								<option value="0">Vanilla</option>
								<option value="1">Chocolate</option>
								<option value="2">Strawberry</option>
								<option value="3">Orange</option>
						</select><br>
					</div>
				</div>
				
				<br>
				<div class="row">
					<div class="col-sm-12">
						<div class="form-group">
							<label class="headd2">Select Toppings</label><br>
							<label class="headd3">* On every topping adding Rs.30 will be charged.</label>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-4 topp">
						<input type="checkbox" name="topping[]" value="Dry Fruits"><label class="headd1">&nbsp;&nbsp;Dry Fruits</label>
					</div>
					<div class="col-sm-4 topp">
						<input type="checkbox" name="topping[]" value="Strawberries"><label class="headd1">&nbsp;&nbsp;Strawberries</label>
					</div>
					<div class="col-sm-4 topp">
						<input type="checkbox" name="topping[]" value="Choco Chips"><label class="headd1">&nbsp;&nbsp;Choco Chips</label>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-4 topp">
						<input type="checkbox" name="topping[]" value="Almonds and Cashews"><label class="headd1">&nbsp;&nbsp;Almonds and Cashews</label>
					</div>
					<div class="col-sm-4 topp">
						<input type="checkbox" name="topping[]" value="Fruits"><label class="headd1">&nbsp;&nbsp;Fruits</label>
					</div>
					<div class="col-sm-4 topp">
						<input type="checkbox" name="topping[]" value="Cookies"><label class="headd1">&nbsp;&nbsp;Cookies</label>
					</div>
				</div><br>
				<div class="row">
					<div class="col-sm-9">
						<div class="form-group">
							<label class="headd2">Quantity</label>
						</div>
					</div>
					<div class="col-sm-3">
						<select class="form-control" name="quantity" autocomplete="off">
								<option value="0">1</option>
								<option value="1">2</option>
								<option value="2">3</option>
								<option value="3">4</option>
						</select><br>
					</div>
				</div>
				<div class="form-group">
					<button class="sub" name="submit" type="submit" class="btn btn-default">Add to Cart</button>
				</div>
			</form>

			
			
<?php
if(isset($_POST['submit'])){
	$qty=array(1,2,3,4);
	$top=array();
	$cream=array("Vanilla Cream", "Chocolate Cream", "Strawberry Cream", "Orange Cream");
	$syrup=array("Vanilla Syrup", "Chocolate Syrup", "Strawberry Syrup", "Orange Syrup");
	$c=0;
	$s=80;//to run PHP script on submit
if(!empty($_POST['topping'])){
// Loop to store and display values of individual checked checkbox.
foreach($_POST['topping'] as $selected){
	array_push($top, $selected);
	$c++;
}
$s=$c*25+80;
}
$m1=$_POST['cream'];
$m2=$_POST['syrup'];
$m3=$cream[$m1];
$m4=$syrup[$m1];
array_push($top, $m3);
array_push($top, $m4);
$m=$_POST['quantity'];
$a1="Pastry";
$a2=implode(", ", $top);
$a3=$qty[$m];
$a4=$sid;
$a5=$s;
$a6=$s*(int)$a3;



$sqll = "INSERT INTO `cart` (`item`, `addings`, `qty`, `uid`, `price`, `total`)
VALUES ('$a1', '$a2', '$a3', '$a4', '$a5', '$a6')";
if ($conn->query($sqll) === TRUE) 
{
  echo '<script>alert("Item added to Cart")</script>';
} 

else 
{
    echo '<script>alert("Item not added to Cart")</script>';
}


}
?>



		</div>
	</div>
</div>




<div id="cu" style="background-color: #d8d8d8; height: 10px;">
</div>



	
	</body>
</html>