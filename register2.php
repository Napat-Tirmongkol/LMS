<?php
require('dbconn.php');
include 'private/validity1.php';



?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Medical Equipment Borrow/Return System </title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <style>
    .intro {
      height: 100%;
    }

    .gradient-custom {
      /* fallback for old browsers */
      background: #fa709a;

      /* Chrome 10-25, Safari 5.1-6 */
      background: -webkit-linear-gradient(to bottom right, rgba(250, 112, 154, 1), rgba(254, 225, 64, 1));

      /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
      background: linear-gradient(to bottom right, rgba(250, 112, 154, 1), rgba(254, 225, 64, 1))
    }

    /* Change dissabled Button color  */
    #submit:disabled {
      background-color: red;
      opacity: 0.5;
    }
  </style>

</head>

<body>
  <section class="intro">
    <div class="mask d-flex align-items-center h-100 gradient-custom">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-lg-9 col-xl-7">
            <div class="card">
              <div class="card-body p-4 p-md-5">
                <h3 class="mb-4 pb-2">Medical Equipment Borrow/Return System</h3>

                <form action="">

                  <div class="row">
                    <div class="col-md-6 mb-4">
                      <form action="index.php" method="post">
                        <div class="form-outline">
                          <input type="text" id="Name" class="form-control" />
                          <label class="form-label" for="Name">ชื่อ-นามสกุล (Name)</label>
                        </div>

                    </div>
                    <div class="col-md-6 mb-4">

                      <div class="form-outline">
                        <input type="text" id="Email" class="form-control" />
                        <label class="form-label" for="Email">Email</label>
                      </div>

                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-6 mb-4">

                      <div class="form-outline">

                        <span id="check-username"></span>
                        <input type="text" name="Username" id="Username" class="form-control"
                          onInput="checkUsername()" />
                        <label class="form-label" for="Username">Username</label>

                      </div>

                    </div>

                    <div class="col-md-6 mb-4">

                      <div class="form-outline">

                        <span id="check-username"></span>
                        <input type="text" name="Username" id="Username" class="form-control"
                          onInput="checkUsername()" />
                        <label class="form-label" for="Username">Username</label>

                      </div>
                      </div>
                      </div>

                      <div class="row">
                      <div class="col-md-6 mb-4">

                        <div class="form-outline">
                          <input type="text" id="Password" class="form-control" />
                          <label class="form-label" for="Password">Password</label>
                        </div>

                      </div>
                    
                  
                      <div class="col-md-6 mb-4">

                        <div class="form-outline">
                          <input type="tel" id="PhoneNumber" class="form-control" />
                          <label class="form-label" for="PhoneNumber">Phone Number</label>
                        </div>

                        </div>
                        </div>
                        <div class="row">
                      <div class="col-md-6 mb-4">

                        <div class="form-outline">
                          <input type="text" id="Password" class="form-control" />
                          <label class="form-label" for="Password">Password</label>
                        </div>

                      </div>


                        <div class="row">
                          <div class="col-12">

                            <h6 class="mb-3">About You</h6>

                            <textarea class="form-control" placeholder="Write more about yourself"></textarea>

                            <div class="mt-4">
                              <input class="btn btn-info btn-block btn-lg" id="submit" type="submit" value="Submit" />
                            </div>

                          </div>
                        </div>

                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <?php
    if (isset($_POST['signin'])) {
      $u = $_POST['RollNo'];
      $p = $_POST['Password'];
      $c = $_POST['Category'];

      $sql = "SELECT * from user where RollNo='$u'";

      $result = $conn->query($sql);
      $row = $result->fetch_assoc();
      $x = $row['Password'];
      $y = $row['Type'];
      if (strcasecmp($x, $p) == 0 && !empty($u) && !empty($p)) { //echo "Login Successful";
        $_SESSION['RollNo'] = $u;

        if ($y == 'Admin') {
          echo header("Location:admin/index.php");

        } elseif ($y == 'librarian') {
          echo header("Location:librarian/index.php");

        } elseif ($y == 'Student') {
          echo header("Location:student/index.php");

        } else {
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
    

      } else {
        echo "<script type='text/javascript'>alert('Failed to Login! Incorrect IDNo or Password')</script>";
      }


    }

    if (isset($_POST['signup'])) {
      $name = $_POST['Name'];
      $email = $_POST['Email'];
      $password = $_POST['Password'];
      $mobno = $_POST['PhoneNumber'];
      $rollno = $_POST['RollNo'];
      $category = $_POST['Category'];
      $rsuid = $_POST['Rsuid'];
      $department = $_POST['Department'];
      $type = 'Student';

      $sql = "insert into LMS.user (Name,Type,Category,Rsuid,Department,RollNo,EmailId,MobNo,Password) values ('$name','$type','$category','$rsuid','$department','$rollno','$email','$mobno','$password')";

      if ($conn->query($sql) === TRUE) {
        echo "<script type='text/javascript'>alert('ลงทะเบียนสำเร็จ สามารถลงชื่อเข้าใช้ได้')</script>";
      } else {
        //echo "Error: " . $sql . "<br>" . $conn->error;
        echo $sql;
        echo "<script type='text/javascript'>alert('ลงทะเบียนไม่สำเร็จ')</script>";
      }
    }

    ?>
  </section>


  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <script>
    function checkUsername() {

      jQuery.ajax({
        url: "check_availability.php",
        data: 'username=' + $("#username").val(),
        type: "POST",
        success: function (data) {
          $("#check-username").html(data);
        },
        error: function () { }
      });
    }


  </script>
</body>

</html>
<?php
// }
// else {
//     echo "<script type='text/javascript'>alert('System Expired')</script>";
// } 


?>