


<?php
$con=mysqli_connect('localhost','root','seedit','branch');
$r=$_GET['t1'];
$a=$_GET['x'];

foreach($a as $v)
{
$q="  insert into checkbox values('$r','$v')";
$res= mysqli_query($con,$q);
if($res==true)
{
echo"save ";
}
else 
{
    echo" error";
}
}
?>