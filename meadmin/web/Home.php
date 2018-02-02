<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE HTML>
<html>

<head>
	<title>a Ecommerce Admin Panel Category Flat Bootstrap Responsive Web Template | Home :: w3layouts</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Gretong Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript">
		addEventListener("load", function() {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}

	</script>
	<!-- Bootstrap Core CSS -->
	<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
	<!-- Custom CSS -->
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<!-- Graph CSS -->
	<link href="css/font-awesome.css" rel="stylesheet">
	<!-- jQuery -->
	<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css' />
	<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	<!-- lined-icons -->
	<link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
	<script src="js/amcharts.js"></script>
	<script src="js/serial.js"></script>
	<script src="js/light.js"></script>
	<!-- //lined-icons -->
	<script src="js/jquery-1.10.2.min.js"></script>
	<!--pie-chart--->
	<script src="js/pie-chart.js" type="text/javascript"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$('#demo-pie-1').pieChart({
				barColor: '#3bb2d0',
				trackColor: '#eee',
				lineCap: 'round',
				lineWidth: 8,
				onStep: function(from, to, percent) {
					$(this.element).find('.pie-value').text(Math.round(percent) + '%');
				}
			});

			$('#demo-pie-2').pieChart({
				barColor: '#fbb03b',
				trackColor: '#eee',
				lineCap: 'butt',
				lineWidth: 8,
				onStep: function(from, to, percent) {
					$(this.element).find('.pie-value').text(Math.round(percent) + '%');
				}
			});

			$('#demo-pie-3').pieChart({
				barColor: '#ed6498',
				trackColor: '#eee',
				lineCap: 'square',
				lineWidth: 8,
				onStep: function(from, to, percent) {
					$(this.element).find('.pie-value').text(Math.round(percent) + '%');
				}
			});


		});

	</script>
</head>

<body>
	<div class="page-container">
		<!--/content-inner-->
		<div class="left-content">
			<div class="inner-content">
				<!-- header-starts -->
				<div class="header-section">
					<!-- top_bg -->
					<div class="top_bg">

						<div class="header_top">
							<div class="top_right">
								<ul>
									<li><a href="contact.html">help</a></li>|
									<li><a href="contact.html">Contact</a></li>|
									<li><a href="checkout.html">Delivery information</a></li>
								</ul>
							</div>
							<div class="top_left">
								<h2><span></span> Call us : 032 2352 782</h2>
							</div>
							<div class="clearfix"> </div>
						</div>

					</div>
					<div class="clearfix"></div>
					<!-- /top_bg -->
				</div>
				<div class="header_bg">

					<div class="header">
						<div class="head-t">
							<div class="logo">
								<a href="index.html"><img src="images/logo.png" class="img-responsive" alt=""> </a>
							</div>
							<!-- start header_right -->
							<div class="header_right">
								<div class="rgt-bottom">

									<div class="clearfix"> </div>
								</div>
								<div class="search">
									<form>
										<input type="text" value="" placeholder="search...">
										<input type="submit" value="">
									</form>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>

				</div>
				<!-- //header-ends -->

				<!--content-->
				<?php
				
				$NepdevPage = "home1";
				if(isset($_GET['NepdevAdmin']))
				{
					$NepdevPage = $_GET['NepdevAdmin'];
				}
				include $NepdevPage.".php";
				
				
				?>
				<!--content-->
			</div>
		</div>
		<!--//content-inner-->
		<!--/sidebar-menu-->
		<div class="sidebar-menu">
			<header class="logo1">
				<a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a>
			</header>
			<div style="border-top:1px ridge rgba(255, 255, 255, 0.15)"></div>
			<div class="menu">
				<ul id="menu">
					<li><a href="Home.php"><i class="fa fa-tachometer"></i> <span>Home</span></a></li>
					<li id="menu-academico"><a href="#"><i class="fa fa-table"></i> <span>Add</span> <span class="fa fa-angle-right" style="float: right"></span></a>
						<ul id="menu-academico-sub">
							<li id="menu-academico-avaliacoes"><a href="Home.php?NepdevAdmin=NepdevAddGuitar">Add Guitars</a></li>
							<li id="menu-academico-avaliacoes"><a href="Home.php?NepdevAdmin=NepdevViewGuitar">View All Guitar</a></li>
							<li id="menu-academico-avaliacoes"><a href="Home.php?NepdevAdmin=NepdevAddCategory">Add Category</a></li>
							<li id="menu-academico-avaliacoes"><a href="Home.php?NepdevAdmin=NepdevAddBrand">Add Brand</a></li>
							<li id="menu-academico-avaliacoes"><a href="products.html">General Information</a></li>
							
						</ul>
					</li>
					<li id="menu-academico"><a href="#"><i class="fa fa-table"></i> <span>Update/Remove</span> <span class="fa fa-angle-right" style="float: right"></span></a>
						<ul id="menu-academico-sub">
							<li id="menu-academico-avaliacoes"><a href="Home.php?NepdevAdmin=NepdevUpdateGuitar">Update Guitars</a></li>
							<li id="menu-academico-avaliacoes"><a href="Home.php?NepdevAdmin=NepdevRemoveGuitar">Remove  Guitar</a></li>
							
						</ul>
					</li>
					<li id="menu-academico"><a href="#"><i class="fa fa-table"></i> <span> New Arrivals</span> <span class="fa fa-angle-right" style="float: right"></span></a>
						<ul id="menu-academico-sub">
							<li id="menu-academico-avaliacoes"><a href="shoes.html">Electro-acoustic Guitars</a></li>
							<li id="menu-academico-avaliacoes"><a href="products.html">Twelve-string Guitars</a></li>
							<li id="menu-academico-boletim"><a href="sunglasses.html">Archtop Guitars</a></li>
						</ul>
					</li>
				

				</ul>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
	<script>
		var toggle = true;

		$(".sidebar-icon").click(function() {
			if (toggle) {
				$(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
				$("#menu span").css({
					"position": "absolute"
				});
			} else {
				$(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
				setTimeout(function() {
					$("#menu span").css({
						"position": "relative"
					});
				}, 400);
			}

			toggle = !toggle;
		});

	</script>
	<!--js -->
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>
	<!-- Bootstrap Core JavaScript -->
	<script src="js/bootstrap.min.js"></script>
	<!-- /Bootstrap Core JavaScript -->
	<!-- real-time -->
	<script language="javascript" type="text/javascript" src="js/jquery.flot.js"></script>
<!-- /real-time -->
	<script src="js/jquery.fn.gantt.js"></script>
	<script src="js/menu_jquery.js"></script>
</body>

</html>
