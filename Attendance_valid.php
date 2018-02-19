<?php
session_start();
   echo '<pre>';
   print_r($_POST);
include_once("dbconn.php"); //add here your db config file
extract($_POST);
//After Click on Submit Call this
if(isset($_POST[$submit]))
{
        date_default_timezone_set("Asia/Kolkata");
                            $date=date("Y-m-d");
	foreach($attend as $atn_key=>$atn_value)
	{
		if($atn_value=="present")
		{
			$upd_qry="INSERT INTO faculty_attendance(faculty_username,present,date) VALUES('$atn_key','1','$date')";
			mysqli_query($link, $upd_qry);
                        $upd_qry1="UPDATE faculty SET present=present+1 where faculty_username='".$atn_key."'";
			mysqli_query($link, $upd_qry1);
		}
        }
        $_SESSION['msg']="You are sucessfully submit attendance";
        header("location:admin_page.php#section2");
}

