<?php
include '../connection.php';


$subject =$_POST['subject'];
$std = $_POST['S_Name'];
$status =$_POST['attendance_status'];
$id =$_POST['Id'];


$program=$_POST['C_Name'];





$count1 = count($id);





for($counter=1;$counter<=$count1;$counter++) 
{
    $ids = implode($id);
$student = implode($std);
$stats = implode($status);
$day = date("Y-m-d");
$sql ="INSERT INTO attendance_status(student_id,student_name,subject_name,status,entry_time)VALUES('$ids','$student','$subject','$stats','$day')";

explode(',',$ids);
if ($con->query($sql) === TRUE) {
    echo "<script>alert('Data ENtered Successfully');</script>";
   
} 
else {
    echo "Error: " . $sql . "<br>" . $con->error;
}
    
    
}




$con->close();

?>