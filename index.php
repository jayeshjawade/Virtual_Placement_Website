<?php 
   session_start();
  $name = "hello";
  if(array_key_exists("logout", $_GET))
        {
            //echo "logedd out";
           session_unset();
        }
   else if(array_key_exists("name", $_SESSION))
        {
         header("Location: welcome.php");
        }
  
 if(array_key_exists("name", $_GET) && array_key_exists("clg", $_GET) && array_key_exists("no", $_GET) && array_key_exists("email", $_GET))
    {
        
        $error = "";
              if(!$_GET["name"])
                {
                  $error .= " Full Name ,";   
                }
              if(!$_GET["clg"])
                {
                  $error .= "College Name ,";
                }
                 if(!$_GET["no"])
                {
                  $error .= "Contact No,";
                }
                if(!$_GET["email"])
                {
                  $error .= "Email No ,";
                }
             
       
              if($error != "")
                {
                   echo $error." Is required Try Again ";
                }
              else
                {
          
        
        $_SESSION['name'] = $_GET['name'];
        $_SESSION['no'] = $_GET['no'];
         $_SESSION['clg'] = $_GET['clg'];
         $_SESSION['email'] = $_GET['email'];
      //  $name =  $_SESSION['name'];
        //echo $_SESSION['name'];
        header("Location:welcome.php");
    }
}
?>









<html lang="en">
  <head>
      <style>
      /**
 * parallax.css
 * @Author Original @msurguy -> http://bootsnipp.com/snippets/featured/parallax-login-form
 * @Reworked By @kaptenn_com 
 * @package PARALLAX LOGIN.
 */
    
    body {
        background-color: #444;
        background: url(img/bg.jpg);
        
    }
    .form-signin input[type="text"] {
        margin-bottom: 5px;
        border-bottom-left-radius: 1;
        border-bottom-right-radius: 1;
    }
    .form-signin .form-control {
        position: relative;
        font-size: 16px;
        font-family: 'Open Sans', Arial, Helvetica, sans-serif;
        height: auto;
        padding: 10px;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
    }
    .vertical-offset-100 {
        padding-top: 100px;
    }
    
    @font-face {
    font-family: beba;
    src: url(beba/BebasNeueBold.otf);
    font-weight: bold;
}
    .img-responsive {
    display: block;
    height: 100;
    width:50;
    margin: auto;
    background: black;
    }
    
    .event{
        text-align:center;
        font-size:50px;
        font-family: beba;
        font-weight:bold;
        color: #423e3e;
    }
    
    .panel {
    margin-bottom: 20px;
    background-color: rgba(255, 255, 255, 0.75);
    border: 1px solid transparent;
    border-radius: 4px;
    -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, .05);
    box-shadow: 0 1px 1px rgba(0, 0, 0, .05);
    }
    
#over img {
  margin-left: auto;
  margin-right: auto;
  display: block;
}

      </style>
      <script>
          /**
 * parallax.js
 * @Author original @msurguy (tw) -> http://bootsnipp.com/snippets/featured/parallax-login-form
 * @Tested on FF && CH
 * @Reworked by @kaptenn_com (tw)
 * @package PARALLAX LOGIN.
 */

$(document).ready(function() {
    $(document).mousemove(function(event) {
        TweenLite.to($("body"), 
        .5, {
            css: {
                backgroundPosition: "" + parseInt(event.pageX / 8) + "px " + parseInt(event.pageY / '12') + "px, " + parseInt(event.pageX / '15') + "px " + parseInt(event.pageY / '15') + "px, " + parseInt(event.pageX / '30') + "px " + parseInt(event.pageY / '30') + "px",
              "background-position": parseInt(event.pageX / 8) + "px " + parseInt(event.pageY / 12) + "px, " + parseInt(event.pageX / 15) + "px " + parseInt(event.pageY / 15) + "px, " + parseInt(event.pageX / 30) + "px " + parseInt(event.pageY / 30) + "px"
            }
        })
    })
})
      </script>
      <link href="bootstrap-4.0.0\dist\css\bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="bootstrap-4.0.0\dist\js\bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!-- Include the above in your HEAD tag -->

<!-- 
 * parallax_login.html
 * @Author original @msurguy (tw) -> http://bootsnipp.com/snippets/featured/parallax-login-form
 * @Tested on FF && CH
 * @Reworked by @kaptenn_com (tw)
 * @package PARALLAX LOGIN.
-->
        <script src="http://mymaplist.com/js/vendor/TweenLite.min.js"></script>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    
  </head>
  
  <body>

 
<div id="over" style="position:absolute; width:100%; height:100%">
  <img src="img/logob.png">
</div>

<br>
<br>
<br>
<br>
<br>
<br>

<div class="container">
                <div class="row vertical-offset-100">
                    <div class="col-md-4 col-md-offset-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">                                
                                <div class="row-fluid user-row">
                                <p class ="event">Virtual Placement</p>
                                </div>
                            </div>
                            <div class="panel-body">
                                <form accept-charset="UTF-8" role="form" class="form-signin" method = "GET">
                                    <fieldset>
                                        <label class="panel-login">
                                            <div class="login_result"></div>
                                        </label>
                                        <input class="form-control" placeholder="Full Name" name="name" type="text">
                                        <input class="form-control" placeholder="College Name" name="clg" type="text">
                                        <input class="form-control" placeholder="Contact No." name="no" type="text">
                                        <input class="form-control" placeholder="Email Address" name="email" type="text">
                                        <br>
                                        <input class="btn btn-lg btn-success btn-block" type="submit" id="login" value="Begin Test »">
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
  </body>
</html>