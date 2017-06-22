<?php
$conn = mysqli_connect("localhost","root","");
mysqli_select_db($conn,"sad2");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$dd = array("dd1","dd2","dd3","dd4","dd5","dd6");
$a=array(0,0,0,0,0,0);
$b=array(0,0,0,0,0,0);
for($x=0;$x<6;$x++)
{
    $y=$_POST[$dd[$x]];
    $a[$y-1]=(int)($x/2)+1;
    $b[$y-1]=$x%2+1;
}

$n=13;
for($i=0,$j=0;$i<6;$i++,$j=($j+3)%$n){
    $a1= mysqli_query($conn,"SELECT teach_name FROM teachers WHERE teach_ID= $j%$n");
    echo $a1;
    $a2= mysqli_query($conn,"SELECT teach_name FROM teachers WHERE teach_ID= ($j+1)%$n");
    $a3= mysqli_query($conn,"SELECT teach_name FROM teachers WHERE teach_ID= ($j+2)%$n");
    $q1= mysqli_query($conn,"UPDATE it SET Sess=$b[$i], Day=$a[$i] where Sub_ID=$i+1 ");
    $q2= mysqli_query($conn,"UPDATE it SET Teach1= '".$a1."', Teach2=$a2, Teach3= $a3 where Sub_ID = $i+1");
}
?>