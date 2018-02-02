	  	<?php


include "../../NepdevSetting/config.php";
							$productid = $_GET['productid'];
							$SingleProDisplay = $NepdevG->NepdevSingleProduct($productid);
							$DisplaySingleProductInfo = $SingleProDisplay->fetch_assoc();

  $product_id = $_GET['productid'];
  $UserEmailCart = $_SESSION['userlogin'];

if(isset($_POST['addtomybag']))
{
    
  
    $successcart = $NepdevG->NepdevUserCartAdd($UserEmailCart,$product_id);
   
 
    if($successcart==true)
    {
         //  echo "<script>alert('Success');</script>";
        echo "<script>window.location='Home.php?NepdevAdmin=NepdevViewGuitar';</script>";
    }
    else
    {
     
    echo "<script>alert('unsuccess');</script>";
    }
    
}
							?>	

<form method="post">
<div class="content">
<div class="women_main">
	<!-- start content -->
			<div class="row single">
				<div class="det">
				  <div class="single_left">
					<div class="grid images_3_of_2">
						<img src="../../meadmin/web/pro_img/<?php echo $DisplaySingleProductInfo['ProductImage'] ?>" class="img-responsive">
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
               
				<div class="item_add"><span class="item_price">
                    
                    <input type="submit" value="Add To Bag" name="addtomybag">
                    </span></div>
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

    </div> </form>
			<?php 


