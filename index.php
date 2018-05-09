<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap-grid.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/haven.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
	<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
	<title>HAVEN</title>
</head>
<body>
	<!-- TOP FOLD -->
	<div class="container-fluid full-width-no-padding">
		<div class="row">	
			<div class="col col-md-6 left-fold">
				<div class="inner-container-fold">
				<img class="logo" src="assets/images/logo-white.png">
				<h1 class="lg-header">Lorem ipsum dolor sit amet </h1>
				<h2 class="lg-subheader">consectetur adipiscing elit, sed do eius mod tempor incididunt ut labore et dolo re magna aliqua onsectetur adipiscing elit, sed do eius mod tempor incid. </h2>
				</div>
			</div>
			<div class="col col-md-6 right-fold">
				<div class="inner-container-right">
				<h1 class="title-fold">News & blog</h1>
				<ul class="news">
					<li class="blog-list">
						<a href="#">KiwiSaver HomeStart grant explained</a>
					</li>
					<li class="blog-list">
						<a href="#">What's happening in the property market?</a>
					</li>
					<li class="blog-list">
						<a href="#">Trust law reform</a>
					</li>
					<li class="blog-list">
						<a href="#">Tax update- Simplification of taxes, foreign ...</a>
					</li>
					<li class="blog-list">
						<a href="#">What do the new lending rules mean?</a>
					</li>
					<li class="blog-list">
						<a href="#">How will the Reserve Bank respond to ...</a>
					</li>
				</ul>
				</div>
			</div>
		</div>
		<div class="row">
				<nav id="top-nav" class="navbar navbar-expand-lg navbar-light bg-lightgrey justify-content-center">
					<button class="responsive-menu" style="display: none"><i class="fa fa-bars"></i> MENU</button>
					<div class="cotainer">
						<ul class="navbar-nav">
							<li class="nav-item">
						        <a class="nav-link" href="#">Book keeping and payroll</a>
						    </li>
						    <li class="nav-item">
						        <a class="nav-link" href="#">Financial & GST</a>
						    </li>
						    <li class="nav-item">
						        <a class="nav-link active" href="#">KiwiSaver advice</a>
						    </li>
						    <li class="nav-item">
						        <a class="nav-link" href="#">Insuring people</a>
						    </li>
						    <li class="nav-item">
						        <a class="nav-link" href="#">Tax & business advice</a>
						    </li>
						    <li class="nav-item">
						        <a class="nav-link" href="#">Trustee services</a>
						    </li>
						    <li class="nav-item">
						        <a class="nav-link" href="#">Mortgage advice</a>
						    </li>
						</ul>
					</div>
				</nav>
		</div>
	</div>
	<!-- END OF TOP FOLD -->

	<div class="row no-gutters">
		<div class="col col-md-8 bg-holder">
		</div>
		<div class="col col-md-4 blue">
			<div class="inner-container-4">
				<h2 class="title white lg-margin">Why have a financial adviser</h2>
				<p class="white">Haven was created out of the need to simply do things better. With specialist advisers across a range of financial services, we can offer you the best, practical advice for your unique situation.</p>
				<p class="white">Our financial advisers span the North and South Island making us conveniently positioned wherever you need us.</p>
				<a href="#" class="custom-button">Learn more about our advisers</a>
			</div>
		</div>
	</div>
	<div class="row no-gutters">
		<div class="col col-md-7 blue">
			<div class="inner-container-7">
				<h2 class="title white text-center sm-margin">Contact us today</h2>
				<p class="white text-center lg-margin" style="max-width: 437px;margin: 0 auto;margin-bottom: 50px;">Brief intro paragraph about this section. Bis porepelent quam nam ut raeptam facillo riberum sitatur aut properiata volorer.</p>
				<form class="needs-validation contact-form" novalidate>
				  <div class="form-row">
				    <div class="col-md-4 mb-3">
				      <input type="text" class="form-control" id="validationCustom01" placeholder="Full name*" value="" name="fullname" required>
				      <div class="invalid-feedback">
				        Please Enter Your Fullname
				      </div>
				    </div>
				    <div class="col-md-4 mb-3">
				      <input type="email" class="form-control" id="validationCustom02" placeholder="Email Address*" value="" name="email" required>
				      <div class="invalid-feedback">
				        Please Enter a Valid Email Address
				      </div>
				    </div>
				    <div class="col-md-4 mb-3">			    
				        <input type="text" class="form-control" name="contact_number" placeholder="Contact number">
				    </div>
				  </div>
				  <div class="form-row">
				    <div class="col-md-4 mb-3">
				      <select class="form-control" name="book_meeting">
				      	<option value="NA">Book a meeting</option>
				      	<option value="1">Test 1</option>
				      	<option value="2">Test 2</option>
				      </select>
				    </div>
				    <div class="col-md-4 mb-3">
				      <select class="form-control" id="validationCustom04" name="pref_day" required>
				      	<option value="">Preferred day*</option>
				      	<option value="1">Monday</option>
				      	<option value="2">Tuesday</option>
				      	<option value="3">Wednesday</option>
				      	<option value="4">Thursday</option>
				      	<option value="5">Friday</option>
				      </select>
				      <div class="invalid-feedback">
				        Please select your preferred day.
				      </div>
				    </div>
				    <div class="col-md-4 mb-3">
				      <select class="form-control" id="validationCustom05" name="pref_time" required>
				      	<option value="">Preferred time*</option>
				      	<option value="8">8:00 AM</option>
				      	<option value="9">9:00 AM</option>
				      	<option value="10">10:00 AM</option>
				      	<option value="11">11:00 AM</option>
				      	<option value="12">12:00 PM</option>
				      	<option value="1">1:00 PM</option>
				      	<option value="2">2:00 PM</option>
				      	<option value="3">3:00 PM</option>
				      	<option value="4">4:00 PM</option>
				      	<option value="5">5:00 PM</option>
				      </select>
				      <div class="invalid-feedback">
				        Please select your preferred time.
				      </div>
				    </div>
				  </div>
				  <div class="form-row">
				  	<div class="col-md-12 mb-3">
				  		<textarea name="message" class="form-control" placeholder="Message"></textarea>
				  	</div>
				  </div>
				  <button class="btn btn-primary submit-button" type="submit">Submit</button>
				</form>

				<script>
				// Example starter JavaScript for disabling form submissions if there are invalid fields
				(function() {
				  'use strict';
				  window.addEventListener('load', function() {
				    // Fetch all the forms we want to apply custom Bootstrap validation styles to
				    var forms = document.getElementsByClassName('needs-validation');
				    // Loop over them and prevent submission
				    var validation = Array.prototype.filter.call(forms, function(form) {
				      form.addEventListener('submit', function(event) {
				        if (form.checkValidity() === false) {
				          event.preventDefault();
				          event.stopPropagation();
				        }
				        form.classList.add('was-validated');
				      }, false);
				    });
				  }, false);
				})();
				</script>
			</div>
		</div>
		<div class="col col-md-5 gray">
			<div class="inner-container-5">
				<h1 class="no-margin title-fold sm-font lg-margin ">Contact us</h1>
				<ul class="contact-us">
					<li class="adviser">Find an adviser</li>
					<li class="accountant">Talk to an accountant</li>
					<li class="mortgage">Talk to a mortgage broker</li>
					<li class="tel">0800 700 699</li>
					<li class="emailad">reception@havenadvisers.co.nz</li>
					<li class="fb">Be a part of our Facebook community</li>
				</ul>
			</div>
		</div>
	</div>
<footer class="dark-gray ">
	<div class="row">
		<div class="container sm-padding bottom-hr">
			<div class="col col-md-12 ">
				<form class="needs-validation" novalidate>
				  <div class="form-row">
				  	<div class="col">
				  		<p class="white sign-uptxt"><b>SIGN UP TO OUR NEWSLETTER</b></p>
				  	</div>
				    <div class="col-md-3">
				      <input type="text" class="form-control" id="validationCustom01" placeholder="Full Name" value="" required>
				      <div class="invalid-feedback">
				        Please Enter Your Name
				      </div>
				    </div>
				    <div class="col-md-3">
				      <input type="email" class="form-control" id="validationCustom02" placeholder="Email address" value="" required>
				      <div class="invalid-feedback">
				        Looks good!
				      </div>
				    </div>
				    <div class="col-md-2">
				        <button class="btn btn-primary sign-up" type="submit">Submit</button>
				     </div>
				  </div>
				</form>
			</div>
		</div>
	</div>
	<div class="row ">
		<div class="container footer-logo ">
			<div class="col col-md-12 d-block">
				<img class="logo-bottom" src="assets/images/logo-white.png">
			</div>
		</div>
	</div>
	<div class="row justify-content-center">
				<nav class="navbar navbar-expand-lg navbar-light footer-nav lg-margin">
					<div class="cotainer">
						<ul class="navbar-nav">
							<li class="nav-item">
						        <a class="nav-link" href="#">HOME</a>
						    </li>
						    <li class="nav-item">
						        <a class="nav-link" href="#">OUR SERVICES</a>
						    </li>
						    <li class="nav-item">
						        <a class="nav-link" href="#">ABOUT US</a>
						    </li>
						    <li class="nav-item">
						        <a class="nav-link" href="#">TESTIMONIALS</a>
						    </li>
						    <li class="nav-item">
						        <a class="nav-link" href="#">BLOG</a>
						    </li>
						    <li class="nav-item">
						        <a class="nav-link" href="#">CONTACT US</a>
						    </li>
						</ul>
					</div>
				</nav>
		</div>
		<div class="row">
			<div class="container">
			<div class="col col-md-12 justify-content-center">
				<p class="white" style="text-align: center;margin-bottom: 0px">0800 700 699</p>
				<p class="white" style="text-align: center">reception@havenadvisers.co.nz</p>
			</div>
			</div>
		</div>
		<div class="row no-gutters">
			<div class="container copyright ">
				<div class="col-md-12 no-gutters" style="padding-left: 0;padding-right: 0">
					<p class="white" style="text-align: right;">Copyright © 2018 Haven Advisers Limited. All rights reserved.</p>
				</div>
			</div>
		</div>
</footer>
</body>
<script type="text/javascript">

window.onscroll = function() {myFunction()};
var header = document.getElementById("top-nav");
var sticky = header.offsetTop;
function myFunction() {
  if (window.pageYOffset >= sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}
</script>
<script type="text/javascript">
	$(document).ready(function() {
		$(".responsive-menu").click( function() {
			$("#top-nav .navbar-nav").toggle();
		})
	})
</script>
</html>