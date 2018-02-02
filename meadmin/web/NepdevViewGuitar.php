<?php 

 include "../../NepdevSetting/config.php";

?>		
<div class="panel panel-widget forms-panel">
						<div class="progressbar-heading general-heading">
							<h4>Select Brand,Category or View All Product</h4>
						</div>
						<div class="forms">
								<h3 class="title1"></h3>
								<div class="form-three widget-shadow">
									<form class="form-horizontal" method="post">
										<div class="form-group">
											<label for="selector1" class="col-sm-2 control-label">Select Guitar Brand</label>
											<div class="col-sm-8">
												<select name="SelectGuitar" id="selector1" class="form-control1">
												<option value="NoSelect">Select Guitar Brand Or Category</option>
												<option value="GuitarBrand">Guitar Brand</option>
												<option value="GuitarCategory">Guitar Category</option>
												<option value="ViewAllProducts">View All Products</option>
											</select></div>
										<div class="col-sm-4">
											</div>
										
										<div class="col-sm-6">
											<br>	
											<input type="submit" class="btn btn-default" name="viewproductinfo" value="View Now">
											</div>	
										</div>
										
										
									</form>
									<form class="form-horizontal" method="post">
									<?php 
									if(isset($_POST['viewproductinfo']))
									{
										// $SelectGuitar = $_POST['SelectGuitar'];
										switch($_POST['SelectGuitar'])
										{
											case "NoSelect" :
												{
													echo "<script>alert('Select Brand,Category or All Product And Then Press View Now Button');</script>";
													break;
												}
											case "GuitarBrand" :
												{
													?>
									<select name="SelectGuitarBrand" id="selector1" class="form-control1">
										<?php 
										$SelBrand = $NepdevG->NepdevMyGuitarBrand();
													while($SelBrandFetch = $SelBrand->fetch_assoc()){
													
										?>	
										<option value="<?php echo $SelBrandFetch['BrandName']; ?>">
											<?php echo $SelBrandFetch['BrandName']; ?> </option>
										<?php } ?>		
											</select>
									<br><br>
									<input type="submit" class="btn btn-default" name="viewasbrand" value="View As Brand">
												<?php 
													break;
												}
											case "GuitarCategory" :
												{
													?>
										<select name="SelectGuitarCategory" id="selector1" class="form-control1">
										<?php $SelCat = $NepdevG-> NepdevMyGuitarCat();
											while($SelCatFetch = $SelCat->fetch_assoc()){
												?>	
												<option value="<?php echo $SelCatFetch['GuitarCategory']; ?>"><?php echo $SelCatFetch['GuitarCategory']; ?></option>
												<?php } ?>
											</select>
									<br><br>
									<input type="submit" class="btn btn-default" value="View As Category" name="ViewAsCat">
									<?php 
													break;
												}
											case "ViewAllProducts" :
												{
													include "myproducts.php";
												?>
									<?php
												break;
										} }
									}
									
									?>
										</form>
						
								</div>
						</div>
			<?php 
									
	if(isset($_POST['viewasbrand']))
{
	$BrandName = $_POST['SelectGuitarBrand'];
		$SuccessBrandDisp = $NepdevG->NepdevViewProductAsBrand($BrandName);
		if($SuccessBrandDisp==true)
		{
			include "branddisplay.php";
		}
		else
		{
		echo "<script>alert('You Have selected $BrandName');</script>";
		}
}
	if(isset($_POST['ViewAsCat']))
	{
		$SelectGuitarCategory = $_POST['SelectGuitarCategory'];
		$successcat = $NepdevG->NepdevViewProductAsCat($SelectGuitarCategory);
		if($successcat==true)
		{
		 include "catdisplay.php";	
		}
		else
		{
			echo "nothing to display";
		}
	}
									?>
					</div>
	
			