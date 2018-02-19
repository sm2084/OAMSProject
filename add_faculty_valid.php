<?php
session_start();
echo "<pre>";
print_r($_POST);
function required($data){
    if(isset($_POST[$data]) && $_POST[$data] != NULL){
        global $$data;
        $$data = $_POST[$data];
    }else{
        global $error;
        $error[$data] = ucfirst($data)." can not be left blank";
    }
}

if(isset($_POST) && $_POST != NULL){
    
}else{
    $error['form'] = "Form is not submitted Properly";
}

if(isset($error) && $error != NULL){
    $_SESSION['data'] = $_POST;
    $_SESSION['error'] = $error;
    header("Location: admin_page.php");
}else{
    foreach ($_POST as $key => $value) {
        required($key);
    }
}


if(isset($error) && $error != NULL){
    $_SESSION['data'] = $_POST;
    $_SESSION['error'] = $error;
    header("Location: admin_page.php");
}else{
    require_once 'formvalidation.php';
    alpha($faculty_fname, "faculty_fname");
    alpha($faculty_lname, "faculty_lname");
    email($faculty_email,"faculty_email");
    anything($faculty_pass, "faculty_pass");
    stringmatch($faculty_pass, $faculty_cpass, 'faculty_cpass');
    string_length($faculty_pass,'faculty_pass');
    number($faculty_phone, "faculty_phone");
    alpha_numeric_symbol($faculty_username, "faculty_username");
    string_length($faculty_username, 'faculty_username');
}
if(isset($error) && $error != NULL){
    $_SESSION['data'] = $_POST;
    $_SESSION['error'] = $error;
    header("Location: admin_page.php");
}else{
    require_once 'alreadyexist_faculty.php';
    if(fusername_exist($username, "faculty_username") && femail_exist($email, "faculty_email")){
        require_once 'dbconn.php';
    $query = "INSERT INTO faculty(faculty_fname,faculty_lname,faculty_email,faculty_Pass,faculty_phone,faculty_username,faculty_dob,faculty_gender,faculty_dept) VALUES('$faculty_fname','$faculty_lname','$faculty_email','$faculty_pass','$faculty_phone','$faculty_username','$faculty_dob','$faculty_gender','$faculty_dept')";                                           
    mysqli_query($link, $query);
    //echo 'success';
    //global $message;
    
    header("location:admin_page.php");
    }else{
        $_SESSION['data'] = $_POST;
        $_SESSION['error'] = $error;
        header("Location: admin_page.php");
    }
}

