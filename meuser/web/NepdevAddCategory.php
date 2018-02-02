<?php 
   include "../../NepdevSetting/config.php";
	if(isset($_POST['AddNewCat']))
	{
		$NewCatName = ucwords($_POST['NewCatName']);
		if($NewCatName=="")
		{
			echo "<script>alert('Enter Category Name And Then Press Add Category Button');</script>";
		}
		else
		{
			$SuccessCatAdd = $NepdevG->NepdevAddCat($NewCatName);
			if($SuccessCatAdd==true)
			{
				echo "<script>alert('Success Added $NewCatName');</script>";
				
			}
		}
		
	}
?>
<div class="widget-shadow " data-example-id="basic-forms"> 
									<div class="form-title">
										<h4>Add Category</h4>
									</div>
									<div class="form-body">
										<form class="form-horizontal" method="post"> <div class="form-group"> <label for="inputEmail3" class="col-sm-2 control-label"></label> <div class="col-sm-9"> <input type="text" class="form-control" id="inputEmail3" placeholder="Add Category" name="NewCatName"> </div> </div> <div class="form-group"> <div class="col-sm-offset-2 col-sm-10"> </div> </div> <div class="col-sm-offset-2"> <input type="submit" class="btn btn-default" value="Add Category" name="AddNewCat"></div> </form> 
									</div>
								</div>

<div class="widget-shadow " data-example-id="basic-forms">
	<div class="form-title">
		<h4>View Category</h4>
	</div>
	<div class="form-body">
		<div class="form-group">
			<label for="selector1" class="col-sm-2 control-label"></label>
			<div class="col-sm-8">

				<select name="selector1" id="selector1" class="form-control1">
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
	</div>
</div>
