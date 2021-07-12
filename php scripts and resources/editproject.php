<?php
    include 'inc/header.php';


     if (!isset($_GET['editprojectid']) || $_GET['editprojectid'] == NULL) {
        echo "<script>window.location = 'projectinfo.php';</script>";
        //header("Location:catlist.php");
    }else{
        $projectid = $_GET['editprojectid'];
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
        width: 50%;
        padding-top: 20px;
        padding-left: 200px;
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

   input[type=text] {
	  width: 95%;

	  margin: 8px 0;
	  box-sizing: border-box;
	  border: none;
	  border-bottom: 2px solid #1aa31f;
	}
</style>

        <h3 class="text-center"> Edit Project Info </h3>


        <?php
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {

			      $NAME = $_POST['name'];
			      $DATE = $_POST['date'];
			      $COST = $_POST['cost'];
			      $WSUP = $_POST['wsup'];
			      $DETAILS = $_POST['details'];



			     //  	$query =  "UPDATE project_table
	       //                      SET
								// NAME = '$NAME',
								// STARTING_DATE = '$DATE',
								// ESTIMATED_COST = '$COST',
								// WORKING_SUP = '$WSUP',
								// DETAILS  = '$DETAILS'



	       //                      WHERE id = '$projectid' ";
                    $query = "insert into pending_projects(name, starting_date, estimated_cost, working_sup, details, p_id )
                                values('".$NAME."','".$DATE."','".$COST."','".$WSUP."','".$DETAILS."','".$projectid."') ";

                    $stid = oci_parse($conn,$query);
                    $res = oci_execute($stid);



				    if($res)
				     {
				          // echo "<span class='success'> Updated Successfully. </span>";
				     	header('location:viewproject.php?viewprojectid='.$projectid);
				     }
				     else     {
				      echo "<span class='error'>Data Not Updated !</span>";
				     }

				  oci_close($conn);
        }
        ?>
        <div class="leftside">
                <?php
                    $query = "SELECT * FROM project_table WHERE ID=:id";
                    $stid = oci_parse($conn, $query);
                    oci_bind_by_name($stid, ':id', $projectid);
                    oci_execute($stid);

                    while ($row = oci_fetch_array($stid, OCI_RETURN_NULLS+OCI_ASSOC)) {
                ?>
        	<form action="" method="post" enctype="multipart/form-data">

                <table class="form">

                    <tr>
                        <td>
                            <label><p>Project Name:</p></label>
                        </td>
                        <td>
                            <input type="text" name = "name" value = "<?php echo $row['NAME']; ?>" class="medium" />

                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label><p>Starting Date:</p></label>
                        </td>
                        <td>
                            <input type="date" name = "date" value = "<?php echo $row['STARTING_DATE']; ?>" class="medium" />

                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label><p>Estimated Cost:</p></label>
                        </td>
                        <td>
                            <input type="text" name = "cost" value = "<?php echo $row['ESTIMATED_COST']; ?>" class="medium" />

                        </td>
                    </tr>

                    <tr>
                        <td style="vertical-align: top; padding-top: 9px;">
                            <label><p>Working Directorate:</p></label>
                        </td>
                        <td>
                            <input type="text" name = "wsup" value = "<?php echo $row['WORKING_SUP']; ?>" class="medium" />

                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label><p>Details:</p></label>
                        </td>
                        <td>
                            <textarea  rows="4" cols="50" name = "details"><?php echo $row['DETAILS']; ?></textarea>

                        </td>
                    </tr>
                    <tr>
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
           			<input type="submit" value="Save" class="btn btn-success"> </td>
                <a href="projectinfo.php" class="btn btn-danger" >Reject </a>
          	</form>

                <?php } ?>






        </div>
