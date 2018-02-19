<?php
    require_once 'dbconn.php';
    
    function fusername_exist($stud_username, $key){
        global $link;
        $query = "SELECT * FROM student WHERE stud_username = '$stud_username'";
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
    
    function femail_exist($stud_email, $key){
        global $link;
        $query = "SELECT * FROM student WHERE stud_email = '$stud_email'";
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


