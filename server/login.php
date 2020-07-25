<?php
if (isset($_POST)) {
	$email=$_POST["email"];
	$password=$_POST["password"];

	

	$conn=mysqli_connect("localhost","root","","chatapp");
	if ($conn) {
		$save=mysqli_query($conn,"SELECT email FROM users WHERE email='$email' AND password='$password'"); 
		if ($save) {
			echo "<script>alert('Login sucssesfully');window.location='http://localhost/ChatApp/'</script>";
		}
		else{
			echo "Wrong Email or Password";
		}
	}
	else{
		die(mysqli_connect_error());
	}

}
else{
	echo "not ok";
}

?>