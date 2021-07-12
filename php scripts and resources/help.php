<?php
    include 'inc/header.php';
?>
<?php
    // Session::checkSession();
    if (isset($_GET['action']) && $_GET['action'] == "logout") {
            Session::destroy();
        }
?>

    <section>
      <div class="col-md-12">
        <center>
            <!-- <img src="assets/img/Vision.jpg" alt="..." class="circle"> -->
            <br>
            <br>
            <h1 class="title-cag margin-bottom-10">Getting Started</h1>
            <p> At first there is the Home page. </p>
           <br>
           <p> From Home page,We can go to different pages like Log in,About and Help. </p>
           <br>
           <p> If we go to the Log in page,we can log in with username & password if account was created previously else need to choose the Register option of Log in page to create a new account. </p>
           <br>
           <p> If we choose the About option from Home,we will be able to know different information about "Comptroller & Auditor General Bangladesh".The domains of information will be Brief Introduction,Constitutional Mandate,CAG's Profile,What we do,Functional Areas,Organogram,Human Resources,Reform Activities. </p>
           <br>

       </center>
       <center>
           <!-- <img src="assets/img/mission.jpg" alt="..." class="circle"> -->
           <h1 class="title-cag margin-bottom-10">Linking</h1>
           <p> We have different linking in different pages. At the bottom of the home page there is a linking labelled contact us which contains the list of all employees along with their phone number and email address.From here linking is done with individual employees email. </p>
           <br>
           <p> Another linking is done in the Log in page which links to the user page.If the account is not created previously,then the Register option links to the page to create a new profile. </P>
       </center>

                        <center>
                            <h1 class="title-cag margin-bottom-10">Querries</h1>
                            </center>
                            <p>If There is any problem regarding the use of the website, that is how to navigate, how to connect, or there is any problem Please contact our technical expert via mail. Link is : <a href="mailto: zabulanakakil@gmail.com"> zabulanakakil@gmail.com </a> </p>


                      </div>
                      </div>
                    </section>


                    <?php
                      include 'inc/footer.php';
                    ?>
  </body>
</html>
