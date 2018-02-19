<?php 
session_start();


// Check, if username session is NOT set then this page will jump to login page
if (!isset($_SESSION['faculty_username'])) {
header('Location: index.php');
}
?>
<?php
if(isset($_SESSION['error']) && $_SESSION['error'] != NULL){
    $error = $_SESSION['error'];
    unset($_SESSION['error']);
}
if(isset($_SESSION['data']) && $_SESSION['data'] != NULL){
    $data = $_SESSION['data'];
    unset($_SESSION['data']);
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Online Ateendance Management</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="./assets/css/new.css">
  <style>
  body {
      position: relative;height: 100%;overflow-y: hidden;
  }
  #section1 {padding-top:50px;height:660px;color: #fff;background-image: url(./assets/img/indexbg.jpg);background-repeat: no-repeat;}
  #section2 {padding-top:50px;height:660px;color: #fff;background-repeat: no-repeat;
  #section41 {padding-top:50px;height:100%;color: #fff; background-color: #00bcd4;}
  #section42 {padding-top:50px;height:100%;color: #fff; background-color: #009688;}
  </style>
</head>
<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Online Attendance Management System</a>
    </div>
      <div class="collapse navbar-collapse" id="myNavbar">
       <ul class="nav navbar-nav">
      <li class="active"><a href="#">Username: <?php echo $_SESSION['faculty_username'];  ?></a></li>
      
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#section1">Add Student</a></li>
      <li><a href="#section2">Attendance page</a></li>
      <li><a href="logout.php">Logout</a></li>
    </ul>
      </div>
    
  </div>
</nav>    

    <div id="section1">
  <ul class="nav nav-tabs" style="padding-left: 45%;">
    <li class="active"><a href="#home">Add New Student</a></li>
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
        <div class="add-student">
            <form action="add_student_valid.php" method="post">
                <table style="color:black;">
                <tr>
                    <td>Registration No</td>
                    <td>
                        <input type="text" name="stud_reg_no" placeholder="Enter Registration no" autocomplete="off" value="<?php 
                                    if(isset($data) && $data != NULL){
                                        if(isset($data['stud_reg_no']) && $data['stud_reg_no']){
                                            echo $data['stud_reg_no'];
                                        }
                                    }
                                ?>">
                        <?php
                                    if(isset($error) && $error != NULL){
                                        if(isset($error['stud_reg_no']) && $error['stud_reg_no']){
                                            echo "<br><span class='error'>".$error['stud_reg_no']."</span><br/>";
                                        }
                                    }
                                ?>
                    </td>
                </tr>
                <tr>
                    <td>First Name</td>
                    <td>
                        <input type="text" name="stud_fname" placeholder="FirstName" autocomplete="off" value="<?php 
                                    if(isset($data) && $data != NULL){
                                        if(isset($data['stud_fname']) && $data['stud_fname']){
                                            echo $data['stud_fname'];
                                        }
                                    }
                                ?>">
                        <?php
                                    if(isset($error) && $error != NULL){
                                        if(isset($error['stud_fname']) && $error['stud_fname']){
                                            echo "<br><span class='error'>".$error['stud_fname']."</span><br/>";
                                        }
                                    }
                                ?>                    </td>
                </tr>
                <tr>
                    <td>Last Name</td>
                    <td><input type="text" name="stud_lname" placeholder="Last Name" autocomplete="off" value="<?php 
                                    if(isset($data) && $data != NULL){
                                        if(isset($data['stud_lname']) && $data['stud_lname']){
                                            echo $data['stud_lname'];
                                        }
                                    }
                                ?>">
                        <?php
                                    if(isset($error) && $error != NULL){
                                        if(isset($error['stud_lname']) && $error['stud_lname']){
                                            echo "<br><span class='error'>".$error['stud_lname']."</span><br/>";
                                        }
                                    }
                                ?>
                    </td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>
                        <input type="text" name="stud_email" placeholder="Email" autocomplete="off" value="<?php 
                                    if(isset($data) && $data != NULL){
                                        if(isset($data['stud_email']) && $data['stud_email']){
                                            echo $data['stud_email'];
                                        }
                                    }
                                ?>">
                        <?php
                                    if(isset($error) && $error != NULL){
                                        if(isset($error['stud_email']) && $error['stud_email']){
                                            echo "<br><span class='error'>".$error['stud_email']."</span><br/>";
                                        }
                                    }
                                ?>
                    </td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="password" name="stud_pass" placeholder="Password">
                    <?php
                                    if(isset($error) && $error != NULL){
                                        if(isset($error['stud_pass']) && $error['stud_pass']){
                                            echo "<br><span class='error'>".$error['stud_pass']."</span><br/>";
                                        }
                                    }
                                ?>
                    </td>
                </tr>
                <tr>
                    <td>C-password</td>
                    <td><input type="password" name="stud_cpass" placeholder="re-type password">
                    <?php
                                    if(isset($error) && $error != NULL){
                                        if(isset($error['stud_cpass']) && $error['stud_cpass']){
                                            echo "<br><span class='error'>".$error['stud_cpass']."</span><br/>";
                                        }
                                    }
                                ?>
                    </td>
                </tr>
                <tr>
                    <td>Phone</td>
                    <td>
                        <input type="text" name="stud_phone" placeholder="Contact no" autocomplete="off" value="<?php 
                                    if(isset($data) && $data != NULL){
                                        if(isset($data['stud_phone']) && $data['stud_phone']){
                                            echo $data['stud_phone'];
                                        }
                                    }
                                ?>">
                        <?php
                                    if(isset($error) && $error != NULL){
                                        if(isset($error['stud_phone']) && $error['stud_phone']){
                                            echo "<br><span class='error'>".$error['stud_phone']."</span><br/>";
                                        }
                                    }
                                ?>
                    </td>
                </tr>
                <tr>
                    <td>Username</td>
                    <td>
                        <input type="text" name="stud_username" placeholder="UserName" autocomplete="off" value="<?php 
                                    if(isset($data) && $data != NULL){
                                        if(isset($data['stud_username']) && $data['stud_username']){
                                            echo $data['stud_username'];
                                        }
                                    }
                                ?>">
                        <?php
                                    if(isset($error) && $error != NULL){
                                        if(isset($error['stud_username']) && $error['stud_username']){
                                            echo "<br><span class='error'>".$error['stud_username']."</span><br/>";
                                        }
                                    }
                                ?>
                    </td>
                </tr>
                <tr>
                    <td>Date of Birth</td>
                    <td><input type="date" name="stud_dob" required></td>
                </tr>
                <tr>
                    <td>Gender</td>
                    <td>
                        <input type="radio" name="stud_gender" value="male" checked> Male
                        <input type="radio" name="stud_gender" value="female"> Female  
                    </td>
                </tr>
                <tr>
                    <td>Semester</td>
                    <td>
                        <select name="stud_semester_id" style="height: 30px;width:250px;padding-left: 20px;">
                            
                            <option value="1st">1st</option>
                            <option value="2nd">2nd</option>
                            <option value="3rd">3rd</option>
                            <option value="4th">4th</option>
                            <option value="5th">5th</option>
                            <option value="6th">6th</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Department</td>
                    <td>
                        <select name="stud_dept" style="height: 30px;width:250px;padding-left: 20px;">
                            <option value="CSE">CSE</option>
                            <option value="ME">ME</option>
                            <option value="ETC">ETC</option>
                            <option value="CIVIL">CIVIL</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><input type="submit" name="Submit" value="Submit"></td>
                </tr>
            </table>
            </form>

        </div>
    </div>
</div>
    
    
    
    
<div id="section2">
    <ul class="nav nav-tabs" style="padding-left: 45%;">
        <li class="active"><a href="#GAttendance">Give Attendance</a></li>
        <li><a href="faculty_page1.php">Check Attendance</a></li>
    </ul>
    <div class="tab-content">
        <div id="GAttendance" class="tab-pane fade in active">
            <div class="give-attendance">
                <div class="view">
                    <form action="student_attendance_valid.php" method="post">
                    <?php
                        if(isset($_POST['department'])){
                            include_once 'dbconn.php';
                            $deptValue= $_POST['department'];
                            date_default_timezone_set("Asia/Kolkata");
                            $date=date("Y-m-d");
                            $day=date("l");
                            if($deptValue == 'CSE'){
                                if($day!='Sunday'){
                                    echo '<table style="color:black;background-color:white;width: 100%;border-collapse: collapse;text-align: center;">';
                                    echo '<tr>';
                                    echo '<th style="text-align: center;width: 25%;border-style: groove;background-color: #4CAF50;color: white">'."<h5>Name</h5>".'</th>';
                                    echo '<th style="text-align: center;width: 25%;border-style: groove;background-color: #4CAF50;color: white">'."<h5>Registration No</h5>".'</th>';
                                    echo '<th style="text-align: center;width: 25%;border-style: groove;background-color: #4CAF50;color: white">'."<h5>Date</h5>".'</th>';
                                    echo '<th style="text-align: center;width: 25%;border-style: groove;background-color: #4CAF50;color: white">'."<h5>Present</h5>".'</th>';
                                    echo '</tr>';
                                    $query = "SELECT * from student WHERE stud_dept='CSE'";
                                    $rs=mysqli_query($link,$query);
                                    if($total_found=mysqli_num_rows($rs)){
                                        while ($row = mysqli_fetch_array($rs)){
                                            $id=  $row['stud_reg_no'];
                                            echo '<tr>';
                                            echo '<td style="width: 25%;border-style: groove;">'.$row['stud_fname']." ".$row['stud_lname'].'</td>';
                                            echo '<td style="width: 30%; border-style: groove;">'.$row['stud_reg_no'].'</td>';
                                            echo '<td style="width: 30%; border-style: groove;">'.$date.'</td>';
                                            echo "<td style='width: 30%; border-style: groove;'><input type='radio' name='attend[$id]' value='present'></td>";
                                            echo '</tr>';
                
                                        }
                                        echo '</table>';
                                        echo '<input type="submit" name="submit" value="submit" style="width:100%;text-align:center;color:black;">';
                                        mysqli_free_result($rs);
                                    }else{
                                        echo 'No data found';
                                    }
                                    
                                }else {
                                    echo 'You could not give attendance at '. $day ;
                                }    
                            }
                            if($deptValue == 'ME'){
                                if($day!="Sunday"){
                                    echo '<table style="color:black;background-color:white;width: 100%;border-collapse: collapse;text-align: center;">';
                                    echo '<tr>';
                                    echo '<th style="text-align: center;width: 25%;border-style: groove;background-color: #4CAF50;color: white">'."<h5>Name</h5>".'</th>';
                                    echo '<th style="text-align: center;width: 25%;border-style: groove;background-color: #4CAF50;color: white">'."<h5>Username</h5>".'</th>';
                                    echo '<th style="text-align: center;width: 25%;border-style: groove;background-color: #4CAF50;color: white">'."<h5>Date</h5>".'</th>';
                                    echo '<th style="text-align: center;width: 25%;border-style: groove;background-color: #4CAF50;color: white">'."<h5>Present</h5>".'</th>';
                                    echo '</tr>';
                                    $query = "SELECT * from student WHERE stud_dept='ME'";
                                    $rs=mysqli_query($link,$query);
                                    if($total_found=mysqli_num_rows($rs)){
                                        while ($row = mysqli_fetch_array($rs)){
                                            $id=  $row['stud_reg_no'];
                                            
                                            echo '<tr>';
                                            echo '<td style="width: 25%;border-style: groove;">'.$row['stud_fname']." ".$row['stud_lname'].'</td>';
                                            echo '<td style="width: 30%; border-style: groove;">'.$row['stud_reg_no'].'</td>';
                                            echo '<td style="width: 30%; border-style: groove;">'.$date.'</td>';
                                            echo "<td style='width: 30%; border-style: groove;'><input type='radio' name='attend[$id]' value='present'></td>";
                                            echo '</tr>';
                
                                        }
                                        echo '</table>';
                                        echo '<input type="submit" name="submit" value="submit" style="width:100%;text-align:center;color:black;">';
                                        mysqli_free_result($rs);
                                    }else{
                                        echo 'No data found';
                                    }
                                }else {
                                    echo 'You could not give attendance at '. $day ;
                                }    
                            }
                            if($deptValue == 'CIVIL'){
                                if($day!="Sunday"){
                                    echo '<table style="color:black;background-color:white;width: 100%;border-collapse: collapse;text-align: center;">';
                                    echo '<tr>';
                                    echo '<th style="text-align: center;width: 25%;border-style: groove;background-color: #4CAF50;color: white">'."<h5>Name</h5>".'</th>';
                                    echo '<th style="text-align: center;width: 25%;border-style: groove;background-color: #4CAF50;color: white">'."<h5>Username</h5>".'</th>';
                                    echo '<th style="text-align: center;width: 25%;border-style: groove;background-color: #4CAF50;color: white">'."<h5>Date</h5>".'</th>';
                                    echo '<th style="text-align: center;width: 25%;border-style: groove;background-color: #4CAF50;color: white">'."<h5>Present</h5>".'</th>';
                                    echo '</tr>';
                                    $query = "SELECT * from student WHERE stud_dept='CIVIL'";
                                    $rs=mysqli_query($link,$query);
                                    if($total_found=mysqli_num_rows($rs)){
                                        while ($row = mysqli_fetch_array($rs)){
                                            $id=  $row['stud_reg_no'];
                                            echo '<tr>';
                                            echo '<td style="width: 25%;border-style: groove;">'.$row['stud_fname']." ".$row['stud_lname'].'</td>';
                                            echo '<td style="width: 30%; border-style: groove;">'.$row['stud_reg_no'].'</td>';
                                            echo '<td style="width: 30%; border-style: groove;">'.$date.'</td>';
                                            echo "<td style='width: 30%; border-style: groove;'><input type='radio' name='attend[$id]' value='present'></td>";
                                            echo '</tr>';
                
                                        }
                                        echo '</table>';
                                        echo '<input type="submit" name="submit" value="submit" style="width:100%;text-align:center;color:black;">';
                                        mysqli_free_result($rs);
                                    }else{
                                        echo 'No data found';
                                    }
                                }else {
                                    echo 'You could not give attendance at '. $day ;
                                }    
                            }
                            if($deptValue == 'EC'){
                                if($day!="Sunday"){
                                    echo '<table style="color:black;background-color:white;width: 100%;border-collapse: collapse;text-align: center;">';
                                    echo '<tr>';
                                    echo '<th style="text-align: center;width: 25%;border-style: groove;background-color: #4CAF50;color: white">'."<h5>Name</h5>".'</th>';
                                    echo '<th style="text-align: center;width: 25%;border-style: groove;background-color: #4CAF50;color: white">'."<h5>Username</h5>".'</th>';
                                    echo '<th style="text-align: center;width: 25%;border-style: groove;background-color: #4CAF50;color: white">'."<h5>Date</h5>".'</th>';
                                    echo '<th style="text-align: center;width: 25%;border-style: groove;background-color: #4CAF50;color: white">'."<h5>Present</h5>".'</th>';
                                    echo '</tr>';
                                    $query = "SELECT * from student WHERE stud_dept='EC'";
                                    $rs=mysqli_query($link,$query);
                                    if($total_found=mysqli_num_rows($rs)){
                                        while ($row = mysqli_fetch_array($rs)){
                                            $id=  $row['stud_reg_no'];
                                            echo '<tr>';
                                            echo '<td style="width: 25%;border-style: groove;">'.$row['stud_fname']." ".$row['stud_lname'].'</td>';
                                            echo '<td style="width: 30%; border-style: groove;">'.$row['stud_reg_no'].'</td>';
                                            echo '<td style="width: 30%; border-style: groove;">'.$date.'</td>';
                                            echo "<td style='width: 30%; border-style: groove;'><input type='radio' name='attend[$id]' value='present'></td>";
                                            echo '</tr>';
                
                                        }
                                        echo '</table>';
                                        echo '<input type="submit" name="submit" value="submit" style="width:100%;text-align:center;color:black;">';
                                        mysqli_free_result($rs);
                                    }else{
                                        echo 'No data found';
                                    }
                                }else {
                                    echo 'You could not give attendance at '. $day ;
                                }    
                            }
                        }else{
                            echo '<span style="font-size:25px;">'.'Select department first to submit attendance!!'.'</span>';
                        }
                        
                        
                        echo '</table>';
                    ?>
                        </form>
                    <?php 
                if(isset($_SESSION['msg'])){
                echo "<span style='position:absolute;margin-left:30%;margin-top:20%;height: 50px;
                  background-color: #074307;
                  color: white;
                  text-align: center;
                  padding: 10px;
                  font-size: 20px;'>".$_SESSION['msg']."</span><br/>";
                  unset($_SESSION['msg']);
                }
            ?>
                </div>
                <div class="search">
                    <form action="#section2" method="post">
            <table>
                <tr>
                    Select Department: 
                </tr>
                <tr>
                    <td>
                        <select name="department" style="height:30px;width:100%;">
                            <option disabled="SELECT">SELECT DEPARTMENT</option>
                            <option value="CSE">CSE</option>
                            <option value="ME">ME</option>
                            <option value="CIVIL">CIVIL</option>
                            <option value="EC">EC</option>
                        </select>                           
                    </td>
                </tr>
                <tr>
                    <td>
                        <br><input type="submit" name="Search" value="Search">
                    </td>
                </tr>
            </table>
            </form>
                </div>
                
            </div>
            
        </div>
<!--        <div id="CAttendance" class="tab-pane fade">
            <div class="check-attendance">
                
                <div class="search1">
                   <form action="faculty_page.php#CAttendance" method="post">
            <table>
                <tr>
                    <td>Select Department:</td> 
                </tr>
                <tr>
                    <td>
                        <select name="department" style="height:30px;width:100%;">
                            <option disabled="SELECT">SELECT DEPARTMENT</option>
                            <option value="CSE">CSE</option>
                            <option value="ME">ME</option>
                            <option value="CIVIL">CIVIL</option>
                            <option value="EC">EC</option>
                        </select><br>                           
                    </td>
                </tr>
                <tr>
                    <td>Enter Registration No</td>
                </tr>
                <tr>
                    <td><input type="text" required="" autocomplete="off" name="stud_reg_no" placeholder="Enter registration no"></td>
                </tr>
                <tr>
                    <td>
                        <br><input type="submit" name="Search" value="Search">
                    </td>
                </tr>
            </table>
            </form> 
                </div>
                <div class="view1">
                    //<?php
//                        
//                        echo '<table style="width: 100%;border-collapse: collapse;text-align: center;">';
//                            echo '<tr>';
//                                echo'<th style="text-align:center;width: 25%;border-style: groove;background-color: #4CAF50;color: white">'."<h4>Name</h4>".'</th>';
//                                echo '<th style="text-align:center;width: 30%; border-style: groove;background-color: #4CAF50;color: white">'."<h4>Registration</h4>".'</th>';
//                                echo '<th style="text-align:center;width: 20%;border-style: groove;background-color: #4CAF50;color:white">'."<h4>Total Attendance</h4>".'</th>';
//                                echo '<th style="text-align:center;width: 25%;border-style: groove;background-color: #4CAF50;color: white">'."<h4>Percentage</h4>".'</th>';
//                            echo '</tr>';
//                            echo '<tr>';
//                                echo'<th style="text-align:center;width: 25%;border-style: groove;color: white">'."<h5>Aditya Banerjee</h5>".'</th>';
//                                echo '<th style="text-align:center;width: 30%; border-style: groove;color: white">'."<h5>D141519138</h5>".'</th>';
//                                echo '<th style="text-align:center;width: 20%;border-style: groove;color:white">'."<h5>20</h5>".'</th>';
//                                echo '<th style="text-align:center;width: 25%;border-style: groove;color: white">'."<h5>100</h5>".'</th>';
//                            echo '</tr>';
//                        echo '</table>';
//                    ?>
                </div>
                
            </div>
        </div>-->
    </div>    
</div>
<script>
$(document).ready(function(){
  // Add scrollspy to <body>
  $('body').scrollspy({target: ".navbar", offset: 50});   

  // Add smooth scrolling on all links inside the navbar
  $("#myNavbar a").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    }  // End if
  });
});
</script>
<script>
$(document).ready(function(){
    $(".nav-tabs a").click(function(){
        $(this).tab('show');
    });
});
</script>
</body>
</html>