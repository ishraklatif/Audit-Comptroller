<?php
    include 'inc/header.php';
    include 'lib/dbconnect.php';
?>
<?php  
    Session::checkSession();
    if (isset($_GET['action']) && $_GET['action'] == "logout") {
            Session::destroy();
        }
?>

<?php
     if (!isset($_GET['deluserid']) || $_GET['deluserid'] == NULL) {
        echo "<script>window.location = 'projectinfo.php';</script>";
        //header("Location:catlist.php");
    }else{
        $userid = $_GET['deluserid'];
    }

    $query = "DELETE FROM employee_table WHERE ID=:id";
    $stid = oci_parse($conn, $query);
    oci_bind_by_name($stid, ':id', $userid);
    $res = oci_execute($stid);

    if($res)
     {
          // echo "<span class='success'> Updated Successfully. </span>";
        header('location:viewuser.php');
     }
     else     {  
      echo "<span class='error'>Data Not Deleted !</span>";
     }

    oci_close($conn);




?>



