<?php
    include 'inc/header.php';
?>

<?php
    Session::checkSession();
    if (isset($_GET['action']) && $_GET['action'] == "logout") {
            Session::destroy();
        }
?>


<div class="RightBox">

<br><br>
      <ul class="nav nav-tabs " id="myTab" role="tablist">

        <li class="nav-item" role="presentation">
          <a class="nav-link active" id="pi-tab" data-bs-toggle="tab" href="#" role="tab" aria-controls="pi" aria-selected="true">Pending Updates</a>
        </li>

      </ul>

      <div class="tab-content">
        <div class="tab-pane active" id="home" role="tabpanel" aria-labelledby="pi-tab">


                    <div class="table-responsive">
                        <table class="table">
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
                                $query = "SELECT * FROM pending_projects";
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
                                  <td> <?php echo $row["ESTIMATED_COST"]; ?></td>
                                  <td> <?php echo $row["WORKING_SUP"]; ?></td>
                                  <td> <?php echo $row["DETAILS"]; ?></td>
                                  <td><a href="viewpendingproject.php?viewpendingprojectid=<?php echo $row['ID']; ?>"><i class="fa fa-eye" aria-hidden="true"></i></a>


                                      </td>
                                </tr>
                               <?php } ?>
                            </tbody>
                        </table>

                    </div>
                  </div>
                </div>







                </div>
                <br><br><br><br>






                <?php
                  include 'inc/footer.php';
                ?>
  </body>
    </html>
