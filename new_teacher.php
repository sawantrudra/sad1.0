

<html >
    <head>
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
        
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
  
  <body ><nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="process_timetable.php">Timetable</a>
    </div>
    <ul class="nav navbar-nav">
      <li ><a href="timetable.php">Home</a></li>
      <li ><a href="teachers.php">Teachers</a></li>
      <li><a href="subjects.php">Subjects</a></li>
      <li><a href="date.php">Date &Time</a></li>
         
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
    <div class="row">
        <div class="col-md-12">
            <div class="pr-wrap">
                
            </div>
            <div class="wrap">
                <p class="form-title">
                    Enter Details</p>
                <form class="login" action="" method="POST">
                <input type="text"  name="name" id="name" placeholder="Enter teacher name" required>
                
  <div align="center">
      <input type="submit" value="Click to add new teacher" class="btn btn-success btn-sm-2"  ></div><div class="container"><div align="center"><a href="teachers.php" class="btn btn-info btn-sm-4" >back</a></div></div>
                
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
         
      $teach_name = mysqli_real_escape_string($conn,$_POST['name']);
        
      $sql = "INSERT into teacher(teach_name) VALUES ('$teach_name')";
      $R= mysqli_query($conn,$sql);
        echo "<script type= 'text/javascript'> alert('New teacher added!');</script>"; 
            
     
         


        }
            ?>
      