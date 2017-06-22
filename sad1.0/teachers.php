
<?php
        
   include "dbconnect.php";   
         
      
      $sql = "SELECT teach_ID FROM teacher ";
      $result = mysqli_query($conn,$sql);
      $count = mysqli_num_rows($result);
    
      
     
		
      if($count == 0) {
        
         $n=-1;
      }else{
         $n =$count;

   }
        
            ?>
<html >
    <head>
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
       
  <script src="js/bootstrap.min.js"></script>
<style>
    body
{
    background: url('39580731-studying-wallpapers.jpg') fixed;
    background-size: cover;
    opacity: 1;
    padding: 0;
    margin: 0;
}
div.trans
    {
        opacity: 0.3;
    }
tbody.font1
{
    font-family: "arial",sans-serif;
    font-size: 20px;
    font-weight: bolder;
    text-align: center;
    color: #0000FF;
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
    text-align: left;
    color: #FFFFFF;
    margin-top: 5%;
    
    letter-spacing: 4px;
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


</style>
</head>
  
  <body >
      <nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="timtableFinal.php">Timetable</a>
    </div>
    <ul class="nav navbar-nav">
      <li ><a href="timetable1.php">Home</a></li>
      <li class="active"><a href="teachers.php">Teachers</a></li>
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
       
  <h2><p class="form-title">List of Teachers</h2>
  <p></p>  <div class="font1"   >       
  <table class="table table-bordered">
      <div class="trans">
    <thead class="font2">
      <tr>
        <th>Teacher id</th>
        <th>Teacher name</th>
        
      </tr>
    </thead>
    <tbody class= "font1">
      <?php
        $i= 1;
        $sql = "SELECT teach_ID, teach_name FROM teacher ORDER BY teach_ID";
         $result = mysqli_query($conn,$sql);
        while($r = mysqli_fetch_array($result)){ ?>
      <tr>
          <td><?php echo $i;?></td>
        <td><?php
                                 
     
                                 
                                 echo $r[1]; ?></td>
          <td align="right"><form action="" method="post"><input type="submit" class="btn btn-danger " name= "<?php echo $r[1];?>" value="delete" role="button"></form></td>
        
      </tr>
        
      <?php $i++; } ?>
        
    </tbody>
      </div>
  </table>
        <a href="new_teacher.php" class="btn btn-info" role="button">Add new Teacher</a>
</div>
      </div>
  </body>
      
</html>
<?php
    if($_POST){
        $sql = "SELECT teach_ID, teach_name FROM teacher ORDER BY teach_ID";
        $result = mysqli_query($conn,$sql);
    while($r2 = mysqli_fetch_array($result)){
        
      
                                 
        $r3= mysqli_real_escape_string($conn,$r2[1]);
                      echo $r3;           
        if(isset($_POST[$r3])){
       echo "yeyeye"  ;  
    $teach_name = $r3;
    }}
      $sql = "delete from teacher where teach_name = '$teach_name' ";
      $R1= mysqli_query($conn,$sql);
        if($R1)
        echo "<script type= 'text/javascript'> alert('teacher deleted!');
    

</script>"; 
    
            
    
    
    }
?>