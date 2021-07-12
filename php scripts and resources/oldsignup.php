<?php  
  include 'inc/header.php';
  
?>
    

<?php  
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $user = $_POST['user'];
        $pwd = $_POST['password1'];
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

    <section class="my-5">
      <div class="py-5 ">
        <h3 class="text-center">Register</h3>
      </div>
      <div class="w-50 m-auto">

        <form action="signup.php" method="post">

          <div class="form-group">
            <label> Username </label>
            <input type="text" name="user" autocomplete="off" class="form-control">
          </div>

          <div class="form-group">
            <label> Email </label>
            <input type="text" name="email" autocomplete="off" class="form-control">
          </div>

          <div class="form-group">
            <label> Password </label>
            <input type="password" name="password1" autocomplete="off" class="form-control">
          </div>

         


          <button type="submit" class="btn btn-primary">Confirm </button>
        </form>
      </div>
    </section>









    <footer>
      <p class="p-3 bg-dark text-white text-center">© 2021 All rights reserved to DBMS group B3 </p>
    </footer>






  </body>
  </html>
