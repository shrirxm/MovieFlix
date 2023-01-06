<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '','recruitme');

// get the post records
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$birthday= $_POST['birthday'];
$gender = $_POST['gender'];
$number= $_POST['number'];
$address= $_POST['address'];
$state= $_POST['state'];
$deg=$_['deg'];
$dept=$_['dept'];
$cgpa=$_['cgpa'];
$x=$_['x'];
$xii=$_['xii'];
$skill=$_['skill'];
$domain=$_['domain'];

// database insert SQL code
$sql = "INSERT INTO 'profile' ('fname', 'lname', 'email', 'birthday', 'gender', 'number', 'address', 'state', 'deg', 'dept', 'cgpa', 'x', 'xii', 'skill', 'domain') VALUES ( '$fname','$lname' ,'$email', '$birthday', '$gender',  '$number', '$address', '$state', '$deg', '$dept', '$cgpa', '$x', '$xii', '$skill', '$domain')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Contact Records Inserted";
}

?>
