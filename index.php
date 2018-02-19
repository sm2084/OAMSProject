<?php
session_start();
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
  <title>Online Attendance Management</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="./assets/css/index3.css">
  <style>
  body {
      position: relative;height: 100%;overflow-y: hidden;
  }
  .error{color:#FA350B;}
  #section0 {padding-top:50px;height:660px;color: #fff; background-color: #009688;}
  #section1 {padding-top:50px;height:660px;color: #fff;background-image: url(./assets/img/indexbg.jpg);background-repeat: no-repeat;}
  #section2 {margin-top: 20%;padding-top:100px;height:660px;color: #fff;background-image: url(./assets/img/indexbg2.jpg);background-repeat: no-repeat;}
  #section3 {padding-top:50px;height:660px;color: #fff;background-image: url(./assets/img/capture.png);background-repeat: no-repeat;background-size: 100% 100%;}
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
      <a class="navbar-brand" href="#section3">Online Attendance Management System</a>
    </div>
      <div class="collapse navbar-collapse" id="myNavbar">
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#section3"><span></span></a></li>
      <li><a href="#section2"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      <li><a href="#"><span class="glyphicon glyphicon-user"></span>Sign Up  </a></li>
    </ul>
      </div>
    
  </div>
</nav>    
    <div id="section0" class="container-fluid">
    </div>
<div id="section3" class="container-fluid">
    <div class="form-header">
         New Admin Registration
    </div>
    <div class="registration-form"><br>
        <form action="signupvalid.php" method="post">
            <table width="90%" style="margin-left:5%;">
            <tr>
                <td>
                    <input type="text" name="fname" placeholder="Enter First Name" style="width: 100%;height: 40px;text-align: center;border-radius:2px;" value="<?php 
                                    if(isset($data) && $data != NULL){
                                        if(isset($data['fname']) && $data['fname']){
                                            echo $data['fname'];
                                        }
                                    }
                                ?>">
                    <?php
                                    if(isset($error) && $error != NULL){
                                        if(isset($error['fname']) && $error['fname']){
                                            echo "<span class='error'>".$error['fname']."</span><br/>";
                                        }
                                    }
                                ?>
                </td></tr>
            <tr>
                <td>
                    <input type="text" name="lname" placeholder="Enter Last Name" style="width: 100%;height: 40px;text-align: center;border-radius:2px;" value="<?php 
                                    if(isset($data) && $data != NULL){
                                        if(isset($data['lname']) && $data['lname']){
                                            echo $data['lname'];
                                        }
                                    }
                                ?>">
                    <?php
                                    if(isset($error) && $error != NULL){
                                        if(isset($error['lname']) && $error['lname']){
                                            echo "<span class='error'>".$error['lname']."</span><br/>";
                                        }
                                    }
                                ?>
                </td>
            </tr>
            <tr>
                <td><input type="text" name="email" placeholder="Enter Email" style="width: 100%;height: 40px;text-align: center;border-radius:2px;" value="<?php 
                                    if(isset($data) && $data != NULL){
                                        if(isset($data['email']) && $data['email']){
                                            echo $data['email'];
                                        }
                                    }
                                ?>">
                <?php
                                    if(isset($error) && $error != NULL){
                                        if(isset($error['email']) && $error['email']){
                                            echo "<span class='error'>".$error['email']."</span><br/>";
                                        }
                                    }
                                ?>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="password" name="pass" placeholder="Enter New Password" style="width: 100%;height: 40px;text-align: center;border-radius:2px;">
                    <?php
                                    if(isset($error) && $error != NULL){
                                        if(isset($error['pass']) && $error['pass']){
                                            echo "<span class='error'>".$error['pass']."</span><br/>";
                                        }
                                    }
                                ?>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="password" name="cpass" placeholder="Re-enter password" style="width: 100%;height: 40px;text-align: center;border-radius:2px;">
                    <?php
                                    if(isset($error) && $error != NULL){
                                        if(isset($error['cpass']) && $error['cpass']){
                                            echo "<span class='error'>".$error['cpass']."</span><br/>";
                                        }
                                    }
                                ?>
                </td>
            </tr>
            <tr>
                <td><input type="username" name="username" placeholder="Enter Username" style="width: 100%;height: 40px;text-align: center;border-radius:2px;" value="<?php 
                                    if(isset($data) && $data != NULL){
                                        if(isset($data['username']) && $data['username']){
                                            echo $data['username'];
                                        }
                                    }
                                ?>">
                <?php
                                    if(isset($error) && $error != NULL){
                                        if(isset($error['username']) && $error['username']){
                                            echo "<span class='error'>".$error['username']."</span><br/>";
                                        }
                                    }
                                ?>
                </td>
            </tr>
            <tr>
                <td><input type="submit" value="Submit" name="Submit" style="width: 100%;height: 40px;text-align: center;background-color: #FA350B;font-size: 25px;">
 
                </td>
            </tr>
        
        </table>
        </form>
        <?php 
                if(isset($_SESSION['newreg'])){
                echo "<span style='position:absolute;margin-left:30%;margin-top:20%;height: 50px;
                  background-color: #074307;
                  color: white;
                  text-align: center;
                  padding: 10px;
                  font-size: 20px;'>".$_SESSION['newreg']."</span><br/>";
                  unset($_SESSION['newreg']);
                }
            ?>
    </div>
</div>
    
    
    
    
    
    
    
    
    
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>

    <script>
        $(document).ready(function (){
            $("#faculty_username").hide();
                    $("#faculty_pass").hide();
                    $("#stud_username").hide();
                    $("#stud_pass").hide();                    
            $("#usertype").change(function() {
                // foo is the id of the other select box 
                if ($(this).val() === "Admin") {
                    $("#username").show();
                    $("#pass").show();
                }
                else{
                    $("#username").hide();
                    $("#pass").hide();
                }
                if($(this).val() === "Faculty"){
                    $("#faculty_username").show();
                    $("#faculty_pass").show();
                    
                }else{
                    $("#faculty_username").hide();
                    $("#faculty_pass").hide();
                }
                if($(this).val() === "Student"){
                    $("#stud_username").show();
                    $("#stud_pass").show();
                }else{
                    $("#stud_username").hide();
                    $("#stud_pass").hide();
                }
                
            });
        });
        
    </script>
    <script type="text/javascript">
    
    function submitForm()
        {
            document.theForm.submit();
        }    
    </script>
    
<div id="section2">
    
    <div class="login-form" style="margin-top:-40px;">
        <div class="login-form-head">
            <br>
            <h2>Login</h2><br><br>
            <h5>See whats going on in your College today</h5>
        </div>
        <div class="login-body">
            <form name="theForm" action="login_valid.php" method="post">
                <table width="90%" style="margin: 5%;">
                <tr>
                    <td>
                        <span class="glyphicon glyphicon-user" style="color:black;"> Login as</span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <select id="usertype" name="usertype" style="width: 100%;height:40px;border-radius:5px;padding-left: 20px;">
                            <option value="Admin">Admin</option>
                            <option value="Faculty">Faculty</option>
                            <option value="Student">Student</option>
                        </select>    
                    </td>
                </tr>
                <tr>
                    <td>
                        <br><span class="glyphicon glyphicon-user" style="color:black;">Username</span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="text" id="username" required="" name="username" placeholder="Enter Username" style="width:100%;height:40px;border-radius:5px;padding-left: 20px;">
                        <input type="text" id="faculty_username" required="" name="faculty_username" placeholder="Enter Username" style="width:100%;height:40px;border-radius:5px;padding-left: 20px;">
                        <input type="text" id="stud_username" required="" name="stud_username" placeholder="Enter Username" style="width:100%;height:40px;border-radius:5px;padding-left: 20px;">
                    </td>
                </tr>
                <tr>
                    <td>
                        <br><span class="glyphicon glyphicon-eye-open" style="color:black;">Password</span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="password" id="pass" required="" name="pass" placeholder="Enter Password" style="width:100%;height:40px;border-radius:5px;padding-left: 20px;">
                        <input type="password" id="faculty_pass" required="" name="faculty_pass" placeholder="Enter Password" style="width:100%;height:40px;border-radius:5px;padding-left: 20px;">
                        <input type="password" id="stud_pass" required="" name="stud_pass" placeholder="Enter Password" style="width:100%;height:40px;border-radius:5px;padding-left: 20px;">
                    </td>
                </tr>
                <tr>
                    <td>
                        <br><input type="button" name="t1" style="font-size:15px;"value="Submit" onClick="submitForm()" class="btn btn-default btn-success btn-block submit-btn login-btn glyphicon glyphicon-lock">
                    </td>
                    <?php
        if(isset($_SESSION['ad_msger'])){
            echo "<span style='height: 30px;
                  margin-left: 25%;
                  width: 250px;
                  background-color: red;
                  color: white;
                  text-align: center;
                  font-size: 20px;'>".$_SESSION['ad_msger']."</span><br/>";
                  unset($_SESSION['ad_msger']);
        }
        ?>
                </tr>
            </table>
            </form>
        </div>
    </div>
</div>
    
    
    
    
    
    
    
    <div id="section3" style="margin-top: 20%;">
  
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
</body>
</html>
