<?php
    include 'inc/header.php';


    if (!isset($_GET['viewpendingprojectid']) || $_GET['viewpendingprojectid'] == NULL) {
        echo "<script>window.location = 'projectinfo.php';</script>";
        //header("Location:catlist.php");
    }else{
        $projectid = $_GET['viewpendingprojectid'];
    }
?>

<?php  
    Session::checkSession();
    if (isset($_GET['action']) && $_GET['action'] == "logout") {
            Session::destroy();
        }
?>
<style type="text/css">
    .leftside{
        float: left;
        width: 80%;
        padding-top: 20px;
        padding-left: 350px;
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
                    $query = "SELECT * FROM pending_projects WHERE ID=:id";
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
                    </table>
                    <tr>
                        <td>
                        <a href="pending_final.php?projectid=<?php echo $row['ID']; ?>&decision=accept"><button class="btn btn-success"> Accept </button></a> 
                        <a href="pending_final.php?projectid=<?php echo $row['ID']; ?>&decision=reject"><button class="btn btn-danger"> Reject </button></a> </td>
                    </tr>
                

               
                <?php } ?>
           
        </div>
