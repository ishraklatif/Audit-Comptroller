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
  if ( Session::get("login") == true ){
    $sessEmail = $_SESSION['userEmail'];
    $query = "SELECT * FROM user_table WHERE email='$sessEmail' ";
    $stid = oci_parse($conn, $query);
    oci_execute($stid);

    while ($row = oci_fetch_array($stid, OCI_RETURN_NULLS+OCI_ASSOC)) {
      $userRole = $row['USERTYPE'];
    }
  }
?>


    <div class="RightBox" >
      <br><br>
      <ul class="nav nav-tabs " id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
          <a class="nav-link active" id="ei-tab" data-bs-toggle="tab" href="userinfo.php" role="tab" aria-controls="ei" aria-selected="true">Employee Info</a>
        </li>
        <li class="nav-item" role="presentation">
          <a class="nav-link" id="pi-tab" data-bs-toggle="tab" href="projectinfo.php" role="tab" aria-controls="pi" aria-selected="false">Project Info</a>
        </li>
        <li class="nav-item" role="presentation">
          <a class="nav-link" id="pi-tab" data-bs-toggle="tab" href="search.php" role="tab" aria-controls="pi" aria-selected="false">Search Info</a>
        </li>
      </ul>

      <div class="tab-content" style="padding-left:2%; width: 98%;">
        <div class="tab-pane active" id="home" role="tabpanel" aria-labelledby="ei-tab">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th width="8%">Employee ID</th>
                                    <th width="10%">Name</th>
                                    <th width="7%">Rank</th>
                                    <th width="8%">Directorate</th>
                                    <th width="9%">Mobile No</th>
                                    <th width="8%">Email</th>
                                    <th width="8%">Branch</th>
                                    <th width="18%">Address</th>
                                    <th width="10%">Project Assigned</th>
                                    <th width="7%">status</th>
                                    <th width="12%">Action</th>
                                </tr>


                            </thead>

                            <tbody>
                                <?php
                                $query = "SELECT * FROM employee_table ORDER BY EMP_ID";
                                $stid = oci_parse($conn, $query);
                                oci_execute($stid);

                                while ($row = oci_fetch_array($stid, OCI_RETURN_NULLS+OCI_ASSOC)) {


                                ?>
                                <tr height="30px">

                                  <td> <?php echo $row["EMP_ID"]; ?></td>
                                  <td> <?php echo $row["NAME"]; ?></td>
                                  <td> <?php echo $row["RANK"]; ?></td>
                                  <td> <?php echo $row["SUP_ID"]; ?></td>
                                  <td> <?php echo $row["MOBILE"]; ?></td>
                                  <td> <?php echo $row["EMAIL"]; ?></td>
                                  <td> <?php echo $row["BRANCH"]; ?></td>
                                  <td> <?php echo $row["ADDRESS"]; ?></td>
                                  <td> <?php echo $row["PROJECT"]; ?></td>
                                  <td> <?php echo $row["STATUS"]; ?></td>
                                  <td>
                                      <a href="viewuser.php?viewuserid=<?php echo $row['ID']; ?>"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                      <?php if($userRole == 'dg'){ ?>
                                      <a href="edituser.php?edituserid=<?php echo $row['ID']; ?>"><i class="fa fa-edit"></i></a>

                                      <a href="deleteuser.php?deluserid=<?php echo $row['ID']; ?>" onclick="return confirm('Are you sure want to DELETE?');"><i class="fa fa-trash"></i></a>
                                      <?php } ?>
                                  </td>
                                </tr>


                                <?php
                              }
                               ?>
                            </tbody>
                        </table>

                    </div>
                  </div>
                </div>
</div>

<?php if($userRole == 'dg'){ ?>
<br>
<div style="padding-left: 10%;">


  <a href="addnewemployee.php" class="btn btn-success";> <i class="fa fa-plus"></i> Add new Employee</a>
  <br><br><br><br>
</div>
<?php } ?>



<?php
    include 'inc/footer.php';
?>
