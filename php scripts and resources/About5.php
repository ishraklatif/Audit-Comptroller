<?php
    include 'inc/header.php';
?>
<?php
    // Session::checkSession();
    if (isset($_GET['action']) && $_GET['action'] == "logout") {
            Session::destroy();
        }
?>


<div>
  <!-- Nav tabs -->
  <ul class="nav nav-tabs " id="myTab" role="tablist">
    <li class="nav-item" role="presentation">
      <a class="nav-link " id="bi-tab" data-bs-toggle="tab" href="About.php" role="tab" aria-controls="bi" aria-selected="false">Brief Introduction</a>
    </li>
    <li class="nav-item" role="presentation">
      <a class="nav-link" id="cm-tab" data-bs-toggle="tab" href="About1.php" role="tab" aria-controls="cm" aria-selected="false">Constitutional Mandate</a>
    </li>
    <li class="nav-item" role="presentation">
      <a class="nav-link" id="pro-tab" data-bs-toggle="tab" href="About2.php" role="tab" aria-controls="pro" aria-selected="false">CAG's Profile</a>
    </li>
    <li class="nav-item" role="presentation">
      <a class="nav-link " id="what-tab" data-bs-toggle="tab" href="About3.php" role="tab" aria-controls="what" aria-selected="false">What we do</a>
    </li>
    <li class="nav-item" role="presentation">
      <a class="nav-link" id="fa-tab" data-bs-toggle="tab" href="About4.php" role="tab" aria-controls="fa" aria-selected="false">Functional Areas</a>
    </li>
    <li class="nav-item" role="presentation">
      <a class="nav-link active" id="org-tab" data-bs-toggle="tab" href="About5.php" role="tab" aria-controls="org" aria-selected="true">Organogram</a>
    </li>
    <li class="nav-item" role="presentation">
      <a class="nav-link" id="hr-tab" data-bs-toggle="tab" href="About6.php" role="tab" aria-controls="hr" aria-selected="false">Human Resources</a>
    </li>
    <li class="nav-item" role="presentation">
      <a class="nav-link" id="ra-tab" data-bs-toggle="tab" href="About7.php" role="tab" aria-controls="ra" aria-selected="false">Reform Activities</a>
    </li>

  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div class="tab-pane active" id="home" role="tabpanel" aria-labelledby="bi-tab">

      <div class="RightBox">



                          <h1 class="title-cag margin-bottom-10">Organogram </h1>



                           <p align="center"><strong>Organogram of SAI Bangladesh </strong><br>

                           </p><div class="thumbnail" align="center">

                                  <a class="fancybox" data-rel="fancybox-button" title="Organogram of SAI Bangladesh: Click for large view" href="images/osai.jpg">

                                      <img class="img-responsive" src="images/osai.jpg" alt="">

                                  </a>

                              </div>

                         <p></p>



                           <p align="center"><strong>Organogram of CAG Office</strong><br>

                              </p><div class="thumbnail"  align="center">

                                  <a class="fancybox" data-rel="fancybox-button" title="Organogram of CAG Office: Click for large view" href="images/ocag.jpg">

                                      <img class="img-responsive" src="images/ocag.jpg" alt="">

                                  </a>

                              </div>

                           <p></p>











                      </div>


</div>




  </div>
</div>





<?php
  include 'inc/footer.php';
?>

















    </body>
    </html>
