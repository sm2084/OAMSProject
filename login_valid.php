<?php
echo "<pre>";
print_r($_POST);
session_start();
$usetype=$_POST['usertype'];
$username = $_POST['username'];
$pass = $_POST['pass'];
$fusername = $_POST['faculty_username'];
$fpass = $_POST['faculty_pass']; 
$susername = $_POST['stud_username'];
$spass = $_POST['stud_pass'];
require_once 'dbconn.php';
if(isset($usetype) && $usetype!=null){
    if($usetype=='Admin'){
        
        $query = "SELECT * FROM user WHERE username = '$username' && pass = '$pass'";
        $result = mysqli_query($link, $query);
        print_r($result);
        if($result->num_rows){
            $data = mysqli_fetch_assoc($result);
        //    echo "You r loggedin";
            $_SESSION['username'] = $_POST['username'];
            header("Location: admin_page.php");
        }else{
            session_start();
            $_SESSION['ad_msger']="Wrong Username/Password";
            header("Location: index.php#section2");
        }
    }
    else if ($usetype=='Faculty') {
       
        $query = "SELECT * FROM faculty WHERE faculty_username = '$fusername' && faculty_pass = '$fpass'";
        $result = mysqli_query($link, $query);
        print_r($result);
        if($result->num_rows){
            $data = mysqli_fetch_assoc($result);
        //    echo "You r loggedin";
            $_SESSION['faculty_username'] = $_POST['faculty_username'];
            header("Location: faculty_page.php");
        }else{
            session_start();
            $_SESSION['ad_msger']="Wrong Username/Password";
            header("Location: index.php#section2");
        }
    }
    elseif ($usetype=='Student') {
        
        $query = "SELECT * FROM student WHERE stud_username = '$susername' && stud_pass = '$spass'";
        $result = mysqli_query($link, $query);
        print_r($result);
        if($result->num_rows){
            $data = mysqli_fetch_assoc($result);
        //    echo "You r loggedin";
            $_SESSION['stud_username'] = $_POST['stud_username'];
            header("Location: student_page.php");
        }else{
            session_start();
            $_SESSION['ad_msger']="Wrong Username/Password";
            header("Location: index.php#section2");
        }
    }
}