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
     if (!isset($_GET['delprojectid']) || $_GET['delprojectid'] == NULL) {
        echo "<script>window.location = 'projectinfo.php';</script>";
        //header("Location:catlist.php");
    }else{
        $projectid = $_GET['delprojectid'];
    }


    $query1 = "SELECT * FROM project_table WHERE ID=$projectid ";
    $stid1 = oci_parse($conn, $query1);
    $res1 = oci_execute($stid1);
    $row1 = oci_fetch_array($stid1, OCI_RETURN_NULLS+OCI_ASSOC);
    $wgrps = $row1['WORKING_EMPS'];

    if($wgrps)
     {
        $wemps = explode(",",$wgrps);
        foreach ($wemps as $item) {
            $query2 = "UPDATE employee_table
                    SET
                    project = 'N/A',
                    status = 'Available'
                    WHERE id=$item";
            $stid2 = oci_parse($conn,$query2);
            $res1 = oci_execute($stid2);
        }
    }



    $query = "DELETE FROM project_table WHERE ID=:id";
    $stid = oci_parse($conn, $query);
    oci_bind_by_name($stid, ':id', $projectid);
    $res = oci_execute($stid);

    if($res)
     {
          // echo "<span class='success'> Updated Successfully. </span>";
        header('location:projectinfo.php');
     }
     else     {
      echo "<span class='error'>Data Not Deleted !</span>";
     }

    oci_close($conn);




?>
