<?php
	session_start();
	$con=mysqli_connect('localhost','root');
	if($con){
		echo "connection successfull";
	}
	else{
		echo "no connection";
	}
	mysqli_select_db($con,'antwort');
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$uname=$_POST['uname'];
	$dob=$_POST['dob'];
	$city=$_POST['city'];
	$password=$_POST['password'];
	$confPass=$_POST['confPass'];

	echo "$uname and $password";

	$query="select * from register where username= '$uname' && password='$password' ";
	$result=mysqli_query($con,$query);

	$num=mysqli_num_rows($result);

	if($num==1){
		echo "duplicate data";
	}
	else{
		echo "Else part";
		$query2=" insert into register(firstname,lastname,username,dob,city,password)values('$fname','$lname',
		'$uname','$dob','$city','$password')";
			mysqli_query($con,$query2);
			echo "\n$query2";
	}

?>
