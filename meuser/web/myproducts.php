<div class="w_content">
<h2 align="center">My Products</h2>
		<!-- grids_of_4 -->
	<?php 
	
	$AllProductDisplay = $NepdevG->NepdevGuitarInfo();
	if($AllProductDisplay->num_rows>0)
	{

	?>
			<?php 
				while($DisplayProduct= $AllProductDisplay->fetch_assoc())
	{
			?>

		<div class="grids_of_4">
	
		  <div class="grid1_of_4">
				<div class="content_box"><a href="Home.php?NepdevAdmin=productdetails&productid=<?php echo $DisplayProduct['id']; ?>">
			   	   	 <img src="../../meadmin/web/pro_img/<?php echo $DisplayProduct['ProductImage']; ?>" class="img-responsive" alt="">
				   	  </a>
				    <h4><a href="details.html"><?php echo $DisplayProduct['GuitarName']; ?></a></h4>
					<a><?php echo $DisplayProduct['GuitarBrand']; ?></a> | 
					<a><?php echo $DisplayProduct['GuitarCategory']; ?></a>
					 <div class="grid_1 simpleCart_shelfItem">
				    
					 <div class="item_add"><span class="item_price"><h6>ONLY Rs.<?php echo $DisplayProduct['GuitarPrice']; ?></h6></span></div>
					<div class="item_add"><span class="item_price"><a href="Home.php?NepdevAdmin=productdetails&productid=<?php echo $DisplayProduct['id']; ?>">View More</a></span></div>
					 </div>
			   	</div>
			 
			</div>
			 <?php } ?>
		
		</div>
		  
	<br><br>
		<?php } 
	else
	{ ?>
	no thing to display add some product.	
<?php	}
	 ?>
		<!-- end grids_of_4 -->
		
		
	</div>
   <script>
$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
</script>