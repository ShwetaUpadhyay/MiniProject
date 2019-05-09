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


	$query="select * from register where username= '$uname' && password='$password' ";
	$result=mysqli_query($con,$query);

	$num=mysqli_num_rows($result);

	if($num==1){
		$_SESSION['username']=$uname;
		header('location:home.html');
	}
	else{
		echo "access denied";
		header('location:login.html');
	}

 ?>