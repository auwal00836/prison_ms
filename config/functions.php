<?php
session_start();
require_once('config/db.php');
$db = new dbconfig();

class operations extends dbconfig{

    //Saving Records
    public function bio_data(){
        
        global $db;

        if (isset($_POST['btn_add_bio'])) {

            $status = 1;
            $nin = $db->check($_POST['nin']);
            $fname = $db->check($_POST['fname']);
            $oname = $db->check($_POST['oname']);
            $lname = $db->check($_POST['lname']);
            $address = $db->check($_POST['address']);
            $phone = $db->check($_POST['phone']);
            $dob = $db->check($_POST['dob']);
            $marital = $db->check($_POST['marital']);
            $state = $db->check($_POST['state']);
            $gender = $db->check($_POST['gender']);
            $state_res = $db->check($_POST['state_res']);
            # code...

            
            if ($this->insert_record($nin,$fname,$oname,$lname,$address,$phone,$dob,$marital,$state,$gender,$state_res,$status)) {

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
    function insert_record($nin,$fname,$oname,$lname,$address,$phone,$dob,$marital,$state,$gender,$state_res,$picture,$status){

        global $db;

        $query = "INSERT INTO bio_data (nin,fname,oname,lname,address,phone,dob,marital_status,state,gender,state_of_residence,picture,status) VALUES('$nin','$fname','$oname','$lname','$address','$phone','$dob','$marital','$state','$gender','$state_res','$picture','$status')";
        $result = mysqli_query($db->connection, $query);

        if ($result) {

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


      //Add Multiple Staff
    public function add_multiple_staff(){
        
        global $db;

        if (isset($_POST['btn_add_multiple_staff'])) {

            $filename = $_FILES["file"]["tmp_name"];
                    $filePath = 'uploads/'.$filename;
                    $tmp_name = $_FILES['file']['tmp_name'];
                    move_uploaded_file($tmp_name, $filePath);

                    if ($_FILES["file"]["size"] > 0) {
                        
                        $file = fopen($filename, "r");
                        while (($column=fgetcsv($file, 1000, ',')) !==FALSE) {
            
                          //echo '<pre>'; print_r($column);


                            if ($this->insert_multiple_record($column[0], $column[1], $column[2], $column[3])) {

                            $this->set_message('<div class="alert alert-success text-center"> Staff Uploaded Successfully</div>');
                             ?>
                                <script>
                                    setTimeout(() => window.location.href = "", 2000);
                                </script>

                                <?php
                                # code...
                            }else{
                                $this->set_message('<div class="alert alert-danger"> Failed to Add record! </div>');
                            }
            
                          // $query2 = mysqli_query($connection, "INSERT INTO staff (staff_name, email, phone, position) VALUES('".$column[0]."', '".$column[1]."', '".$column[2]."', '".$column[3]."')");
                          
                        }
                    }

        }

    }



     //Inserting Record into the Database
    function insert_multiple_record($name, $email, $phone, $position){

        global $db;

        $query = "INSERT INTO staff (staff_name, email, phone, position) VALUES('$name','$email','$phone','$position')";
        $result = mysqli_query($db->connection, $query);

        if ($result) {

            return true;
            # code...
        }else{
            return false;
        }
    }




       //Add Multiple Staff
    public function add_multiple_data(){
        
        global $db;

        if (isset($_POST['btn_add_multiple_data'])) {

            $filename = $_FILES["file"]["tmp_name"];
                    $filePath = 'uploads/'.$filename;
                    $tmp_name = $_FILES['file']['tmp_name'];
                    move_uploaded_file($tmp_name, $filePath);

                    if ($_FILES["file"]["size"] > 0) {
                        
                        $file = fopen($filename, "r");
                        while (($column=fgetcsv($file, 1000, ',')) !==FALSE) {
            
                          //echo '<pre>'; print_r($column);


                            if ($this->insert_multiple_record($column[0], $column[1], $column[2], $column[3])) {

                            $this->set_message('<div class="alert alert-success text-center"> Staff Uploaded Successfully</div>');
                             ?>
                                <script>
                                    setTimeout(() => window.location.href = "", 2000);
                                </script>

                                <?php
                                # code...
                            }else{
                                $this->set_message('<div class="alert alert-danger"> Failed to Add record! </div>');
                            }
            
                          // $query2 = mysqli_query($connection, "INSERT INTO staff (staff_name, email, phone, position) VALUES('".$column[0]."', '".$column[1]."', '".$column[2]."', '".$column[3]."')");
                          
                        }
                    }

        }

    }



     //Inserting Record into the Database
    function insert_multiple_data($name, $email, $phone, $position){

        global $db;

        $query = "INSERT INTO app_biodata (staff_name, email, phone, position) VALUES('$name','$email','$phone','$position')";
        $result = mysqli_query($db->connection, $query);

        if ($result) {

            return true;
            # code...
        }else{
            return false;
        }
    }




      //Upload Timetable
    public function upload_timetable(){
        
        global $db;

        if (isset($_POST['btn_upload_timetable'])) {

            $filename = $_FILES["file"]["tmp_name"];
                    $filePath = 'uploads/'.$filename;
                    $tmp_name = $_FILES['file']['tmp_name'];
                    move_uploaded_file($tmp_name, $filePath);

                    if ($_FILES["file"]["size"] > 0) {
                        
                        $file = fopen($filename, "r");
                        while (($column=fgetcsv($file, 1000, ',')) !==FALSE) {
            
                          //echo '<pre>'; print_r($column);


                            if ($this->insert_timetable($column[0], $column[1], $column[2], $column[3], $column[4])) {

                            $this->set_message('<div class="alert alert-success text-center"> Timetable Uploaded Successfully</div>');
                             ?>
                                <script>
                                    setTimeout(() => window.location.href = "", 2000);
                                </script>

                                <?php
                                # code...
                            }else{
                                $this->set_message('<div class="alert alert-danger"> Failed to Add record! </div>');
                            }
            
                          // $query2 = mysqli_query($connection, "INSERT INTO staff (staff_name, email, phone, position) VALUES('".$column[0]."', '".$column[1]."', '".$column[2]."', '".$column[3]."')");
                          
                        }
                    }

        }

    }


     //Inserting Record into the Database
    function insert_timetable($course, $semester, $level, $date, $time){

        global $db;

        $query = "INSERT INTO timetable (course, semester, level, date, time) VALUES('$course','$semester','$level','$date', '$time')";
        $result = mysqli_query($db->connection, $query);

        if ($result) {

            return true;
            # code...
        }else{
            return false;
        }
    }


      //ALLOCATE 
    public function allocate_invigilator(){
        
        global $db;

        if (isset($_POST['btn_schedule'])) {

                    $noOfStaff = $_POST['staff'];

                    if (empty($noOfStaff)) {
                        // code...
                        return  $this->set_message('<div class="alert alert-danger text-center"> Please select number of Invigilators </div>');
                    }


                    if ($this->schedule($noOfStaff)) {

                         ?>

                      
                        <script>
                             setTimeout(() => document.getElementById('loader').style.display = "block", 1000)
                        </script>

                        <script>
                             setTimeout(() => document.getElementById('loader').style.display = "none", 8000)
                        </script>
                        <script>
                             setTimeout(() => document.getElementById('success').style.display = "block", 9000)
                        </script>
                    
                    
                        <?php
                        # code...
                    }else{
                        $this->set_message('<div class="alert alert-danger"> Failed to Add record! </div>');
                    }
                  
                }

        }


    public function schedule($noOfStaff){

        global $db;

        //TRUNCATE ALLOCATION TABLE
        $sql = "TRUNCATE TABLE `allocation`";
        $res = mysqli_query($db->connection, $sql);

        $staff = [];
        $timetable = [];
        $allocation = [];
        $staffArray = [];
        $currentStaff = [];
        $duplicate = [];
        $hallDuplicate = [];
        $hall =  array('ND-I', 'ND-II', 'HND-I', 'HND-II', 'SOFTWARE-LAB', 'HARDWARE-LAB' );

        //GET LIST OF ALL STAFF
        $staff_data = $this->get_staff();

        //GET ALL EXAMINATION TIME TABLE
        $timetable_data = $this->get_timetable();

         while ($row = mysqli_fetch_array($staff_data)) {
              array_push($staff, $row["staff_name"]);
        }

        while ($roww = mysqli_fetch_array($timetable_data)) {
              array_push($timetable, $roww["timetable_id"]);
        }

        shuffle($hall);
        shuffle($staff);

        for ($i=0; $i <sizeof($timetable); $i++) { 
            // code...
            $arrayDiff = array_diff($staff, $duplicate);
            shuffle($arrayDiff);
            $currentTime = $timetable[$i];
            if (sizeof($timetable) > sizeof($hall)) {
                array_push($hall, $hall[$i]);
                $currentHall = $hall[$i];
            }else{
                $currentHall = $hall[$i];
            }
            for ($j=0; $j <$noOfStaff; $j++) { 
                // code...
                if (is_null(isset($arrayDiff[$j]) ? $arrayDiff[$j] : null) || empty(isset($arrayDiff[$j]) ? $arrayDiff[$j] : null)) {
                    // code...
                    $duplicate = [];
                    $arrayDiff = array_diff($staff, $duplicate);
                    $currentStaff[] = $arrayDiff[$j];
                    array_push($staffArray, $currentStaff[$j]);
                    array_push($duplicate, $arrayDiff[$j]);
                }else{
                    $currentStaff[] = $arrayDiff[$j];
                    array_push($staffArray, $currentStaff[$j]);
                    array_push($duplicate, $arrayDiff[$j]);
                }
                    
                
            }
            $currentAllocation = $currentTime.'/'.$currentHall.'/'.json_encode($staffArray);
            array_push($allocation, $currentAllocation);
            $staffArray = [];
            $currentStaff = [];
}

  foreach ($allocation as $key => $value) {
    // code...
     $staff_list = explode('/', $value)[2];
     $staff_list = preg_replace('/["["]/', "", $staff_list);
     $staff_list = explode(']', $staff_list)[0];
     $hall_list = explode('/', $value)[1];
     $timetable_list = explode('/', $value)[0];
    $res = $this->allocate($timetable_list, $staff_list, $hall_list);
   }

   
        

             if ($res) {
            return true;
            # code...
                }else{

                    return false;
                }
                    
    }

    //Get all timetable for scheduling
    public function get_timetable(){
        global $db;
        $query = "SELECT * FROM timetable ";
        $result = mysqli_query($db->connection, $query);
        return $result;
    }


     //Inserting Record into the Database
    public function allocate($timetable_id, $staff, $hall){

        global $db;


        $query = "INSERT INTO allocation (timetable_id, staff, hall) VALUES('$timetable_id','$staff','$hall')";
        $result = mysqli_query($db->connection, $query);

        if ($result) {

            return true;
            # code...
        }else{
            return false;
        }
    }

    //Fetching Records from the Database
    public function get_staff(){

        global $db;
        $query = "SELECT * FROM staff";
        $result = mysqli_query($db->connection, $query);
        return $result;
    }


    //Get all timetable for scheduling
    public function check_staff_validity($staff_id){
        global $db;
        $query = "SELECT * FROM timetable WHERE staff = '$staff_id' ";
        $result = mysqli_query($db->connection, $query);
        return $result;
    }
    


     //Fetching Records from the Database
    public function fetch_timetable(){

        global $db;
        $query = "SELECT * FROM timetable WHERE time LIKE '8:30 AM'";
        $result = mysqli_query($db->connection, $query);
        return $result;
    }


    //Fetching Records from the Database
    public function fetch_timetable_two(){

        global $db;
        $query = "SELECT * FROM timetable  WHERE time LIKE '11:00 AM'  ORDER BY date ASC";
        $result = mysqli_query($db->connection, $query);
        return $result;
    }


      //Fetching Records from the Database
    public function fetch_allocation_one(){

        global $db;
        $query = "SELECT *, allocation.hall as 'HALL', allocation.staff as 'Invigilators' FROM allocation
        LEFT JOIN timetable ON timetable.timetable_id = allocation.timetable_id WHERE time LIKE '8:30 AM'";
        $result = mysqli_query($db->connection, $query);
        return $result;
    }


    //Fetching Records from the Database
    public function fetch_allocation_two(){

        global $db;
        $query = "SELECT *, allocation.hall as 'HALL', allocation.staff as 'Invigilators' FROM allocation
        LEFT JOIN timetable ON timetable.timetable_id = allocation.timetable_id  WHERE time LIKE '11:00 AM'  ORDER BY date ASC";
        $result = mysqli_query($db->connection, $query);
        return $result;
    }





    //Updating record
    public function update(){

        global $db;

        if (isset($_POST['btn_update'])) {

            $id = $db->check($_POST['user_id']);
            $fname = $db->check($_POST['fname']);
            $username = $db->check($_POST['username']);
            $email = $db->check($_POST['email']);
            $phone = $db->check($_POST['phone']);
            $password = $db->check($_POST['password']);

            if ($this->update_record($id, $fname, $username, $email, $phone, $password)) {

                $this->set_message('<div class="alert alert-success"> Record Updated Successfully</div>');
                 ?>
                    <script>
                        setTimeout(() => window.location.href = "view_record.php", 2000);
                    </script>

                <?php
               
                # code...
            }else{

                $this->set_message('<div class="alert alert-danger"> Failed to update record! </div>');
            }
            # code...
        }

    }

    public function update_record($id, $fname, $username, $email, $phone, $password){

        global $db;
        $query = "UPDATE users SET fullname='$fname', username='$username', email='$email', phone='$phone', pass='$password' WHERE user_id='$id'";
        $result = mysqli_query($db->connection, $query);

        if ($result) {

            return true;
            # code...
        }else{

            return false;
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




     public function get_userID(){

        if (isset($_POST['btn_getID'])) {

            $_SESSION['userID'] = $_POST['btn_getID'];
            header("location: edit.php");

            # code...
        }
    }





    //Delete user record
    public function delete(){

        global $db;

        if (isset($_POST['btn_delete'])) {

            $id = $db->check($_POST['btn_delete']);

            if ($this->delete_record($id)) {

                $this->set_message('<div class="alert alert-success"> Record Deleted Successfully</div>');
                 ?>
                    <script>
                        setTimeout(() => window.location.href = "", 2000);
                    </script>

                <?php
               
                # code...
            }else{

                $this->set_message('<div class="alert alert-danger"> Failed to delete record! </div>');
            }
            # code...
        }

    }




    public function delete_record($id){

        global $db;
        $query = "DELETE FROM users WHERE user_id='$id'";
        $result = mysqli_query($db->connection, $query);

        if ($result) {

            return true;
            # code...
        }else{

            return false;
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