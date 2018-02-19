<?php

function alpha_space($value, $key){
    if(preg_match("/^[a-zA-Z ]*$/", $value)){
        
    }else{
        global $error;
        $error[$key]= ucfirst($key)." can only contain alphabet and space";
    }
}
function alpha($value,$key){
    if(preg_match("/^[a-zA-Z]*$/",$value)){
        
    }else{
        global $error;
        $error[$key]=  ucfirst($key)." can only contain alphabets";
    }
}
function anything($value, $key){
    if(preg_match("/^[a-zA-Z0-9@#%_-]*$/", $value)){
        
    }else{
        global $error;
        $error[$key] = ucfirst($key)." can only contain letters, numbers, @, #, %,_, and -";
    }
}

function stringmatch($pass, $cpass, $key){
    if($pass === $cpass){
        
    }else{
        global $error;
        $error[$key] = ucfirst($key). " is not matching with the Passsword field";
    }
}
function number($value, $key){
    if(preg_match("/^[0-9]*$/", $value)){
        
    }else{
        global $error;
        $error[$key]=  ucfirst($key)." can only contain number";
    }
}
function email($value,$key){
    if(filter_var($value, FILTER_VALIDATE_EMAIL)){
        
    }else{
        global $error;
        $error[$key]= ucfirst($key)." can only contin email";
    }
}
function alpha_numeric($value, $key){
    if(preg_match("/^[a-zA-Z0-9]*$/", $value)){
		
    }else{
        global $error;
        $error[$key] = ucfirst($key)." can only contain alphabet,number and @ . symbol";
    }
}
function alpha_numeric_symbol($value, $key){
    if(preg_match("/^[a-zA-Z0-9@.]*$/", $value)){
		
    }else{
        global $error;
        $error[$key] = ucfirst($key)." can only contain alphabet,number and @ . symbol";
    }
}
function string_length($value,$key){
    if(strlen($value)>=8 && strlen($value)<=20){
            
        }else{
            global $error;
            $error[$key]= ucfirst($key)." must be 8 charecter";
        }
}

