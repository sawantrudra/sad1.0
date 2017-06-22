<?php session_start(); ?>
<html>
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
    background: url('39580731-studying-wallpapers.jpg') fixed;
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
tbody.font1
{
    font-family: "arial",sans-serif;
    font-size: 20px;
    font-weight: bolder;
    text-align: center;
    color: #000000;
    margin-top: 5%;
    
    letter-spacing: 1px;
}
thead.font2
{
    font-family: "arial",sans-serif;
    font-size: 25px;
    font-weight: bolder;
    text-align: center;
    color: #FFFFFF;
    margin-top: 5%;
    
    letter-spacing: 2px;
}
p.form-title
{
    font-family: "Times New Roman", Times, serif;
    font-size: 40px;
    font-weight: 1200;
    text-align: center;
    color: #000000;
    margin-top: 5%;
    
    letter-spacing: 2px;
}

form.font1
{
    font-family: "Times New Roman", Times, serif;
    font-size: 40px;
    font-weight: bold;
    text-align: left;
    color: #8888FF;
    margin-top: 5%;
    
    letter-spacing: 2px;
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
    <body>
         <nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="timtableFinal.php">Timetable</a>
    </div>
    <ul class="nav navbar-nav">
      <li ><a href="timetable1.php">Home</a></li>
      <li><a href="teachers.php">Teachers</a></li>
      <li><a href="subjects.php">Subjects</a></li>
      <li class="active"><a href="date.php">Date & Time</a></li>
    </ul>
      <div class="container">
    <div align="right">
<a href="admin_login1.php" class="btn btn-info btn-lg">
          <span class="glyphicon glyphicon-log-out"></span> Log out
        </a>
        </div>
    </div>
  </div>
</nav>
        <div class= "container">
   <form action="" method= "post"> 
    <div class="form-group row">
  <label for="example-date-input" class="col-2 col-form-label">Day 1 date:</label>
  <div class="col-10">
    <input class="form-control" type="date" value="2011-08-19" name="day1" id="example-date-input">
  </div>
        <label for="example-date-input" class="col-2 col-form-label">Day 2 date:</label>
  <div class="col-10">
    <input class="form-control" type="date" value="2011-08-19" name="day2" id="example-date-input">
  </div>
        <label for="example-date-input" class="col-2 col-form-label">Day 3 date:</label>
  <div class="col-10">
    <input class="form-control" type="date" value="2011-08-19" name="day3" id="example-date-input">
  </div>
</div>
    <div class="form-group row">
  <label for="example-time-input" class="col-2 col-form-label">Session 1 time;</label>
  <div class="col-10">
    <input class="form-control" type="time" value="13:45:00" name="sess1" id="example-time-input">
  </div>
</div>
       <div class="form-group row">
  <label for="example-time-input" class="col-2 col-form-label">Session 2 time;</label>
  <div class="col-10">
    <input class="form-control" type="time" value="13:45:00" name="sess2" id="example-time-input">
  </div>
</div>
       <input type="submit" value="Submit" name="submit" class="btn btn-success btn-lg"  >
                
            </form><a href="timetable1.php" role="button"  class="btn btn-primary btn-lg"  >Back</a>
        </div>
    </body>
</html>
<?php

        if(($_POST)){
     
         
      $_SESSION['day1'] = $_POST['day1'];
            $_SESSION['day2'] = $_POST['day2'];
            $_SESSION['day3'] = $_POST['day3'];
            $_SESSION['sess1'] = $_POST['sess1'];
            $_SESSION['sess2'] = $_POST['sess2'];
        
      
     
         


        }

            ?>
      