	  	<?php
							include "../../NepdevSetting/config.php";
							$productid = $_GET['productid'];
							$SingleProDisplay = $NepdevG->NepdevSingleProduct($productid);
							$DisplaySingleProductInfo = $SingleProDisplay->fetch_assoc();
							if(isset($_POST['NepdevUpProduct']))
							{
								
								$NepdevUpNewImg = $_FILES['NepdevUpNewImg']['name'];
								if($NepdevUpNewImg!="")
								{
									$NepdevUpNewImg = $_FILES['NepdevUpNewImg']['name'];
									move_uploaded_file($_FILES['NepdevUpNewImg']['tmp_name'],"pro_img/".$NepdevUpNewImg);
								}
								else
								{
									$NepdevUpNewImg = $_POST['NepdevUpOldImg'];
								}
								$NepdevUpGuitarName = $_POST['NepdevUpGuitarName'];
								$NepdevUpCategory = $_POST['NepdevUpCategory'];
								$NepdevUpBrand = $_POST['NepdevUpBrand'];
								$NepdevUpGuitarPrice = $_POST['NepdevUpGuitarPrice'];
								$NepdevUpGuitarOverview = $_POST['NepdevUpGuitarOverview'];
								
								$successupdate = $NepdevG->NepdevSingleProductUpdate($NepdevUpGuitarName,$NepdevUpGuitarPrice,$NepdevUpGuitarOverview,$NepdevUpCategory,$NepdevUpBrand,$NepdevUpNewImg,$productid);
								if($successupdate==true)
								{
									echo "<script>window.location = 'Home.php?NepdevAdmin=productdetails&productid=$productid';</script>";
							
								}
								else
									
								{
									echo "<script>alert('Cant update');</script>";
								}
							}
							?>	
<div class="content">
<div class="women_main">
	<!-- start content -->
			<div class="row single">
				<form method="post" enctype="multipart/form-data" >
				<div class="det">
				  <div class="single_left">
					<div class="grid images_3_of_2">
						<span class="brand">Old Image:
						<img src="pro_img/<?php echo $DisplaySingleProductInfo['ProductImage'] ?>" class="img-responsive">
						<input type="hidden" value="<?php echo $DisplaySingleProductInfo['ProductImage'] ?>" name="NepdevUpOldImg">
						</span>
					<span class="brand">
						Chaneg Image:
						<input type="file" name="NepdevUpNewImg">
						</span>
						  </div>
				
				  <div class="desc1 span_3_of_2">
					  <span class="brand">Title:
					<h3><input type="text" name="NepdevUpGuitarName" value="<?php echo $DisplaySingleProductInfo['GuitarName']; ?>">
						</h3></span>
					<span class="brand">Category: 
							<select name="NepdevUpCategory" id="selector1" class="form-control1" >
								<option value="<?php echo $DisplaySingleProductInfo['GuitarCategory']; ?>"><?php echo $DisplaySingleProductInfo['GuitarCategory']; ?></option>								
									<?php 
					
					$SuccessDisCats = $NepdevG->NepdevDisCat();
					while($DisplayCats = $SuccessDisCats->fetch_assoc())
					{
					?>
					<option value="<?php echo $DisplayCats['GuitarCategory']; ?>"><?php echo $DisplayCats['GuitarCategory']; ?></option>
				<?php } ?>
				</select>
					</span>
					<br><br>
					  <span class="code">Brand: 
						  	<select name="NepdevUpBrand" id="selector1" class="form-control1">
										<option value="<?php echo $DisplaySingleProductInfo['GuitarBrand']; ?>"><?php echo $DisplaySingleProductInfo['GuitarBrand']; ?></option>	
										<?php 
											$BrandDis = $NepdevG->NepdevDisplayBrand();
													while($SuccessBrandDisplay=$BrandDis->fetch_assoc())
													{
													?>
												
													<option value="<?php echo $SuccessBrandDisplay['BrandName']; ?>"><?php echo $SuccessBrandDisplay['BrandName']; ?></option>
						                            <?php } ?>
												</select>
					 </span>
					  <p><strong>Product Overview: </strong>
						  <?php echo $DisplaySingleProductInfo['GuitarOverview']; ?>
						</p>
						<div class="price">
							<span class="text">Price:</span>
							<span class="price-new">
								Rs <input type="number" value="<?php echo $DisplaySingleProductInfo['GuitarPrice']; ?>" name="NepdevUpGuitarPrice">.00</span><br>
						</div>
				
			   	 </div>
          	    <div class="clearfix"></div>
          	   </div>
          	    <div class="single-bottom1">
					<h6>Edit Product Overview: </h6>
					<p class="prod-desc">
						<textarea name="NepdevUpGuitarOverview"><?php echo $DisplaySingleProductInfo['GuitarOverview']; ?></textarea>
						</p>
				</div>
					<input type="submit" name="NepdevUpProduct" value="Update <?php echo strtoupper($DisplaySingleProductInfo['GuitarName']); ?>">
				       </div>	
					</form>
	  </div>
	<!-- end content -->
</div>

</div>
			