<?php
session_start();
echo $_SESSION["val"];
echo  '<a href="../index.php?logout=1" style="float:right; font-size:5px">LogOut</a><br>';
?>
<!doctype html>
<html>

<head>
    <title>Result</title>
    <script src="Chart.bundle.js"></script>
    <script src="utils.js"></script>
    <style>
      @page 
    {
        size: auto;   /* auto is the initial value */
        margin: 0mm;  /* this affects the margin in the printer settings */
    }
    
    canvas {
        
        
        -moz-user-select: none;
        -webkit-user-select: none;
        -ms-user-select: none;
    }
    #o ,#c, #e, #a, #n{
        text-align: justify;
        text-justify: inter-word;
    }
    
    </style>
</head>

<body>
    
     <div id="scr"></div>
    
    <br>
    <div style="width:40%; margin:0 auto;">
        <canvas id="canvas"></canvas>
    </div>
    <p id = "o">
<b>Openness</b> reflects the manners in which you seek out new experiences. This trait reflects open-mindedness and is associated with broad-mindedness, unconventionality, artistic inclination, curiosity, intuition and imagination. This trait also defines what level of IQ you possess. High openness scorers have good curiosity levels and are open to new thoughts.</p>
    <p id = "c">
<b>Conscientiousness</b> reflects how careful and orderly an individual is. It is related to the way in which people control, regulate, and direct their impulses. Will Power, Diligence and Dependability are major factors contributing to Conscientiousness. People with high Conscientiousness scores are seen to be more professionally successful and possess have high levels of self-control i.e. good at resisting impulses.
</p>
<p id = "e">
<b>Extraversion</b> reflects how much you are oriented towards things outside yourself and derive energy and satisfaction from interacting with other people. The trait of extraversion–introversion is a central dimension of human personality theories and is typically viewed as a single continuum.This trait defines whether you are Friendly, Adventurous, Enthusiastic and Ambitious or not.</p>
    <p id = "a">
<b>Agreeableness</b> reflects how much you like and try to please others, rather how we tend to interact with others and come across to them.People who are Kind, Sensitive, Cooperative and Compassionate tend to have high Agreeableness scores.</p>
    <p id = "n">
<b>Neuroticism</b> is a fundamental personality trait in the study of psychology characterized by anxiety, moodiness, worry, envy, and jealousy. Neuroticism is a risk factor for the "internalizing" mental disorders such as phobia, depression, panic disorder, and other anxiety disorders, all of which are traditionally called neuroses.</p>
   
  
   <img id = "foot" src="foot.png" style = "height: auto; width:100%" alt="Prajwalan Logo">
   <button onclick="printReport()">Print My Report!</button>  
    <script>
         // Display Name and Score
         var element = document.getElementById("scr");
    element.innerHTML =  "<table style='width:100%; border: 1px solid black; border-collapse:collapse; text-align:center;'><tr><th>Name</th><th>College</th><th>Mobile</th><th>Email</th><th>Score</th></tr><tr><td>" + localStorage.getItem("storageName")+ "</td><td>"+ localStorage.getItem("storageclg") +"</td><td>"+ localStorage.getItem("storageno") + "</td><td>"+ localStorage.getItem("storageemail")+"</td><td>" + localStorage.getItem("scr")+ "</td></tr></table>";
     
    
    
   
    
        
        var ee = <?php echo $_SESSION["ee"];?>;
            var aa = <?php echo $_SESSION["aa"];?>;
                var cc = <?php echo $_SESSION["cc"];?>;
                    var oo = <?php echo $_SESSION["oo"];?>;
                        var nn = <?php echo $_SESSION["nn"];?>;
        
   
    var color = Chart.helpers.color;
    var config = {
        type: 'radar',
        data: {
            labels: [ "Openness To Experiences", "Conscientiousness",  "Extraversion", "Agreeableness", "Neuroticism"],
            datasets: [{
                label: "Your Personality Graph",
                backgroundColor: color(window.chartColors.red).alpha(0.2).rgbString(),
                borderColor: window.chartColors.red,
                pointBackgroundColor: window.chartColors.blue,
                pointHoverRadius: 5,
                pointHoverBackgroundColor: 'red',
                data: [
                    oo,
                    cc,
                    ee,
                    aa,
                    nn
                ]
            },]
        },
        options: {
            legend: {
                display: false,
            },
            title: {
                display: true,
                text: 'Your Personality Profiling'
            },
            scale: {
              ticks: {
                beginAtZero: true,
                max: 80,
                stepSize: 10
              }
            }
        }
    };
    
  function printReport() {
             window.print();
             
             
         }
         
    window.onload = function() {
        window.myRadar = new Chart(document.getElementById("canvas"), config);
    };

  
    </script>
</body>

</html>
