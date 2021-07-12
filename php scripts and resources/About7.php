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
      <a class="nav-link" id="hr-tab" data-bs-toggle="tab" href="About6.php" role="tab" aria-controls="hr" aria-selected="false">Human Resources</a>
    </li>
    <li class="nav-item" role="presentation">
      <a class="nav-link active" id="ra-tab" data-bs-toggle="tab" href="About7.php" role="tab" aria-controls="ra" aria-selected="true">Reform Activities</a>
    </li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div class="tab-pane active" id="home" role="tabpanel" aria-labelledby="bi-tab">


      <div class="RightBox">
                          <h1 class="title-cag margin-bottom-10">Reform Activities</h1>
                          <h4>Strengthening Comptrollership and Oversight of Public Expenditure (SCOPE) Project:</h4>
                          <p>The Strengthening Comptrollership and Oversight of Public Expenditure (SCOPE) is a CIDA funded Project being implemented by the Office of the Comptroller and Auditor General of Bangladesh. The five-year long 720 mn Taka project having commenced from the ongoing financial year aims at strengthening capacity of the OCAG to improve the quality of auditing through need based practical training, enhance report writing skills and improve the IT system through overhauling the present network.</p>
                          <p>The overall purpose of the project is to enable the OCAG to effectively carry out its constitutionally and legally mandated obligations. The project will be implemented through three overarching and interrelated components:</p>

                          <p>1. Organisational Strengthening:</p>
                          <p style="margin-left: 20px">Create an enabling environment to facilitate organisational changes and management practices. Under this component corporate directorates for Human Resources Development, Information Technology, Communications and mainstreaming will be institutionalised as the integral parts of OCAG's organisational structure staffed with permanent teams of suitably qualified and experienced persons.</p>

                          <p>2. Human Resource Development:</p>
                          <p style="margin-left: 20px">
                              </p><ul>
                                  <li>Strengthen the technical and professional competence of the OCAG and improve its operational capacity to produce and disseminate quality audit reports</li>
                                  <li>Enhance OCAG capacity for conducting Performance Auditing</li>
                                  <li>Develop core group of staff with professional accounting and auditing credentials</li>
                                  <li>Improve IT infrastructure and network system in the CAG office and Audit Directorates</li>
                              </ul>
                          <p></p>
                          <p>3. Strengthening Partnership:</p>
                          <p style="margin-left: 20px">
                              To raise awareness of the OCAG's role and importance in promoting transparency and accountability in government's operations through developing partnerships with key internal and external stakeholders.
                          </p>

                          <h4 style="margin-top: 30px">Strengthening Public Expenditure Management Programme (SPEMP-B)</h4>
                          <p>SPEMP B is implemented by the OCAG with the assistance of a multi donor fund and administered by the World Bank. The two year project commenced its operations in 2012. The objective is to enhance the capacity of the OCAG better achieve the expectations of its stakeholders by effectively performing its constitutional mandate. The objectives of the project are to (1) strengthen institutional and legal framework of the office, (2) enhance the scope of its audit functions and (3) support the Financial Management Academy (FIMA) to become a model training institute.</p>
                      </div>


</div>




  </div>
</div>





<?php
  include 'inc/footer.php';
?>


















    </body>
    </html>
