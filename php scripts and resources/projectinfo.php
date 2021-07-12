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

<div class="RightBox">

<br><br>
      <ul class="nav nav-tabs " id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
          <a class="nav-link " id="ei-tab" data-bs-toggle="tab" href="userinfo.php" role="tab" aria-controls="ei" aria-selected="false">Employee Info</a>
        </li>
        <li class="nav-item" role="presentation">
          <a class="nav-link active" id="pi-tab" data-bs-toggle="tab" href="projectinfo.php" role="tab" aria-controls="pi" aria-selected="true">Project Info</a>
        </li>
        <li class="nav-item" role="presentation">
          <a class="nav-link" id="pi-tab" data-bs-toggle="tab" href="search.php" role="tab" aria-controls="pi" aria-selected="false">Search Info</a>
        </li>

      </ul>

      <div class="tab-content" style="padding-left:2%; width: 98%;">
        <div class="tab-pane active" id="home" role="tabpanel" aria-labelledby="pi-tab">


                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th width="8%" >Serial</th>
                                    <th width="12%" >Name</th>
                                    <th width="8%" >Starting Date</th>
                                    <th width="8%" >Ending Date</th>
                                    <th width="8%" >Estimated Cost</th>
                                    <th width="8%" >Working Directorate</th>
                                    <th width="8%" >Details</th>
                                    <!-- <th width="20%" >Working Employees</th> -->
                                    <th width="8%" >Action</th>
                                </tr>
                            </thead>

                            <tbody>
                               <?php
                                $query = "SELECT * FROM project_table";
                                $stid = oci_parse($conn, $query);
                                oci_execute($stid);
                                $i=0;
                                while ($row = oci_fetch_array($stid, OCI_RETURN_NULLS+OCI_ASSOC)) {
                                  $i+=1;

                                ?>
                                <tr height="30px">
                                  <td> <?php echo $i; ?></td>
                                  <td> <?php echo $row["NAME"]; ?></td>
                                  <td> <?php echo $row["STARTING_DATE"]; ?></td>
                                  <td> <?php echo $row["ENDING_DATE"]; ?></td>
                                  <td> <?php echo $row["ESTIMATED_COST"]; ?></td>
                                  <td> <?php echo $row["WORKING_SUP"]; ?></td>
                                  <td> <?php echo $row["DETAILS"]; ?></td>


                                  <td><a href="viewproject.php?viewprojectid=<?php echo $row['ID']; ?>"><i class="fa fa-eye" aria-hidden="true"></i></a>

                                  <?php if($userRole == 'dg'){ ?>

                                      <a href="editproject.php?editprojectid=<?php echo $row['ID']; ?>"><i class="fa fa-edit"></i></a>

                                      <a href="deleteproject.php?delprojectid=<?php echo $row['ID']; ?>" onclick="return confirm('Are you sure want to DELETE?');"><i class="fa fa-trash"></i></a>
                                      </td>
                                  <?php } ?>
                                </tr>
                               <?php } ?>
                            </tbody>
                        </table>

                    </div>
                  </div>
                </div>







                </div>
                <?php if($userRole == 'dg'){ ?>
                  <br><div style="padding-left: 10%;">

                  <a href="addnewproject.php" class="btn btn-success"><i class="fa fa-plus"></i> Add new Project</a>
                </div>
                <?php } ?>
                <br><br><br><br>






                <?php
                  include 'inc/footer.php';
                ?>
  </body>
    </html>
