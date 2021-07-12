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
  $NAME = $_POST['name'];
  $DATE = $_POST['date'];
  $DTE = $_POST['wk_dir'];
  $COST = $_POST['cost'];
  $DETAILS = $_POST['details'];
  $END_DATE = $_POST['end_date'];
  // $WGROUP = $_POST['wgroup'];
  $STATUS = $_POST['status'];
  $WGROUP = implode(',', $_POST['wgroup']);
    $emp_names = '';
    $wemps = explode(",",$WGROUP);
    foreach ($wemps as $item) {
      $query1 = "SELECT * FROM employee_table WHERE id=$item";
      $stid1 = oci_parse($conn,$query1);
      oci_execute($stid1);
      $row1 = oci_fetch_array($stid1, OCI_RETURN_NULLS+OCI_ASSOC);
      $emp_names = $emp_names.' '.$row1["NAME"].' ';
    }
    $query = "insert into project_table(name, starting_date, estimated_cost, working_sup, details, ENDING_DATE, working_emps, status, emp_names )
    values('".$NAME."','".$DATE."','".$COST."','".$DTE."','".$DETAILS."','".$END_DATE."','".$WGROUP."','".$STATUS."' ,'".$emp_names."') ";
    $stid = oci_parse($conn,$query);
    $res = oci_execute($stid);
    $item='';
    if($res)
     {
        foreach ($wemps as $item) {
            $query = "UPDATE employee_table
                    SET
                    project = '$NAME',
                    status = 'Busy'
                    WHERE id=$item";
            $stid = oci_parse($conn,$query);
            $res1 = oci_execute($stid);
          }
         header('location:projectinfo.php');
     }
     else
     {
       echo "<span style='color:red;font-size:18px;'> Information Error </span>";
         header('location:addnewproject.php');
     }
    oci_close($conn);
}

?>

    <section class="my-5">
      <div class="py-5 ">
        <h3 class="text-center">Project Data</h3>
      </div>
      <div class="w-50 m-auto">
        <form action="" method="post">
          <div class="form-group">
            <label>Project Name</label>
            <input type="text" name="name" class="form-control">
          </div>
          <div class="form-group">
            <label>Starting date</label>
            <input type="date" name="date" class="form-control">
          </div>
          <div class="form-group">
            <label>Ending date</label>
            <input type="date" name="end_date" class="form-control">
          </div>
          <div class="form-group">
            <label>Estimated Cost</label>
            <input type="text" name="cost" class="form-control">
          </div>
          <div class="form-group">
            <label>Working Directorate</label>
            <input type="text" name="wk_dir" class="form-control">
          </div>
          <div class="form-group">
            <label>Details</label>
            <input type="text" name="details" class="form-control">
          </div>
         <!--  <div class="form-group">
            <label>Status</label>
            <input type="text" name="status" class="form-control">
          </div> -->
          <div class="form-group">
            <label>Assign Employee</label>
            <br>

          <select data-placeholder="Begin typing a name to filter..." multiple class="chosen-select" name="wgroup[]">
              <option value=""></option>
              <?php

                  $query = " SELECT * FROM employee_table WHERE status='Available' ";
                  $stid = oci_parse($conn,$query);
                  oci_execute($stid);
                  while($row = oci_fetch_array($stid, OCI_RETURN_NULLS+OCI_ASSOC)){
              ?>
                  <option value="<?php echo $row['ID']; ?>"><?php echo $row['NAME']."(".$row['EMAIL'].")"; ?></option>
                  <?php
              }
              ?>
          </select>




            <!-- <input type="text" name="wgroup" class="form-control"> -->
          </div>
          <button type="submit" class="btn btn-success">Submit</button>
          <a href="projectinfo.php" class="btn btn-danger">Back</a>
        </form>


<script type="text/javascript">
  $(".chosen-select").chosen({
  no_results_text: "Oops, nothing found!"
})

</script>








      </div>
    </section>



    <?php
      include 'inc/footer.php';
    ?>




  </body>
    </html>
