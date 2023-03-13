<?php
session_start();
if(isset($_POST['submit']))
    {
        global $month;
        global $select;
        $month = $_POST['month'];
        $check = strtotime(date_format(date_create($_POST['month']),'F Y'));
        include('../include/dbfees.php');
        $query = mysqli_query($confees,"SELECT * FROM student_fees");
        while ($row = mysqli_fetch_assoc($query)) 
        {
            $id = $row['appli_no'];
            $name = $row['name'];
            $date = strtotime(date_format(date_create($row['date']),'F Y'));
            if($date == $check)
            {
                $result = mysqli_query($confees,"INSERT INTO $month (appli_no,name,amount,status) values ($id,'$name',3200,0)");
                // if(!$result)
                // {
                //     echo mysqli_error($confees);
                // }
            }
            if ($date <= $check ) 
            {
                $select = $row['appli_no'];
                $query2 = mysqli_query($confees,"SELECT * FROM $month");
                while ($row2 = mysqli_fetch_assoc($query2)) 
                {
                    if ($row2['appli_no'] != $select) 
                    {
                       $success = mysqli_query($confees,"INSERT INTO $month (appli_no , name ,amount ,status) values ('$id','$name',3200,0)");
                    //    if(!isset($success))
                    //    {
                    //     echo mysqli_error($confees);
                    //    }
                    }
                    # code...
                }
            }
            
        }
       
    }
    ?>
 