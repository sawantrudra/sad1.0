<?php
session_start();
include "dbconnect.php";



    
?>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
      <li><a href="date.php">Date & Time</a></li>
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

    
<div class="container">
  <h2><p class="form-title">Internal Tests Timetable</h2>
  <p></p>            
  <table class="table table-bordered">
    <thead class="font2">
      <tr>
        <th>Subject</th>
        <th>Day</th>
        <th>Session</th>
        <th>Class 1</th>
          <th>Class 2</th>
          <th>Class 3</th>
      </tr>
    </thead>
    <tbody class="font1">
      <?php for($i=0;$i<6;$i++){ ?>
      <tr>
        <td><?php echo $_SESSION[$_SESSION['sub'.$i]][0];
            
            ?></td>
        <td><?php echo $_SESSION['day'.$_SESSION[$_SESSION['sub'.$i]][1]];
             ?></td>
        <td><?php echo  $_SESSION['sess'.$_SESSION[$_SESSION['sub'.$i]][2]];
             ?></td>
          <td><?php echo  $_SESSION[$_SESSION['sub'.$i]][3];
               ?></td>
          <td><?php echo  $_SESSION[$_SESSION['sub'.$i]][4]; 
               ?></td>
          <td><?php echo  $_SESSION[$_SESSION['sub'.$i]][5];
               ?></td>
      </tr>
      <?php } ?>
    </tbody>
  </table>


<button class="btn btn-success btn-lg" onclick="myFunction()">Print</button>

<script>
function myFunction() {
    window.print();
}
</script>

</div>

</body>
</html>
