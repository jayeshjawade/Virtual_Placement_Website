<?php

  session_start();
  if(array_key_exists("name", $_SESSION))
    {
        
              echo  '<a href="index.php?logout=1" title="Are you sure you want to log out?"><p style="float:right">Log Out</p></a>';
    }
   else
   {
       echo "wtf";
       header("location: http://adityasblog.000webhostapp.com/vp/");
   }
?>


<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Intelligence Test</title>
    <link rel="stylesheet" type="text/css" href="style.css">
  
  <style>
    
    #myChart {
      height: 100%;
      width: 100%;
      visibility:hidden;
    }
    a:link {
        color: red;
        font-size:25px;
        background-color: transparent;
        text-decoration: none;
    }
    a:visited {
        font-size:25px;
        color: red;
        background-color: transparent;
        text-decoration: none;
    }
    a:hover {
        font-size:25px;
        color: red;
        background-color: transparent;
        text-decoration: underline;
    }
    
  </style>
    
    
</head>
<body>
    
    <!--<h1 style = "text-align: center"> Aptitutde Test</h1>-->
    <!-- <p style="text-align: left; font-size:15px">
         Name :
     //<?php 
     //    echo  $_SESSION['name'];
     //?>
     College :
     //<?php 
       //  echo  $_SESSION['clg'];
     //?>
       Contact No. :
    // <?php 
      //   echo  $_SESSION['no'];
    // ?>
       Email :
    // <?php 
      //   echo  $_SESSION['email'];
    // ?>
     </p> 
     <!--<p style="text-align: left; font-size:10px">
         
     </p>
     <p style="text-align: left; font-size:10px">
       
     </p> 
     <p style="text-align: left; font-size:10px">
       
     </p> 
    -->
   
    <div class="grid">
        <h1 id="demo" style = "text-align: center"></h1>
        <div id="quiz">
            <p id="question"></p>
            <div class="buttons">
                <button id="btn0"><span id="choice0"></span></button>
                <button id="btn1"><span id="choice1"></span></button>
                <button id="btn2"><span id="choice2"></span></button>
                <button id="btn3"><span id="choice3"></span></button>
            </div>
               
           
           <div id="myChart"></div>
         <!--   <footer>  
                <p id="progress">Question x of y</p>
            </footer>
            -->
        </div>
    </div>
    

<script type="text/javascript" src="jquery.min.js"></script>
   <script src="chart.js"></script>
<script src="quiz.js"></script>
<script src="question.js"></script>
<script src="app.js"></script>
<script type="text/javascript">
// Set the date we're counting down to

 //document.getElementById("myChart").style.visibility = "hidden";

      
   var name = "<?php echo  $_SESSION['name'] ?>";
   var clg = "<?php echo  $_SESSION['clg'] ?>";
    var email = "<?php echo  $_SESSION['email'] ?>";
     var no = "<?php echo  $_SESSION['no'] ?>";
   localStorage.setItem("storageName",name);
    localStorage.setItem("storageclg",clg);
    localStorage.setItem("storageemail",email);
    localStorage.setItem("storageno",no);
  
 



var countDownDate = new Date().getTime() + 1200000;
// Update the count down every 1 second
var x = setInterval(function() {

  // Get todays date and time
  var now = new Date().getTime();

  // Find the distance between now an the count down date
  var distance = countDownDate - now;

  // Time calculations for days, hours, minutes and seconds
 
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Display the result in the element with id="demo"
  document.getElementById("demo").innerHTML =  minutes + "m " + seconds + "s ";

  // If the count down is finished, write some text 
  if (distance < 0) {
    clearInterval(x);
    showScores();
//    header("location: http://adityasblog.000webhostapp.com/vp/");
    document.getElementById("demo").innerHTML = "Time Out!!!";
  }
}, 1000);




</script> 

</body>
</html>