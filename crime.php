<?php
require_once('config/db.php');
 $dbb = new operations();
 $dbb->crime_commit();

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
               <div class="card">
                            <form class="form-horizontal" method="POST">
                                <div class="card-body">
                                    <h4 class="card-title">Crime Details</h4>
                                          <?php $dbb->display_message(); ?>
                                    <div class="form-group row">
                                        <label for="nin"
                                            class="col-sm-3 text-end control-label col-form-label">NIN</label>
                                        <div class="col-sm-9">
                                            <input type="number" class="form-control" id="nin" name="nin" 
                                                placeholder="Inmate NIN Here">
                                        </div>
                                    </div>
                                     <div class="form-group row">
                                        <label for="address"
                                            class="col-sm-3 text-end control-label col-form-label">Crime Committed</label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control" id="crime" name="crime"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="crime_type" class="col-sm-3 text-end control-label col-form-label">Crime Type</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="crime_type" name="crime_type" 
                                                placeholder="Crime Type Here">
                                        </div>
                                    </div>
                                     
                                    <div class="form-group row">
                                        <label for="doc"
                                            class="col-sm-3 text-end control-label col-form-label">Date of Crime</label>
                                        <div class="col-sm-9">
                                            <input type="date" class="form-control" id="doc" name="doc" 
                                                placeholder="Date of Crime Here">
                                        </div>
                                    </div>
                                
                                       <div class="form-group row">
                                        <label for="toc" class="col-sm-3 text-end control-label col-form-label">Time of Crime</label>
                                        <div class="col-sm-9">
                                            <input type="time" class="form-control" id="toc" name="toc" 
                                                placeholder="Time of Crime Here">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="address"
                                            class="col-sm-3 text-end control-label col-form-label">Addess</label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control" id="address" name="address"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-top">
                                    <div class="card-body">
                                        <button type="submit" class="btn btn-primary"  name="btn_crime">Submit</button>
                                    </div>
                                </div>
                            </form>
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