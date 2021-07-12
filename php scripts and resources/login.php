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

<?php  
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $user = $_POST['email'];
        $pwd = $_POST['pass'];

        $query = "SELECT * FROM user_table WHERE email=:usr and password=:pwd ";
        $stid = oci_parse($conn, $query);

        oci_bind_by_name($stid, ':usr', $user);
        oci_bind_by_name($stid, ':pwd', $pwd);
        oci_execute($stid);

        $row = oci_fetch_array($stid, OCI_RETURN_NULLS+OCI_ASSOC);

      if ($row) {
          Session::set("login", true);
          Session::set("username", $row['USERNAME']);
          Session::set("userId", $row['ID']);
          Session::set("userEmail", $row['EMAIL']);
          oci_free_statement($stid);
          oci_close($con);
          if ($row['USERTYPE']=='cag'){
            header("Location:pending_updates.php");
          }else{
            header("Location:userinfo.php");
          }
      }
      else {
          echo "<span style='color:red;font-size:18px;'>Email or Password doesn't match</span>";
          // header('Location:login.php');
    }   
}

?>

    <title>Sign up and Sign in Form</title>
    <link rel="stylesheet" href="logsign2.css">
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">

          <form class="sign-up-form" action="" method="post">
            <h2 class="title">Sign in</h2>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="text" placeholder="Email" name="email">
            </div>

            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" name="pass">
            </div>
            <input type="submit" value="Log in" class="btn solid">
          </form>
          <form class="" action="index.php" method="">
          <button class="btn solid" id="back">Home</button>
        </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel right-panel">
          <div class="content">
            <h3>Dont have any?</h3>
            <p>Lets make a new one</p>
            <form class="" action="signup.php" method="">
            <button class="btn transperant" id="sign-in-btn">Register</button>
          </form>
          </div>
        </div>
      </div>
    </div>


    </script>
  </body>
</html>
