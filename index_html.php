<?php
 	include "config.php";
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Startuply</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
		<link rel="stylesheet" type="text/css" href="assets/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	</head>
	<body>
		<section id="preloader">
			<div></div>
		</section>
		<section id="home">
			<div class="container">
				<nav class="navbar navbar-default">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="#"><img src="assets/images/logo/logo.png" class="img-responsive"></a>
					</div>
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav">
							<li class="activ"><a href="#home">Home</a></li>
							<li><a href="#about">About</a></li>
							<li><a href="#features">Features</a></li>
							<li><a href="#prices">Prices</a></li>
							<li><a href="#">Feedback</a></li>
							<li><a href="#team">Team</a></li>
							<li><a href="#contacts">Contacts</a></li>
							<li class="drop">
								<a style="cursor: pointer;" class="extra">Extra <span class="caret"></span></a>
								<ul>
									<li>
										<a href="#">Homepages <i class="fa fa-caret-right pull-right" aria-hidden="true"></i></a>
										<ul class="homePages">
											<li><a href="#">Default</a></li>
											<li><a href="#">Click Through</a></li>
											<li><a href="#">Fast Registration</a></li>
											<li><a href="#">Promo</a></li>
											<li><a href="#">Waiting list</a></li>
											<li><a href="#">Video Background</a></li>
											<li><a href="#">Youtube Embed</a></li>
											<li><a href="#">Vimeo Embed</a></li>
										</ul>
									</li>
									<li>
										<a href="#">Blog <i class="fa fa-caret-right pull-right" aria-hidden="true"></i></a>
										<ul class="blog">
											<li><a href="#">List</a></li>
											<li><a href="#">Post</a></li>
										</ul>
									</li>
									<li><a href="#">Ecommerce <i class="fa fa-caret-right pull-right" aria-hidden="true"></i></a>
										<ul class="ecommerce">
											<li><a href="#">Product Grid</a></li>
											<li><a href="#">Product List</a></li>
											<li><a href="#">Product Page</a></li>
											<li><a href="#">Cart Checkout</a></li>
											<li><a href="#">Payment Confirmation</a></li>
										</ul>
									</li>
									<li><a href="#">Registration</a></li>
									<li><a href="#">Forms</a></li>
									<li><a href="#">Shortcodes</a></li>
								</ul>
							</li>
						</ul>
						<form class="navbar-form navbar-right">
							<button type="submit"><a href="#">Login</a></button>
							<button type="submit"><a href="#">Sing up</a></button>
						</form>
					</div>
				</nav>
				<div class="content">
					<h1>
						<?php
							$sql = "SELECT `h1` FROM `home`";
							$query = mysqli_query($conn, $sql);
							$row = mysqli_fetch_assoc($query);
							echo $row['h1']; 
						?>
					</h1>
					<h3>
						<?php
							$sql = "SELECT `h3` FROM `home`";
							$query = mysqli_query($conn, $sql);
							$row = mysqli_fetch_assoc($query);
							echo $row['h3']; 
						?>
					</h3>
					<button value="submit"><a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Get started</a></button>
					<button value="submit"><a href="#">Take tour</a></button>
				</div>
			</div>
		</section>
		<section id="about">
			<div class="backColor">
				<div class="container logo">
					<div class="col-md-12 text-center col-sm-12 col-xs-12">
						<?php
							include 'config.php';
							$src = [];
							$sql = "SELECT `src` FROM `about_logos`";
							$query = mysqli_query($conn, $sql);
							while($row = mysqli_fetch_assoc($query)){
                        		array_push($src , $row['src']);
                    		}
						?>
						<img width="150px" height="71px" src="imgs/<?php echo $src[0]; ?>">
						<img width="150px" height="71px" src="imgs/<?php echo $src[1]; ?>">
						<img width="150px" height="71px" src="imgs/<?php echo $src[2]; ?>">
						<img width="150px" height="71px" src="imgs/<?php echo $src[3]; ?>">
						<img width="150px" height="71px" src="imgs/<?php echo $src[4]; ?>">
					</div>
				</div>
			</div>
		</section>
		<section id="features">
			<div class="colorGrayBackground">
				<div class="container">
					<div>
						<div class="lorem">
							<div class="button">
								<h4>Lorem Dolor</h4>
								<p>Sit amet, consecter adipiscing elit hac divisone rem ipsam prorsus</p>
							</div>
							<div class="button">
								<h4>Lorem Dolor</h4>
								<p>Sit amet, consecter adipiscing elit hac divisone rem ipsam prorsus</p>
							</div>
							<div class="button">
								<h4>Lorem Dolor</h4>
								<p>Sit amet, consecter adipiscing elit hac divisone rem ipsam prorsus</p>
							</div>
						</div>
						<img src="assets/images/img/comp.png" class="img-responsive">
						<img src="assets/images/img/rich_features_2.png" class="img-responsive">
						<img src="assets/images/img/rich_features_3.png" class="img-responsive">
						<div class="clearFix"></div>
					</div>
				</div>
			</div>
			
			<div class="container">
				<div class="row text-center feature">
					<div class="one">
						<div class="col-md-3 col-sm-6 col-xs-12">
							<i class="fa fa-cloud-download fa-3x" aria-hidden="true"></i>
							<h4>FEATURE 1</h4>
							<p>Sit amet, consectetur adipiscing elit. In hac divisione rem ipsam prorsus probo elegantiam desidero. </p>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-12">
							<i class="fa fa-shopping-cart fa-3x" aria-hidden="true"></i>
							<h4>FEATURE 2</h4>
							<p>Sit amet, consectetur adipiscing elit. In hac divisione rem ipsam prorsus probo elegantiam desidero. </p>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-12">
							<i class="fa fa-keyboard-o fa-3x" aria-hidden="true"></i>
							<h4>FEATURE 3</h4>
							<p>Sit amet, consectetur adipiscing elit. In hac divisione rem ipsam prorsus probo elegantiam desidero. </p>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-12">
							<i class="fa fa-clock-o fa-3x" aria-hidden="true"></i>
							<h4>FEATURE 4</h4>
							<p>Sit amet, consectetur adipiscing elit. In hac divisione rem ipsam prorsus probo elegantiam desidero. </p>
						</div>
					</div>
					<div class="two">
						<div class="col-md-3 col-sm-6 col-xs-12">
							<i class="fa fa-leaf fa-3x" aria-hidden="true"></i>
							<h4>FEATURE 5</h4>
							<p>Sit amet, consectetur adipiscing elit. In hac divisione rem ipsam prorsus probo elegantiam desidero. </p>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-12">
							<i class="fa fa-terminal fa-3x" aria-hidden="true"></i>
							<h4>FEATURE 6</h4>
							<p>Sit amet, consectetur adipiscing elit. In hac divisione rem ipsam prorsus probo elegantiam desidero. </p>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-12">
							<i class="fa fa-shield fa-3x" aria-hidden="true"></i>
							<h4>FEATURE 7</h4>
							<p>Sit amet, consectetur adipiscing elit. In hac divisione rem ipsam prorsus probo elegantiam desidero. </p>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-12">
							<div class="star">
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
							</div>
							<h4>FEATURE 8</h4>
							<p>Sit amet, consectetur adipiscing elit. In hac divisione rem ipsam prorsus probo elegantiam desidero. </p>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section id="prices">
			<div class="container-fluid">
				<div class="container text-center">
					<div class="col-lg-5 col-md-12 col-sm-12 col-xs-12 animeLeft">
						<h2>GET LIVE UPDATES</h2>
						<span>No spam promise - only latest news and prices!</span>
					</div>
					<div class="animeRight">
						<div class="col-sm-1 col-md-1 hidden-lg hidden-xs"></div>
						<div class="col-lg-2 col-md-3 col-sm-3 col-xs-12 text-right">
							<input type="text" placeholder="Your name">
						</div>
						<div class="col-lg-3 col-md-5 col-sm-5 col-xs-12">
							<input style="width: 100%;" type="text" placeholder="your@email.com">
						</div>
						<div class="col-lg-2 col-md-2 col-sm-2 ">
							<button type="value"><a href="#">Subscribe</a></button>
						</div>
						<div class="col-sm-1 col-md-1 hidden-lg hidden-xs"></div>
					</div>
				</div>
			</div>
		</section>
		<section id="pricesTwo">
			<div class="container">
				<div class="animeUP">
					<div class="row text-center product ">
						<h2>PRODUCT <span>PACKAGES</span></h2>
						<div class="text">
							<p>Lorem ipsum dolor sit atmet sit dolor greand fdanrh s dfs sit atmet sit dolor greand fdanrh sdfs </p>
						</div>
					</div>
					<div class="row text-center columns">
						<div class="col-md-4 col-sm-4 disable" disabled="disabled">
							<div class="backgroundGray" disable="disable">
								<h4>Individual</h4>
								<div class="darkGray">
									<div class="costs">
										<i>$</i>
										<h2>19</h2>
									</div>
									<p>per month</p>
								</div>
								<div class="data">
									<ul>
										<li><strong>Fee</strong> Domain</li>
										<li><strong>Unlimited</strong> Website</li>
										<li><strong>Unlimited</strong> Bandwidth</li>
										<li><strong>Unlimited</strong> Disk Space</li>
									</ul>
									<button type="value"><a href="#">GET STARTED</a></button>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-4">
							<div class="backgroundGray">
								<h4>Studio</h4>
								<div class="darkGray">
									<div class="costs">
										<i>$</i>
										<h2>29</h2>
									</div>
									<p>subscription</p>
								</div>
								<div class="data">
									<ul>
										<li><strong>Fee</strong> Domain</li>
										<li><strong>Unlimited</strong> Website</li>
										<li><strong>Unlimited</strong> Bandwidth</li>
										<li><strong>Unlimited</strong> Disk Space</li>
									</ul>
									<button type="value"><a href="#">GET STARTED</a></button>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-4">
							<div class="backgroundGray">
								<h4>Enterprise</h4>
								<div class="darkGray">
									<div class="costs">
										<i>$</i>
										<h2>49</h2>
									</div>
									<p>per month</p>
								</div>
								<div class="data">
									<ul>
										<li><strong>Fee</strong> Domain</li>
										<li><strong>Unlimited</strong> Website</li>
										<li><strong>Unlimited</strong> Bandwidth</li>
										<li><strong>Unlimited</strong> Disk Space</li>
									</ul>
									<button type="value"><a href="#">GET STARTED</a></button>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row text-center product smallText">
					<h2><span>OUR</span> AWARDS</h2>
					<div class="text">
						<p>Lorem ipsum dolor sit atmet sit dolor greand fdanrh s dfs sit atmet sit dolor greand fdanrh sdfs </p>
					</div>
				</div>
			</div>
			<div class="backColor">
				<div class="container logo">
					<div class="col-md-12 text-center col-sm-12 col-xs-12">
						<img src="assets/images/logo-4.png">
						<img src="assets/images/logo-4.png">
						<img src="assets/images/logo-4.png">
						<img src="assets/images/logo-4.png">
						<img src="assets/images/logo-4.png">
					</div>
				</div>
			</div>
		</section>
		<section id="team">
			<div class="container-fluid">
				<div class="container">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
						<h2>WHAT <span>CLIENTS</span> SAY</h2>
					</div>
					<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 text-right">
						<i class="fa fa-quote-left fa-2x"></i>
					</div>
					<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 text-center">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec non bibendum metus. Aenean vel rutrum velit. Duisc rhoncus dolor consectetur vitae lorem ipsum.</p>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec non bibendum metus. Aenean vel rutrum velit. Duis aliquet augue non augue volutpat, ut viverra est sagittis. Duis elementum mi mauris, nec rhoncus dolor consectetur vitae lorem ipsum.</p>
						<p>Lorem ipsum dolor sit amet, consectetur aor consectetur vitae lorem ipsum.</p>
					</div>
					<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 text-left">
						<i class="i fa fa-quote-left fa-2x"></i>
					</div>
				</div>
			</div>
		</section>
		<section id="profile">
			<div class="container">
				<div class="profile">
					<div class="profilDate">
						<img src="assets/images/profile/profile-1.jpg">
						<div>
							<h5>JOHN DOESOME</h5>
							<p>Accountant at <span>Vell Inc.</span></p>
						</div>
					</div>
					<div class="profilDate">
						<img src="assets/images/profile/profile-2.jpg">
						<div>
							<h5>JOHN DOESOME</h5>
							<p>Accountant at <span>Vell Inc.</span></p>
						</div>
					</div>
					<div class="profilDate">
						<img src="assets/images/profile/profile-1.jpg">
						<div>
							<h5>JOHN DOESOME</h5>
							<p>Accountant at <span>Vell Inc.</span></p>
						</div>
					</div>
					<div class="clearFix"></div>
				</div>
				<div class="row behind">
					<div class="col-md-12 text-center">
						<h2>BEHIND <span>THE</span> SCENES</h2>
						<div class="footerParagraph">
							<p>Lorem ipsum dolor sit atmet sit dolor greand fdanrh s dfs sit atmet sit dolor greand fdanrh sdfs </p>
						</div>
						<div class="footerP">
							<p>In his igitur partibus duabus nihil erat, quod Zeno commuta rest gestiret. Sed virtutem ipsam inchoavit, nihil ampliusuma. Scien tiam pollicentur, quam non erat mirum sapientiae lorem cupido patria esse cariorem. Quae qui non vident, nihilamane umquam magnum ac cognitione. In his rest gestiret. Sed ipsam inchoavit, nihil ampliusuma. Scien tiam pollicentur, quam non erat mirum sapientiae lorem cupido patria esse cariorem. Quae qui non vident, nihilamane umquam magnum ac cognitione.</p>
						</div>
					</div>
				</div>
				<div class="people">
					<div class="row text-center">
						<div class="col-md-3 col-sm-3 col-xs-6 opacity">
							<div>
								<img src="assets/images/people/team-1.jpg" class="img-responsive">
								<p>Mike has worked with CARE USA, for 12 years holding positions such as Deputy Country Director to Director of Programs and Information Systems.</p>
								<div class="icons">
									<div>
										<i class="fa fa-envelope-o" aria-hidden="true"></i>
									</div>
									<div>
										<i class="fa fa-twitter" aria-hidden="true"></i>
									</div>
									<div>
										<i class="fa fa-facebook" aria-hidden="true"></i>
									</div>
									<div>
										<i class="fa fa-skype" aria-hidden="true"></i>
									</div>
									<div>
										<i class="fa fa-linkedin" aria-hidden="true"></i>
									</div>
								</div>
							</div>
							<h5>Mike Bolder</h5>
							<ul>Developer</ul>
						</div>
						<div class="col-md-3 col-sm-3 col-xs-6 opacity">
							<div>
								<img src="assets/images/people/team-2.jpg" class="img-responsive">
								<p>Mike has worked with CARE USA, for 12 years holding positions such as Deputy Country Director to Director of Programs and Information Systems.</p>
								<div class="icons">
									<div>
										<i class="fa fa-skype" aria-hidden="true"></i>
									</div>
								</div>
							</div>
							<h5>Mike Bolder</h5>
							<ul>Developer</ul>
						</div>
						<div class="col-md-3 col-sm-3 col-xs-6 opacity">
							<div>
								<img src="assets/images/people/team-3.jpg" class="img-responsive">
								<p class="pd">Ellen has over 13 years of experience in development projects as a senior consultant and project manager in the areas of project management, fund and board development, strategic & financial planning, monitoring & evaluation.</p>
								<div class="icons">
									<div>
										<i class="fa fa-envelope-o" aria-hidden="true"></i>
									</div>
									<div>
										<i class="fa fa-twitter" aria-hidden="true"></i>
									</div>
								</div>
							</div>
							<h5>Mike Bolder</h5>
							<ul>Developer</ul>
						</div>
						<div class="col-md-3 col-sm-3 col-xs-6 opacity">
							<div>
								<img src="assets/images/people/team-4.jpg" class="img-responsive">
								<p class="pp">Mike has worked with CARE USA for 12 years.</p>
								<div class="icons">
									<div>
										<i class="fa fa-envelope-o" aria-hidden="true"></i>
									</div>
									<div>
										<i class="fa fa-twitter" aria-hidden="true"></i>
									</div>
									<div>
										<i class="fa fa-facebook" aria-hidden="true"></i>
									</div>
									<div>
										<i class="fa fa-skype" aria-hidden="true"></i>
									</div>
								</div>
							</div>
							<h5>Mike Bolder</h5>
							<ul>Developer</ul>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section id="contacts">
			<div class="container-fluid">
				<div class="container">
					<div class="col-lg-1 col-md-12 col-sm-12 col-xs-12 text-center">
						<i class="fa fa-gavel fa-4x" aria-hidden="true"></i>
					</div>
					<div class="col-lg-8 col-md-12 col-sm-12 col-xs-12 text-center">
						<h2>LAUNCH YOUR STARTUP NOW!</h2>
						<p>In his igitur partibus duabus nihil erat, quod Zeno commuta rest gestiret.</p>
					</div>
					<div class="col-lg-3 col-md-12 col-sm-12 col-xs-12 text-center">
						<button type="submit"><a href="#">Get this template</a></button>
					</div>
				</div>
			</div>
		</section>

		<section id="footer">
			<div class="container">
				<div class="row">
					<div class="col-md-5 col-sm-5 col-xs-12">
						<img src="assets/images/logo/logo2.png" class="img-responsive">
						<div class="pTags">
							<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco. Qui officia deserunt mollit anim id est laborum. Ut enim ad minim veniam, quis nostrud exercitation ullamco. Nisi ut aliquid ex ea commodi consequatur?</p>
							<span>John Doeson, Founder.</span>
						</div>
					</div>
					<div class="col-md-4 col-sm-4 col-xs-12 text-center">
						<h4>Social Networks</h4>
						<div>
							<i class="fa fa-facebook" aria-hidden="true"></i>
							<i class="fa fa-skype" aria-hidden="true"></i>
							<i class="fa fa-google-plus" aria-hidden="true"></i>
							<i class="fa fa-pinterest-p" aria-hidden="true"></i>
						</div>
						<div>
							<i class="fa fa-twitter" aria-hidden="true"></i>
							<i class="fa fa-google-plus" aria-hidden="true"></i>
							<i class="fa fa-skype" aria-hidden="true"></i>
							<i class="fa fa-facebook" aria-hidden="true"></i>
						</div>
					</div>
					<div class="col-md-3 col-sm-3 col-xs-12">
						<h4>Our Contacts</h4>
						<div>
							<i class="fa fa-envelope" aria-hidden="true"></i>&nbsp; <a href="#">info@startup.ly</a>
						</div>
						<div>
							<i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp; <span>2901 Marmora road, Glassgow, Seattle, WA 98122-1090</span>
						</div>
						<div>
							<i class="fa fa-phone" aria-hidden="true"></i>&nbsp; <span>1 - 234-456-7980</span>
						</div>
					</div>
					<div class="col-md-12 col-sm-12 col-xs-12">
						<h2>startup.ly 2016. All rights reserved.</h2>
					</div>
				</div>
			</div>
		</section>
		
		
		<script src="assets/js/jquery-3.1.0.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script src="assets/js/main.js"></script>
	</body>
</html>