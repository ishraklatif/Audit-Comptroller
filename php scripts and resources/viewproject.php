<?php
    include 'inc/header.php';


    if (!isset($_GET['viewprojectid']) || $_GET['viewprojectid'] == NULL) {
        echo "<script>window.location = 'projectinfo.php';</script>";
        //header("Location:catlist.php");
    }else{
        $projectid = $_GET['viewprojectid'];
    }
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

<style type="text/css">
    .leftside{
        float: left;
        width: 80%;
        padding-top: 20px;
        padding-left: 20%;
      }
    .rightside{
        float: left;
        width: 20%;
    }
    .rightside img{
        height: 180px;
        width:  200px;
    }

    table {
      border-collapse: collapse;
      width: 100%;
    }

    th, td {
      text-align: left;
      border-bottom: 1px solid #ddd;
    }
    tr:nth-child(even) {background-color: #f2f2f2;}
</style>

        <h3 class="text-center"> Project Info </h3>

        <div class="leftside">
                <?php
                    $query = "SELECT * FROM project_table WHERE ID=:id";
                    $stid = oci_parse($conn, $query);
                    oci_bind_by_name($stid, ':id', $projectid);
                    oci_execute($stid);

                    while ($row = oci_fetch_array($stid, OCI_RETURN_NULLS+OCI_ASSOC)) {
                ?>
                <table class="form">

                    <tr>
                        <td>
                            <label><p>Project Name:</p></label>
                        </td>
                        <td>
                            <p><?php echo $row['NAME']; ?></p>
                        </td>
                    </tr>


                    <tr>
                        <td>
                            <label><p>Starting Date:</p></label>
                        </td>
                        <td>
                            <p><?php echo $row['STARTING_DATE']; ?></p>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label><p>Estimated Cost:</p></label>
                        </td>
                        <td>
                            <p><?php echo $row['ESTIMATED_COST']; ?></p>
                        </td>
                    </tr>

                    <tr>
                        <td style="vertical-align: top; padding-top: 9px;">
                            <label><p>Working Directorate:</p></label>
                        </td>
                        <td>
                               <p><?php echo $row['WORKING_SUP']; ?></p>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label><p>Details:</p></label>
                        </td>
                        <td>
                            <p><?php echo $row['DETAILS']; ?></p>
                        </td>
                    </tr>
                    <td>
                        <label><p>Assigned Employees:</p></label>
                    </td>
                    <td>
                      <?php
                          $emps = $row["WORKING_EMPS"];
                          if ($emps){
                          $wemps = explode(",", $emps);

                          foreach ($wemps as $item) {
                            $query1 = "SELECT * FROM employee_table
                                    WHERE id=$item";
                            $stid1 = oci_parse($conn,$query1);
                            $res1 = oci_execute($stid1);
                            $row1 = oci_fetch_array($stid1, OCI_RETURN_NULLS+OCI_ASSOC);
                            echo $row1["NAME"].'('.$row1["EMAIL"].')<br>';
                          }
                        }else{
                          echo 'N\A';
                        }
                       ?>

                    </td>


                </table>
              <?php if($userRole == 'dg'){ ?>
                <br><br>
               <a href="editproject.php?editprojectid=<?php echo $row['ID']; ?>"><button class="btn btn-success"><i class="fa fa-edit"></i> Edit Project </button></a> </td>

                <?php } }?>
                <center>
                  <br><br>
                  <a href="projectinfo.php" ><button class="btn btn-primary"><i class="fa fa-rotate-left"></i> Go back </button></a>
           </center>
        </div>
