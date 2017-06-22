<?php 
session_start();


?>
<html>
    <head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
      <li class="active"><a href="timetable1.php">Home</a></li>
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
      
    <form action ="process_timetable.php" method="POST" class="font1" >
    <div class = "container">                                    
        <div class="row">
            <h2 >              Day 1</h2> 
            <div class="col-sm-4">
                <h4>Session 1</h4> 
                <select name="dd1"  id="ddl1" onchange ="configureDropdown(this)" class="btn btn-default dropdown-toggle"  type="button"  data-toggle="dropdown" >
                    <option><?php if(isset($_SESSION['dd1'])) echo $_SESSION['sub'.($_SESSION['dd1']-1)]; ?></option>
                    <option value=1>DMS</option>
                    <option value=2>DS</option>
                    <option value=3>CO</option>
                    <option value=4>EM</option>
                    <option value=5>SAD</option>
                    <option value=6>OOPD</option>
                    
                </select>
            </div>
            <div class="col-sm-4">
                <h4>Session 2</h4> 
                <select name="dd2"  id="ddl2"   onchange ="configureDropdown(this)" class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">
                    <option><?php if(isset($_SESSION['dd2'])) echo $_SESSION['sub'.($_SESSION['dd2']-1)]; ?></option>
                    <option value=1>DMS</option>
                    <option value=2>DS</option>
                    <option value=3>CO</option>
                    <option value=4>EM</option>
                    <option value=5>SAD</option>
                    <option value=6>OOPD</option>
                </select>
            </div>
        </div>
        <div class="row">
            <h2>                Day 2 </h2>
            <div class="col-sm-4">  
                <h4>Session 1</h4>
                <select name="dd3"   id="ddl3"   onchange ="configureDropdown(this)" class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">
                    <option><?php if(isset($_SESSION['dd3'])) echo $_SESSION['sub'.($_SESSION['dd3']-1)]; ?></option>
                    <option value=1>DMS</option>
                    <option value=2>DS</option>
                    <option value=3>CO</option>
                    <option value=4>EM</option>
                    <option value=5>SAD</option>
                    <option value=6>OOPD</option>
                </select>
            </div>
            <div class="col-sm-4">
                <h4>Session 2</h4>
                <select name="dd4"  id="ddl4" onchange ="configureDropdown(this)" class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">
                    <option><?php if(isset($_SESSION['dd4'])) echo $_SESSION['sub'.($_SESSION['dd4']-1)]; ?></option>
                   <option value=1>DMS</option>
                    <option value=2>DS</option>
                    <option value=3>CO</option>
                    <option value=4>EM</option>
                    <option value=5>SAD</option>
                    <option value=6>OOPD</option>
                </select>
            </div>
        </div>
        <div class="row">
                <h2>               Day 3</h2>
                <div class="col-sm-4">
                    <h4>Session 1</h4> 
                    <select name="dd5"  id="ddl5"  onchange ="configureDropdown(this)" class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">
                        <option><?php if(isset($_SESSION['dd5'])) echo $_SESSION['sub'.($_SESSION['dd5']-1)]; ?> </option>
                        <option value=1>DMS</option>
                    <option value=2>DS</option>
                   <option value=3>CO</option>
                    <option value=4>EM</option>
                    <option value=5>SAD</option>
                    <option value=6>OOPD</option>
                    </select>
                </div>
                <div class="col-sm-4">
                    <h4>Session 2</h4>
                    <select name="dd6"  id="ddl6"   onchange ="configureDropdown(this)" class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">
                        <option><?php if(isset($_SESSION['dd6'])) echo $_SESSION['sub'.($_SESSION['dd6']-1)]; ?></option>
                        <option value=1>DMS</option>
                    <option value=2>DS</option>
                    <option value=3>CO</option>
                    <option value=4>EM</option>
                    <option value=5>SAD</option>
                    <option value=6>OOPD</option>
                    </select>
                </div>
        </div>
        <br>
        <br>
        <input type="submit" class="btn btn-primary"  value="Submit">
    </div>
    

    </form>
</body>
    
<script type="text/javascript">     
    var len = 6;
    var dd = ['ddl1','ddl2','ddl3','ddl4','ddl5','ddl6'];
    var subs = ['0','1','2','3','4','5','6'];
    function removeOption(ind) {
        for(k=0;k<6;k++){
            if(dd[k] != '0'){
                var opt = document.getElementById(dd[k]);
                var optchild= opt.options[ind]
                opt.removeChild(optchild);
            }
        }
    }
    function configureDropdown(ddl) {
        for(i=0;i<6;i++){
           if(document.getElementById(dd[i]) == ddl)
               dd[i] = '0';}
        for(i=1;i<=len;i++){
           if(ddl.value == subs[i]){
              removeOption(i);
               break;
           }
        }
           for(j=i;j<=len-1;j++){
                subs[j] = subs[j+1];
            }
        len--;
    }
   </script>
</html>