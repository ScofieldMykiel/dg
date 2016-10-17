<?php 
session_start();

   $_SESSION['varname'] = "";
 
include('layout/master.php');
?>
<!--Breadcrumb start-->
<div class="ed_pagetitle" data-stellar-background-ratio="0.5" data-stellar-vertical-offset="0" style="background-image: url(images/content/brdcrm_bg.jpg);">
<div class="ed_img_overlay"></div>
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<div class="page_title">
					<h2>Single course</h2>
				</div>
			</div>
			<div class="col-lg-12 col-md-12 col-sm-12">
				<ul class="breadcrumb">
					<li><a href="index.php">home</a></li>
					<li><i class="fa fa-chevron-left"></i></li>
					<li><a href="courses.php">All courses</a></li>
					<li><i class="fa fa-chevron-left"></i></li>
					<li><a href="course_single.php">HTML5 course</a></li>
				</ul>
			</div>
		</div>
	</div>
</div>
<!--Breadcrumb end-->
<!--Single content start-->
<div class="ed_graysection ed_course_single ed_toppadder80 ed_bottompadder80">
	<div class="container">
		<div class="row">
			<div class="col-lg-9 col-md-9 col-sm-12">
				<div class="ed_course_single_item">
					<div class="ed_course_single_image">
						<img src="images/content/Single_course_bg.jpg" alt="event image" />
					</div>
					<div class="ed_course_single_info">
						<h2>HTML5 <span>  </span></h2>
						<div class="ed_rating">
							<div class="row">
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
									<div class="row">
										<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
											<div class="ed_stardiv">
												<div class="star-rating"><span style="width:80%;"></span></div>
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
											<span>(5 review)</span>
										</div>
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pull-right text-right">
									<div class="ed_views">
										<i class="fa fa-users"></i>
										<span>35 students</span>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
								<div class="course_detail">
									<div class="course_faculty">
										<img src="images/content/about_small.jpg" alt=""> <a href="instructor_dashboard.php">Da Prof</a>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 pull-right text-right">
								<div class="ed_course_duration">
								
								<p>Html5 course</p>
							</div>
							</div>
						</div>
					</div>
					<div class="ed_course_single_tab">
						<div role="tabpanel">
							<!-- Nav tabs -->
							<ul class="nav nav-tabs" role="tablist">
								<li role="presentation" class="active"><a href="#description" aria-controls="description" role="tab" data-toggle="tab">description</a></li>
								<li role="presentation"><a href="#students" aria-controls="students" role="tab" data-toggle="tab">students</a></li>
								<li role="presentation"><a href="#news" aria-controls="news" role="tab" data-toggle="tab">news</a></li>
								<li role="presentation"><a href="#events" aria-controls="events" role="tab" data-toggle="tab">events</a></li>
							</ul>
							<!-- Tab panes -->
							<div class="tab-content">
								<div role="tabpanel" class="tab-pane active" id="description">
									<div class="ed_course_tabconetent">
									<h2>about HTML5</h2>
										<p>HTML5 is the latest evolution of the standard that defines HTML. The term represents two different concepts: It is a new version of the language HTML, with new elements, attributes, and behaviors, and a larger set of technologies that allows more diverse and powerful Web sites and applications.
										Sections and outlines in HTML5.
										</p>
										
										<p>On 28 October 2014, HTML5 was released as a stable W3C Recommendation, bringing the specification process to completion. Future plans.
										According to the plan proposed by the W3C in September 2012, the HTML 5.1 specification Recommendation will be targeted for the end of 2016.</p>
							
										<p>HTML5 itself, according to the standard, is a markup language (just like HTML4) but the way the term is being commonly used is as a conglomerate of web technologies, including javascript (a programming language), CSS (a styling mechanism), HTML (a markup language) and sometimes server side languages as well.</p>
										
										<p>HTML5 is definitely not a programming language but a mark-up language. It is the fifth revision of HTML which includes XHTML also.

											Its core aims have been to improve the language with support for the latest multimedia while keeping it easily readable by humans and consistently understood by computers and devices.<br />

											Some of the most interesting new features in HTML5:
												<ul>
												<li>The &lt;canvas&gt; element for 2D drawing</li>
												<li>The &lt;video&gt; and &lt;audio&gt; elements for media playback</li>
												<li>Support for local storage</li>
												<li>New content-specific elements, like &lt;article&gt;, &lt;footer&gt;, &lt;header&gt;, &lt;nav&gt;, &lt;section&gt;</li>
												<li>New form controls, like calendar, date, time, email, url, search</li>
												</ul>
												</p>
									</div>
								</div>
								<div role="tabpanel" class="tab-pane" id="students">
									<div class="ed_inner_dashboard_info">
										<div class="ed_course_single_info">
											<h2>total students :- <span>20</span></h2>
											<h5>10 students recently join this course</h5>
											<div class="ed_add_students">
												<img src="images/content/S01.jpg" alt="">
												<span>adler braxton</span>
												<p>new student</p>
											</div> 
											<div class="ed_add_students">
												<img src="images/content/S02.jpg" alt=""> 
												<span>baldwin dallas</span>
												<p>new student</p>
											</div>
											<div class="ed_add_students">
												<img src="images/content/S03.jpg" alt="">
												<span>carney Tate</span>
												<p>new student</p>
											</div>
											<div class="ed_add_students">
												<img src="images/content/S04.jpg" alt=""> 
												<span>dwight easton</span>
												<p>new student</p>
											</div>
											<div class="ed_add_students">
												<img src="images/content/S05.jpg" alt=""> 
												<span>elbert wade</span>
												<p>new student</p>
											</div>
											<div class="ed_add_students">
												<img src="images/content/S06.jpg" alt=""> 
												<span>hailey kyler</span>
												<p>new student</p>
											</div>
											<div class="ed_add_students">
												<img src="images/content/S07.jpg" alt=""> 
												<span>graham ryder</span>
												<p>new student</p>
											</div>
											<div class="ed_add_students">
												<img src="images/content/S08.jpg" alt=""> 
												<span>jaxon keegan</span>
												<p>new student</p>
											</div>
											<div class="ed_add_students">
												<img src="images/content/S09.jpg" alt=""> 
												<span>kealy sage</span>
												<p>new student</p>
											</div>
											<div class="ed_add_students">
												<img src="images/content/S10.jpg" alt=""> 
												<span>lavern gunner</span>
												<p>new student</p>
											</div>
											<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
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
								<div role="tabpanel" class="tab-pane" id="news">
									<div class="ed_course_tabconetent">
										<h2>course news</h2>
										<h5>some recent news about this course....</h5>
										<p> I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. </p>
									</div>
								</div>
								<div role="tabpanel" class="tab-pane" id="events">
									<div class="ed_course_single_info">
										<h2>total events on this course :-<span>5</span></h2>
										<div class="ed_course_single_inner_tab">
											<div role="tabpanel">
												<!-- Nav tabs -->
												<ul class="nav nav-tabs" role="tablist">
													<li role="presentation" class="active"><a href="#upcoming" aria-controls="upcoming" role="tab" data-toggle="tab">upcoming</a></li>
													<li role="presentation"><a href="#past" aria-controls="past" role="tab" data-toggle="tab">past</a></li>
												</ul>
												<!-- Tab panes -->
												<div class="tab-content">
													<div role="tabpanel" class="tab-pane active" id="upcoming">
														<div class="ed_course_event">
															<h5>1. mobile capabilities</h5>
															<p><span>orgnaiger :-</span> James Marco</p>
															<p><span>held on :-</span> October 1 @ 7:30 Am - 9:00 Am</p>
															<p>It is pleasure,  expound the actual teachings of the great explorer of the truthI will give you a complete account of the system, and No one rejects, dislikes, or avoids pleasure itself, because.</p>
														</div>
														<div class="ed_course_event">
															<h5>2. Management Prog.</h5>
															<p><span>orgnaiger :-</span> Fumes Sarcoma</p>
															<p><span>held on :-</span>October 3 @ 10:30 Am - 2:00 Pm</p>
															<p>I will give you a complete account of the system, and No one rejects, dislikes, or avoids pleasure itself, because it is pleasure,  expound the actual teachings of the great explorer of the truth.</p>
														</div>
													</div>
													<div role="tabpanel" class="tab-pane" id="past">
														<div class="ed_course_event">
															<h5>1. JavaScript Campus.</h5>
															<p><span>orgnaiger :-</span> Tina Fibonacci</p>
															<p><span>held on :-</span>September 20 @ 7:30 Pm - 12:00 Am</p>
															<p>avoids pleasure itself, because it is pleasure,  expound the actual teachings of the great explorer of the truth will give you a complete account of the system, and No one rejects, dislikes.</p>
														</div>
														<div class="ed_course_event">
															<h5>2. Coding Seminar</h5>
															<p><span>orgnaiger :-</span> James Marco</p>
															<p><span>held on :-</span> September 10 @ 7:30 Am - 9:00 Am</p>
															<p>great explorer of the complete account of the system, and No one rejects, dislikes, or avoids pleasure itself, because it is pleasure,  expound the actual teachings of the truth.</p>
														</div>
														<div class="ed_course_event">
															<h5>3. Project Learning</h5>
															<p><span>orgnaiger :-</span> Shy Tommy</p>
															<p><span>held on :-</span>September 30 @ 10:30 Am - 2:00 Pm</p>
															<p>one rejects, dislikes, or avoids pleasure itself, because it is pleasure, of the system, and No expound the actual teachings of the great explorer of the truth.</p>
														</div>
													</div>							
												</div>
											</div>
										</div><!--tab End-->
									</div>
								</div>
							</div>
						</div>
					</div><!--tab End-->
				</div>	
				<div class="ed_time_executor ed_toppadder40">
					<ul>
						<li><a href="#">lessons</a> <span>  </span></li>
						<li><a href="html/index.php">HTML home</a> <span>  </span></li>
						<li><a href="#">basic html</a> <span>  </span></li>
						<li><a href="course_lesson.php">Basic CSS</a> <span>  </span></li>
						<li><a href="course_lesson.php">Advanced HTML + CSS</a> <span>  </span></li>
						<li><a href="course_lesson.php">Javascript</a> <span>   </span></li>
					</ul>
				</div>
			</div>
<!--Sidebar Start-->
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
				<div class="sidebar_wrapper_upper">
					<div class="sidebar_wrapper">
						<aside class="widget widget_button">
							<a href="purchase_course.php" class="ed_btn ed_green">Join this course</a>
						</aside>
						<aside class="widget widget_categories">
							<h4 class="widget-title">related courses</h4>
							<ul>
								<li><a href="course_single.php"><i class="fa fa-chevron-right"></i> PHP</a></li>
								<li><a href="course_single.php"><i class="fa fa-chevron-right"></i> CSS</a></li>
								<li><a href="course_single.php"><i class="fa fa-chevron-right"></i> Javascript</a></li>
								<li><a href="course_single.php"><i class="fa fa-chevron-right"></i>  SQL</a></li>
								<li><a href="course_single.php"><i class="fa fa-chevron-right"></i> Jquery</a></li>
								<li><a href="course_single.php"><i class="fa fa-chevron-right"></i> php css</a></li>
								<li><a href="course_single.php"><i class="fa fa-chevron-right"></i> it skills</a></li>
								<li><a href="course_single.php"><i class="fa fa-chevron-right"></i> management</a></li>
								
							</ul>
						</aside>
						<aside class="widget widget_sharing">
							<h4 class="widget-title">share this course</h4>
							<ul>
								<li><a href="course_single.php"><i class="fa fa-facebook"></i> facebook</a></li>
								<li><a href="course_single.php"><i class="fa fa-linkedin"></i> linkedin</a></li>
								<li><a href="course_single.php"><i class="fa fa-twitter"></i> twitter</a></li>
								<li><a href="course_single.php"><i class="fa fa-google-plus"></i> google+</a></li>
							</ul>
						</aside>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
				<div class="ed_sidebar_slider ed_bottompadder10">
					<h3>popular courses</h3>
					<div id="owl-demo3" class="owl-carousel owl-theme">
						<div class="item">
							<div class="ed_item_img">
								<img src="images/slider/sec1_s10.jpg" alt="item1" class="img-responsive">
							</div>
							<div class="ed_mostrecomeded_course_slider ed_most_recomended_data">
								<h4><a href="course_single.php">Project Learning </a><span>£25</span></h4>
							</div>
						</div>
						<div class="item">
							<div class="ed_item_img">
							<img src="images/slider/sec1_s9.jpg" alt="item2" class="img-responsive">
							</div>
							<div class="ed_mostrecomeded_course_slider ed_most_recomended_data">
								<h4><a href="course_single.php">billing seminar</a><span>free</span></h4>
							</div>
						</div>
						<div class="item">
							<div class="ed_item_img">
							<img src="images/slider/sec1_s8.jpg" alt="item3" class="img-responsive">
							</div>
							<div class="ed_mostrecomeded_course_slider ed_most_recomended_data">
								<h4><a href="course_single.php">User experience Jam </a><span>£38</span></h4>
							</div>
						</div>
						<div class="item">
							<div class="ed_item_img">
							<img src="images/slider/sec1_s5.jpg" alt="item4" class="img-responsive">
							</div>
							<div class="ed_mostrecomeded_course_slider ed_most_recomended_data">
								<h4><a href="course_single.php">Girls on Rails </a><span>free</span></h4>
							</div>
						</div>
						<div class="item">
							<div class="ed_item_img">
								<img src="images/slider/sec1_s7.jpg" alt="item1" class="img-responsive">
							</div>
							<div class="ed_mostrecomeded_course_slider ed_most_recomended_data">
								<h4><a href="course_single.php">Coding Seminar </a><span>free</span></h4>
							</div>
						</div>
						<div class="item">
							<div class="ed_item_img">
							<img src="images/slider/sec1_s4.jpg" alt="item2" class="img-responsive">
							</div>
							<div class="ed_mostrecomeded_course_slider ed_most_recomended_data">
								<h4><a href="course_single.php">Javascript Campus </a><span>£60</span></h4>
							</div>
						</div>
					</div>
				</div>
			</div>
<!--Sidebar End-->
		</div>
	</div>
</div>
<!--Single content end-->
<?php include('layout/footer.php')?>