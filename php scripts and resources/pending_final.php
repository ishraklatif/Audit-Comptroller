<?php
    include 'inc/header.php';


     if (!isset($_GET['projectid']) || $_GET['projectid'] == NULL) {
        echo "<script>window.location = 'pending_updates.php';</script>";
        //header("Location:catlist.php");
    }else{
        $projectid = $_GET['projectid'];
        $decision = $_GET['decision'];
    }
?>

<?php  
    Session::checkSession();
    if (isset($_GET['action']) && $_GET['action'] == "logout") {
            Session::destroy();
        }
?>



        <?php
        if ($decision == 'accept'){

	        $query = "SELECT * FROM pending_projects WHERE ID=:id";
	        $stid = oci_parse($conn, $query);
	        oci_bind_by_name($stid, ':id', $projectid);
	        oci_execute($stid);

	        while ($row = oci_fetch_array($stid, OCI_RETURN_NULLS+OCI_ASSOC)) {

	        	$new_name = $row['NAME'];
	        	$new_date = $row['STARTING_DATE'];
	        	$new_cost = $row['ESTIMATED_COST'];
	        	$new_sup = $row['WORKING_SUP'];
	        	$new_details = $row['DETAILS'];
	        	$new_pid = $row['P_ID'];

	    	}


	      	$query =  "UPDATE project_table
                        SET 
						NAME = '$new_name',
						STARTING_DATE = '$new_date',
						ESTIMATED_COST = '$new_cost',
						WORKING_SUP = '$new_sup',
						DETAILS  = '$new_details'
						WHERE id = '$new_pid' ";

            $stid = oci_parse($conn,$query);
            $res = oci_execute($stid);

            $query =  "DELETE FROM pending_projects WHERE ID=:id";
	        $stid = oci_parse($conn, $query);
	        oci_bind_by_name($stid, ':id', $projectid);
	        oci_execute($stid);




		    if($res)
		     {
		          // echo "<span class='success'> Updated Successfully. </span>";
		     	header('location:pending_updates.php');
		     }
		     else     {  
		      echo "<span class='error'>Data Not Updated !</span>";
		     }

		  oci_close($conn);
		 }else{
		 	$query =  "DELETE FROM pending_projects WHERE ID=:id";
	        $stid = oci_parse($conn, $query);
	        oci_bind_by_name($stid, ':id', $projectid);
	        $res = oci_execute($stid);




		    if($res)
		     {
		          // echo "<span class='success'> Updated Successfully. </span>";
		     	header('location:pending_updates.php');
		     }
		     else     {  
		      echo "<span class='error'>Data Not Updated !</span>";
		     }

		  oci_close($conn);
		 }
        
        ?>