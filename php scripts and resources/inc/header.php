<?php
  include 'lib/Session.php';
  Session::init();
  include 'lib/dbconnect.php';

?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title> </title>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- References -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
        <link rel="stylesheet" h href="css/style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script src="https://cdn.rawgit.com/harvesthq/chosen/gh-pages/chosen.jquery.min.js"></script>
        <link href="https://cdn.rawgit.com/harvesthq/chosen/gh-pages/chosen.min.css" rel="stylesheet"/>


  </head>
  <body>


<nav class="navbar navbar-expand-lg navbar-white bg-white">
  <div class="col-md-2 col-sm-2 mLogo"><img src="images/th.jpg" alt="Logo" class="pull-right img-responsive"></div>
<h2>Comptroller & Auditor General Bangladesh</h2>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"> </span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" aria-current="page" href="index.php"><i class="fa fa-home"></i> Home <span class ="sr-only">(current)</span> </a>
      </li>
      <li class="nav-item">

      <?php
          $query = "SELECT * FROM pending_projects";
          $stid = oci_parse($conn, $query);
          oci_execute($stid);
          $i=0;
          while ($row = oci_fetch_array($stid, OCI_RETURN_NULLS+OCI_ASSOC)) {
            $i++;
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
            $uerName= $row['USERNAME'];
          }
        }
      ?>
    </li>



      <?php
        if ( Session::get("login") == true ){
          if($userRole != 'cag'){
      ?>

      <li class="nav-item">
        <a class="nav-link" href="userinfo.php"><i class="fa fa-pie-chart"></i> Info</a>
      </li>

      <?php } } ?>


      <?php
        if ( Session::get("login") == true ){
          if($userRole == 'cag'){
            if($i>0){
      ?>

      <li class="nav-item">
        <a class="nav-link" href="pending_updates.php"><i class="fa fa-spinner fa-spin"></i> Pending Updates<?php echo "(".$i.")"; ?></a>
      </li>
    <?php } else {
    ?>
    <li class="nav-item">
      <a class="nav-link" href="pending_updates.php"> Pending Updates<?php echo "(".$i.")"; ?></a>
    </li>

  <?php } } } ?>



      <li class="nav-item">
        <a class="nav-link" href="About.php"><i class="fa fa-vcard-o"></i> About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Help.php"><i class="fa fa-puzzle-piece"></i> Help</a>
      </li>


      <?php
        if ( Session::get("login") == true ){

      ?>
      <li class="nav-item">
        <a class="nav-link" href="#" style="color:red;"> <i class="fa fa-user"></i> <?php echo $uerName; ?>  </a>
      </li>
      <?php

      }
      ?>



      <?php
        if ( Session::get("login") == true ){
      ?>
        <li class="nav-item">
          <a class="nav-link" href="?action=logout"><i class="fa fa-power-off"></i> Logout</a>
        </li>
      <?php
        }else{
      ?>
      <li class="nav-item">
       <a class="nav-link" href="login.php"> <i class="fa fa-key"></i>Log in</a>
      </li>
      <?php } ?>





  </div>
</nav>
