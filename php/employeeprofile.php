<?php 


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="../css/employeeprofile.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/slideshow.css">
    
   
 <style type="text/css">
      .usern {
          font-size: 25px;
          font-family: Arial;
          width: 45%;
          margin: 20px auto;
          text-align: center;
      }
      .wrapper{
          position: absolute;
          top: 50%;
          margin-top:40px;
          left: 34%;
          height:60%;
          margin-left:170px ;
          border-radius: 15px; 
          background:#f3e7e7; 
          opacity: 80%;    
          transform: translate(-50%,-50%);
          width: 50%;
          display: flex;
          box-shadow: -15px -15px 15px rgba(255, 255, 255, 0.2),
                       15px 15px 15px rgba(0, 0, 0, 0.1),
                       inset -5px -15px 15px rgba(255, 255, 255, 0.2),
                       inset 5px 5px 5px rgba(0, 0, 0, 0.2);
      }
      .wrapper .left{
          width: 30%;
          background:#3A5795; 
          padding: 30px 25px;
          border-top-left-radius: 5px;
          border-bottom-left-radius: 5px;
          color: #fff;
          
          border-radius: 15px;     
      }
      .wrapper .left img{
          border-radius: 5px;
          margin-bottom: 10px;
      }
      .wrapper .right {
          width: 400px;
          margin-top: 10px;
          font-size: 15px;
          text-align: center;
      }
      .wrapper .right h3 {
          text-align: center;
      }
      .wrapper .right hr {
          width: %;
      }
      .wrapper .right p {
          margin-bottom: 10px;
      }
      hr{
          border:1px solid black;
          width: 50%;
      }
      .btn1{
          margin-left: 90px;
          padding: 5px;
          width: 10%;
          background-color:#6e83b3;
          border: none;
          border-radius: 7px;
          color: white;
      }
      .btn1:hover{
          color: rgb(235, 235, 235);
          background-color: rgb(85, 149, 179);
      }
      .btn2{
          margin-left: 90px;
          padding: 5px;
          width: 10%;
          background-color:#6e83b3;
          border: none;
          color: white;
          border-radius: 7px;
      }
      .btn3{
          margin-left: 10px;
          padding: 10px;
          width:70px;
          background-color:#6e83b3;
          border: none;
          color: white;
          border-radius: 7px;
      }
      .btn4{
          background-color:#6e83b3;
          border: none;
          color: white;
          border-radius: 7px;
          height: 10%;
          padding: 5px;
      }
      .data{
          width: 50%;
      }
      .bu{
          margin-top: 50px;
          padding: 30px 355px; 
      }
  </style>


</head>
<body>



    <?php 
session_start();

  include("config.php");
  include("function.php");

   $user_data = check_login($conn);

?>


 
<div class="usern"><center><b>Performance And Salary</center></b></div>
<div class="slideshow-container">
  
      <img class="mySlides fade" src="../images/dis2.jpg">
  	  <img class="mySlides fade" src="../images/dis1.jpg" >
	  <img class="mySlides fade" src="../images/dis3.jpg" >
    <img class="mySlides fade" src="../images/dis4.jpg" >
    <img class="mySlides fade" src="../images/dis5.jpg" >


		
</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script src="../js/slideshowprofile.js"></script>
</div>
<!----------------------------------------------------------------->

 
            <div class="wrapper">
              <div class="left">
                  
                 <!-- <button class="btn4">Choise a imge </button>-->
                   <h1><b><?php echo $user_data['firstname'];?>&nbsp;<?php echo $user_data['lastname'];?></b></h1><br>
                   <h2><b><p>Join Date :-<?php echo $user_data['join_date'];?>  </p></h2><br>
                   <h2><b><p>Employee ID :-<?php echo $user_data['id'];?></p></h2><br>
                   <h2><b><p>Worked hours per month :-<?php echo $user_data['work_hours'];?>  </p></h2><br>
                   <h2><b><p>Worked OT hours per month :-<?php echo $user_data['work_othours'];?>  </p></h2><br>
                  
              </div>
              



<!--information-->
        <div class="right">

                  
           <h3>SALARY INFORMATION</h3><br/>  
           <p>Basic Pay: LKR&nbsp;&nbsp;&nbsp; <?php echo number_format($user_data['basic_pay'], 2); ?></p><br>
           <p>Allowances: LKR &nbsp;&nbsp;&nbsp;<?php echo number_format($user_data['allowances'], 2); ?></p><br>
           <p>Earnings: LKR&nbsp;&nbsp;&nbsp; <?php echo number_format($user_data['earinings'], 2); ?></p><br>
           <p>Deductions: LKR&nbsp;&nbsp;&nbsp; <?php echo number_format($user_data['deductions'], 2); ?></p><br>
           <p>Net Salary: LKR&nbsp;&nbsp;&nbsp; <?php echo number_format($user_data['net_salary'], 2); ?></p><br>
           <p>Total Salary: LKR&nbsp;&nbsp;&nbsp; <?php echo number_format($user_data['total_salary'], 2); ?></p><br>

                   
                
                <a href="deleteProfile.php?id=<?php echo $user_data['id'];?>">
                <button class="btn3">Delete</button></a>



             </p>
         </div>
    </div>
         <br><br><br><br><br><br><br><br><br><br><br><br>
        

</body>
</html>