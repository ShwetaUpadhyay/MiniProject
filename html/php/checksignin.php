<?php
	session_start();
	$con=mysqli_connect("localhost","root");
	if($con){
		echo "connection successfull";
	}
	else{
		echo "no connection";
	}
	mysqli_select_db($con,'antwort');
	$uname=$_POST['uname'];
	$password=$_POST['password'];

	$query="select * from user where username= '$uname' && password='$password'";
	$result=mysqli_query($con,$query);
	$num=mysqli_num_rows($result);

	if($num==1){
		$_SESSION['username']=$uname;
		$_SESSION['logged'] = true;
		header('location:../../index.php');
	}
	else{
		echo "access denied";
		header('location:../signin.html');
	}
 ?>
