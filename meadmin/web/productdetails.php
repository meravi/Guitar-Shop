	  	<?php
							include "../../NepdevSetting/config.php";
							$productid = $_GET['productid'];
							$SingleProDisplay = $NepdevG->NepdevSingleProduct($productid);
							$DisplaySingleProductInfo = $SingleProDisplay->fetch_assoc();
							
							?>	
<div class="content">
<div class="women_main">
	<!-- start content -->
			<div class="row single">
				<div class="det">
				  <div class="single_left">
					<div class="grid images_3_of_2">
						<img src="pro_img/<?php echo $DisplaySingleProductInfo['ProductImage'] ?>" class="img-responsive">
						  </div>
				
				  <div class="desc1 span_3_of_2">
					<h3><?php echo $DisplaySingleProductInfo['GuitarName']; ?></h3>
					<span class="brand">Brand: <a href="#"><?php echo $DisplaySingleProductInfo['GuitarBrand']; ?></a></span>
					<br>
					  <span class="code">Product Category: <a href="#"><?php echo $DisplaySingleProductInfo['GuitarCategory']; ?></a></span>
					  <p><strong>Product Overview: </strong><?php echo $DisplaySingleProductInfo['GuitarOverview']; ?></p>
						<div class="price">
							<span class="text">Price:</span>
							<span class="price-new">Rs<?php echo $DisplaySingleProductInfo['GuitarPrice']; ?>.00</span><br>
						</div>
				
			   	 </div>
          	    <div class="clearfix"></div>
          	   </div>
          	    <div class="single-bottom1">
					<h6>Details</h6>
					<p class="prod-desc"><?php echo $DisplaySingleProductInfo['GuitarOverview']; ?></p>
				</div>
				       </div>		
	  </div>
	<!-- end content -->
</div>

</div>
			