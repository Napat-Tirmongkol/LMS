<?php
require('dbconn.php');
include 'private/validity1.php';



?>


<!DOCTYPE html>
<html>

<!-- Head -->
<head>

	<title>Medical Equipment Borrow/Return System </title>

	<!-- Meta-Tags -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="keywords" content="Library Member Login Form Widget Responsive, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design" />
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!-- //Meta-Tags -->

	<!-- Style --> <link rel="stylesheet" href="css/style.css" type="text/css" media="all">

	<!-- Fonts -->
		<link href="//fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
	<!-- //Fonts -->

</head>

<!-- //Head -->

<!-- Body -->
<body>
<style>
body {
    font-family: 'Roboto', sans-serif;
    text-align: center;
    background: url("images/3.jpg");
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-position: center;
    background-size: cover;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
}

.container {
    width: 50%;
    margin: 0 auto;
    padding: 40px;
    background-color: #82CAFF;
    border: 0px ridge rgba(238, 238, 238, 0.13);
    border-radius: 0px;
    -moz-box-shadow: 0 -5px 10px 1px rgba(16, 16, 16, 0.57);
    -webkit-box-shadow: 0 -5px 10px 1px rgba(16, 16, 16, 0.57);
    box-shadow: 0 -5px 10px 1px rgba(16, 16, 16, 0.57);
    border-bottom: none;
    border-bottom-left-radius: initial;
    border-bottom-right-radius: initial;
} 


h1 {
    font-size: 35px;
    font-weight: 300;
    letter-spacing: 3 px;
    margin: 40px 0;
    color: #fff;
}

button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #36b9cc;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

.button1 {background-color: #4e73df;} /* Green */

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #4e73df;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}
h2 {
    font-size: 30px;
    font-weight: 400;
    letter-spacing: 2 px;
    margin: 40px 0;
    color: #2B60DE;
}p {
    font-size: 15px;
    font-weight: 400;
    letter-spacing: 2 px;
    margin: 40px 0;
    color: #fff;
}

</style>
	
<br><br><br><br><br><br>
	

	<div class="container">
	<div class="d-flex align-items-center justify-content-center" >
	<br>

	<h2>Medical Equipment Borrow/Return System </h2>
	<p>ระบบยืมและคืนเครื่องมือทางการแพทย์</p>
<br>
  <a href="signin.php"> <button>ลงชื่อเข้าใช้</button></a>

  <a href="register.php"><button class="button button1">ลงทะเบียน</button></a>
  </div>


	

	</div>

	<div class="footer w3layouts agileits">
		<p> &copy; 2023 RSU </a></p>
		
	</div>

<?php
if(isset($_POST['signin']))
{$u=$_POST['RollNo'];
 $p=$_POST['Password'];
 $c=$_POST['Category'];

 $sql="SELECT * from user where RollNo='$u'";

 $result = $conn->query($sql);
$row = $result->fetch_assoc();
$x=$row['Password'];
$y=$row['Type'];
if(strcasecmp($x,$p)==0 && !empty($u) && !empty($p))
  {//echo "Login Successful";
   $_SESSION['RollNo']=$u;
   
if ($y == 'Admin') {
	echo header("Location:admin/index.php");

}elseif($y=='librarian'){
echo header("Location:librarian/index.php");

}elseif ($y=='Student') {
	echo header("Location:student/index.php");

}else{
	echo header('Location:staff/index.php');
}
//   if($y=='Admin')
//   echo header("Location:admin/index.php");
// elseif ($y == 'librarian') {
// echo header("Location:librarian/index.php");

// }if ($y =='student') {
// 	echo header("Location:student/index.php");
// }
//   elseif (condition) {
//   	 echo	header("Location:staff/index.php");
//   }
 
        
  }
else 
 { echo "<script type='text/javascript'>alert('Failed to Login! Incorrect IDNo or Password')</script>";
}
   

}

if(isset($_POST['signup']))
{
	$name=$_POST['Name'];
	$email=$_POST['Email'];
	$password=$_POST['Password'];
	$mobno=$_POST['PhoneNumber'];
	$rollno=$_POST['RollNo'];
	$category=$_POST['Category'];
	$rsuid=$_POST['Rsuid'];
	$department=$_POST['Department'];
	$type='Student';

	$sql="insert into LMS.user (Name,Type,Category,Rsuid,Department,RollNo,EmailId,MobNo,Password) values ('$name','$type','$category','$rsuid','$department','$rollno','$email','$mobno','$password')";

	if ($conn->query($sql) === TRUE) {
echo "<script type='text/javascript'>alert('ลงทะเบียนสำเร็จ สามารถลงชื่อเข้าใช้ได้')</script>";
} else {
    //echo "Error: " . $sql . "<br>" . $conn->error;
	echo $sql;
echo "<script type='text/javascript'>alert('ลงทะเบียนไม่สำเร็จ')</script>";
}
}

?>

</body>
<!-- //Body -->

</html>
<?php 
// }
// else {
//     echo "<script type='text/javascript'>alert('System Expired')</script>";
// } 


?>