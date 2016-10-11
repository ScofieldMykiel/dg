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
<meta name="description"  content="Educo"/>
<meta name="keywords" content="Dgp, html , Education " />
<meta name="author"  content="Scofield"/>
<meta name="MobileOptimized" content="320" />

<!--srart theme style -->
<link href="css/main.css" rel="stylesheet" type="text/css"/>
<!-- end theme style -->
<!-- favicon links -->
<link rel="shortcut icon" type="image/png" href="images/header/favicon.png" />
</head>
<body>
<!--Page main section start-->
<div id="educo_wrapper">
<!--Header start-->
  <header id="ed_header_wrapper">
    <div class="ed_header_top">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12">
			<p>Welcome Instructor</p>
			<div class="ed_info_wrapper">
				<a href="#" id="login_button">Login</a>
				<div id="login_one" class="ed_login_form">
					<h3>log in</h3>
					<form class="form">
						<div class="form-group">
							<label class="control-label">Email :</label>
							<input type="text" class="form-control" >
						</div>
						<div class="form-group">
							<label  class="control-label">Password :</label>
							<input type="password" class="form-control">
						</div>
						<div class="form-group">
						<button type="submit">login</button>
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
									<li><a href="course_sidebar.php">course-sidebar</a></li>
									<li><a href="course_single.php">course-single</a></li>
									<li><a href="course_lesson.php">course-lesson</a></li>
								</ul>
							</li>
							<li><a href="#">Pages</a>
								<ul class="sub-menu">
									<li><a href="instructor_dashboard.php">instructor dashboard</a></li>
									<li><a href="dashboard.php">student dashboard</a></li>
									<li><a href="cart.php">cart</a></li>
									<li><a href="checkout.php">checkout</a></li>
									<li><a href="purchase_course.php">purchase course</a></li>
									<li><a href="not_found.php">404 error</a></li>
								</ul>
							</li>
							<li><a href="contact.php">Contact</a></li>
						</ul>
					</div>
          </div>
		   <div class="col-lg-2 col-md-2 col-sm-2">
            <div class="educo_call"><i class="fa fa-phone"></i><a href="#">1-220-090</a></div>
          </div>
        </div>
      </div>
    </div>	
  </header>
 <!--header end -->
<!--Breadcrumb start-->
<div class="ed_pagetitle" data-stellar-background-ratio="0.5" data-stellar-vertical-offset="0" style="background-image: url(images/content/brdcrm_bg.jpg);">
<div class="ed_img_overlay"></div>
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<div class="page_title">
					<h2>Educo Instructor</h2>
				</div>
			</div>
			<div class="col-lg-12 col-md-12 col-sm-12">
				<ul class="breadcrumb">
					<li><a href="index.php">home</a></li>
					<li><i class="fa fa-chevron-left"></i></li>
					<li><a href="instructor_dashboard.php">Educo Instructor</a></li>
				</ul>
			</div>
		</div>
	</div>
</div>
<!--Breadcrumb end-->
<!--instructor single start-->
<div class="ed_dashboard_wrapper">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
				<div class="ed_sidebar_wrapper">
					<div class="ed_profile_img">
					<img src="images/content/about_b.jpg" alt="Profile Image" class="img-responsive" />
					</div>
					<h3>evans sinai</h3>
					<p><span>active :- </span> 20 Min ago</p>
					 <div class="ed_tabs_left">
						<ul class="nav nav-tabs">
						  <li class="active"><a href="#a" data-toggle="tab">profile</a></li>
						  <li><a href="#b" data-toggle="tab">courses <span>4</span></a></li>
						  <li><a href="#c" data-toggle="tab">activity</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
			<div class="ed_dashboard_tab">
				<div class="tab-content">
					<div class="tab-pane active" id="a">
						<div class="ed_dashboard_inner_tab">
							<div role="tabpanel">
								<!-- Nav tabs -->
								<ul class="nav nav-tabs" role="tablist">
									<li role="presentation" class="active"><a href="#view" aria-controls="view" role="tab" data-toggle="tab">instructor Detail</a></li>
								</ul>
					
								<!-- Tab panes -->
								<div class="tab-content">
									<div role="tabpanel" class="tab-pane active" id="view">
									<div class="ed_inner_dashboard_info">
										<h2> evans sinai (instructor)</h2>
										<table id="profile_view_settings">
											<thead>
												<tr>
													<th>Name</th>
													<th>Location</th>
													<th>Intro</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>Evans Sinai</td>
													<td>London</td>
													<td>I am Joanna Simpson. I am from London.</td>
												</tr>												
											</tbody>
										</table>
									</div>
									</div>
								</div>
					
							</div><!--tab End-->
						</div>
					</div>
					<div class="tab-pane" id="b">
						<div class="ed_dashboard_inner_tab">
							<div role="tabpanel">
								<!-- Nav tabs -->
								<ul class="nav nav-tabs" role="tablist">
									<li role="presentation" class="active"><a href="#my" aria-controls="my" role="tab" data-toggle="tab">courses</a></li>
									<li role="presentation"><a href="#instructing" aria-controls="instructing" role="tab" data-toggle="tab">upcoming courses</a></li>
								</ul>
					
								<!-- Tab panes -->
								<div class="tab-content">
									<div role="tabpanel" class="tab-pane active" id="my">
										<div class="ed_inner_dashboard_info">
											<h2>all courses by evans sinai</h2>
											<div class="row">
												<div class="ed_mostrecomeded_course_slider">
													<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 ed_bottompadder20">
														<div class="ed_item_img">
															<img src="images/slider/sec1_s10.jpg" alt="item1" class="img-responsive">
														</div>
														<div class="ed_item_description ed_most_recomended_data">
																<h4><a href="course_single.php">Project Learning </a><span>£25</span></h4>
																<div class="row">
																	<div class="ed_rating">
																		<div class="col-lg-6 col-md-7 col-sm-6 col-xs-6">
																			<div class="row">
																				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
																					<div class="ed_stardiv">
																						<div class="star-rating"><span style="width:80%;"></span></div>
																					</div>
																				</div>
																				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
																					<div class="row">
																						<p>(5 review)</p>
																					</div>
																				</div>
																			</div>
																		</div>
																		<div class="col-lg-6 col-md-5 col-sm-6 col-xs-6">
																			<div class="ed_views">
																			<i class="fa fa-users"></i>
																			<span>35 students</span>
																			</div>
																		</div>
																	</div>
																</div>
																<p>Project-Based Learning is a flexible tool for framing given academic standards  flexible tool for framing.</p>
																<a href="course_single.php" class="ed_getinvolved">get involved <i class="fa fa-long-arrow-right"></i></a>
														</div>
													</div>
													<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 ed_bottompadder20">
														<div class="ed_item_img">
															<img src="images/slider/sec1_s9.jpg" alt="item1" class="img-responsive">
														</div>
														<div class="ed_item_description ed_most_recomended_data">
																<h4><a href="course_single.php">Billing Seminar</a><span>£20</span></h4>
																<div class="row">
																	<div class="ed_rating">
																		<div class="col-lg-6 col-md-7 col-sm-6 col-xs-6">
																			<div class="row">
																				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
																					<div class="ed_stardiv">
																						<div class="star-rating"><span style="width:80%;"></span></div>
																					</div>
																				</div>
																				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
																					<div class="row">
																						<p>(3 review)</p>
																					</div>
																				</div>
																			</div>
																		</div>
																		<div class="col-lg-6 col-md-5 col-sm-6 col-xs-6">
																			<div class="ed_views">
																			<i class="fa fa-users"></i>
																			<span>55 students</span>
																			</div>
																		</div>
																	</div>
																</div>
																<p>We offer these billing seminars to AMA member physicians along with their staff (at least must attend the seminar).</p>
																<a href="course_single.php" class="ed_getinvolved">get involved <i class="fa fa-long-arrow-right"></i></a>
														</div>
													</div>
													<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 ed_bottompadder20">
														<div class="ed_item_img">
															<img src="images/slider/sec1_s5.jpg" alt="item1" class="img-responsive">
														</div>
														<div class="ed_item_description ed_most_recomended_data">
																<h4><a href="course_single.php">Girls On Rails </a><span>£40</span></h4>
																<div class="row">
																	<div class="ed_rating">
																		<div class="col-lg-6 col-md-7 col-sm-6 col-xs-6">
																			<div class="row">
																				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
																					<div class="ed_stardiv">
																						<div class="star-rating"><span style="width:80%;"></span></div>
																					</div>
																				</div>
																				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
																					<div class="row">
																						<p>(8 review)</p>
																					</div>
																				</div>
																			</div>
																		</div>
																		<div class="col-lg-6 col-md-5 col-sm-6 col-xs-6">
																			<div class="ed_views">
																			<i class="fa fa-users"></i>
																			<span>45 students</span>
																			</div>
																		</div>
																	</div>
																</div>
																<p>In a lot of various jobs, psychology tests are something you will have to deal with. We can prepare you.</p>
																<a href="course_single.php" class="ed_getinvolved">get involved <i class="fa fa-long-arrow-right"></i></a>
														</div>
													</div>
													<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 ed_bottompadder20">
														<div class="ed_item_img">
															<img src="images/slider/sec1_s7.jpg" alt="item1" class="img-responsive">
														</div>
														<div class="ed_item_description ed_most_recomended_data">
																<h4><a href="course_single.php">programming </a><span>£38</span></h4>
																<div class="row">
																	<div class="ed_rating">
																		<div class="col-lg-6 col-md-7 col-sm-6 col-xs-6">
																			<div class="row">
																				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
																					<div class="ed_stardiv">
																						<div class="star-rating"><span style="width:80%;"></span></div>
																					</div>
																				</div>
																				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
																					<div class="row">
																						<p>(9 review)</p>
																					</div>
																				</div>
																			</div>
																		</div>
																		<div class="col-lg-6 col-md-5 col-sm-6 col-xs-6">
																			<div class="ed_views">
																			<i class="fa fa-users"></i>
																			<span>60 students</span>
																			</div>
																		</div>
																	</div>
																</div>
																<p>Sometimes students need help with things unrelated to school. Where we come in and make sure you are happy .</p>
																<a href="course_single.php" class="ed_getinvolved">get involved <i class="fa fa-long-arrow-right"></i></a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div role="tabpanel" class="tab-pane" id="instructing">
										<div class="ed_inner_dashboard_info">
											<h2>upcoming courses by evans sinai</h2>
										</div>
									</div>
								</div>
					
							</div><!--tab End-->
						</div>
					</div>
					<div class="tab-pane" id="c">
						<div class="ed_dashboard_inner_tab">
							<div role="tabpanel">
								<!-- Nav tabs -->
								<ul class="nav nav-tabs" role="tablist">
									<li role="presentation" class="active"><a href="#personal" aria-controls="personal" role="tab" data-toggle="tab">personal</a></li>
									<li role="presentation"><a href="#mentions" aria-controls="mentions" role="tab" data-toggle="tab">mentions</a></li>
									<li role="presentation"><a href="#favourites" aria-controls="favourites" role="tab" data-toggle="tab">favourites</a></li>
								</ul>
					
								<!-- Tab panes -->
								<div class="tab-content">
									<div role="tabpanel" class="tab-pane active" id="personal">
									<div class="ed_inner_dashboard_info">
										<div class="ed_course_single_info">
											<div class="ed_add_students">
												<img src="images/content/about_small.jpg" alt="">
												<span>student started course course status 1 weeks, 2 days ago</span>
												<p>Student adler braxton started the course Course Status</p>
											</div> 
											<div class="ed_add_students">
												<img src="images/content/about_small.jpg" alt="">
												<span>student started course course status 1 weeks, 4 days ago</span>
												<p>Student baldwin dallas started the course Course Status</p>
											</div>
											<div class="ed_add_students">
												<img src="images/content/about_small.jpg" alt="">
												<span>student started course course status 1 weeks, 3 days ago</span>
												<p>Student carney Tate started the course Course Status</p>
											</div>
											<div class="ed_add_students">
												<img src="images/content/about_small.jpg" alt="">
												<span>student started course course status 2 weeks, 4 days ago</span>
												<p>Student dwight easton started the course Course Status</p>
											</div>
											<div class="ed_add_students">
												<img src="images/content/about_small.jpg" alt="">
												<span>student started course course status 2 weeks, 5 days ago</span>
												<p>Student elbert wade started the course Course Status</p>
											</div>
											<div class="ed_add_students">
												<img src="images/content/about_small.jpg" alt="">
												<span>student started course course status 2 weeks, 2 days ago</span>
												<p>Student hailey kyler started the course Course Status</p>
											</div>
											<div class="ed_add_students">
												<img src="images/content/about_small.jpg" alt="">
												<span>student started course course status 3 weeks, 3 days ago</span>
												<p>Student graham ryder started the course Course Status</p>
											</div>
											<div class="ed_add_students">
												<img src="images/content/about_small.jpg" alt="">
												<span>student started course course status 3 weeks, 6 days ago</span>
												<p>Student jaxon keegan started the course Course Status</p>
											</div>
											<div class="ed_add_students">
												<img src="images/content/about_small.jpg" alt="">
												<span>student started course course status 4 weeks, 2 days ago</span>
												<p>Student kealy sage started the course Course Status</p>
											</div>
											<div class="ed_add_students">
												<img src="images/content/about_small.jpg" alt="">
												<span>student started course course status 4 weeks, 4 days ago</span>
												<p>Student lavern gunner started the course Course Status</p>
											</div>
											<div class="col-lg-12">
											<div class="row">
												<div class="ed_blog_bottom_pagination ed_toppadder40">
												<nav>
													<ul class="pagination">
														<li><a href="#">1</a></li>
														<li><a href="#">2</a></li>
														<li><a href="#">3</a></li>
														<li class="active"><a href="#">Next <span class="sr-only">(current)</span></a></li>
													</ul>
												</nav>
												</div>
											</div>
											</div>
										</div>
									</div>
									</div>
									<div role="tabpanel" class="tab-pane" id="mentions">
									<div class="ed_inner_dashboard_info">
										<h2>sorry, there was no mentions event found. please try a different filter</h2>
									</div>
									</div>
									<div role="tabpanel" class="tab-pane" id="favourites">
									<div class="ed_inner_dashboard_info">
										<h2>sorry, there was no favourites event found. please try a different filter</h2>
									</div>
									</div>
								</div>
					
							</div><!--tab End-->
						</div>
					</div>
				</div>
			</div>
			</div>
			
			
		</div>
	</div>
</div>
<!--instructor single end-->
<?php include('layout/foot.php')?>