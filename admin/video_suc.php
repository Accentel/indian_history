<?php include("connection.php");
if(isset($_POST['sublll'])){

	$title=$_POST['title'];	
	$iname = $_POST['videolink'];

	$sq=mysqli_query($link,"insert into videos(name,videolink)values('$title','$iname')");
	if($sq){
	print "<script>";
			print "alert('Sucessfully Saved');";
			print "self.location='videos.php';";
			print "</script>";
	} else {
		print "<script>";
			print "alert('Unable To Save');";
			print "self.location='videos.php';";
			print "</script>";
		
	}
}

?>