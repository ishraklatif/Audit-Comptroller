<?php
    include 'inc/header.php';


     if (!isset($_GET['viewuserid']) || $_GET['viewuserid'] == NULL) {
        echo "<script>window.location = 'userinfo.php';</script>";
        //header("Location:catlist.php");
    }else{
        $userid = $_GET['viewuserid'];
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

        <h3 class="text-center"> Employee Info </h3>

        <div class="leftside">
                <?php
                    $query = "SELECT * FROM employee_table WHERE ID=:usr";
                    $stid = oci_parse($conn, $query);
                    oci_bind_by_name($stid, ':usr', $userid);
                    oci_execute($stid);

                    while ($row = oci_fetch_array($stid, OCI_RETURN_NULLS+OCI_ASSOC)) {
                ?>
                <table class="form">

                    <tr>
                        <td>
                            <label><p>Name:</p></label>
                        </td>
                        <td>
                            <p><?php echo $row['NAME']; ?></p>
                        </td>
                    </tr>


                    <tr>
                        <td>
                            <label><p>Employee ID :</p></label>
                        </td>
                        <td>
                            <p><?php echo $row['EMP_ID']; ?></p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label><p>Rank:</p></label>
                        </td>
                        <td>
                            <p><?php echo $row['RANK']; ?></p>
                        </td>
                    </tr>
                    <tr>
                        <td style="vertical-align: top; padding-top: 9px;">
                            <label><p>Directorate:</p></label>
                        </td>
                        <td>
                               <p><?php echo $row['SUP_ID']; ?></p>
                        </td>
                    </tr>
                       <tr>
                        <td>
                            <label><p>Mobile No:</p></label>
                        </td>
                        <td>
                            <p><?php echo $row['MOBILE']; ?></p>
                        </td>
                    </tr>
                       <tr>
                        <td>
                            <label><p>Email:</p></label>
                        </td>
                        <td>
                            <p><?php echo $row['EMAIL']; ?></p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label><p>Branch:</p></label>
                        </td>
                        <td>
                            <p><?php echo $row['BRANCH']; ?></p>
                        </td>
                    </tr>
                     <tr>
                        <td>
                            <label><p>Address:</p></label>
                        </td>
                        <td>
                            <p><?php echo $row['ADDRESS']; ?></p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label><p>Project Assigned:</p></label>
                        </td>
                        <td>
                            <p><?php echo $row['PROJECT']; ?></p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label><p>Status:</p></label>
                        </td>
                        <td>
                            <p><?php echo $row['STATUS']; ?></p>
                        </td>
                    </tr>
                    </table>
              <?php if($userRole == 'dg'){ ?>
<br>
               <a href="edituser.php?edituserid=<?php echo $row['ID']; ?>"><button class="btn btn-primary"><i class="fa fa-edit"></i>  Edit Employee </button></a> </td>
                <?php } }?>
                <center>
                  <br><br>
                  <a href="userinfo.php" ><button class="btn btn-success"><i class="fa fa-rotate-left"></i>  Go back </button></a>
                  <br>
                  <br>
                  <br>
                  <br>
                </center>

        </div>
