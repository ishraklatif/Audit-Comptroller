<?php
    include 'inc/header.php';
?>

<?php
    Session::checkSession();
    if (isset($_GET['action']) && $_GET['action'] == "logout") {
            Session::destroy();
        }
?>

<style type="text/css">

  .form-control-borderless {
    border: none;
}

.form-control-borderless:hover, .form-control-borderless:active, .form-control-borderless:focus {
    border: none;
    outline: none;
    box-shadow: none;
}
</style>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">



<div class="RightBox" >

<br><br>
      <ul class="nav nav-tabs " id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
          <a class="nav-link " id="ei-tab" data-bs-toggle="tab" href="userinfo.php" role="tab" aria-controls="ei" aria-selected="false">Employee Info</a>
        </li>
        <li class="nav-item" role="presentation">
          <a class="nav-link" id="pi-tab" data-bs-toggle="tab" href="projectinfo.php" role="tab" aria-controls="ei" aria-selected="false">Project Info</a>
        </li>
        <li class="nav-item" role="presentation">
          <a class="nav-link active" id="pi-tab" data-bs-toggle="tab" href="search.php" role="tab" aria-controls="pi" aria-selected="true">Search Info</a>
        </li>

      </ul>

      <div class="container" >
    <br/>
  <div class="row justify-content-center">
                        <div class="col-12 col-md-10 col-lg-8">
                            <form action="" method="post" class="card card-sm">
                                <div class="card-body row no-gutters align-items-center">
                                    <div class="col-auto">
                                        <i class="fas fa-search h4 text-body"></i>
                                    </div>
                                    <!--end of col-->
                                    <div class="col">
                                        <input required="required" name='key' class="form-control form-control-lg form-control-borderless" type="search" placeholder="Search Project or Names ">
                                    </div>
                                    <!--end of col-->
                                    <div class="col-auto">
                                        <button class="btn btn-lg btn-success" type="submit">Search</button>
                                    </div>
                                    <!--end of col-->
                                </div>
                            </form>
                        </div>
                        <!--end of col-->
                    </div>
</div>


      <div class="tab-content" style="padding-left:2%; width: 98%;">
			<div class="tab-pane active" id="home" role="tabpanel" aria-labelledby="pi-tab">
	            <div class="table-responsive">
	                <table class="table">
	                	<br>
	                	<h3>Project Info</h3>

	                    <thead>
	                        <tr>
	                            <th>Serial</th>
	                            <th>Name</th>
	                            <th>Starting Date</th>
	                            <th>Estimated Cost</th>
	                            <th>Working Directorate</th>
	                            <th>Details</th>
	                            <th>Action</th>
	                        </tr>
	                    </thead>

	                    <tbody>

	                       <?php
                          if ($_SERVER['REQUEST_METHOD'] == 'POST') {

                          $key = '%'.$_POST['key'].'%';
                          // key is the thing we search for

                          // echo $key;
	                        $query = "SELECT * FROM project_table WHERE emp_names LIKE :key OR name LIKE :key";
                          // here we show the output of the emp table
	                        $stid = oci_parse($conn, $query);
                          // echo $stid;
                          oci_bind_by_name($stid, ':key', $key);
	                        oci_execute($stid);
	                        $i=0;
	                        while ($row = oci_fetch_array($stid, OCI_RETURN_NULLS+OCI_ASSOC)) {
	                          $i+=1;

	                        ?>
	                        <tr height="30px">
	                          <td> <?php echo $i; ?></td>
	                          <td> <?php echo $row["NAME"]; ?></td>
	                          <td> <?php echo $row["STARTING_DATE"]; ?></td>
	                          <td> <?php echo $row["ESTIMATED_COST"]; ?></td>
	                          <td> <?php echo $row["WORKING_SUP"]; ?></td>
	                          <td> <?php echo $row["DETAILS"]; ?></td>
	                          <td><a href="viewproject.php?viewprojectid=<?php echo $row['ID']; ?>"><i class="fa fa-eye" aria-hidden="true"></i></a>

	                           <!--    <a href="editproject.php?editprojectid=<?php echo $row['ID']; ?>"><i class="fa fa-edit"></i></a>

	                              <a href="deleteproject.php?delprojectid=<?php echo $row['ID']; ?>" onclick="return confirm('Are you sure want to DELETE?');"><i class="fa fa-trash"></i></a> -->
	                              </td>
	                        </tr>
	                       <?php } } ?>
	                    </tbody>
	                </table>
	            </div>
	    	</div>

<hr>

                  <div class="tab-pane active" id="home" role="tabpanel" aria-labelledby="ei-tab">
                    <div class="table-responsive">
                        <table class="table">
                        	<h3>Employee Info</h3>
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

                                if ($_SERVER['REQUEST_METHOD'] == 'POST') {

                                 $key = '%'.$_POST['key'].'%';

                                // echo $key;
                                $query = "SELECT * FROM employee_table WHERE project LIKE :key OR name LIKE :key ORDER BY EMP_ID";
                                // here is a complex query for search algorithmn taking lists from two different table
                                $stid = oci_parse($conn, $query);
                                // echo $stid;
                                oci_bind_by_name($stid, ':key', $key);
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
                                     <!--  <a href="edituser.php?edituserid=<?php echo $row['ID']; ?>"><i class="fa fa-edit"></i></a>

                                      <a href="deleteuser.php?deluserid=<?php echo $row['ID']; ?>" onclick="return confirm('Are you sure want to DELETE?');"><i class="fa fa-trash"></i></a> -->
                                      <?php } }?>
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






                <?php
                  include 'inc/footer.php';
                ?>
  </body>
    </html>
