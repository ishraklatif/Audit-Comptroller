<?php  
  include 'inc/header.php';
  
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title> </title>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- References -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
        <link rel="stylesheet" h href="css/style.css">

  </head>
  <body>


    <section class="my-5">
      <div class="py-5 ">
        <h3 class="text-center"> LOG IN </h3>
      </div>
<?php  
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $user = $_POST['USERNAME'];
        $pwd = $_POST['password1'];

        $query = "SELECT * FROM user_table WHERE username=:usr and password=:pwd ";
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
          echo "<span style='color:red;font-size:18px;'>Username or Password doesn't match</span>";
          // header('Location:login.php');
    }   
}

?>

      <div class="w-50 m-auto">
        <form action="login.php" method="post">
          <div class="form-group">
            <label> Username </label>
            <input type="text" name="USERNAME" autocomplete="off" class="form-control">
          </div>
          <div class="form-group">
            <label> Password </label>
            <input type="password" name="password1" autocomplete="off" class="form-control">
          </div>

          <button type="submit" class="btn btn-primary">Log In</button>
        </form>
        <form action="signup.php" method="post" class="p-10">
          <p> </p><p> </p>
          <p>If you dont have any account .Sign in here.</p>
          </form>
          <a href="signup.php"><button class="btn btn-success"> Register </button></a>
      </div>

<?php
    include 'inc/footer.php';
?>
