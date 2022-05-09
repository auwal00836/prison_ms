<?php
require_once('config/db.php');
 $dbb = new operations();
 $dbb->cell_details();

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
                                    <h4 class="card-title">Add Cell Details</h4>
                                    <?php $dbb->display_message(); ?>
                                     <div class="form-group row">
                                        <label for="inmate_nin"
                                            class="col-sm-3 text-end control-label col-form-label">Inmate NIN</label>
                                        <div class="col-sm-9">
                                            <input type="number" class="form-control" id="inmate_nin" name="inmate_nin" 
                                                placeholder="Inmate NIN Here">
                                        </div>
                                    </div>
                            
                                    <div class="form-group row">
                                        <label for="cell_no"
                                            class="col-sm-3 text-end control-label col-form-label">Cell Number</label>
                                        <div class="col-sm-9">
                                            <input type="number" class="form-control" id="cell_no" name="cell_no" 
                                                placeholder="Cell number Here">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="cell_mate"
                                            class="col-sm-3 text-end control-label col-form-label">Cell Mate</label>
                                        <div class="col-sm-9">
                                            <input type="number" class="form-control" id="cell_mate" name="cell_mate" 
                                                placeholder="Cell mate Here">
                                        </div>
                                    </div>
                                     <div class="form-group row">
                                        <label for="jtf"
                                            class="col-sm-3 text-end control-label col-form-label">Jail Time</label>
                                        <div class="col-sm-9">
                                            <input type="date" class="form-control" id="jail_time" name="jail_time" 
                                                placeholder="Jail Time Here">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="r_date"
                                            class="col-sm-3 text-end control-label col-form-label">Realese Date</label>
                                        <div class="col-sm-9">
                                            <input type="date" class="form-control" id="r_date" name="r_date" 
                                                placeholder="Realese Date Here">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="r_time" class="col-sm-3 text-end control-label col-form-label">Realese Time</label>
                                        <div class="col-sm-9">
                                            <input type="time" class="form-control" id="r_date" name="r_time" 
                                                placeholder="Realese Time Here">
                                        </div>
                                    </div>
                                     <div class="form-group row">
                                        <label for="conviction"
                                            class="col-sm-3 text-end control-label col-form-label">Conviction</label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control" id="conviction" name="conviction"></textarea>
                                        </div>
                                    </div>
                                   
                                </div>
                                <div class="border-top">
                                    <div class="card-body">
                                        <button type="submit" class="btn btn-primary" id="btn_cell" name="btn_cell">Submit</button>
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