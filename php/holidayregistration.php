<?php
    $Name = $_POST['Name'];
    $Date = $_POST['date'];
    $Status = $_POST['Status'];
    
    // database connection
    $conn = new mysqli('localhost', 'root', '', 'textilegarmentmanagementsystem');
    if ($conn->connect_error) {
        die('Connection Failed: ' . $conn->connect_error);
    } else {
        $stmt = $conn->prepare("INSERT INTO holidaydetails (Holiday_Name, Date, Status) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $Name, $Date, $Status);
        $stmt->execute();

       
        echo ("<script LANGUAGE='JavaScript'>
        window.alert('Holiday Added Successfully....');
        window.location.href='../holidayadd.html';
        </script>");
        
        $stmt->close();
        $conn->close();
    }
?>
