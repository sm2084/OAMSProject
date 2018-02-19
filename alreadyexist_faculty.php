<?php
    require_once 'dbconn.php';
    
    function fusername_exist($username, $key){
        global $link;
        $query = "SELECT * FROM faculty WHERE faculty_username = '$username'";
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
    
    function femail_exist($email, $key){
        global $link;
        $query = "SELECT * FROM faculty WHERE faculty_email = '$email'";
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




