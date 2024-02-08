<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Form</title>
  <link href="../css/holidayregi.css" type="text/css" rel="stylesheet">
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="js/register.js"></script>
</head>
<body>
<?php
  $ID = $_GET['ID'];

  include_once 'config.php';

  $sql = "SELECT * FROM holidaydetails WHERE ID = '$ID'";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
?>

<!-- Body of Form starts -->
<div class="container">
		<div class="regbox" >
		<label class="reg"><center> Holiday Details Update !</center></label>
	  </div>
      <form action="holidayedit.php" target="" method="POST" >
	  
	  <div class="box">
          <label for="Name" class="fl fontLabel">ID : </label>
    			<div class="new iconBox">
            <i class="fa fa-user" aria-hidden="true"></i>
          </div>
    			<div class="fr">
				<input type="text" name="ID" class="textBox" autofocus="on" value="<?php echo $ID; ?>" readonly>
    			</div>
    			<div class="clr"></div>
    		</div>
	 
	  
	 
	 
	  <!--Name-->
    		<div class="box">
          <label for="Name" class="fl fontLabel">Holiday : </label>
    			<div class="new iconBox">
            <i class="fa fa-user" aria-hidden="true"></i>
          </div>
    			<div class="fr">
    					<input type="text" name="Name" placeholder="Name"
              class="textBox" autofocus="on" required>
    			</div>
    			<div class="clr"></div>
    		</div>
    		<!--name-->


        


    		<!---date.------>
    		<div class="box">
          <label for="date" class="fl fontLabel"> Date : </label>
    			<div class="fl iconBox"><i class="fa fa-calendar" aria-hidden="true"></i></div>
    			<div class="fr">
    					<input type="date" required name="date"  placeholder="date" class="textBox">
    			</div>
    			<div class="clr"></div>
    		</div>
    		<!---date.---->

			<!--Status-->
    		<div class="box">
				<label for="Status" class="fl fontLabel">Status: </label>
					  <div class="new iconBox">
				  <i class="fa fa-map-marker" aria-hidden="true"></i>
				</div>
					  <div class="fr">
							  <input type="text" name="Status" placeholder="status"
					class="textBox" autofocus="on" required>
					  </div>
					  <div class="clr"></div>
				  </div>
				  <!--name-->
    		
    		
    		<!---Submit Button------>
    		<div class="box" >
			
    				<input type="Submit" id="submitbtn" name="Submit" class="submit" value="UPDATE" >
    		</div>
    		<!---Submit Button----->
			
      </form>
  </div>
<?php
    }
  }
?>
<!--Body of Form ends--->
</body>
</html>
