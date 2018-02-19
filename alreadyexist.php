<?php
    require_once 'dbconn.php';
    
    function username_exist($username, $key){
        global $link;
        $query = "SELECT * FROM user WHERE username = '$username'";
        $result = mysqli_query($link, $query);
        if($result->num_rows){
            global $$key;
            global $error;
            $error[$key] = ucfirst($key). " is already exist";
            return FALSE;
        }else{
            return TRUE;
        }
    }
    
    function email_exist($email, $key){
        global $link;
        $query = "SELECT * FROM user WHERE email = '$email'";
        $result = mysqli_query($link, $query);
        if($result->num_rows){
            global $$key;
            global $error;
            $error[$key] = ucfirst($key). " is already exist";
            return FALSE;
        }else{
            return TRUE;
        }
    }
