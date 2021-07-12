<?php
    include 'inc/header.php';


     if (!isset($_GET['edituserid']) || $_GET['edituserid'] == NULL) {
        echo "<script>window.location = 'userinfo.php';</script>";
        //header("Location:catlist.php");
    }else{
        $userid = $_GET['edituserid'];
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

        <h3 class="text-center"> Edit Employee Info </h3>


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


			      	$query =  "UPDATE employee_table
	                            SET
	                            emp_id  = '$E_ID',
								name = '$NAME',
								rank = '$RANK',
								sup_id = '$DTE',
								mobile  = '$MOB',
								email = '$EMAIL',
								branch = '$BR',

								address = '$ADDS',
								status = '$STATUS',
								project = '$PROJECT'
	                            WHERE id = '$userid' ";

	            	$stid = oci_parse($conn,$query);
				    $res = oci_execute($stid);

				    if($res)
				     {
				          // echo "<span class='success'> Updated Successfully. </span>";
				     	//header('location:viewuser.php?viewuserid='.$userid);
              header('location:userinfo.php');
				     }
				     else     {
				      echo "<span class='error'>Data Not Updated !</span>";
				     }

				  oci_close($conn);
        }
        ?>
        <div class="leftside">

            	<form action="" method="post" enctype="multipart/form-data">
	                <table class="form">
	                  <?php
	                    $query = "SELECT * FROM employee_table WHERE ID=:usr";
	                    $stid = oci_parse($conn, $query);
	                    oci_bind_by_name($stid, ':usr', $userid);
	                    oci_execute($stid);

	                    while ($row = oci_fetch_array($stid, OCI_RETURN_NULLS+OCI_ASSOC)) {
                	?>
	                    <tr>
	                        <td>
	                            <label><p>Name:</p></label>
	                        </td>
	                        <td>
	                            <input type="text" name = "name" value = "<?php echo $row['NAME']; ?>" class="medium" />
	                        </td>
	                    </tr>
	                    <tr>
	                        <td>
	                            <label><p>Employee ID :</p></label>
	                        </td>
	                        <td>
	                            <input type="text" name = "emp_id" value = "<?php echo $row['EMP_ID']; ?>" class="medium" />

	                        </td>
	                    </tr>
	                    <tr>
	                        <td>
	                            <label><p>Rank:</p></label>
	                        </td>
	                        <td>
	                            <input type="text" name = "rank" value = "<?php echo $row['RANK']; ?>" class="medium" />

	                        </td>
	                    </tr>
	                    <tr>
	                        <td style="vertical-align: top; padding-top: 9px;">
	                            <label><p>Directorate:</p></label>
	                        </td>
	                        <td>
	                            <input type="text" name = "directorate" value = "<?php echo $row['SUP_ID']; ?>" class="medium" />

	                        </td>
	                    </tr>
	                       <tr>
	                        <td>
	                            <label><p>Mobile No:</p></label>
	                        </td>
	                        <td>
	                            <input type="text" name = "mobile" value = "<?php echo $row['MOBILE']; ?>" class="medium" />

	                        </td>
	                    </tr>
	                       <tr>
	                        <td>
	                            <label><p>Email:</p></label>
	                        </td>
	                        <td>
	                            <input type="text" name = "email" value = "<?php echo $row['EMAIL']; ?>" class="medium" />

	                        </td>
	                    </tr>
	                    <tr>
	                        <td>
	                            <label><p>Branch:</p></label>
	                        </td>
	                        <td>
	                            <input type="text" name = "branch" value = "<?php echo $row['BRANCH']; ?>" class="medium" />

	                        </td>
	                    </tr>
	                    <tr>
	                        <td>
	                            <label><p>Address:</p></label>
	                        </td>
	                        <td>
	                            <input type="text" name = "address" value = "<?php echo $row['ADDRESS']; ?>" class="medium" />

	                        </td>
	                    </tr>
	                    <tr>
	                        <td>
	                            <label><p>Project Assigned:</p></label>
	                        </td>
	                        <td>
	                            <input type="text" name = "project" value = "<?php echo $row['PROJECT']; ?>" class="medium" />

	                        </td>
	                    </tr>
	                    <tr>
	                        <td>
	                            <label><p>Status:</p></label>
	                        </td>
	                        <td>
	                            <input type="text" name = "status" value = "<?php echo $row['STATUS']; ?>" class="medium" />

	                        </td>
	                    </tr>
	                </table>
           			<input type="submit" value= "Save" class="btn btn-success">
                <a href="userinfo.php" class="btn btn-danger" >Reject </a>
           		</form>

                <?php } ?>


        </div>
