<?php 

 class NepdevGuitar{
	 public $Server = "localhost";
	 public $User = "root";
	 public $Pass = "";
	 public $Dbname = "nepdevguitar";
	 public $NepdevConnect;
	 
	 public function __construct()
	 {
		 $this->NepdevConnect = new mysqli($this->Server,$this->User,$this->Pass,$this->Dbname);
		 if($this->NepdevConnect->connect_error)
		 {
			 die("Error Connection Database");
		 }
	 }
	 ////////\\\\\\\\\\\\\ Check Admin Login ////////////\\\\\\\\\\\\\\\
	 public function NepdevAdminCheck($NepdevUsername,$NepdevPassword)
	 {
		 $NepDevAdminSel = "SELECT * FROM Admin where username='$NepdevUsername' AND password='$NepdevPassword'";
		 $NepdevAdminRun = $this->NepdevConnect->query($NepDevAdminSel);
		 $NepdevAdminCount = $NepdevAdminRun->num_rows;
		 return $NepdevAdminCount;
	 }
	  ////////\\\\\\\\\\\\\ End Check Admin Login ////////////\\\\\\\\\\\\\\\
	 
	  ////////\\\\\\\\\\\\\ Add Brands ////////////\\\\\\\\\\\\\\\
	  public function NepdevAddBrand($brandname)
	  {
		  $NepdevBrandSel = "Select * from brand where BrandName='$brandname'";
		  $NepdevBrandSelRun =  $this->NepdevConnect->query($NepdevBrandSel);
		  $NepdevAdminBrandCount = $NepdevBrandSelRun->num_rows;
		  if($NepdevAdminBrandCount<1)
		  {
		  $NepdevAdminAddBrand = "INSERT INTO brand(BrandName) values('$brandname')";
		  $NepdevAdminAddBrandRun =  $this->NepdevConnect->query($NepdevAdminAddBrand);
			  return $NepdevAdminAddBrandRun;
		  }
		  else
		  {
			  echo "<script>alert('You Have Already Add This Brand $brandname');</script>";
		  }
		  
	  }
	 ////////\\\\\\\\\\\\\End Add Brands ////////////\\\\\\\\\\\\\\\
	 
	 /////////////\\\\\\\\\\\\Display Brand ///////////////\\\\\\\\\\\\\
	 public function NepdevDisplayBrand()
	 {
		 $NepdevDisplayBrands = "SELECT * FROM brand";
		 $NepdevDisplayBrandRun = $this->NepdevConnect->query($NepdevDisplayBrands);
		 return $NepdevDisplayBrandRun;
	 }
	 /////////////\\\\\\\\\\\\End Display Brand ///////////////\\\\\\\\\\\\\
	 
	 ////////////\\\\\\\\\\\\\\\\\\\ Add Category /////////////\\\\\\\\\\\\\\\\\\\\\\\\\
	public function NepdevAddCat($NewCatName)
	{
		 $NepdevAdminSelCat = "SELECT * FROM category where GuitarCategory='$NewCatName'";
	 $NepdevAdminSelCatRun = $this->NepdevConnect->query($NepdevAdminSelCat);
	 $NepdevCountCat = $NepdevAdminSelCatRun->num_rows;
		if($NepdevCountCat<1)
		{
			$NepDevInsertCat = "INSERT INTO category(GuitarCategory) values('$NewCatName')";
			$NepdevInsCatRun = $this->NepdevConnect->query($NepDevInsertCat);
			
			return $NepdevInsCatRun;
		}
		else
		{
			echo "<script>alert('You Have Already Added');</script>";
		}
		
	}
	  ////////////\\\\\\\\\\\\\\\\\\\End Add Category /////////////\\\\\\\\\\\\\\\\\\\\\\\\\
	 
	 ////////////////\\\\\\\\\\\\\\Display Category /////////////////////\\\\\\\\\\\\\\\\\\\\
      public function NepdevDisCat()
	  {
		  	 $NepdevSelCat = "SELECT * FROM category";
	 $NepdevSelCatRun = $this->NepdevConnect->query($NepdevSelCat);
	 return $NepdevSelCatRun;
	  }
 	 ////////////////\\\\\\\\\\\\\\Display Category /////////////////////\\\\\\\\\\\\\\\\\\\\
	 
	 //////////////\\\\\\\\\\\\\\\\\\ ADD GUITAR ////////////////////////////\\\\\\\\\\\\\\\\\\\\\\
	 public function NepdevAddGuitar($GuitarName,$GuitarPrice,$GuitarOverview,$GuitarCategory,$GuitarBrand,$ProductImage)
	 {
		 $NepdevAddGuitarIns = "INSERT INTO add_guitar(GuitarName,GuitarPrice,GuitarOverview,GuitarCategory,GuitarBrand,ProductImage) values('$GuitarName','$GuitarPrice','$GuitarOverview','$GuitarCategory','$GuitarBrand','$ProductImage')";
		 $NepdevAddGuitarRun = $this->NepdevConnect->query($NepdevAddGuitarIns);
		 return $NepdevAddGuitarRun;
		 
	 }
	 //////////////\\\\\\\\\\\\\\\\\\ END ADD GUITAR ////////////////////////////\\\\\\\\\\\\\\\\\\\\\\
	 
	 ////////// view guitar brand categegory or all products ////////\\\\\\\\\\\\
	 public function NepdevMyGuitarBrand()
	 {
		 $NepdevMyGuitarSel = "SELECT * FROM brand";
		 $NepdevMyGuitarSelRun = $this->NepdevConnect->query($NepdevMyGuitarSel);
		 return $NepdevMyGuitarSelRun;
	 }
	 public function NepdevMyGuitarCat()
	 {
		 $NepdevMyGuitarCatSel = "SELECT * FROM category";
		 $NepdevMyGuitarCatSelRun = $this->NepdevConnect->query($NepdevMyGuitarCatSel);
		 return $NepdevMyGuitarCatSelRun;
	 }
	 public function NepdevGuitarInfo()
	 {
		 $NepdevGuitarSelAll = "SELECT * FROM add_guitar";
		 $NepdevGuitarSelAllRun = $this->NepdevConnect->query($NepdevGuitarSelAll);
		 return $NepdevGuitarSelAllRun;
	 }
	 
	 public function NepdevSingleProduct($Pid)
	 {
		 $NepdevSingleProductSel = "SELECT * FROM add_guitar where id='$Pid'";
		 $NepdevSingleProductSelRun = $this->NepdevConnect->query($NepdevSingleProductSel);
		 return $NepdevSingleProductSelRun;
	 }
	 public function NepdevProductImgSlider()
	 {
		 $NepdevProductImgSel = "SELECT id,ProductImage FROM add_guitar LIMIT 0,9";
		 $NepdevProductImgSelRun = $this->NepdevConnect->query($NepdevProductImgSel);
		 return $NepdevProductImgSelRun;
	 }
	 
	 public function NepdevSingleProductUpdate($NepdevUpGuitarName,$NepdevUpGuitarPrice,$NepdevUpGuitarOverview,$NepdevUpCategory,$NepdevUpBrand,$NepdevUpNewImg,$productid)
	 {
		$NepdevSingleProductUp = "UPDATE add_guitar SET GuitarName='$NepdevUpGuitarName',GuitarPrice='$NepdevUpGuitarPrice',GuitarOverview='$NepdevUpGuitarOverview',GuitarCategory='$NepdevUpCategory',GuitarBrand='$NepdevUpBrand',ProductImage='$NepdevUpNewImg' where id='$productid'";	 
		 $NepdevSingleProductUpRun = $this->NepdevConnect->query($NepdevSingleProductUp);
		 return $NepdevSingleProductUpRun;
		 
	 }
	 public function NepdevRemoveProduct($productid)
	 {
		 $NepdevDelProduct = "DELETE FROM add_guitar where id='$productid'";
		 $NepdevDelProductRun = $this->NepdevConnect->query($NepdevDelProduct);
		 return $NepdevDelProductRun;
	 }
	 
	 public function NepdevViewProductAsBrand($BrandName)
	 {
		 $NepdevViewProductBrandSel = "SELECT * FROM add_guitar where GuitarBrand='$BrandName'";
		 $NepdevViewProductBrandSelRun = $this->NepdevConnect->query($NepdevViewProductBrandSel);
		 return $NepdevViewProductBrandSelRun;
	 }
     
	 public function NepdevViewProductAsCat($SelectGuitarCategory)
	 {
		 $NepdevViewProductAsCatSel = "SELECT * FROM add_guitar where GuitarCategory='$SelectGuitarCategory'";
		 $NepdevViewProductAsCatSelRun = $this->NepdevConnect->query($NepdevViewProductAsCatSel);
		 return $NepdevViewProductAsCatSelRun;
	 }
     
     public function NepdevViewProDesc()
     {
         $NepdevProDescSel = "SELECT * FROM add_guitar order by GuitarPrice desc";
         $NepdevProDescSelRun = $this->NepdevConnect->query($NepdevProDescSel);
         return $NepdevProDescSelRun;
     }
     
     public function NepdevViewProAsc()
     {
         $NepdevProAscSel = "select * from add_guitar order by GuitarPrice asc";
         $NepdevProAscRun = $this->NepdevConnect->query($NepdevProAscSel);
         return $NepdevProAscRun;
     }
     public function NepdevViewProCat()
     {
       
          $NepdevProAscCatSel = "select * from add_guitar order by GuitarCategory asc";
         $NepdevProAscCatRun = $this->NepdevConnect->query($NepdevProAscCatSel);
         return $NepdevProAscCatRun;
         
     }
     
     public function NepdevViewProBrand()
     {
         $NepdevProBrandSel = "select * from add_guitar order by GuitarBrand asc";
         $NepdevProBrandRun =$this->NepdevConnect->query($NepdevProBrandSel);
         return $NepdevProBrandRun;
     }
  
////////////\\\\\\\\\\\\\\\\\UserSignup ////////////////\\\\\\\\\\\\\\\\
	 public function NepdevNewUser($MeuserFname,$MeuserLname,$MeuserEmail,$MeuserGender,$MeuserPassword)
	 {
		 $NepdevNewCheckUser= "SELECT * from user_signup where email='$MeuserEmail'";
		 $NepdevNewCheckUserRun = $this->NepdevConnect->query($NepdevNewCheckUser);
		 $NepdevUserEmailCheck = $NepdevNewCheckUserRun->num_rows;
		 if($NepdevUserEmailCheck<1)
		 {
			 $NepdevNewUserInsert = "INSERT INTO user_signup(fname,lname,email,gender,password) VALUES('$MeuserFname','$MeuserLname','$MeuserEmail','$MeuserGender','$MeuserPassword')";
			 $NepdevNewUserInsertRun = $this->NepdevConnect->query($NepdevNewUserInsert);
			 return $NepdevNewUserInsertRun;
		 }
	 }
	 ///////////////////////\\\\\\\\\\\\\\\\\\\\ usersignup end ////////////\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
	 ///////////////////////\\\\\\\\\\\\\\\\\\\\userlogin check ///////////////////////\\\\\\\\\\\\\\\\\\\\\\
	 public function NepdevUserLogin($MeuserLoginEmail,$MeuserLoginPassword)
	 {
		 $NepdevUserLoginCheck ="SELECT * FROM user_signup where email='$MeuserLoginEmail' AND password='$MeuserLoginPassword'";
		 $NepdevUserLoginCheckRun = $this->NepdevConnect->query($NepdevUserLoginCheck);
         $NepdevUserLoginCount = $NepdevUserLoginCheckRun->num_rows;
		 return $NepdevUserLoginCount;
	 }
     
     //////////////////////\\\\\\\\\\\\\\\\\\Add to cart ///////////////////\\\\\\\\\\\\\\\\\\\\\\\
     public function NepdevUserCartAdd($UserEmailCart,$product_id,$ProQty)
     {
 $NepdevUserCartAddCheck = "select * from carts where user_email='$UserEmailCart' and product_id='$product_id',proqty='$ProQty'";
         $NepdevUserCartAddCheckRun = $this->NepdevConnect->query($NepdevUserCartAddCheck);
         $NepdevUserCartAddCount = $NepdevUserCartAddCheckRun->num_rows;
     
         if($NepdevUserCartAddCount<1)
         {
     $NepdevUserCartAdd = "INSERT INTO carts(user_email,product_id,proqty) values('$UserEmailCart','$product_id','$ProQty')";
     $NepdevUserCartAddRun = $this->NepdevConnect->query($NepdevUserCartAdd); 
          return $NepdevUserCartAddRun;
                
     }
         else
         {
             echo "<script>alert('You Have Already Added This Product In You Bag');</script>";
         }
         return $NepdevUserCartAddCount;
 }
     
 }

$NepdevG = new NepdevGuitar;

