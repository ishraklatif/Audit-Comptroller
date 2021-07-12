<?php
  include 'inc/header.php';
?>

<?php
    if (isset($_GET['action']) && $_GET['action'] == "logout") {
            Session::destroy();
        }
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

  </head>
  <body>


    <div id="demo" class="carousel slide" data-ride="carousel">

      <!-- Indicators -->
      <ul class="carousel-indicators">
        <li data-target="#demo" data-slide-to="0" class="active"></li>
        <li data-target="#demo" data-slide-to="1"></li>
        <li data-target="#demo" data-slide-to="2"></li>
        <li data-target="#demo" data-slide-to="3"></li>
        <li data-target="#demo" data-slide-to="4"></li>
        <li data-target="#demo" data-slide-to="5"></li>
        <li data-target="#demo" data-slide-to="6"></li>
        <li data-target="#demo" data-slide-to="7"></li>
        <li data-target="#demo" data-slide-to="8"></li>
      </ul>

    <!-- The slideshow -->
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="images/img1.jpg" alt="img1" width="1100" height="500">
        </div>
        <div class="carousel-item">
          <img src="images/img2.jpg" alt="img2" width="1100" height="500">
        </div>
        <div class="carousel-item">
          <img src="images/img3.jpg" alt="img3" width="1100" height="500">
        </div>
        <div class="carousel-item">
          <img src="images/img4.jpg" alt="img4" width="1100" height="500">
        </div>
        <div class="carousel-item">
          <img src="images/img5.jpg" alt="img5" width="1100" height="500">
        </div>
        <div class="carousel-item">
          <img src="images/img6.jpg" alt="img6" width="1100" height="500">
        </div>
        <div class="carousel-item">
          <img src="images/img7.jpg" alt="img7" width="1100" height="500">
        </div>
        <div class="carousel-item">
          <img src="images/img8.jpg" alt="img8" width="1100" height="500">
        </div>
        <div class="carousel-item">
          <img src="images/img9.jpg" alt="img9" width="1100" height="500">
        </div>
      </div>

      <!-- Left and right controls -->
      <a class="carousel-control-prev" href="#demo" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </a>
      <a class="carousel-control-next" href="#demo" data-slide="next">
        <span class="carousel-control-next-icon"></span>
      </a>
    </div>





<section>
<div class="margin-top-60 margin-top-100">
<div class="col-md-12">
                <center>
                    <!-- <img src="assets/img/Vision.jpg" alt="..." class="circle"> -->
                    <br>
                    <br>
                    <h1 class="title-cag margin-bottom-10">Vision</h1>
                    <p>Attaining accountability and transparency in Public Financial Management for achieving good governance.</p>
                </center>

                <center>
                    <!-- <img src="assets/img/mission.jpg" alt="..." class="circle"> -->
                    <h1 class="title-cag margin-bottom-10">Mission</h1>
                    <p>Conducting effective audit of public sector operations for optimum utilisation of public resources providing reliable and objective information to assist in establishing accountability and transparency in government activities.</p>
                </center>

                <center>
                    <h1 class="title-cag margin-bottom-10">Core Values</h1>
                    <img alt="" src="images/pro-active.jpg" class="img-responsive">
                </center>
            </div>
            </div>
  </section>

          <section class="my-5">
            <div class="py-5 ">
              <h3 class="text-center"> About Us </h3>
            </div>
            <div class="container-fluid">
              <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                  <img src="images/abt.jpg" class="img-fluid abtimg">
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                  <h2 class="display-5"> Comptroller and Auditor General of Bangladesh </h2>
                  <p class="py-3"> The Office of the Comptroller and Auditor General (OCAG), the Supreme Audit Institution (SAI) of Bangladesh is responsible for auditing government receipts and public spending and to ascertain whether expenditures have yielded value for money in government offices, public bodies and statutory organisations. Appointed by the President of the Republic, the Comptroller and Auditor General (CAG) heads the Supreme Audit Institution. CAG has the mandate to determine the scope and extent of audit.

      The Constitution of the People's Republic of Bangladesh provides the CAG with complete independence i.e. he is not subject to any other authority having access to all documents required for conducting audit.

      Directors General, the heads of the audit directorates are responsible for conducting audit on behalf of the CAG in the government offices as well as the public sector undertakings. Audit observations involving serious financial irregularities are initially developed into Advance Paras (AP) and subsequently Draft Paras (DP) after taking into consideration the replies received from the concerned auditee organisation and the Principal Accounting Officer (Secretary of the Ministry/Division). The DPs are incorporated in the audit reports after approval of the CAG. Alongside traditional approach to carry out financial, compliance or regularity audits, the office is now conducting performance audit to determine economy, efficiency and effectiveness in the management of public resources, thereby adding value to the governance issues.


                  </p>
                  <a href="about.php" class="btn btn-success" ><i class="fa fa-info"></i>  More Info </a>
                </div>
              </div>
            </div>

          </section>




      <section class="my-5">
        <div class="py-5 ">
          <h3 class="text-center"> Contact Us </h3>
        </div>
        <center>

          <a href="Contacts.php" class="btn btn-success" ><i class="fa fa-envelope"></i>  Click Here </a>

      </center>
      </section>

      <?php
        include 'inc/footer.php';
      ?>




    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </body>
</html>
