<?php
include_once 'dbconn.php';
            $deptValue= $_POST['stud_dept'];
            $reg=$_POST['stud_reg_no'];
                if($deptValue == 'CSE' && $reg){
                    echo '<table style="margin-left:10%;margin-top:-50%;width: 100%;border-collapse: collapse;text-align: center;">';
                    echo '<tr>';
                    echo'<th style="text-align:center;height:25px;width: 25%;border-style: groove;background-color: #F1C40F;color: white">'."<h5>Name</h5>".'</th>';
                    echo '<th style="text-align:center;height:25px;width: 30%; border-style: groove;background-color: #F1C40F;color: white">'."<h5>Registration</h5>".'</th>';
                    echo '<th style="text-align:center;height:25px;width: 25%;border-style: groove;background-color: #F1C40F;color: white">'."<h5>Total Attendance</h5>".'</th>';
                    echo '</tr>';
                    $query = "SELECT * from student WHERE stud_reg_no='$reg'";
                    $rs=mysqli_query($link,$query);
                    if($total_found=mysqli_num_rows($rs)){
                        while ($row = mysqli_fetch_array($rs)){
                            $id=  $row['stud_dept'];
                            $no[]=  $row['stud_reg_no'];
                            echo '<tr style="color:black;">';
                            echo '<td style="height:25px;background-color:white;width: 25%;border-style: groove;">'.$row['stud_fname']." ".$row['stud_lname'].'</td>';
                            echo '<td style="height:25px;background-color:white;width: 30%; border-style: groove;">'.$row['stud_reg_no'].'</td>';
                            echo '<td style="height:25px;background-color:white;width: 30%; border-style: groove;">'.$row['present'].'</td>';
                            echo '</tr>';

                        }
                        echo '</table>';
                        mysqli_free_result($rs);
                    }else{
                        echo 'No data found';
                    }
                }
                if($deptValue == 'ME' && $reg){
                    echo '<table style="width: 100%;border-collapse: collapse;text-align: center;">';
                    echo '<tr>';
                    echo'<th style="text-align:center;height:25px;width: 25%;border-style: groove;background-color: #F1C40F;color: white">'."<h5>Name</h5>".'</th>';
                    echo '<th style="text-align:center;height:25px;width: 30%; border-style: groove;background-color: #F1C40F;color: white">'."<h5>Registration</h5>".'</th>';
                    echo '<th style="text-align:center;height:25px;width: 25%;border-style: groove;background-color: #F1C40F;color: white">'."<h5>Total Attendance</h5>".'</th>';
                    echo '</tr>';
                    $query = "SELECT * from student WHERE stud_reg_no='$reg'";
                    $rs=mysqli_query($link,$query);
                    if($total_found=mysqli_num_rows($rs)){
                        while ($row = mysqli_fetch_array($rs)){
                            $id=  $row['stud_dept'];
                            $no[]=  $row['stud_reg_no'];
                            echo '<tr style="color:black;">';
                            echo '<td style="height:25px;background-color:white;width: 25%;border-style: groove;">'.$row['stud_fname']." ".$row['stud_lname'].'</td>';
                            echo '<td style="height:25px;background-color:white;width: 30%; border-style: groove;">'.$row['stud_reg_no'].'</td>';
                            echo '<td style="height:25px;background-color:white;width: 30%; border-style: groove;">'.$row['present'].'</td>';
                            echo '</tr>';

                        }
                        echo '</table>';
                        mysqli_free_result($rs);
                    }else{
                        echo 'No data found';
                    }
                }
                if($deptValue == 'CIVIL' && $reg){
                    echo '<table style="width: 100%;border-collapse: collapse;text-align: center;">';
                    echo '<tr>';
                    echo'<th style="text-align:center;height:25px;width: 25%;border-style: groove;background-color: #F1C40F;color: white">'."<h5>Name</h5>".'</th>';
                    echo '<th style="text-align:center;height:25px;width: 30%; border-style: groove;background-color: #F1C40F;color: white">'."<h5>Registration</h5>".'</th>';
                    echo '<th style="text-align:center;height:25px;width: 25%;border-style: groove;background-color: #F1C40F;color: white">'."<h5>Total Attendance</h5>".'</th>';
                    echo '</tr>';
                    $query = "SELECT * from student WHERE stud_reg_no='$reg'";
                    $rs=mysqli_query($link,$query);
                    if($total_found=mysqli_num_rows($rs)){
                        while ($row = mysqli_fetch_array($rs)){
                            $id=  $row['stud_dept'];
                            $no[]=  $row['stud_reg_no'];
                            echo '<tr style="color:black;">';
                            echo '<td style="height:25px;background-color:white;width: 25%;border-style: groove;">'.$row['stud_fname']." ".$row['stud_lname'].'</td>';
                            echo '<td style="height:25px;background-color:white;width: 30%; border-style: groove;">'.$row['stud_reg_no'].'</td>';
                            echo '<td style="height:25px;background-color:white;width: 30%; border-style: groove;">'.$row['present'].'</td>';
                            echo '</tr>';

                        }
                        echo '</table>';
                        mysqli_free_result($rs);
                    }else{
                        echo 'No data found';
                    }
                }
                if($deptValue == 'EC' && $reg){
                    echo '<table style="width: 100%;border-collapse: collapse;text-align: center;">';
                    echo '<tr>';
                    echo'<th style="text-align:center;height:25px;width: 25%;border-style: groove;background-color: #F1C40F;color: white">'."<h5>Name</h5>".'</th>';
                    echo '<th style="text-align:center;height:25px;width: 30%; border-style: groove;background-color: #F1C40F;color: white">'."<h5>Registration</h5>".'</th>';
                    echo '<th style="text-align:center;height:25px;width: 25%;border-style: groove;background-color: #F1C40F;color: white">'."<h5>Total Attendance</h5>".'</th>';
                    echo '</tr>';
                    $query = "SELECT * from student WHERE stud_reg_no='$reg'";
                    $rs=mysqli_query($link,$query);
                    if($total_found=mysqli_num_rows($rs)){
                        while ($row = mysqli_fetch_array($rs)){
                            $id=  $row['stud_dept'];
                            $no[]=  $row['stud_reg_no'];
                            echo '<tr style="color:black;">';
                            echo '<td style="height:25px;background-color:white;width: 25%;border-style: groove;">'.$row['stud_fname']." ".$row['stud_lname'].'</td>';
                            echo '<td style="height:25px;background-color:white;width: 30%; border-style: groove;">'.$row['stud_reg_no'].'</td>';
                            echo '<td style="height:25px;background-color:white;width: 30%; border-style: groove;">'.$row['present'].'</td>';
                            echo '</tr>';

                        }
                        echo '</table>';
                        mysqli_free_result($rs);
                    }else{
                        echo 'No data found';
                    }
                }

?>

