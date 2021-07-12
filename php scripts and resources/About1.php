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
        <a class="nav-link active" id="cm-tab" data-bs-toggle="tab" href="About1.php" role="tab" aria-controls="cm" aria-selected="true">Constitutional Mandate</a>
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
    <div class="tab-pane active" id="cm" role="tabpanel" aria-labelledby="cm-tab">
  <div class="col-md-12">
    <div class="Rightbox">

<h1 class="title-cag margin-bottom-10"> Constitutional Mandate</h1>
<p align="center">
  <strong> The Constitution of the</strong>
  <br>
  <strong>People's Republic of Bangladesh</strong>
</p>
<p align="center">
  <strong> Part VIII</strong>
</p>
<p align="center"><strong>THE COMPTROLLER AND  AUDITOR-GENERAL</strong></p>
<p align="center"><strong>&nbsp;</strong></p>
<p><strong>127. &nbsp;&nbsp;&nbsp; Establishment  of office of Auditor-General<br>
                  <br>
                  </strong>(1) There shall be a Comptroller and  Auditor-General of Bangladesh (hereinafter referred to as the Auditor-General)  who shall be appointed by the President.<br>
                    <br>
                    (2)
                    Subject to the provisions of this Constitution  and of any law made by Parliament, the conditions of service of the  Auditor-General shall be such as the President may, by order, determine.</p>
                    <p><strong>128. &nbsp;&nbsp;&nbsp; Functions  of Auditor-General<br>
                                      <br>
                    </strong>(1) The public accounts of the Republic and of all courts  of law and all authorities and officers of the Government shall be audited and  reported on by the Auditor-General and for that purpose he or any person  authorised by him in that behalf shall have access to all records, books,  vouchers, documents, cash, stamps, securities, stores or other government  property in the possession of any person in the service of the Republic.<br>
                            <br>
                  (2)
                            Without prejudice to the provisions of clause (1), if  it is prescribed by law in the case of any body corporate directly established  by law, the accounts of that body corporate shall be audited and reported on by  such person as may be so prescribed.<br>
                        <br>
                                (3)
                                  Parliament may by law require the Auditor-General to  exercise such functions, in addition to those specified in clause (1), as such  law may prescribe, and until provision is made by law under this clause the  President may, by order, make such provision.<br>
                                <br>
                        (4)
                          The Auditor-General, in the exercise of his  functions under clause (1), shall not be subject to the direction or control of  any other person or authority.</p>
                          <p><strong>129. &nbsp;&nbsp;&nbsp; Term of  office of Auditor-General<br>
                                            <br>
                                            </strong>(1) The Auditor-General shall, subject to the provisions  of this article, hold office for five years from the date on which he entered  upon his office, or until he attains the age of sixty five years, whichever is  earlier.<br>
                                              <br>
                                              (2)
                                              The Auditor-General shall not be removed from his  office except in like manner and on the like ground as a judge of the Supreme Court.<br>
                                              <br>
                                              (3)
                                              The  Auditor-General may resign his office by writing under his hand addressed to  the President.<br>
                                              <br>
                                              (4)
                                              On ceasing to hold office the  Auditor-General shall not be eligible for further office in the service of the  Republic.</p>
<p><strong>130. &nbsp;&nbsp;&nbsp; Acting  Auditor-General</strong></p>
<p>At any time when the office  of Auditor-General is vacant, or the President is satisfied that the  Auditor-General is unable to perform his functions on account of absence,  illness or any other cause, the President may appoint a person to act as  Auditor-General and to perform the functions of that office until an  appointment is made under article 127 or, as the case may be until the  Auditor-General resumes the functions of his office.</p>
<p><strong>132. &nbsp;&nbsp;&nbsp; Reports  of Auditor-General to be laid before Parliament </strong></p>
<p>The reports of the  Auditor-General relating to the Reports of public accounts of the Republic shall  be submitted to the President, who shall cause them to be laid before  Parliament.</p>
<p><br><br>
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
