<?php
require_once('config/db.php');
 $dbb = new operations();
 $dbb->notify();

?>
<!DOCTYPE html>
<html lang="en-US" dir="ltr">

  <?php 
  include 'inc/header.php'; ?>
  <body>

    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">

     <?php include 'inc/admin_navbar.php'; ?>


       <section  style="padding-bottom: 0px; margin-top: -40px">
      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->



      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="bg-100 py-5">

        <div class="container-lg">
          <div class="row justify-content-center">
            <div class="col-md-8 col-lg-5 text-center mb-1">
              <h2>Administrator Dashboard</h2>
              <p>Welcome admin, you are entitled to manage staff, upload examination timetable and allocation of examination invigilation .</p>
            </div>
          </div>
          <div class="row justify-content-center">
            
            <div class="col-md-4 pt-2 px-md-2 px-lg-3">
              <div class="card h-100">
                <div class="card-body d-flex flex-column justify-content-around mx-auto">
                  <div class="text-center pt-5"><img class="img-fluid" src="assets/img/icons/pricing.png" alt="" />
                    <h5 class="my-4">Notifications</h5>
                  </div>
                 
                </div>
              </div>
            </div>
           
          </div>
        </div><!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->




    </main>
    <!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->




    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
   <?php include 'inc/footer.php'; ?>
  </body>

</html>