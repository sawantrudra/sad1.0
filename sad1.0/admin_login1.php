
<?php 
session_start();
if(!isset($_SESSION)){
    $_SESSION['day1'] = '2017-05-20';
            $_SESSION['day2'] = '2017-05-21';
            $_SESSION['day3'] = '2017-05-22';
            $_SESSION['sess1'] = '09:00';
            $_SESSION['sess2'] = '01:00';
}

?>
<html >
    <head>
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
        <script>
   $(document).ready(function () {
    $('.forgot-pass').click(function(event) {
      $(".pr-wrap").toggleClass("show-pass-reset");
    }); 
    
    $('.pass-reset-submit').click(function(event) {
      $(".pr-wrap").removeClass("show-pass-reset");
    }); 
});
        </script>
  <script src="js/bootstrap.min.js"></script>
<style>
    body
{
    background: url('Study-Quotes-Wallpaper-1.jpg') fixed;
    background-size: cover;
    padding: 0;
    margin: 0;
}

.wrap
{
    width: 100%;
    height: 100%;
    min-height: 100%;
    position: absolute;
    top: 0;
    left: 0;
    z-index: 99;
}

p.form-title
{
    font-family: "Times New Roman", Times, serif;
    font-size: 40px;
    font-weight: 1200;
    text-align: center;
    color: #FFFFFF;
    margin-top: 5%;
    
    letter-spacing: 8px;
}

form
{
    width: 500px;
    margin: 0 auto;
}

form.login input[type="text"], form.login input[type="password"]
{
    width: 100%;
    margin: 0;
    padding: 10px 20px;
    background: 0;
    border: 0;
    border-bottom: 2px solid #FFFFFF;
    outline: 0;
    font-family: "Times New Roman", Times, serif;
    font-style: italic;
    font-size: 24px;
    font-weight: 400;
    letter-spacing: 2px;
    margin-bottom: 10px;
    color: #FFFFFF;
    outline: 0;
}

form.login input[type="submit"]
{
    width: 100%;
    font-size: 28px;
    font-weight: 1500;
    margin-top: 32px;
    outline: 0;
    cursor: pointer;
    letter-spacing: 2px;
}

form.login input[type="submit"]:hover
{
    transition: background-color 0.5s ease;
}


form.login label, form.login a
{
    font-size: 24px;
    font-weight: 800;
    color: #FFFFFF;
}

form.login a
{
    transition: color 0.5s ease;
}

form.login a:hover
{
    color: #2ecc71;
}

.pr-wrap
{
    width: 100%;
    height: 100%;
    min-height: 100%;
    position: absolute;
    top: 0;
    left: 0;
    z-index: 999;
    display: none;
}



        </style>
</head>
  
  <body >

   <div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="pr-wrap">
                
            </div>
            <div class="wrap">
                <p class="form-title">
                    Enter Details</p>
                <form class="login" action="" method="POST">
                <input type="text"  name="username" id="username" placeholder="Enter username" required>
                <input type="password"  name="password" id="pwd" placeholder="Enter password" required>
                <input type="submit" value="Sign In" class="btn btn-success btn-sm"  >
                
                </form>
            </div>
        </div>
    </div>
      </div>
  </body>
      
</html>
    <?php
        if(($_POST)){
   include "dbconnect.php";   
         
      $myusername = $_POST['username'];
      $mypassword = $_POST['password']; 
      
      $sql = "SELECT id FROM admin WHERE username = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result);
    
      
      $count = mysqli_num_rows($result);
      
    
		
      if($count == 1) {
        
         header("location: date.php");
      }else{
         echo "<script type= 'text/javascript'> alert('Invalid login');</script>"; 

   }
        }
            ?>
      