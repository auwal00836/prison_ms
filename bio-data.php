<?php
require_once('config/db.php');
 $dbb = new operations();
 $dbb->bio_data();

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
                            <form class="form-horizontal" method="POST" enctype="multipart/form-data">
                                <div class="card-body">
                                    <h4 class="card-title">Inmate Bio Data</h4>
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
                                        <label for="fname"
                                            class="col-sm-3 text-end control-label col-form-label">First Name</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="fname" name="fname" 
                                                placeholder="First Name Here">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-end control-label col-form-label">Last
                                            Name</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="lname" name="lname" 
                                                placeholder="Last Name Here">
                                        </div>
                                    </div>
                                     <div class="form-group row">
                                        <label for="oname" class="col-sm-3 text-end control-label col-form-label">Other
                                            Name</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="oname" name="oname" 
                                                placeholder="Other Name Here">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="phone"
                                            class="col-sm-3 text-end control-label col-form-label">Phone</label>
                                        <div class="col-sm-9">
                                            <input type="number" class="form-control" id="phone" name="phone" 
                                                placeholder="Phone number Here">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="dob"
                                            class="col-sm-3 text-end control-label col-form-label">Date of Birth</label>
                                        <div class="col-sm-9">
                                            <input type="date" class="form-control" id="dob" name="dob" 
                                                placeholder="Date of Birth Here">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="status"
                                            class="col-sm-3 text-end control-label col-form-label">Marital Status</label>
                                        <div class="col-sm-9">
                                           <select class="select2 form-select shadow-none"
                                            style="width: 100%; height:36px;" id="status" name="status">
                                            <option>Select</option>
                                            <optgroup label="Select Marital Status">
                                                <option value="single">Sigle</option>
                                                <option value="married">Married</option>
                                                <option value="devorce">Devorce</option>
                                            </optgroup>
                                          </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="status"
                                            class="col-sm-3 text-end control-label col-form-label">Gender</label>
                                        <div class="col-sm-9">
                                           <select class="select2 form-select shadow-none"
                                            style="width: 100%; height:36px;" id="gender" name="gender">
                                            <option>Select</option>
                                            <optgroup label="Select Gender">
                                                <option value="male">Male</option>
                                                <option value="female">Female</option>
                                            </optgroup>
                                          </select>
                                        </div>
                                    </div>
                                       <div class="form-group row">
                                        <label for="nationality" class="col-sm-3 text-end control-label col-form-label">Nationality</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="nationality" name="nationality" 
                                                placeholder="Nationality Name Here">
                                        </div>
                                    </div>
                                       <div class="form-group row">
                                        <label for="state_origin" class="col-sm-3 text-end control-label col-form-label">State of Origin</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="state_origin" name="state_origin" 
                                                placeholder="State of Origin Name Here">
                                        </div>
                                    </div>
                                       <div class="form-group row">
                                        <label for="state_res" class="col-sm-3 text-end control-label col-form-label">State of Rescident</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="state_res" name="state_res" 
                                                placeholder="State of Rescident Name Here">
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
                                        <label for="address"
                                            class="col-sm-3 text-end control-label col-form-label">Contact Addess</label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control" id="address" name="address"></textarea>
                                        </div>
                                    </div>
                                     <div class="form-group row">
                                    <label class="col-md-3">File Upload</label>
                                    <div class="col-md-9">
                                        <div class="custom-file">
                                            <input type="file" id="pic" name="pic" accept="image/*" 
                                                >
                                            
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <div class="border-top">
                                    <div class="card-body">
                                        <button type="submit" class="btn btn-primary" name="btn_add_bio">Submit</button>
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