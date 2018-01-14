<?php
$a=$_SESSION['unaam'];
$sid=$_SESSION['id'];

$sqll = "SELECT * FROM `cart` WHERE uid='$sid'";
if ($result=mysqli_query($conn,$sqll))
{
  $rowcount=mysqli_num_rows($result);
} 

else 
{
    $rowcount=0;
}

echo '
<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>                        
				</button>
				<a class="navbar-brand" href="index.php">Online Food</a>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav" style="margin-left: 30%;">
					<li class="ss"><a href="./homee.php" class="upp">users</a></li>
					<li class="ss"><a href="./orders.php" class="upp">orders</a></li>
					
				</ul>
				<ul class="nav navbar-nav navbar-right" style="margin-left: 25%;">
					<li class="dropdown ss1">
						<a href="#" class="dropdown-toggle upp" data-toggle="dropdown" data-hover="dropdown" data-delay="1000" data-close-others="true" id="menu1">'.$a. '<span class="caret"></span></a>
						<ul class="dropdown-menu ss2" role="menu" aria-labelledby="menu1">
							<li>
								<div class="row dmenu">
									<div class="col-sm-12">
										<div role="separator" class="divd"></div>
										<br>
										<ul class="nav navbar-nav" style="width: 100%;">
											<li class="ss3"><a class="menuaa upp" href="signout.php">log out</a></li><br>
										</ul>
									</div>
								</div>
							</li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</nav>';
	?>
