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
    header("Location: faculty_page.php#section1");
}else{
    foreach ($_POST as $key => $value) {
        required($key);
    }
}


if(isset($error) && $error != NULL){
    $_SESSION['data'] = $_POST;
    $_SESSION['error'] = $error;
    header("Location: faculty_page.php#section1");
}else{
    require_once 'formvalidation.php';
    alpha_numeric($stud_reg_no, "stud_reg_no");
    alpha($stud_fname, "stud_fname");
    alpha($stud_lname, "stud_lname");
    email($stud_email,"stud_email");
    anything($stud_pass, "stud_pass");
    stringmatch($stud_pass, $stud_cpass, 'stud_cpass');
    string_length($stud_pass,'stud_pass');
    number($stud_phone, "stud_phone");
    alpha_numeric_symbol($stud_username, "stud_username");
    string_length($stud_username, 'stud_username');
}
if(isset($error) && $error != NULL){
    $_SESSION['data'] = $_POST;
    $_SESSION['error'] = $error;
    header("Location: faculty_page.php#section1");
}else{
    require_once 'alreadyexist_student.php';
    if(fusername_exist($username, "stud_username") && femail_exist($email, "stud_email")){
        require_once 'dbconn.php';
    $query = "INSERT INTO student(stud_reg_no,stud_semester_id,stud_fname,stud_lname,stud_email,stud_Pass,stud_phone,stud_username,stud_dob,stud_gender,stud_dept)"
            . " VALUES('$stud_reg_no','$stud_semester_id','$stud_fname','$stud_lname','$stud_email','$stud_pass','$phone','$stud_username','$stud_dob','$stud_gender','$stud_dept')";                                           
    mysqli_query($link, $query);
    //echo 'success';
    //global $message;
    
    header("location:faculty_page.php");
    }else{
        $_SESSION['data'] = $_POST;
        $_SESSION['error'] = $error;
        header("Location: faculty_page.php");
    }
}


