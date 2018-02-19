<?php 
session_start();


// Check, if username session is NOT set then this page will jump to login page
if (!isset($_SESSION['username'])) {
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
  <link rel="stylesheet" type="text/css" href="./assets/css/index3.css">
  <style>
  body {
      position: relative;height: 100%;overflow-y: hidden;
  }
  #section1 {padding-top:50px;height:660px;color: #fff;background-image: url(./assets/img/indexbg.jpg);background-repeat: no-repeat;}
  #section2 {padding-top:50px;height:660px;color: #fff;background-repeat: no-repeat;}
  #section3 {padding-top:50px;height:660px;color: #fff;background-image: url(./assets/img/indexbg3.jpg);background-repeat: no-repeat;}
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
      <li><a href="#">Username: <?php echo $_SESSION['username'];  ?></a></li>
      
    </ul>
    <ul class="nav navbar-nav navbar-right">
        <li class="active"><a href="#">Add Faculty</a></li>
        <li><a href="admin_page.php">Attendance page</a></li>
      <li><a href="logout.php">Logout</a></li>
    </ul>
      </div>
    
  </div>
</nav>    

<div id="section1">
  <ul class="nav nav-tabs" style="padding-left:35%;">
      <li><a href="admin_page.php">Add New Faculty</a></li>
    <li class="active"><a href="#">Remove Faculty</a></li>
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
        <div class="update-faculty">
            <div class="serach">
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                    <span style="font-family: bolder;font-size: 25px;">Select Department: </span><br>
                    <select name="faculty_dept" style="width:180px;height: 25px;color:black;">
                    <option value="CSE">CSE</option>
                    <option value="ME">ME</option>
                    <option value="CIVIL">CIVIL</option>
                    <option value="EC">EC</option>
                    </select><br><br>
                    <span style="font-family: bolder;font-size: 25px;">Enter username: </span><br>
                    <input type="text" name="faculty_username" required="" autocomplete="off" placeholder="Enter Faculty Username" style="color:black;"><br><br>
                    <input type="submit" name="Search" value="Search" style="width: 180px;color: black;">  
                </form>
            </div>
            <div class="update-view">
                <?php
                    if(isset($_POST['Search'])){
                        include_once 'dbconn.php';
                        $deptValue= $_POST['faculty_dept'];
                        $id=$_POST['faculty_username'];
                        if($deptValue=='CSE' && $id){
                            $query = "DELETE from faculty WHERE faculty_username='$id'";
                            mysqli_query($link,$query);
                            $query1 = "DELETE from faculty_attendance WHERE faculty_username='$id'";
                            mysqli_query($link,$query1);
                            $_SESSION['msg1']="You are sucessfully Removed 1 faculty";
                        }
                        if($deptValue=='ME' && $id){
                            $query = "DELETE from faculty WHERE faculty_username='$id'";
                            mysqli_query($link,$query);
                            $query1 = "DELETE from faculty_attendance WHERE faculty_username='$id'";
                            mysqli_query($link,$query1);
                            $_SESSION['msg1']="You are sucessfully Removed 1 faculty";
                        }
                        if($deptValue=='CIVIL' && $id){
                            $query = "DELETE from faculty WHERE faculty_username='$id'";
                            mysqli_query($link,$query);
                            $query1 = "DELETE from faculty_attendance WHERE faculty_username='$id'";
                            mysqli_query($link,$query1);
                            $_SESSION['msg1']="You are sucessfully Removed 1 faculty";
                        }
                        if($deptValue=='EC' && $id){
                            $query = "DELETE from faculty WHERE faculty_username='$id'";
                            mysqli_query($link,$query);
                            $query1 = "DELETE from faculty_attendance WHERE faculty_username='$id'";
                            mysqli_query($link,$query1);
                            $_SESSION['msg1']="You are sucessfully Removed 1 faculty";
                        }
                    }
                ?>
                <?php
                  if(isset($_SESSION['msg1'])){
                  echo "<span style='position:absolute;margin-left:30%;margin-top:-10%;height: 50px;
                  background-color: #074307;
                  color: white;
                  text-align: center;
                  padding: 10px;
                  font-size: 20px;'>".$_SESSION['msg1']."</span><br/>";
                  unset($_SESSION['msg1']);
                } 
                ?>
            </div>
        </div>
    </div>
    <div id="menu1" class="tab-pane fade">
        <div class="update-faculty">
            
        </div>
    </div>
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



