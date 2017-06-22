<?php
session_start();
if(!isset($_SESSION)){
    $_SESSION['day1'] = '2017-05-20';
            $_SESSION['day2'] = '2017-05-21';
            $_SESSION['day3'] = '2017-05-22';
            $_SESSION['sess1'] = '09:00';
            $_SESSION['sess2'] = '01:00';}
include "dbconnect.php";
$dd = array("dd1","dd2","dd3","dd4","dd5","dd6");
$subx = array("DMS","DS","CO","EM","SAD","OOPD");
$a=array(0,0,0,0,0,0);
$b=array(0,0,0,0,0,0);
for($x=0;$x<6;$x++)
{
    $y=$_POST[$dd[$x]];
    $_SESSION['sub'.$x] = $subx[$y-1];
    $_SESSION[$dd[$x]] =$_POST[$dd[$x]];   
    $a[$y-1]=(int)($x/2)+1;
    $ax= $a[$y-1];
    $b[$y-1]=$x%2+1;
    $bx= $b[$y-1];
    $q2 = mysqli_query($conn,"UPDATE it SET Day= $ax , Sess = $bx where Sub_ID = $y");
}

$q2 = mysqli_query($conn,"select teach_ID from teacher ORDER BY teach_ID ");
$i=0;
while($z1 = mysqli_fetch_array($q2)){
    $id1[$i]= $z1[0];
    $i++;
}
$q2 = mysqli_query($conn,"select * from teacher ");
$n=mysqli_num_rows($q2);
for($i=0,$j=0;$i<6;$i++,$j=($j+3)%$n){
   
    $q2= mysqli_query($conn,"UPDATE it SET Teach1= $j%$n, Teach2=($j+1)%$n, Teach3= ($j+2)%$n where Sub_ID = $i+1");
    $sub= mysqli_query($conn,"SELECT Sub FROM it where Sub_ID= ($i%$n)+1 ");
    $sub1 = mysqli_fetch_array($sub);
    $sub12[$i]= $sub1[0];
    $a1= mysqli_query($conn,"SELECT Teach1 FROM it where Sub_ID= $i+1");
    $a11 = mysqli_fetch_array($a1);

    $z3= $id1[$a11[0]];
    
    $a1= mysqli_query($conn,"SELECT teach_name FROM teacher WHERE teach_ID= $z3");
    $a11 = mysqli_fetch_array($a1);
    $a112[$i]= $a11[0];
    $a2= mysqli_query($conn,"SELECT Teach2 FROM it where Sub_ID= ($i)+1 ");
    $a21 = mysqli_fetch_array($a2);
    $z3= $id1[$a21[0]];
    $a2= mysqli_query($conn,"SELECT teach_name FROM teacher WHERE teach_ID= $z3");
    $a21 = mysqli_fetch_array($a2);
    $a212[$i]= $a21[0];
    $a3= mysqli_query($conn,"SELECT Teach3 FROM it where Sub_ID= ($i)+1");
    $a31 = mysqli_fetch_array($a3);
    $z3= $id1[$a31[0]];
    $a3= mysqli_query($conn,"SELECT teach_name FROM teacher WHERE teach_ID= $z3");
    $a31 = mysqli_fetch_array($a3);
    $a312[$i]= $a31[0];
    $sess= mysqli_query($conn,"SELECT Sess FROM it where Sub_ID= ($i)+1");
    $sess1 = mysqli_fetch_array($sess);
    $sess12[$i]= $sess1[0];
    $day= mysqli_query($conn,"SELECT Day FROM it where Sub_ID= ($i)+1");
    $day1 = mysqli_fetch_array($day);
    $day12[$i]= $day1[0];
}
    
    
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
        <td><?php echo $sub12[$i];
            
            ?></td>
        <td><?php echo $_SESSION['day'.$day12[$i]];
             ?></td>
        <td><?php echo $_SESSION['sess'.$sess12[$i]];
             ?></td>
          <td><?php echo $a112[$i];
               ?></td>
          <td><?php echo $a212[$i]; 
               ?></td>
          <td><?php echo $a312[$i];
               $_SESSION[$sub12[$i]]= array($sub12[$i],$day12[$i],$sess12[$i],$a112[$i],$a212[$i],$a312[$i]);?></td>
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
