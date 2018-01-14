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
	

	
	
	
	<style>
	
		.navbar-inverse .navbar-nav>li>a:hover {
			color: white;
		}
		
		
	
	</style>
	
	
</head>
<body>

	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>                        
				</button>
				<a class="navbar-brand" href="#ab">WebSiteName</a>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav" style="margin-left: 25%;">
					<li class="ss"><a href="#abus" class="upp">about us</a></li>
					<li class="ss"><a href="#menu" class="upp">menu</a></li>
					<li class="ss"><a href="#cu" class="upp">contact us</a></li>
					
					
					
				</ul>
				<ul class="nav navbar-nav navbar-right" style="margin-left: 25%;">
					<li class="dropdown ss1">
						<a href="signup.php" class="upp">log in</a></li>
				</ul>
			</div>
		</div>
	</nav>


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
								
								<p class="menu2">pizzas</p>
								
							</div>
						</div>
						
						<div class="row">
							<div class="col-sm-12">
								
								<img class="responsive" src="./images/menui/dchoco.jpg" width="100%">
								
							</div>
						</div>
						
						<div class="row">
							<div class="col-sm-12 menu3">
								
								<a href="./signup.php" class="menu4">see more</a>
								
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
								
								<p class="menu2">desserts</p>
								
							</div>
						</div>
						
						<div class="row">
							<div class="col-sm-12">
								
								<img class="responsive" src="./images/menui/baloo.png" width="100%">
								
							</div>
						</div>
						
						<div class="row">
							<div class="col-sm-12 menu3">
								
								<a href="./signup.php" class="menu4">see more</a>
								
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
								
								<p class="menu2">burgers</p>
								
							</div>
						</div>
						
						<div class="row" style="padding: 0%;">
							<div class="col-sm-12">
								
								<img class="responsive" src="./images/menui/pextra.jpg" width="100%">
								
							</div>
						</div>
						
						<div class="row">
							<div class="col-sm-12 menu3">
								
								<a href="./signup.php" class="menu4">see more</a>
								
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