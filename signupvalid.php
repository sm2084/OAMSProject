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
    header("Location: index.php");
}else{
    foreach ($_POST as $key => $value) {
        required($key);
    }
}


if(isset($error) && $error != NULL){
    $_SESSION['data'] = $_POST;
    $_SESSION['error'] = $error;
    header("Location: index.php");
}else{
    require_once 'formvalidation.php';
    alpha($fname, "fname");
    alpha($lname, "lname");
    email($email,"email");
    anything($pass, "pass");
    stringmatch($pass, $cpass, 'cpass');
    string_length($pass,'pass');
//    number($phone, "phone");
    alpha_numeric_symbol($username, "username");
    string_length($username, 'username');
}

if(isset($error) && $error != NULL){
    $_SESSION['data'] = $_POST;
    $_SESSION['error'] = $error;
    header("Location: index.php");
}else{
    require_once 'alreadyexist.php';
    if(username_exist($username, "username") && email_exist($email, "email")){
        require_once 'dbconn.php';
    $query = "INSERT INTO user(fname,lname,email,Pass,username) VALUES('$fname','$lname','$email','$pass','$username')";                                           
    mysqli_query($link, $query);
    global $message;
    $_SESSION['newreg']="Yor are sucessfully registered as new Admin";
    header("location:index.php#section0");
    }else{
        $_SESSION['data'] = $_POST;
        $_SESSION['error'] = $error;
        header("Location: index.php");
    }
}
