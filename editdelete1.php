
<?php
$r=$_GET['t1'];
$con=mysqli_connect('localhost','root','seedit','studentprofile');
$q= "select * from profile where rno='$r'";
$res=mysqli_query($con,$q);
while($row=mysqli_fetch_array($res))
{
echo"
rno-$row[rno] <br> name -$row[name] <br> contactno- $row[contactno] <br>
<a href='edit.php?id=$row[rno]'>edit</a> ,
<a href='delete.php?id=$row[rno]'> delete</a> 
";
}
?>







