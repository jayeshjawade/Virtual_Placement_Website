<?php

session_start();
$empty = "";
 
  function reverse($num)
    {
        if($num == 1)
     {
         return 5;
      }
        else if($num == 5)
        {
            return 1;
        }
         else if($num == 2)
        {
            return 4;
        }
         else if($num == 4)
        {
            return 2;
        }
        else if($num == 3)
        {
            return $num;
        }
        else
        {
            return 0;
        }
    }
 
if($_GET)
{
   $num1  = $_GET["1"];
   $num2  = reverse($_GET["2"]);
   $num3  = $_GET["3"];
   $num4  = $_GET["4"];  
   $num5  = $_GET["5"];  
   $num6  = reverse($_GET["6"]);
   $num7  = $_GET["7"];
   $num8  = reverse($_GET["8"]);
   $num9  = reverse($_GET["9"]);
   $num10 = reverse($_GET["10"]);
   $num11 = $_GET["11"];
   $num12 = reverse($_GET["12"]);
   $num13 = $_GET["13"];
   $num14 = $_GET["14"];
   $num15 = $_GET["15"];
   $num16 = $_GET["16"];
   $num17 = $_GET["17"];
   $num18 = reverse($_GET["18"]);
   $num19 = $_GET["19"];
   $num20 = $_GET["20"];
   $num21 = reverse($_GET["21"]);
   $num22 = $_GET["22"];
   $num23 = reverse($_GET["23"]);
   $num24 = reverse($_GET["24"]);
   $num25 = reverse($_GET["25"]);
   $num26 = $_GET["26"];
   $num27 = reverse($_GET["27"]);
   $num28 = $_GET["28"];
   $num29 = $_GET["29"];
   $num30 = $_GET["30"];
   $num31 = reverse($_GET["31"]);
   $num32 = $_GET["32"];
   $num33 = $_GET["33"];
   $num34 = reverse($_GET["34"]);
   $num35 = reverse($_GET["35"]);
   $num36 = $_GET["36"];
   $num37 = reverse($_GET["37"]);
   $num38 = $_GET["38"];
   $num39 = $_GET["39"];
   $num40 = $_GET["40"];
   $num41 = reverse($_GET["41"]);
   $num42 = $_GET["42"];
   $num43 = reverse($_GET["43"]);
   $num44 = $_GET["44"];
    
       
  $e = $num1 + $num6  + $num11 + $num16 + $num21 + $num26 + $num31 + $num36;
  $n = $num4 + $num9  + $num14 + $num19 + $num24 + $num29 + $num34 + $num39;
  $a = $num2 + $num7  + $num12 + $num17 + $num22 + $num27 + $num32 + $num37 + $num42;
  $c = $num3 + $num8  + $num13 + $num18 + $num23 + $num28 + $num33 + $num38 + $num43;
  $o = $num5 + $num10 + $num15 + $num20 + $num25 + $num30 + $num35 + $num40 + $num41 + $num44;
  
   
   $ee = ((($e/8)  - 3.2)/0.8)*10 + 50 ;     
   $nn = ((($n/8)  - 3.0)/0.8)*10 + 50 ; 
   $aa = ((($e/9)  - 3.8)/0.6)*10 + 50 ; 
   $cc = ((($c/9)  - 3.6)/0.7)*10 + 50 ; 
   $oo = ((($o/10) - 3.7)/0.7)*10 + 50 ; 
 
    $_SESSION["ee"] = $ee;
    $_SESSION["aa"] = $aa;
    $_SESSION["cc"] = $cc;
    $_SESSION["oo"] = $oo; 
    $_SESSION["nn"] = $nn;
    
    header("location: radar.php");
}
?>


<html lang="en">
  <head>
  <style>
  table#t1{
          font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
      width:100%;
      text-align: center;
            border-collapse: collapse;

     
  }

  table#t2{
      font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
      width:100%;
      text-align: left;
      border-collapse: collapse;
}
#t2 td {
    border: 1px solid #ddd;
    padding: 5px;
}

h1{
    text-align: center;
    font-family: Trebuchet MS, Arial, Helvetica, sans-serif;
}
#p01
{
    text-align:center;
    font-family: Trebuchet MS, Arial, Helvetica, sans-serif;
}

  </style>
  </head>
  <body>
      
      <h1>Personality Test</h1>
      
      <p id="p01">Here are a number of characteristics that may or may not apply to you. For example :- <br><b>Do you agree that you are someone who likes to spend time with others?</b>  <br>Please choose a number for each statement to indicate the extent to which you agree or disagree with that statement.</p>
     <hr>
     <table id="t1">
         <tr>
             <td>Strongly Disagree</td>
             <td>Little Disagree</td>
             <td>Neutral</td>
             <td>Little Agree</td>
             <td>Strongly Agree</td>
         </tr>
           <tr>
             <td>1</td>
             <td>2</td>
             <td>3</td>
             <td>4</td>
             <td>5</td>
         </tr>
     </table>
    
      <hr>
  <form method="GET" name = "myForm">

  <table id="t2">
      <tr>
          <td colspan = "2"><b>I see myself <i>as someone</i> who...</b></td>
      </tr>
  <tr>
    <td><p>1. &nbsp  <input type="number" min = "1" max = "5" required = "required"  name="1" id="1">   is talkative</p></td>
    <td><p>2. &nbsp  <input type="number" min = "1" max = "5" required = "required"  name="2" id="2">   tends to find fault with others</p></td>
  </tr>
  <tr>
    <td><p>3. &nbsp  <input type="number" min = "1" max = "5" required = "required"  name="3" id="3">   does a thorough job</p></td>
    <td><p>4. &nbsp  <input type="number" min = "1" max = "5" required = "required"  name="4" id="4">    is depressed, blue</p></td>
  </tr>
  <tr>
    <td><p>5. &nbsp  <input type="number" min = "1" max = "5" required = "required"  name="5" id="5">   is original, comes up with new ideas</p></td>
    <td><p>6. &nbsp  <input type="number" min = "1" max = "5" required = "required"  name="6" id="6">   is reserved</p></td>
  </tr>
  <tr>
    <td><p>7. &nbsp  <input type="number" min = "1" max = "5" required = "required"  name="7" id="7">   is helpful and unselfish with others</p></td>
    <td><p>8. &nbsp  <input type="number" min = "1" max = "5" required = "required"  name="8" id="8">   can be somewhat careless</p></td>
  </tr>
  <tr>
    <td><p>9. &nbsp  <input type="number" min = "1" max = "5" required = "required"  name="9" id="9">   is relaxed, handles stress well</p></td>
    <td><p>10. <input type="number" min = "1" max = "5" required = "required"  name="10" id="10">  is curious about many different things</p></td>
  </tr>
  <tr>
    <td><p>11. <input type="number" min = "1" max = "5" required = "required"  name="11" id="11">  is full of energy</p></td>
    <td><p>12. <input type="number" min = "1" max = "5" required = "required"  name="12" id="12">  starts quarrels with others</p></td>
  </tr>
  <tr>
    <td><p>13. <input type="number" min = "1" max = "5" required = "required"  name="13" id="13">  is a reliable worker</p></td>
    <td><p>14. <input type="number" min = "1" max = "5" required = "required"  name="14" id="14">  can be tense</p></td>
  </tr>
  <tr>
    <td><p>15. <input type="number" min = "1" max = "5" required = "required"  name="15" id="15">  is ingenious, a deep thinker</p></td>
    <td><p>16. <input type="number" min = "1" max = "5" required = "required"  name="16" id="16">  generates a lot of enthusiasm</p></td>
  </tr>
  <tr>
    <td><p>17. <input type="number" min = "1" max = "5" required = "required"  name="17" id="17">  has a forgiving nature</p></td>
    <td><p>18. <input type="number" min = "1" max = "5" required = "required"  name="18" id="18">  tends to be disorganized</p></td>
  </tr>
  <tr>
    <td><p>19. <input type="number" min = "1" max = "5" required = "required"  name="19" id="19">  worries a lot</p></td>
    <td><p>20. <input type="number" min = "1" max = "5" required = "required"  name="20" id="20">  has an active imagination</p></td>
  </tr>
  <tr>
    <td><p>21. <input type="number" min = "1" max = "5" required = "required"  name="21" id="21">  tends to be quiet</p></td>
    <td><p>22. <input type="number" min = "1" max = "5" required = "required"  name="22" id="22">  is generally trusting</p></td>
  </tr>
  <tr>
    <td><p>23. <input type="number" min = "1" max = "5" required = "required"  name="23" id="23">  tends to be lazy</p></td>
    <td><p>24. <input type="number" min = "1" max = "5" required = "required"  name="24" id="24">  is emotionally stable, not easily upset</p></td>
  </tr>
  <tr>
    <td><p>25. <input type="number" min = "1" max = "5" required = "required"  name="25" id="25">  is inventive</p>
</td>
    <td><p>26. <input type="number" min = "1" max = "5" required = "required"  name="26" id="26">  has an assertive personality</p>
</td>
  </tr>
  <tr>
    <td><p>27. <input type="number" min = "1" max = "5" required = "required"  name="27" id="27">  can be cold and aloof</p>
</td>
    <td><p>28. <input type="number" min = "1" max = "5" required = "required"  name="28" id="28">  perseveres until the task is finished</p></td>
  </tr>
  <tr>
    <td><p>29. <input type="number" min = "1" max = "5" required = "required"  name="29" id="29">  can be moody</p></td>
    <td><p>30. <input type="number" min = "1" max = "5" required = "required"  name="30" id="30">  values artistic, aesthetic experiences</p></td>
  </tr>
  <tr>
    <td><p>31. <input type="number" min = "1" max = "5" required = "required"  name="31" id="31">  is sometimes shy, inhibited</p></td>
    <td><p>32. <input type="number" min = "1" max = "5" required = "required"  name="32" id="32">  is considerate and kind to almost everyone</p></td>
  </tr>
  <tr>
    <td><p>33. <input type="number" min = "1" max = "5" required = "required"  name="33" id="33">  does things efficiently</p></td>
    <td><p>34. <input type="number" min = "1" max = "5" required = "required"  name="34" id="34">  remains calm in tense situations</p></td>
  </tr>
  <tr>
    <td><p>35. <input type="number" min = "1" max = "5" required = "required"  name="35" id="35">  prefers work that is routine</p></td>
    <td><p>36. <input type="number" min = "1" max = "5" required = "required"  name="36" id="36">  is outgoing, sociable</p></td>
  </tr>
  <tr>
    <td><p>37. <input type="number" min = "1" max = "5" required = "required"  name="37" id="36">  is sometimes rude to others</p></td>
    <td><p>38. <input type="number" min = "1" max = "5" required = "required"  name="38" id="38">  makes plans and follows through with them</p></td>
  </tr>
  <tr>
    <td><p>39. <input type="number" min = "1" max = "5" required = "required"  name="39" id="39">  gets nervous easily</p></td>
    <td><p>40. <input type="number" min = "1" max = "5" required = "required"  name="40" id="40">  likes to reflect, play with ideas</p></td>
  </tr>
  <tr>
    <td><p>41. <input type="number" min = "1" max = "5" required = "required"  name="41" id="41">  has few artistic interests</p></td>
    <td><p>42. <input type="number" min = "1" max = "5" required = "required"  name="42" id="42">  likes to cooperate with others</p></td>
  </tr>
  <tr>
    <td><p>43. <input type="number" min = "1" max = "5" required = "required"  name="43" id="43">  is easily distracted</p></td>
    <td><p>44. <input type="number" min = "1" max = "5" required = "required"  name="44" id="44">  is sophisticated in art, music, or literature</td>
  </tr>
  <tr>
    <td colspan = "2"><input name = "button" type="submit" value="Submit"/></td>
  </tr>
  
</table>
  


</form>
  
    <script type="text/javascript" src="jquery.min.js"></script> 
   <script type="text/javascript">
         
         
         
         <script type = "application/javascript">
                 // For the form we don't want to submit
                 document.forms.myForm.onsubmit = function(e) {
                     e = e || event;
                     e.preventDefault();
                 }

                 document.forms.myForm.button.onclick = function () {
                     alert("no");
                     console.log("NOT Submitted!");
                     return false;
                 }
                 
                 
            
         
         
         
         
        /*
                 $("form").submit(function(e) {
                 e.preventDefault();
                 var error = "";
                 var i;
                 for(i=1;i<=44;i++)
                  {
                 
                 if ($("#1").val() == "")
                  {
                      error += i+" ";
                  }
                 
                  }
        if(error != ""){
      
         alert("no");
         
        }else{
         $("form").unbind('submit').submit();
        
        }
                 }   
  */
   </script>

  </body>
</html>