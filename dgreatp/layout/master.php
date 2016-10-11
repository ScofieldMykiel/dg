<!DOCTYPE html>


<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

<!-- Begin Head -->


<head>
<meta charset="utf-8" />
<title>The Great Programmer</title>
<meta content="width=device-width, initial-scale=1.0" name="viewport" />
<meta name="description"  content="dgp"/>
<meta name="keywords" content="dgp, dgreatprogrammer, Elearning" />
<meta name="author"  content="Scofield"/>
<meta name="MobileOptimized" content="320" />

<!--srart theme style -->
<link href="css/main.css" rel="stylesheet" type="text/css"/>
<!-- end theme style -->
<!-- favicon links -->
<link rel="shortcut icon" type="image/png" href="images/header/favicon.png" />
<script>
function myFunction() {
    document.getElementById("login").innerHTML = "Please log in first to take the lesson";
}
</script>
</head>
<body>
<?php include('login.php')?>
<p id="login"></p>
<!--Page main section start-->
<div id="educo_wrapper">
<!--Header start-->
<header id="ed_header_wrapper">
	<div class="ed_header_top">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12">
					<p>welcome guest</p>
					<div class="ed_info_wrapper">
						<a  id="login_button">Login</a>
							<div id="login_one" class="ed_login_form">
								<h3>log in</h3>
								<form class="form" action="" method="post">
									<div class="form-group">
										<label class="control-label">Email :</label>
										<input type="text" class="form-control" name="email">
									</div>
									<div class="form-group">
										<label  class="control-label">Password :</label>
										<input type="password" class="form-control" name="password">
									</div>
									<div class="form-group">
										<button type="submit" name="submit">login</button>
										<a href="signup.php">sign up</a>	
									</div>
								</form>
							</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="ed_header_bottom">
		<div class="container">
			<div class="row">
				<div class="col-lg-2 col-md-2 col-sm-2">
					<div class="educo_logo"> <a href="index.php"><img src="images/header/Logo1.png" alt="logo" /></a> </div>
				</div>
				<div class="col-lg-8 col-md-8 col-sm-8">
					<div class="edoco_menu_toggle navbar-toggle" data-toggle="collapse" data-target="#ed_menu">Menu <i class="fa fa-bars"></i>
					</div>
					<div class="edoco_menu">
						<ul class="collapse navbar-collapse" id="ed_menu">
							<li><a href="index.php">Home</a></li>
							<li><a href="about.php">about us</a></li>
							<li><a href="#">courses</a>
								<ul class="sub-menu">
									<li><a href="courses.php">all courses</a></li>
									<li><a href="php.php" >Php</a></li>
									
									<li><a href="html_course.php">Html5</a></li>
									<li><a href="course_lesson.php">Css</a></li>
                                    <li><a href="course_lesson.php">Java Script</a></li>
								</ul>
							</li>
							<li><a href="#">Quiz</a>
								<!--<ul class="sub-menu">
									<li><a href="instructor_dashboard.php">instructor dashboard</a></li>
									<li><a href="dashboard.php">student dashboard</a></li>
									<li><a href="cart.php">cart</a></li>
									<li><a href="checkout.php">checkout</a></li>
									<li><a href="purchase_course.php">purchase course</a></li>
									<li><a href="not_found.php">404 error</a></li>
								</ul>-->
							</li>
							<li><a href="contact.php">Contact</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-2 col-md-2 col-sm-2">
					<div class="educo_call"><i class="fa fa-phone"></i><a href="#">080-2274-0630</a></div>
				</div>
			</div>
		</div>
    </div>
</header>