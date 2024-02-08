<?php

include 'config.php';

$ID = $_GET['ID'];
$sql = " DELETE FROM `holidaydetails` WHERE ID = $ID " ;
$query = mysqli_query($conn,$sql);




    //echo "Deleted!!!!";




  echo ("<script LANGUAGE='JavaScript'>
    window.alert('Succesfully Record Deleted');
    window.location.href='allholidaydetails.php';
    </script>");




?>