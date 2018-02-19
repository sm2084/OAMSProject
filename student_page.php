<?php 
session_start();


// Check, if username session is NOT set then this page will jump to login page
if (!isset($_SESSION['stud_username'])) {
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
  #section1 {padding-top:50px;height:660px;color: #fff;background-image: url(./assets/img/indexbg2.jpg);background-repeat: no-repeat;}
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
      <li><a href="#">Username: <?php echo $_SESSION['stud_username'];  ?></a></li>
      
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="logout.php">Logout</a></li>
    </ul>
      </div>
    
  </div>
</nav>    

<div id="section1">
    <ul class="nav nav-tabs" style="padding-left: 40%;">
        <li class="active"><a href="">Check Attendance</a></li>
    </ul>
    <div class="search-stud-details" style="margin-left:30px;width: 250px;">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
          <span style="font-family: bolder;font-size: 25px;">Select Department: </span><br>
        <select name="stud_dept" style="width:180px;height: 25px;color:black;">
            <option value="CSE">CSE</option>
            <option value="ME">ME</option>
            <option value="CIVIL">CIVIL</option>
            <option value="EC">EC</option>
        </select><br><br>
        <span style="font-family: bolder;font-size: 25px;">Enter Username: </span><br>
        <input type="text" name="stud_reg_no" required="" autocomplete="off" placeholder="Enter Registration No: " style="color:black;"><br><br>
        <input type="submit" name="Search" value="Search" style="width: 180px;color: black;">  
        </form>
    </div>
    <div class="view-attendance" style="position: absolute;left: 400px;margin: 0;margin-top: -10%;">
        <?php
            if(isset($_POST['Search'])){
            include_once 'dbconn.php';
            $deptValue= $_POST['stud_dept'];
            $reg=$_POST['stud_reg_no'];
                if($deptValue == 'CSE' && $reg){
                    echo '<table style="width: 100%;border-collapse: collapse;text-align: center;">';
                    echo '<tr>';
                    echo'<th style="text-align:center;height:25px;width: 25%;border-style: groove;background-color: #F1C40F;color: white">'."<h5>Name</h5>".'</th>';
                    echo '<th style="text-align:center;height:25px;width: 30%; border-style: groove;background-color: #F1C40F;color: white">'."<h5>Registration</h5>".'</th>';
                    echo '<th style="text-align:center;height:25px;width: 25%;border-style: groove;background-color: #F1C40F;color: white">'."<h5>Total Attendance</h5>".'</th>';
                    echo '</tr>';
                    $query = "SELECT * from student WHERE stud_reg_no='$reg'";
                    $rs=mysqli_query($link,$query);
                    if($total_found=mysqli_num_rows($rs)){
                        while ($row = mysqli_fetch_array($rs)){
                            $id=  $row['stud_dept'];
                            $no[]=  $row['stud_reg_no'];
                            echo '<tr style="color:black;">';
                            echo '<td style="height:25px;background-color:white;width: 25%;border-style: groove;">'.$row['stud_fname']." ".$row['stud_lname'].'</td>';
                            echo '<td style="height:25px;background-color:white;width: 30%; border-style: groove;">'.$row['stud_username'].'</td>';
                            echo '<td style="height:25px;background-color:white;width: 30%; border-style: groove;">'.$row['present'].'</td>';
                            echo '</tr>';

                        }
                        echo '</table>';
                        mysqli_free_result($rs);
                    }else{
                        echo 'No data found';
                    }
                }
                if($deptValue == 'ME' && $reg){
                    echo '<table style="width: 100%;border-collapse: collapse;text-align: center;">';
                    echo '<tr>';
                    echo'<th style="text-align:center;height:25px;width: 25%;border-style: groove;background-color: #F1C40F;color: white">'."<h5>Name</h5>".'</th>';
                    echo '<th style="text-align:center;height:25px;width: 30%; border-style: groove;background-color: #F1C40F;color: white">'."<h5>Registration</h5>".'</th>';
                    echo '<th style="text-align:center;height:25px;width: 25%;border-style: groove;background-color: #F1C40F;color: white">'."<h5>Total Attendance</h5>".'</th>';
                    echo '</tr>';
                    $query = "SELECT * from student WHERE stud_reg_no='$reg'";
                    $rs=mysqli_query($link,$query);
                    if($total_found=mysqli_num_rows($rs)){
                        while ($row = mysqli_fetch_array($rs)){
                            $id=  $row['stud_dept'];
                            $no[]=  $row['stud_reg_no'];
                            echo '<tr style="color:black;">';
                            echo '<td style="height:25px;background-color:white;width: 25%;border-style: groove;">'.$row['stud_fname']." ".$row['stud_lname'].'</td>';
                            echo '<td style="height:25px;background-color:white;width: 30%; border-style: groove;">'.$row['stud_reg_no'].'</td>';
                            echo '<td style="height:25px;background-color:white;width: 30%; border-style: groove;">'.$row['present'].'</td>';
                            echo '</tr>';

                        }
                        echo '</table>';
                        mysqli_free_result($rs);
                    }else{
                        echo 'No data found';
                    }
                }
                if($deptValue == 'CIVIL' && $reg){
                    echo '<table style="width: 100%;border-collapse: collapse;text-align: center;">';
                    echo '<tr>';
                    echo'<th style="text-align:center;height:25px;width: 25%;border-style: groove;background-color: #F1C40F;color: white">'."<h5>Name</h5>".'</th>';
                    echo '<th style="text-align:center;height:25px;width: 30%; border-style: groove;background-color: #F1C40F;color: white">'."<h5>Registration</h5>".'</th>';
                    echo '<th style="text-align:center;height:25px;width: 25%;border-style: groove;background-color: #F1C40F;color: white">'."<h5>Total Attendance</h5>".'</th>';
                    echo '</tr>';
                    $query = "SELECT * from student WHERE stud_reg_no='$reg'";
                    $rs=mysqli_query($link,$query);
                    if($total_found=mysqli_num_rows($rs)){
                        while ($row = mysqli_fetch_array($rs)){
                            $id=  $row['stud_dept'];
                            $no[]=  $row['stud_reg_no'];
                            echo '<tr style="color:black;">';
                            echo '<td style="height:25px;background-color:white;width: 25%;border-style: groove;">'.$row['stud_fname']." ".$row['stud_lname'].'</td>';
                            echo '<td style="height:25px;background-color:white;width: 30%; border-style: groove;">'.$row['stud_reg_no'].'</td>';
                            echo '<td style="height:25px;background-color:white;width: 30%; border-style: groove;">'.$row['present'].'</td>';
                            echo '</tr>';

                        }
                        echo '</table>';
                        mysqli_free_result($rs);
                    }else{
                        echo 'No data found';
                    }
                }
                if($deptValue == 'EC' && $reg){
                    echo '<table style="width: 100%;border-collapse: collapse;text-align: center;">';
                    echo '<tr>';
                    echo'<th style="text-align:center;height:25px;width: 25%;border-style: groove;background-color: #F1C40F;color: white">'."<h5>Name</h5>".'</th>';
                    echo '<th style="text-align:center;height:25px;width: 30%; border-style: groove;background-color: #F1C40F;color: white">'."<h5>Registration</h5>".'</th>';
                    echo '<th style="text-align:center;height:25px;width: 25%;border-style: groove;background-color: #F1C40F;color: white">'."<h5>Total Attendance</h5>".'</th>';
                    echo '</tr>';
                    $query = "SELECT * from student WHERE stud_reg_no='$reg'";
                    $rs=mysqli_query($link,$query);
                    if($total_found=mysqli_num_rows($rs)){
                        while ($row = mysqli_fetch_array($rs)){
                            $id=  $row['stud_dept'];
                            $no[]=  $row['stud_reg_no'];
                            echo '<tr style="color:black;">';
                            echo '<td style="height:25px;background-color:white;width: 25%;border-style: groove;">'.$row['stud_fname']." ".$row['stud_lname'].'</td>';
                            echo '<td style="height:25px;background-color:white;width: 30%; border-style: groove;">'.$row['stud_reg_no'].'</td>';
                            echo '<td style="height:25px;background-color:white;width: 30%; border-style: groove;">'.$row['present'].'</td>';
                            echo '</tr>';

                        }
                        echo '</table>';
                        mysqli_free_result($rs);
                    }else{
                        echo 'No data found';
                    }
                }
            }else{
                echo '<span style="color: #08088A;">'."<h3>First Search to check Attendance</h3>".'</span>';
            }
        ?>
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



