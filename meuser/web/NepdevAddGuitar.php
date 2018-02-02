<?php 
//error_reporting(0);
include "../../NepdevSetting/config.php";
if(isset($_POST['AddGuitar']))
{
	$GuitarName = $_POST['GuitarName'];
	$GuitarPrice = $_POST['GuitarPrice'];
	$GuitarOverview = $_POST['GuitarOverview'];
	$GuitarCategory = $_POST['GuitarCategory'];
	$GuitarBrand = $_POST['GuitarBrand'];

	$ProductImage = $_FILES['ProductImage']['name'];
	move_uploaded_file($_FILES['ProductImage']['tmp_name'],"pro_img/".$ProductImage);
	if($GuitarName=="" AND $GuitarPrice=="" AND $GuitarOverview=="" AND $GuitarCategory=="" AND $GuitarBrand="" AND $ProductImage=="")
	{
		echo "<script>alert('Dont leave any field');</script>";
	}
	elseif($GuitarName=="")
	{
		echo "<script>alert('Please Enter Guitar Name');</script>";
	}
	elseif($GuitarPrice=="")
	{
		echo "<script>alert('Please Enter Guitar Price');</script>";
	}
	elseif($GuitarOverview=="")
	{
		echo "<script>alert('Please Enter Guitar Overview');</script>";
	}
	elseif($GuitarCategory=="")
	{
		echo "<script>alert('Please Select Guitar Category');</script>";
	}
	elseif($GuitarBrand=="")
	{
		echo "<script>alert('Please Select Guitar Brand');</script>";
	}
	elseif($ProductImage=="")
	{
		echo "<script>alert('Please Upload Product Image');</script>";
	}
	else
	{
	$GuitarAddSuccess = $NepdevG->NepdevAddGuitar($GuitarName,$GuitarPrice,$GuitarOverview,$GuitarCategory,$GuitarBrand,$ProductImage);
	if($GuitarAddSuccess=="true")
	{
		echo "<script>alert('Success Added $GuitarName');</script>";
		echo "<script>window.location='Home.php?NepdevAdmin=NepdevAddGuitar';</script>";
	}
	else
	{
		echo "<script>alert('cant add $GuitarName reload your page once and try again if not fix then contact with developer');</script>";
	}
} }
?>	
<div class="panel panel-widget forms-panel">
						<div class="progressbar-heading general-heading">
							<h4>Add Guitar :</h4>
						</div>
						<div class="forms">
								<h3 class="title1"></h3>
								<div class="form-three widget-shadow">
									<form class="form-horizontal" method="post" enctype="multipart/form-data">
										<div class="form-group">
											<label for="focusedinput" class="col-sm-2 control-label">Guitar Name</label>
											<div class="col-sm-8">
												<input type="text" class="form-control1" id="focusedinput" placeholder="Guitar Name" name="GuitarName" value="<?php 
												if(isset($_POST['AddGuitar']))
												{
													echo $_POST['GuitarName'];
												}
												?>">
											</div>
										</div>
											<div class="form-group">
											<label for="focusedinput" class="col-sm-2 control-label">Price</label>
											<div class="col-sm-8">
												<input type="text" class="form-control1" id="focusedinput" placeholder="Price" name="GuitarPrice" value="<?php 
												if(isset($_POST['AddGuitar']))
												{
													echo $_POST['GuitarPrice'];
												}
												?>">
											</div>
										</div>
										<div class="form-group">
											<label for="txtarea1" class="col-sm-2 control-label">Guitar Overview</label>
											<div class="col-sm-8"><textarea id="txtarea1" cols="120" rows="4" class="form-control1" placeholder="Guitar Overview" name="GuitarOverview" value="<?php 
												if(isset($_POST['AddGuitar']))
												{
													echo $_POST['GuitarOverview'];
												}
												?>"></textarea></div>
										</div>
										<div class="form-group">
											<label for="selector1" class="col-sm-2 control-label">Select Category</label>
											<div class="col-sm-8">
												<select name="GuitarCategory" id="selector1" class="form-control1" >
													<option value="<?php 
												if(isset($_POST['AddGuitar']))
												{
													echo $_POST['GuitarCategory'];
												}
												?>">
														<?php 
															if(isset($_POST['AddGuitar']))
												{
																if($_POST['GuitarCategory']=="")
																{
																	echo "Select Guitar Category";
																}
													echo $_POST['GuitarCategory'];
												} else{
														?>Select Guitar Category<?php } ?></option>
									<?php 
					
					$SuccessDisCats = $NepdevG->NepdevDisCat();
					while($DisplayCats = $SuccessDisCats->fetch_assoc())
					{
					?>
					<option><?php echo $DisplayCats['GuitarCategory']; ?></option>
				<?php } ?>
				</select>
											</div>
										</div>
									<div class="form-group">
											<label for="selector1" class="col-sm-2 control-label">Select Brand</label>
											<div class="col-sm-8">
												<select name="GuitarBrand" id="selector1" class="form-control1">
													<option value="<?php 
												if(isset($_POST['AddGuitar']))
												{
													echo $_POST['GuitarBrand'];
												}
												?>">
														<?php 
														if(isset($_POST['AddGuitar']))
												{
															if($_POST['GuitarBrand']=="")
															{
																echo "Select Guitar Brand";
															}
													echo $_POST['GuitarBrand'];
												} else{
														?>
														Select Guitar Brand <?php }?></option>
										<?php 
											$BrandDis = $NepdevG->NepdevDisplayBrand();
													while($SuccessBrandDisplay=$BrandDis->fetch_assoc())
													{
													?>
												
													<option value="<?php echo $SuccessBrandDisplay['BrandName']; ?>"><?php echo $SuccessBrandDisplay['BrandName']; ?></option>
						                            <?php } ?>
												</select>  </div>
										</div>	
										
											<div class="form-group">
											<label for="selector1" class="col-sm-2 control-label">Product Image</label>
											<div class="col-sm-8">
											
												<div class="form-group"> <input type="file" id="exampleInputFile" name="ProductImage" value="<?php 
												if(isset($_POST['AddGuitar']))
												{
													echo $_FILES['ProductImage']['name'];
												}
												?>">
										
												</div>

												</div>
										</div>
							
									<div class="form-group">
											<label for="selector1" class="col-sm-2 control-label"></label>
											<div class="col-sm-8">
										<input type="submit" class="w3ls-cart" value="Add Guitar" name="AddGuitar">			
										</div>
										</div>	
										
									</form>
								</div>
						</div>
					</div>


				