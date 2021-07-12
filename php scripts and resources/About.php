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
      <a class="nav-link active" id="bi-tab" data-bs-toggle="tab" href="About.php" role="tab" aria-controls="bi" aria-selected="true">Brief Introduction</a>
    </li>
    <li class="nav-item" role="presentation">
      <a class="nav-link" id="cm-tab" data-bs-toggle="tab" href="About1.php" role="tab" aria-controls="cm" aria-selected="false">Constitutional Mandate</a>
    </li>
    <li class="nav-item" role="presentation">
      <a class="nav-link" id="pro-tab" data-bs-toggle="tab" href="About2.php" role="tab" aria-controls="pro" aria-selected="false">CAG's Profile</a>
    </li>
    <li class="nav-item" role="presentation">
      <a class="nav-link" id="what-tab" data-bs-toggle="tab" href="About3.php" role="tab" aria-controls="what" aria-selected="false">What we do</a>
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
      <a class="nav-link" id="ra-tab" data-bs-toggle="tab" href="About7.php" role="tab" aria-controls="ra" aria-selected="false">Reform Activities</a>
    </li>

  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div class="tab-pane active" id="home" role="tabpanel" aria-labelledby="bi-tab">
      <div class="RightBox">

                          <h1 class="title-cag margin-bottom-10">Brief Introduction</h1>
                          <p>The Office of the Comptroller and Auditor General (OCAG), the Supreme Audit Institution (SAI) of Bangladesh is responsible for auditing government receipts and public spending and to ascertain whether expenditures have yielded value for money in government offices, public bodies and statutory organisations. Appointed by the President of the Republic, the Comptroller and Auditor General (CAG) heads the Supreme Audit Institution. CAG has the mandate to determine the scope and extent of audit. </p>
                          <p>The Constitution of the People's Republic of Bangladesh provides the CAG with complete independence i.e. he is not subject to any other authority having access to all documents required for conducting audit. </p>
                          <p>Directors General, the heads of the audit directorates are responsible for conducting audit on behalf of the CAG in the government offices as well as the public sector undertakings. Audit observations involving serious financial irregularities are initially developed into Advance Paras (AP) and subsequently Draft Paras (DP) after taking into consideration the replies received from the concerned auditee organisation and the Principal Accounting Officer (Secretary of the Ministry/Division). The DPs are incorporated in the audit reports after approval of the CAG. Alongside traditional approach to carry out financial, compliance or regularity audits, the office is now conducting performance audit to determine economy, efficiency and effectiveness in the management of public resources, thereby adding value to the governance issues. </p>
                          <p>In recent years there is an increased use of IT in the government offices, as a result scope for the IT audit has also been increased manifold. To keep pace with the auditees OCAG has created a core IT Audit group and moving forward to creating an IT Audit cell in the OCAG to foster the IT Auditing activities. </p>


                          </div>
</div>




  </div>
</div>





<?php
  include 'inc/footer.php';
?>















    </body>
    </html>
