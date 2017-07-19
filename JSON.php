<?php
include "connectDB.php";
$data=array();
$q=mysqli_query($conn,"SELECT * FROM `Users`");
while ($row=mysqli_fetch_object($q)){
 $data[]=$row;
}
echo json_encode($data);
?>