<?php 
include "../../NepdevSetting/config.php";
if(isset($_POST['addbrand']))
{
	$brandname = strtoupper($_POST['brandname']);
	if($brandname=="")
	{
		echo "<script>alert('Write Brand Name And Then Press Add Brand Button');</script>";
	}else
	{
	$BrandAddSuccess = $NepdevG->NepdevAddBrand($brandname);
if($BrandAddSuccess==true)
{
	echo "<script>alert('Success Added New Brand $brandname');</script>";
	header("location:Home.php?NepdevAdmin=NepdevAddBrand");
}
} }
?>

<div class="widget-shadow " data-example-id="basic-forms">
	<div class="form-title">
		<h4>Add Brands</h4>
	</div>
	<div class="form-body">
		<form class="form-horizontal" method="post">
			<div class="form-group"> <label for="inputEmail3" class="col-sm-2 control-label"></label>
				<div class="col-sm-9"> <input type="text" class="form-control" id="inputEmail3" placeholder="Brand Name" name="brandname"> </div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10"> </div>
			</div>
			<div class="col-sm-offset-2"> <input type="submit" class="btn btn-default" value="Add Brand" name="addbrand"></div>
		</form>
	</div>
</div>


<div class="widget-shadow " data-example-id="basic-forms">
	<div class="form-title">
		<h4>View Brands</h4>
	</div>
	<div class="form-body">
		<div class="form-group">
			<label for="selector1" class="col-sm-2 control-label"></label>
			<div class="col-sm-8">

				<select name="selector1" id="selector1" class="form-control1">
										<?php 
											$BrandDis = $NepdevG->NepdevDisplayBrand();
													while($SuccessBrandDisplay=$BrandDis->fetch_assoc())
													{
													?>
												
													<option><?php echo $SuccessBrandDisplay['BrandName']; ?></option>
						                            <?php } ?>
												</select>

			</div>
		</div>
	</div>
</div>
