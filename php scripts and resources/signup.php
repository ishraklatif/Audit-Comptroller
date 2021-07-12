<?php
  include 'lib/Session.php';
  Session::init();
  include 'lib/dbconnect.php';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="https://kit.fontawesome.com/64d58efce2.js"
  crossorigin="anonymous"></script>



  <title>Sign up and Sign in Form</title>
  <link rel="stylesheet" href="logsign2.css">
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">

          <form class="sign-up-form" action="" method="post">
            <h2 class="title">Register</h2>


            <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $user = $_POST['user'];
        $pwd = $_POST['pass'];
        $email = $_POST['email'];

        if (!$user || !$pwd || !$email){
           echo "<span style='color:red;font-size:18px;'>Fields must not be empty.</span>";
         }else{

          $query1 = "SELECT username FROM user_table WHERE username=:usr OR email=:email ";
          $stid_1 = oci_parse($conn, $query1);
          oci_bind_by_name($stid_1, ':usr', $user);
          oci_bind_by_name($stid_1, ':email', $email);

          $query2 = "INSERT INTO user_table (username, password, email) VALUES(:usr, :pwd, :email)";
          $stid_2 = oci_parse($conn, $query2);

          oci_bind_by_name($stid_2, ':usr', $user);
          oci_bind_by_name($stid_2, ':pwd', $pwd);
          oci_bind_by_name($stid_2, ':email', $email);

          oci_execute($stid_1);
          $row = oci_fetch_array($stid_1, OCI_ASSOC);

          if($row) {
            echo "<span style='color:red;font-size:18px;'>Username/Email already registered</span>";
          } else{
            $res = oci_execute($stid_2);
            if($res){
                 header('location:signupsuccess.php');
             }else{
              echo "<span style='color:red;font-size:18px;'>Please try again later</span>";
             }

          }
        }
}

?>

            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Username" name="user">
            </div>

            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" placeholder="Email" name='email'>
            </div>

            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" name='pass'>
            </div>
            <input type="submit" value="Register" class="btn solid">
          </form>
          <form class="" action="index.php" method="">
          <button class="btn solid" id="back">Home</button>
        </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel right-panel">
          <div class="content">
            <h3>Already Have one?</h3>
            <p>Lets find out who are working where</p>
            <form class="" action="login.php" method="">
            <button class="btn transperant" id="sign-in-btn">Sign In</button>
          </form>
          </div>
        </div>
      </div>
    </div>


    </script>
  </body>
</html>
