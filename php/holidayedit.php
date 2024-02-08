<?php
    include_once 'config.php';

    if (isset($_POST['Submit'])) {
        // Rest of the code for processing the form data
    }
?>

<?php
	$ID = $_POST['ID'];
	$Name = $_POST['Name'];
    $Date = $_POST['date'];
    $Status = $_POST['Status'];
	
	
	
	if (mysqli_query($conn, "UPDATE holidaydetails SET `Holiday_Name`='".$Name."', `Date`='".$Date."', `Status`='".$Status."' WHERE `ID`='".$ID."'")){

		echo "<script>alert('Data Inserted Succesfully')</script>";
		header("Location:allholidaydetails.php");
		//can redirect to the main page.....
	}
	else{
		echo"<script>alert('Error in inserting records')</script>";
	}
	
	mysqli_close($conn);
?>
