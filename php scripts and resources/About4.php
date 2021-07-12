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
      <a class="nav-link active" id="fa-tab" data-bs-toggle="tab" href="About4.php" role="tab" aria-controls="fa" aria-selected="false">Functional Areas</a>
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



                      <h1 class="title-cag margin-bottom-10">Functional Areas</h1>



                      <div class="table-responsive">
                          <table class="table">
                              <thead>
                                  <tr>
                                      <th>Serial</th>
                                      <th>Directorates</th>
                                      <th class="hidden-sm">Auditing Areas</th>
                                      <th>Existing Manpower</th>
                                  </tr>
                              </thead>

                              <tbody>
                                  <tr height="30px">
                                      <td width="5%" align="center">1.</td>
                                      <td width="30%">Directorate of Finance and Appropriation Accounts Audit</td>
                                      <td width="55%">
      Finance Division
      </td>
                                      <td width="10%" align="center">144</td>
                                  </tr>

                                  <tr height="30px">
                                      <td align="center">2.</td>
                                      <td>Directorate of Revenue Audit </td>
                                      <td>Internal Resources Division</td>
                                      <td align="center">183</td>
                                  </tr>

                                  <tr height="30px">
                                      <td align="center">3.</td>
                                      <td>Directorate of Industry, Commerce and Financial Institution Audit</td>
                                      <td>

      Ministry of Industries<br>
      Ministry of Commerce<br>
      Banks and financial Institutions Division<br>
      Ministry of Textiles and Jute<br>
      Ministry of Civil Aviation and Tourism


                                      </td>
                                      <td align="center">420</td>
                                  </tr>

                                  <tr height="30px">
                                      <td align="center">4.</td>
                                      <td>Directorate of Housing and Infrastructure Audit</td>
                                      <td>
      Ministry of Housing and Public Works<br>
      Ministry of Land<br>
      Ministry of Water Resources
      </td>
                                      <td align="center">214</td>
                                  </tr>

                                  <tr height="30px">
                                      <td align="center">5.</td>
                                      <td>
      Directorate of Transport Audit</td>
                                      <td>
      Ministry of Railways<br>
      Road Transport and Highways Division<br>
      Bridges Division<br>
      Ministry of Shipping
      </td>
                                      <td align="center">251</td>
                                  </tr>

                                  <tr height="30px">
                                      <td align="center">6.</td>
                                      <td>Directorate of Foreign Aided Projects Audit</td>
                                      <td>Economic Relations Division</td>
                                      <td align="center">296</td>
                                  </tr>

                                  <tr height="30px">
                                      <td align="center">7.</td>
                                      <td>Directorate of Foreign and Expatriate Welfare Audit</td>
                                      <td>
      Ministry of Expatriates' Welfare and Overseas Employment<br>
      Ministry of Foreign Affairs
      </td>
                                      <td align="center">52</td>
                                  </tr>

                                  <tr height="30px">
                                      <td align="center">8.</td>
                                      <td>Directorate of Science, Information and Technology Audit</td>
                                      <td>
      Ministry of Science and Technology<br>
      Information and Communication Technology Division<br>
      Posts and Telecommunications Division<br>
      Ministry of Information
      </td>
                                      <td align="center">189</td>
                                  </tr>

                                  <tr height="30px">
                                      <td align="center">9.</td>
                                      <td>
      Directorate of  Defense Audit
      </td>
                                      <td>
      Ministry of Defense<br>
      Armed Forces Division
      </td>
                                      <td align="center">179</td>
                                  </tr>





                                  <tr height="30px">
                                      <td align="center">10.</td>
                                      <td>
      Directorate of Health and Family Welfare Audit

      </td>
                                      <td>
       Health Services Division<br>


      Medical Education and Family Welfare Division
      </td>
                                      <td align="center">227</td>
                                  </tr>

                                  <tr height="30px">
                                      <td align="center">11.</td>
                                      <td>
      Directorate of Education, Culture and Religious Affairs Audit

      </td>
                                      <td>

      Secondary and Higher Education Division<br>
      Technical and Madrasa Education Division<br>
      Ministry of Primary and Mass Education<br>
      Ministry of Cultural Affairs<br>
      Ministry of Religious Affairs


                                      </td>
                                      <td align="center">246</td>
                                  </tr>

                                  <tr height="30px">
                                      <td align="center">12.</td>
                                      <td>Directorate of Agriculture and Environment Audit</td>
                                      <td>
      Ministry of Agriculture<br>
      Ministry of Fisheries and Livestock<br>
      Ministry of Environment and Forest.
      </td>
                                      <td align="center">244</td>
                                  </tr>

                                  <tr height="30px">
                                      <td align="center">13.</td>
                                      <td>
      Directorate of Hill Tracts, Rural Development and Local Bodies Audit
      </td>
                                      <td>
       Local Government Division<br>
      Rural Development and Co-operatives Division<br>
      Ministry of Chittagong Hill Tracts Affairs
      </td>
                                      <td align="center">253</td>
                                  </tr>

                                  <tr height="30px">
                                      <td align="center">14.</td>
                                      <td>Directorate of Social Security and Welfare Audit</td>
                                      <td>
      Ministry of Social Welfare<br>
      Ministry of Women and Children Affairs<br>
      Ministry of Youth and Sports<br>
      Ministry of Disaster Management and Relief<br>
      Ministry of Liberation War Affairs<br>
      Ministry of Labour and Employment<br>
      Ministry of Food
      </td>
                                      <td align="center">156</td>
                                  </tr>

                                  <tr height="30px">
                                      <td align="center">15.</td>
                                      <td>Directorate of Public Administration and Constitutional Bodies Audit</td>
                                      <td>
      Office of the Honorable President<br>
      Parliament secretariat<br>
      Bangladesh Supreme Court<br>
      Law and Justice Division<br>
      Legislative and Parliamentary Affairs Division<br>
      Election Commission Secretariat<br>
      Anti-Corruption Commission<br>
      Public Service Commission<br>
      Office of the CAG Bangladesh
      </td>
                                      <td align="center">127</td>
                                  </tr>

                                  <tr height="30px">
                                      <td align="center">16.</td>
                                      <td>Directorate of Power, Energy and Natural Resources Audit</td>
                                      <td>
      Power Division<br>
      Energy and Mineral Resources Division
      </td>
                                      <td align="center">156</td>
                                  </tr>
                                  <tr style="border-bottom:0px;" height="30px">
                                      <td style="border-bottom:0px;" align="center">17.</td>
                                      <td style="border-bottom:0px;">Directorate of IT Audit</td>
                                      <td style="border-bottom:0px;">
      Prime Minister’s Office<br>
      Cabinet Division<br>
      Ministry of  Public Administration<br>
      Public Security division<br>
      Security Service division<br>
      Implementation, Monitoring and Evaluation Division<br>
      Statistics and Informatics Division<br>
      Planning Division
      </td>
                                      <td style="border-bottom:0px;" align="center">113</td>
                                  </tr>
                              </tbody>
                          </table>

                      </div>







                  </div>






</div>




  </div>
</div>





<?php
  include 'inc/footer.php';
?>


















    </body>
    </html>
