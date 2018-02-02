<?php 
include "../../NepdevSetting/config.php";
 $productid = $_GET['productid'];
		 	
		 $DelProSuccess = $NepdevG->NepdevRemoveProduct($productid);
		 if($DelProSuccess==true)
		 {
			 echo "<script>alert('Success Remove Product');</script>";
			 echo "<script>window.location='Home.php?NepdevAdmin=NepdevRemoveGuitar';</script>";
		 }
		 else
		 {
			 echo "<script>alert('Cant delete product');</script>";
		echo "<script>window.location='Home.php?NepdevAdmin=NepdevRemoveGuitar';</script>";
		 }
	 