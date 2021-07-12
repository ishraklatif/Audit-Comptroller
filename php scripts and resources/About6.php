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
      <a class="nav-link" id="org-tab" data-bs-toggle="tab" href="About5.php" role="tab" aria-controls="org" aria-selected="false">Organogram</a>
    </li>
    <li class="nav-item" role="presentation">
      <a class="nav-link active" id="hr-tab" data-bs-toggle="tab" href="About6.php" role="tab" aria-controls="hr" aria-selected="true">Human Resources</a>
    </li>
    <li class="nav-item" role="presentation">
      <a class="nav-link" id="ra-tab" data-bs-toggle="tab" href="About7.php" role="tab" aria-controls="ra" aria-selected="false">Reform Activities</a>
    </li>

  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div class="tab-pane active" id="home" role="tabpanel" aria-labelledby="bi-tab">


      <div class="RightBox">

                          <h1 class="title-cag margin-bottom-10">Human Resources</h1>
                          <p class="align-justify">
                            <img src="images/acadis.gif" class="pull-right" style="margin:10px 10px;">

                            Skill and expertise of the OCAG staff is the most valuable asset. Among the managerial staff, the office boosts a wide range of educational backgrounds. The office actually finds the variation in experiences very useful for carrying out its audit activities especially in performance auditing, environmental auditing etc. However, the office is also aware that it needs to increase its focus on accounting and auditing related qualifications and training. At the moment, the majority of the managerial staff comes from Science and Humanities backgrounds followed by Finance/Accounting and Financial Management. There has been quite a large number of MBAs. The number of managers with ICMAs, CISAs and other professional accounting/auditing qualifications is still quite low and the office has adopted policies and taken steps to address this issue. <br><br>

                            Approximately four thousand officers and staff are presently working in the OCAG of which thirteen percent are women. The ratio is higher in the staff level compared to the managerial level.  The ratio of female employee at the OCAG is lesser because women joining the workforce is scanty as well as issues like socio cultural expectations, educational backgrounds influence their entry. However in job placement, training and other opportunities women officials have equal access compared to their male counterparts.  The following table and figure depicts the officer- staff  gender ratio.
                              </p>




                      </div>



</div>




  </div>
</div>





<?php
  include 'inc/footer.php';
?>

















    </body>
    </html>
