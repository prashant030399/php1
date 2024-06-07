

<form>
Empid- 
<?php

 $con=mysqli_connect('localhost','root','seedit','autoincrement');
 $q= " select max(empid) as 'id' from profile   ";
 $res= mysqli_query($con,$q);
 if($row=mysqli_fetch_array($res))
 {
  $a= $row['id']+1;
  echo"abc$a";

 }
 else 
 {
    echo"1";
 }


?><br>
Name<input type='text' name='t2'> <br>
Contactno<input type='text' name='t3'> <br>
<input type='submit' value="save"> 

</form>


<?php
if(isset($_GET['t2']))
{


$a=$_GET['t2'];
$b=$_GET['t3'];
$con=mysqli_connect('localhost','root','seedit','autoincrement');
 $q= " insert into profile values(NULL, '$a','$b')  ";
 $res= mysqli_query($con,$q);
 if($res==true)
 {
  echo"save";
 }

 else 
 {
    echo"error";
 }
}

?>

