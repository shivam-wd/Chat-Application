<?php
if (isset($_POST)) {
	$name      = $_POST["name"];
	$email     = $_POST["email"];
	$password  = $_POST["password"];
	$rpassword = $_POST["rpassword"];
	$contact   = $_POST["contact"];

if ($password==$rpassword) {
	// require_once 'db.php';
	$conn=mysqli_connect("localhost","root","","chatapp");
	if ($conn) {
		$save=mysqli_query($conn,"INSERT INTO users (name,email,password,contact) VALUES ('$name','$email','$password','$contact')");
		if ($save) {
			echo "<script>alert('Data Saved');window.location='http://localhost/ChatApp/'</script>";
		}
		else{
			echo "Data Not Saved";
		}
	}
	else{
		die(mysqli_connect_error());
	}
}
else{
 echo "not ok";
}
	
}
?>