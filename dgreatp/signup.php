<?php include('layout/master.php');
?>
<?php
include('signupcon.php');
?>

<!--header end -->
<!--Breadcrumb start-->
<div class="ed_pagetitle" data-stellar-background-ratio="0.5" data-stellar-vertical-offset="0" style="background-image: url(images/content/brdcrm_bg.jpg);">
<div class="ed_img_overlay"></div>
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<div class="page_title">
					<h2>sign up</h2>
				</div>
			</div>
			<div class="col-lg-12 col-md-12 col-sm-12">
				<ul class="breadcrumb">
					<li><a href="index.php">home</a></li>
					<li><i class="fa fa-chevron-left"></i></li>
					<li><a href="signup.php">sign up</a></li>
				</ul>
			</div>
		</div>
	</div>
</div>
<!--Breadcrumb end-->
<div class="ed_transprentbg ed_toppadder80 ed_bottompadder80">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-lg-offset-3 col-md-offset-3">
				<div class="ed_teacher_div">
					<div class="ed_heading_top">
						<h3>sign up</h3>
					</div>
					<form class="ed_contact_form ed_toppadder40" action="" method="post">
						<div class="form-group">
							<label class="control-label">User Name :</label>
							<input type="text" class="form-control" name="username">
						</div>
						<div class="form-group">
							<label class="control-label">Email :</label>
							<input type="email" class="form-control" name="email" >
						</div>
						<div class="form-group">
							<label class="control-label">Password :</label>
							<input type="password" class="form-control" name="password">
						</div>
						<div class="form-group">
							<label class="control-label">Confirm Password :</label>
							<input type="password" class="form-control" name="confirm">
						</div>
						<a  class="btn ed_btn ed_orange pull-right" name="register">sign up</a>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<?php include('layout/foot.php') ?>