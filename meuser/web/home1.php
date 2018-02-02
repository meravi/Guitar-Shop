<?php 
include "../../NepdevSetting/config.php";
 $HomepageInfo =  $NepdevG->NepdevGuitarInfo();

$HomepageInfoCount = $HomepageInfo->num_rows;
$HomepageInfoFetch = $HomepageInfo->fetch_assoc();
$ProductImg = $NepdevG->NepdevProductImgSlider();
?>	
<div class="content">


					<!--//area-->
					<div class="col-md-5 skil">
						<div class="content-top-1">
							<div class="col-md-6 top-content">
								<h5>Total Product</h5>
								<label><?php echo $HomepageInfoCount; ?></label>
							</div>
							<div class="col-md-6 top-content1">
								<div id="demo-pie-1" class="pie-title-center" data-percent="25"> <span class="pie-value">25%</span> </div>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="content-top-1">
							<div class="col-md-6 top-content">
								<h5>Total Price</h5>
								<label>
							
								</label>
							</div>
							<div class="col-md-6 top-content1">
								<div id="demo-pie-2" class="pie-title-center" data-percent="50"> <span class="pie-value">50%</span> </div>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="content-top-1">
							<div class="col-md-6 top-content">
								<h5>Cards</h5>
								<label>3401</label>
							</div>
							<div class="col-md-6 top-content1">
								<div id="demo-pie-3" class="pie-title-center" data-percent="75"> <span class="pie-value">75%</span> </div>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
	
					<div class="col-md-7 mid-content-top">
						<div class="middle-content">
							<h3>Latest Products
							</h3>
							<!-- start content_slider -->
							<div id="owl-demo" class="owl-carousel text-center">
								<?php  
								
								while($ProductImgDisplay=$ProductImg->fetch_assoc())
								{
								?>
								<div class="item">
									<a href="Home.php?NepdevAdmin=productdetails&productid=<?php echo $ProductImgDisplay['id']; ?>"><img class="lazyOwl img-responsive" data-src="../../meadmin/web/pro_img/<?php echo $ProductImgDisplay['ProductImage']; ?>" alt="name"></a>
									
								</div>
								<?php }?>
								<div class="item">
									<img class="lazyOwl img-responsive" data-src="images/na1.jpg" alt="name">
								</div>
							
							</div>
						</div>
						<!--//sreen-gallery-cursual---->
						<!-- requried-jsfiles-for owl -->
						<link href="css/owl.carousel.css" rel="stylesheet">
						<script src="js/owl.carousel.js"></script>
						<script>
							$(document).ready(function() {
								$("#owl-demo").owlCarousel({
									items: 3,
									lazyLoad: true,
									autoPlay: true,
									pagination: true,
									nav: true,
								});
							});

						</script>
						<!-- //requried-jsfiles-for owl -->
					</div>
					<div class="clearfix"></div>

					<!--//area-->
						</div>
			