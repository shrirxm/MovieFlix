


// $username=$_POST['name'];
// $email=$_POST['email'];
// $no=$_POST['no'];
// $password=$_POST['password'];

// $con=new mysqli_connect('localhost','root','','recruitme');

// if($con->connect_error){
//     die("connection failed : ".$con->connect_error);
// }
// else{
//     $stmt=$con->prepare("insert into `recruitme`(`name`, `email`, `no`, `password`) values( ?,?,?,?)");
//     $stmt->bind_param("ssis",$username,$email,$no,$password);
//     $exe=$stmt->execute();
//     echo $exe;
//     echo "Registration successful";
//     $stmt->close();
//     $con->close();  
// }

<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '','recruitme');

// get the post records
$name = $_POST['name'];
$email = $_POST['email'];
$no= $_POST['no'];
$pass = $_POST['password'];

// database insert SQL code
$sql = "INSERT INTO `register` (`name`, `email`, `no`, `password`) VALUES ( '$name', '$email', '$no', '$pass')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Contact Records Inserted";
}

?>
