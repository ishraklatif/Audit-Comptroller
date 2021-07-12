<?php
  include 'inc/header.php';
?>

<?php
    Session::checkSession();
    if (isset($_GET['action']) && $_GET['action'] == "logout") {
            Session::destroy();
        }
?>

<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

      $E_ID = $_POST['emp_id'];
      $NAME = $_POST['name'];
      $RANK = $_POST['rank'];
      $DTE = $_POST['directorate'];
      $MOB = $_POST['mobile'];
      $EMAIL = $_POST['email'];
      $BR = $_POST['branch'];
      $ADDS = $_POST['address'];
      $STATUS = $_POST['status'];
      $PROJECT = $_POST['project'];

    $query = "insert into employee_table (emp_id, name, rank, sup_id, mobile, email, branch, address, status, project)
    values('".$E_ID."', '".$NAME."', '".$RANK."', '".$DTE."', '".$MOB."', '".$EMAIL."', '".$BR."', '".$ADDS."', '".$STATUS."', '".$PROJECT."') ";

    echo "<h1>".$query."</h1>";

    $stid = oci_parse($conn,$query);
    echo "<h1>".$stid."</h1>";
    $res = oci_execute($stid);
    echo "<h1>".$res."</h1>";


    if($res)
     {
         header('location:userinfo.php');
     }
     else     {

        echo "<h1>There is a connection Error!!!</h1>";
     }

  oci_close($conn);
}

?>

    <section class="my-5">
      <div class="py-5 ">
        <h3 class="text-center">Employee Data</h3>
      </div>
      <div class="w-50 m-auto">
        <form action="" method="post">
          <div class="form-group">
            <label>Employee ID</label>
            <input type="text" name="emp_id"  class="form-control">
          </div>
          <div class="form-group">
            <label>Name</label>
            <input type="text" name="name" class="form-control">
          </div>
          <div class="form-group">
            <label>Rank</label>
            <input type="text" name="rank" class="form-control">
          </div>

          <div class="form-group">
            <label>Directorate</label>
            <input type="text" name="directorate" class="form-control">
          </div>
          <div class="form-group">
            <label>Mobile No</label>
            <input type="text" name="mobile" class="form-control">
          </div>
          <div class="form-group">
            <label>Email</label>
            <input type="text" name="email" class="form-control">
          </div>
          <div class="form-group">
            <label>Branch</label>
            <input type="text" name="branch" class="form-control">
          </div>
          <div class="form-group">
            <label>Address</label>
            <input type="text" name="address" class="form-control">
          </div>
          <div class="form-group">
            <!-- <label>Assigned Project</label> -->
            <input type="hidden" value="N/A" name="project" class="form-control">
          </div>
          <div class="form-group">
            <!-- <label>Status</label> -->
            <input type="hidden" value="Available" name="status" class="form-control">
          </div>

          <button type="submit" class="btn btn-success">Submit</button>
          <a href="userinfo.php" class="btn btn-danger">Back</a>
        </form>
      </div>
    </section>


    <?php
      include 'inc/footer.php';
    ?>

  </body>
    </html>
