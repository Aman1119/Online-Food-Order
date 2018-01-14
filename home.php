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
		
	
	</style>
	
	
</head>
<body>

	
	<?php
	include('navbar1.php');
	?>


<div id="ab" style="background-color: rgba(255,255,255,0); height: 80px;">
</div>




<div class="container" style="width: 100%;">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
        <img src="./images/pizza1.jpg" alt="Los Angeles" style="width:100%;">
        <div class="carousel-caption">
          <h3>Pizzas</h3>
        </div>
      </div>

      <div class="item">
        <img src="./images/cake1.jpg" alt="Chicago" style="width:100%;">
        <div class="carousel-caption">
          <h3>Cakes</h3>
        </div>
      </div>

  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
<div id="abus" style="background-color: #d8d8d8;">

	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-4">
			</div>
			<div class="col-sm-4 abus1">

				<p class="abus2">about us</p>

			</div>
			<div class="col-sm-4">
			</div>
		</div>

	<div class="row" style="margin-bottom: 5%;">
		<div class="col-sm-2">
		</div>
		<div class="col-sm-8 abus3">
			<p class="abus4">
			Lorem ipsum is simply dummy text of the printing and typesetting industry.
			Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
			when an unknown printer took a galley of type and scrambled it to make a type
			specimen book. It has survived not only five centuries, but also the leap into
			electronic typesetting, remaining essentially unchanged. It was popularised in
			the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
			and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
			Lorem ipsum is simply dummy text of the printing and typesetting industry.
			Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
			when an unknown printer took a galley of type and scrambled it to make a type
			specimen book. It has survived not only five centuries, but also the leap into
			electronic typesetting, remaining essentially unchanged. It was popularised in
			the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
			and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.

			</p>
		</div>
		<div class="col-sm-2">
		</div>
	</div>
	</div>

</div>


<div id="menu">

	<div class="container-fluid">
	
		<div class="row">
			<div class="col-sm-4">
			</div>
			<div class="col-sm-4 abus1">

				<p class="abus2">menu</p>

			</div>
			<div class="col-sm-4">
			</div>
		</div>

		<div class="row" style="margin-top: 5%;">
			<div class="col-sm-4">
			
				<div class="row">
					<div class="col-sm-2">
					</div>
					<div class="col-sm-8 menubg">
						
						<div class="row">
							<div class="col-sm-12 menu1">
								
								<p class="menu2">dessert</p>
								
							</div>
						</div>
						
						<div class="row">
							<div class="col-sm-12">
								
								<img class="responsive" src="./images/menui/dchoco.jpg" width="100%">
								
							</div>
						</div>
						
						<div class="row">
							<div class="col-sm-12 menu3">
								
								<a target="_blank" href="./dessert.php" class="menu4">see more</a>
								
							</div>
						</div>
						
					</div>
					<div class="col-sm-2">
					</div>
				</div>
			
			</div>
			<div class="col-sm-4">
				
				<div class="row">
					<div class="col-sm-2">
					</div>
					<div class="col-sm-8 menubg">
					
						<div class="row">
							<div class="col-sm-12 menu1">
								
								<p class="menu2">burger</p>
								
							</div>
						</div>
						
						<div class="row">
							<div class="col-sm-12">
								
								<img class="responsive" src="./images/menui/baloo.png" width="100%">
								
							</div>
						</div>
						
						<div class="row">
							<div class="col-sm-12 menu3">
								
								<a target="_blank" href="./burger.php" class="menu4">see more</a>
								
							</div>
						</div>
					
					</div>
					<div class="col-sm-2">
					</div>
				</div>
				
			</div>
			<div class="col-sm-4">
			
				<div class="row">
					<div class="col-sm-2">
					</div>
					<div class="col-sm-8 menubg">
					
						<div class="row">
							<div class="col-sm-12 menu1">
								
								<p class="menu2">pizzas</p>
								
							</div>
						</div>
						
						<div class="row" style="padding: 0%;">
							<div class="col-sm-12">
								
								<img class="responsive" src="./images/menui/pextra.jpg" width="100%">
								
							</div>
						</div>
						
						<div class="row">
							<div class="col-sm-12 menu3">
								
								<a target="_blank" href="./pizza.php" class="menu4">see more</a>
								
							</div>
						</div>
					
					</div>
					<div class="col-sm-2">
					</div>
				</div>
			
			</div>
		</div>
		
		
		
	</div>

</div>

<div id="cu" style="background-color: #d8d8d8; height: 10px;">
</div>



	
	</body>
</html>