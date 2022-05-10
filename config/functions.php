<?php
session_start();
require_once('config/db.php');
$db = new dbconfig();

class operations extends dbconfig{
    function test_data(){
        global $db;
          if (isset($_POST['btn_test'])) {
             $nin = $db->check($_POST['nin']);
            $name = $db->check($_POST['name']);

             if ($this->insert_test($nin,$name)) { 

                $this->set_message('<div class="alert alert-success text-center"> Inmate Bio Data Added Successfully</div>');
                 ?>
                    <script>
                        setTimeout(() => window.location.href = "", 2000);
                    </script>

                <?php
                # code...
            }else{
                $this->set_message('<div class="alert alert-danger"> Failed to Add Bio Data! </div>');
            }

          }
    }
     function insert_test($nin,$name){
         global $db;

        $query = "INSERT INTO test(nin,name) VALUES('$nin','$name')";
        $result = mysqli_query($db->connection, $query);

        if ($result) {

            return true;
            # code...
        }else{
            return false;
        }
    }
   //Saving Records
      function bio_data(){
        
        global $db;

        if (isset($_POST['btn_add_bio'])) {

            $status = "1";
            $location=$_FILES["pic"]["name"];
            move_uploaded_file($_FILES["pic"]["tmp_name"],"/images" . $_FILES["pic"]["name"]);           
            $nin = $db->check($_POST['nin']);
            $fname = $db->check($_POST['fname']);
            $oname = $db->check($_POST['oname']);
            $lname = $db->check($_POST['lname']);
            $address = $db->check($_POST['address']);
            $phone = $db->check($_POST['phone']);
            $dob = $db->check($_POST['dob']);
            $marital = $db->check($_POST['status']);
            $nationality = $db->check($_POST['nationality']);
            $state = $db->check($_POST['state_origin']);
            $gender = $db->check($_POST['gender']);
            $state_res = $db->check($_POST['state_res']);
            $r_date = $db->check($_POST['r_date']);
            $jail_time = $db->check($_POST['jail_time']);
            
            # code...

            
            if ($this->insert_record($nin,$fname,$lname,$oname,$address,$phone,$dob,$marital,$state,$gender,$state_res,$nationality,$status,$jail_time,$r_date,$location)) { 

                $this->set_message('<div class="alert alert-success text-center"> Inmate Bio Data Added Successfully</div>');
                 ?>
                    <script>
                        setTimeout(() => window.location.href = "", 2000);
                    </script>

                <?php
                # code...
            }else{
                $this->set_message('<div class="alert alert-danger"> Failed to Add Bio Data! </div>');
            }
        }

    }

     //Inserting Record into the Database
    function insert_record($nin,$fname,$lname,$oname,$address,$phone,$dob,$marital,$state,$gender,$state_res,$nationality,$status,$jail_time,$r_date,$location){

        global $db;

        $query = "INSERT INTO bio_data (nin,fname,lname,oname,address,phone,dob,marital_status,state_origin,gender,state_res,nationality,status,jail_time,release_date,picture) VALUES('$nin','$fname','$lname','$oname','$address','$phone','$dob','$marital','$state','$gender','$state_res','$nationality','$status','$jail_time','$r_date','$location')";
        $result = mysqli_query($db->connection, $query);

        if ($result) {

            return true;
            # code...
        }else{
            return false;
        }
    }
    //function crime commited
 function crime_commit(){
        
        global $db;

        if (isset($_POST['btn_crime'])) {

            //$status = '1';
           /* $location=$db->check($_FILES["pic"]["name"]);
            move_uploaded_file($_FILES["pic"]["tmp_name"],"../images/" . $_FILES["pic"]["name"]);           
            */
            $nin = $db->check($_POST['nin']);
            $crime = $db->check($_POST['crime']);
            $crime_type = $db->check($_POST['crime_type']);
            $doc = $db->check($_POST['doc']);
            $toc = $db->check($_POST['toc']);
            $address = $db->check($_POST['address']);
            
            # code...
            
            if ($this->insert_crime($nin,$crime,$crime_type,$doc,$toc,$address)) { 

                $this->set_message('<div class="alert alert-success text-center"> Inmate Bio Data Added Successfully</div>');
                 ?>
                    <script>
                        setTimeout(() => window.location.href = "", 2000);
                    </script>

                <?php
                # code...
            }else{
                $this->set_message('<div class="alert alert-danger"> Failed to Add Crime Data! </div>');
            }
        }

    }
    function insert_crime($nin,$crime,$crime_type,$doc,$toc,$address){

        global $db;

        $query1 = "INSERT INTO crime (nin,crime_commited,crime_type,crime_date,crime_time,address) VALUES('$nin','$crime','$crime_type','$doc','$toc','$address')";
        $result1 = mysqli_query($db->connection, $query1);

        if ($result1) {

            return true;
            # code...
        }else{
            return false;
        }
    }

      //function victime details
  function victime_details(){
        
        global $db;

        if (isset($_POST['btn_victime'])) {

            //$status = '1';
           /* $location=$db->check($_FILES["pic"]["name"]);
            move_uploaded_file($_FILES["pic"]["tmp_name"],"../images/" . $_FILES["pic"]["name"]);           
            */
            $victime_nin = $db->check($_POST['victime_nin']);
            $inmate_nin = $db->check($_POST['inmate_nin']);
            $fname = $db->check($_POST['fname']);
            $nationality = $db->check($_POST['nationality']);
            $state_origin = $db->check($_POST['state_origin']);
            $gender = $db->check($_POST['gender']);
            $phone = $db->check($_POST['phone']);
            $address = $db->check($_POST['address']);
            $marital_status = $db->check($_POST['status']);
            # code...
            
            if ($this->insert_vdetails($victime_nin,$inmate_nin,$fname,$address,$phone,$nationality,$state_origin,$gender,$marital_status)) { 

                $this->set_message('<div class="alert alert-success text-center"> Victime Details Added Successfully</div>');
                 ?>
                    <script>
                        setTimeout(() => window.location.href = "", 2000);
                    </script>

                <?php
                # code...
            }else{
                $this->set_message('<div class="alert alert-danger"> Failed to Add Victime Details! </div>');
            }
        }

    }

    function insert_vdetails($victime_nin,$inmate_nin,$fname,$address,$phone,$nationality,$state_origin,$gender,$marital_status){

        global $db;

        $query2 = "INSERT INTO victime_details (victime_nin,inmate_nin,name,address,phone,nationality,state,gender,marital_status) VALUES('$victime_nin','$inmate_nin','$fname','$address','$phone','$nationality','$state_origin','$gender','$marital_status')";
        $result2 = mysqli_query($db->connection, $query2);

        if ($result2) {

            return true;
            # code...
        }else{
            return false;
        }
    }
  //function witness details
  function witness_details(){
        
        global $db;

        if (isset($_POST['btn_witness'])) {

            //$status = '1';
           /* $location=$db->check($_FILES["pic"]["name"]);
            move_uploaded_file($_FILES["pic"]["tmp_name"],"../images/" . $_FILES["pic"]["name"]);           
            */
            $witness_nin = $db->check($_POST['witness_nin']);
            $inmate_nin = $db->check($_POST['inmate_nin']);
            $fname = $db->check($_POST['fname']);
            $nationality = $db->check($_POST['nationality']);
            $state_origin = $db->check($_POST['state_origin']);
            $gender = $db->check($_POST['gender']);
            $phone = $db->check($_POST['phone']);
            $address = $db->check($_POST['address']);
            $marital_status = $db->check($_POST['status']);
            $statement = $db->check($_POST['statement']);
            # code...
            
            if ($this->insert_wdetails($witness_nin,$inmate_nin,$fname,$address,$phone,$gender,$marital_status,$nationality,$state_origin,$statement)) { 

                $this->set_message('<div class="alert alert-success text-center"> Witness Details Added Successfully</div>');
                 ?>
                    <script>
                        setTimeout(() => window.location.href = "", 2000);
                    </script>

                <?php
                # code...
            }else{
                $this->set_message('<div class="alert alert-danger"> Failed to Add witness Details! </div>');
            }
        }

    }

    function insert_wdetails($witness_nin,$inmate_nin,$fname,$address,$phone,$gender,$marital_status,$nationality,$state_origin,$statement){

        global $db;

        $query3 = "INSERT INTO witness_details (witness_nin,inmate_nin,name,address,phone,gender,status,nationality,state,statement) VALUES('$witness_nin','$inmate_nin','$fname','$address','$phone','$gender','$marital_status','$nationality','$state_origin','$statement')";
        $result3 = mysqli_query($db->connection, $query3);

        if ($result3) {

            return true;
            # code...
        }else{
            return false;
        }
    }

      //function cell details
  function cell_details(){
        
        global $db;

        if (isset($_POST['btn_cell'])) {

                    
            $nin = $db->check($_POST['inmate_nin']);
            $cell_no = $db->check($_POST['cell_no']);
            $cell_mate = $db->check($_POST['cell_mate']);
            $jail_time = $db->check($_POST['jail_time']);
            $r_date = $db->check($_POST['r_date']);
            $r_time = $db->check($_POST['r_time']);
            $conviction = $db->check($_POST['conviction']);
            
            # code...
            
            if ($this->insert_cell($nin,$cell_no,$cell_mate,$jail_time,$conviction,$r_date,$r_time)) { 

                $this->set_message('<div class="alert alert-success text-center"> Cell Details Added Successfully</div>');
                 ?>
                    <script>
                        setTimeout(() => window.location.href = "", 2000);
                    </script>

                <?php
                # code...
            }else{
                $this->set_message('<div class="alert alert-danger"> Failed to Add Cell Details! </div>');
            }
        }

    }

    function insert_cell($nin,$cell_no,$cell_mate,$jail_time,$conviction,$r_date,$r_time){

        global $db;

        $query6 = "INSERT INTO cell_details (inmate_nin,cell_no,cell_mate,jail_time,    conviction,release_date,release_time) VALUES('$nin','$cell_no','$cell_mate','$jail_time','$conviction','$r_date','$r_time')";
        $result6 = mysqli_query($db->connection, $query6);

        if ($result6) {

            return true;
            # code...
        }else{
            return false;
        }
    }

    //Fetching Records from the Database
    public function fetch_staff_record(){

        global $db;
        $query = "SELECT * FROM staff";
        $result = mysqli_query($db->connection, $query);
        return $result;
    }

    //Getting a particular Record
    public function get_record($id){

        global $db;
        $query = "SELECT * FROM staff WHERE staff_id='$id' ";
        $result = mysqli_query($db->connection, $query);
        return $result;
    }

    //function victime family details
  function victime_family_details(){
        
        global $db;

        if (isset($_POST['btn_victimef'])) {

        
            $family_nin = $db->check($_POST['family_nin']);
            $inmate_nin = $db->check($_POST['inmate_nin']);
            $fname = $db->check($_POST['fname']);
            $nationality = $db->check($_POST['nationality']);
            $state_origin = $db->check($_POST['state_origin']);
            $gender = $db->check($_POST['gender']);
            $phone = $db->check($_POST['phone']);
            $dob = $db->check($_POST['dob']);
            $address = $db->check($_POST['address']);
            $marital_status = $db->check($_POST['status']);
            $relationship = $db->check($_POST['relationship']);
            # code...
            
            if ($this->insert_fdetails($family_nin,$inmate_nin,$fname,$dob,$nationality,$state_origin,$marital_status,$address,$gender,$relationship,$phone)) { 

                $this->set_message('<div class="alert alert-success text-center"> Victime family Details Added Successfully</div>');
                 ?>
                    <script>
                        setTimeout(() => window.location.href = "", 2000);
                    </script>

                <?php
                # code...
            }else{
                $this->set_message('<div class="alert alert-danger"> Failed to Add Victime family Details! </div>');
            }
        }

    }

    function insert_fdetails($family_nin,$inmate_nin,$fname,$dob,$nationality,$state_origin,$marital_status,$address,$gender,$relationship,$phone){

        global $db;

        $query5 = "INSERT INTO victime_family (family_nin,inmate_nin,name,dob,nationality,state,marital_status,address,gender,relationship,phone) VALUES('$family_nin','$inmate_nin','$fname','$dob','$nationality','$state_origin','$marital_status','$address','$gender','$relationship','$phone')";
        $result5 = mysqli_query($db->connection, $query5);

        if ($result5) {

            return true;
            # code...
        }else{
            return false;
        }
    }


      //Add Multiple Staff

    
    // function notify(){


        
    //     $query = "SELECT  jail_time,release_date FROM bio_data   ";
    //     $result = mysqli_query($this->connection, $query);
    //     $data = mysqli_fetch_assoc($result);

    //     if (mysqli_num_rows($result) > 0) {

    //         //$nin = $data['nin'];
    //         //$fname = $data['fname'];
    //         $jail_time = $data['jail_time'];
    //         $r_date = $data['release_date'];


    //         $today = new DateTime('today');


    //     $indate = date_create("$jail_time");
    //     $outdate = date_create("$r_date");

    //     $interval = date_diff($indate,$outdate);
    //     $totalSpent = date_diff($indate,$today);
    //     $totalDue = date_diff($today,$outdate);
    //     $r = "Remain";
       

    //     echo "<br> Total Days: ".$interval->days;
    //     echo "<br> Days Spent: ".$totalSpent->days;
    //     echo "<br> Days Remaining: ".$totalDue->days;

    //         return true;
    //         # code...
    //     }else{
    //         return false;
    //     }   
         
 
    // }


    function notify()
    {

        // Set the server time to that of Nigeria
        date_default_timezone_set("Africa/Lagos");
        
        $query = "SELECT  nin, jail_time, release_date FROM bio_data   ";
        $result = mysqli_query($this->connection, $query);


        /*
            Pseudocode:
            Iterate through the list of inmates
            for each inmate, compute the days spent and number of remaining days
            if the number of remaining days if 0, the inmate's release date is today     
        */ 

        while ($data = mysqli_fetch_assoc($result)) {
            
            $jail_time = $data['jail_time'];
            $r_date = $data['release_date'];


            $today = new DateTime('today');

            $indate = date_create("$jail_time");
            $outdate = date_create("$r_date");

            $interval = date_diff($indate,$outdate);
            $totalSpent = date_diff($indate,$today);
            $totalDue = date_diff($today,$outdate);
            $r = "Remain";
           
            if ($totalDue->days == 0) 
            {
                echo "<br><strong style='font-weight: 2rem; background-color: green; color: white; padding: 5px;'>The inmate with NIN <b style='color: red;'>" . $data['nin'] . "</b> is due for release.</strong>";   
            }         

            echo "<br> Total Days: " . $interval->days;
            echo "<br> Days Spent: " . $totalSpent->days;
            echo "<br> Days Remaining: " . $totalDue->days;

            echo "<hr>";

        }



    }


    public function set_message($msg){

        if (!empty($msg)) {

            $_SESSION['Message'] = $msg;
            # code...
        }else{
            $msg ="";
        }
    }

    public function display_message(){

        if (isset($_SESSION['Message'])) {

            echo $_SESSION['Message'];
            unset($_SESSION['Message']);
            # code...
        }
    }


    

          //Admin Login
    public function admin_login(){
        

        if (isset($_POST['btn_admin_login'])) {


            $_SESSION['username'] = $this->check($_POST['username']);
            $password = $this->check($_POST['password']);
            

            if ($this->app_login($_SESSION['username'], $password)) {

                $this->set_message('<div class="alert alert-success text-center"> Login Successfully!</div>');
                    # code...
                    ?>
                 <script>
                        setTimeout(() => window.location.href = "Dashboard.php", 2000);
                    </script>


                <?php

            }else{
                $this->set_message('<div class="alert alert-danger text-center" id="msg"> Invalid Login Credentials! </div>');
                ?>
                 <script>
                        setTimeout(() => document.getElementById('msg').style.display = "none", 2000);
                    </script>
                <?php
            }
        }

    }


        //Admin Login 
     protected function app_login($a, $b){

        $query = "SELECT * FROM admin_login WHERE username LIKE '$a' AND password LIKE '$b' And pw_status LIKE 'active'";
        $result = mysqli_query($this->connection, $query);
        $data = mysqli_fetch_assoc($result);

        if (mysqli_num_rows($result) > 0) {

               $_SESSION['user'] = $data["user_id"];
               $_SESSION['active'] = 'active';
            return true;
            # code...
        }else{
            return false;
        }

    }

}


?>