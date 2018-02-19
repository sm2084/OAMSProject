<?php
$dbhost= "localhost";
$dbuser="root";
$dbpass="";
$dbname="logintest";

if($link=mysqli_connect($dbhost, $dbuser, $dbpass, $dbname)){
    if(mysqli_select_db($link, $dbname)){   
    }else{
        die("database not found");
    }
}else{
    die("Database not connected");
}


