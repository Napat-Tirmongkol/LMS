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
    background-color: #4e73df;
    border: 0x ridge rgba(238, 238, 238, 0.13);
    border-radius: 0px;
    -moz-box-shadow: 0 -5px 10px 1px rgba(16, 16, 16, 0.57);
    -webkit-box-shadow: 0 -5px 10px 1px rgba(16, 16, 16, 0.57);
    box-shadow: 0 -5px 10px 1px rgba(16, 16, 16, 0.57);
    border-bottom: none;
    border-bottom-left-radius: initial;
    border-bottom-right-radius: initial;
    font-size: 15px;
    font-weight: 400;
    color: #fff;
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
    margin: 20px 0;
    color: #fff;
}p {
    font-size: 15px;
    font-weight: 400;
    letter-spacing: 2 px;
    margin: 40px 0;
    color: #fff;
}
h3 {
    font-size: 20px;
    font-weight: 400;
    letter-spacing: 2 px;
    margin: 20px 0;
    color: #fff;
}
h4 {
    font-size: 15px;
    font-weight: 400;
    letter-spacing: 2 px;
    margin: 20px 0;
    color: #fff;
}
select {
  appearance: none;
  /* safari */
  -webkit-appearance: none;
  /* other styles for aesthetics */
  width: 100%;
  text-shadow: white;
  font-size: 15px;
  padding: 0.675em 6em 0.675em 1em;
  background-color: #fff;
  border: 1px solid #caced1;
  border-radius: 0.25rem;
  color: #fff;
  cursor: pointer;
}

</style>
	
<br><br><br><br><br>
	
	<div class="container">
    <h2>Medical Equipment Borrow/Return System </h2>

		<div class="register">
			<h2>ลงทะเบียน</h2>
			<form action="index.php" method="post">
				<input type="text" Name="Name" placeholder="ชื่อ-นามสกุล (Name)" required>
				<input type="text" Name="Email" placeholder="Email" required>
				<input type="text" Name="RollNo" placeholder="Username" required="">
				<input type="password" Name="Password" placeholder="Password" required>
				<input type="text" Name="Rsuid" placeholder="รหัสนักศึกษา/รหัสบุคลากร" required>
				<input type="text" Name="PhoneNumber" placeholder="เบอร์โทรศัพท์" required>
				<input type="text" Name="Category" placeholder="สถานะภาพ" required>	
                <h4>หน่วยงาน/คณะ :</h4>
                <select name="Department" id="Department" style="background-color: dimgray; opacity:0.2;">
					<option value="วิทยาลัยแพทยศาสตร์">วิทยาลัยแพทยศาสตร์ </option>
					<option value="วิทยาลัยทันตแพทยศาสตร์ (Bilingual)">วิทยาลัยทันตแพทยศาสตร์ (Bilingual)</option>
					<option value="วิทยาลัยเภสัชศาสตร์">วิทยาลัยเภสัชศาสตร์ </option>
					<option value="คณะพยาบาลศาสตร์">คณะพยาบาลศาสตร์ </option>
					<option value="คณะรังสีเทคนิค ">คณะรังสีเทคนิค </option>
					<option value="คณะเทคนิคการแพทย์ ">คณะเทคนิคการแพทย์ </option>
					<option value="คณะกายภาพบำบัดและเวชศาสตร์การกีฬา ">คณะกายภาพบำบัดและเวชศาสตร์การกีฬา </option>
					<option value="วิทยาลัยการแพทย์แผนตะวันออก">วิทยาลัยการแพทย์แผนตะวันออก </option>
					<option value="คณะวิทยาศาสตร์ ">คณะวิทยาศาสตร์ </option>
                    <option value="วิทยาลัยวิศวกรรมชีวการแพทย์ ">วิทยาลัยวิศวกรรมชีวการแพทย์ </option>
					<option value="คณะทัศนมาตรศาสตร์">คณะทัศนมาตรศาสตร์ </option>
					<option value="คณะเทคโนโลยีอาหาร ">คณะเทคโนโลยีอาหาร </option>
					<option value="คณะนวัตกรรมเกษตร ">คณะนวัตกรรมเกษตร </option>
					<option value="วิทยาลัยนวัตกรรมดิจิทัลเทคโนโลยี">วิทยาลัยนวัตกรรมดิจิทัลเทคโนโลยี </option>
					<option value="วิทยาลัยวิศวกรรมศาสตร์">วิทยาลัยวิศวกรรมศาสตร์ </option>
					<option value="สถาบันการบิน">สถาบันการบิน </option>
					<option value="วิทยาลัยการออกแบบ ">วิทยาลัยการออกแบบ </option>
					<option value="คณะดิจิทัลอาร์ต">คณะดิจิทัลอาร์ต </option>
					<option value="คณะสถาปัตยกรรมศาสตร์">คณะสถาปัตยกรรมศาสตร์ </option>
					<option value="คณะบัญชี">คณะบัญชี </option>
					<option value="คณะบริหารธุรกิจ">คณะบริหารธุรกิจ </option>
					<option value="สถาบันเศรษฐศาสตร์ ">สถาบันเศรษฐศาสตร์ </option>
					<option value="คณะศิลปศาสตร์ ">คณะศิลปศาสตร์ </option>
					<option value="วิทยาลัยนิเทศศาสตร์ ">วิทยาลัยนิเทศศาสตร์ </option>
					<option value="คณะนิติศาสตร์">คณะนิติศาสตร์ </option>
					<option value="วิทยาลัยการท่องเที่ยว การบริการ และกีฬา">วิทยาลัยการท่องเที่ยว การบริการ และกีฬา </option>
					<option value="วิทยาลัยนวัตกรรมสังคม">วิทยาลัยนวัตกรรมสังคม </option>
					<option value="สถาบันรัฐศาสตร์  ">สถาบันรัฐศาสตร์ </option>
					<option value="คณะอาชญาวิทยาและการบริหารงานยุติธรรม">คณะอาชญาวิทยาและการบริหารงานยุติธรรม </option>
					<option value="วิทยาลัยดนตรี ">วิทยาลัยดนตรี </option>
					<option value="International College">International College </option>
					<option value="INSTITUTE OF DIPLOMACY AND INTERNATIONAL STUDIES">INSTITUTE OF DIPLOMACY AND INTERNATIONAL STUDIES </option>
					<option value="INTERNATIONAL CHINESE COLLEGE">INTERNATIONAL CHINESE COLLEGE </option>
					<option value="อื่นๆ">อื่นๆ</option>
				</select>

				<br>
			
			
			<br>
			<div class="send-button">
			    <input type="submit" name="signup" value="Sign Up">
			    </form>
			</div>
			
			<div class="clear"></div>
		</div>

		<div class="clear"></div>

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