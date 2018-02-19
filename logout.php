<?php

// Inialize session
    session_start();
    if(isset($_SESSION['username'])){
        unset($_SESSION['username']);
        header('Location: index.php#section2');
    }elseif(isset($_SESSION['faculty_username'])){
        unset($_SESSION['faculty_username']);
        header('Location: index.php#section2');
    }elseif (isset ($_SESSION[stud_username])) {
        unset($_SESSION['stud_username']);
        header('Location: index.php#section2');
    }
?>
