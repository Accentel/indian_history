<?php include("connection.php");
if(isset($_POST['sublll'])){

	 $title=$_POST['title'];	
	  $iname = $_FILES['image']['name'];

	  if($iname!= ""){
	 $code = md5(rand());
	 $iname =$code. $_FILES['image']['name'];
	$tmp = $_FILES['image']['tmp_name'];
	 $dir = "../upload/gallery";
		       $destination =  $dir . '/' . $iname;
		         move_uploaded_file($tmp, $destination);
	//move_uploaded_file($tmp,"../staff/" . $code.$_FILES["sfile"]["name"]);
	 $iname1 =$code. $_FILES['image']['name'];
	//$iname = $code.$_FILES["sfile"]["name"];
	$iname1 = ($iname1);
	}else{
	 $iname1 = ($img);
	}
	$sq=mysqli_query($link,"insert into gallery(image,desc1)values('$iname1','$title')");
	if($sq){
	print "<script>";
			print "alert('Sucessfully Saved');";
			print "self.location='gallery1.php';";
			print "</script>";
	} else {
		print "<script>";
			print "alert('Unable To Save');";
			print "self.location='gallery.php';";
			print "</script>";
		
	}
}

?>