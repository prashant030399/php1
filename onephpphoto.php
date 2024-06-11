
<form method="POST" enctype="multipart/form-data">

rno<input type='text' name='t1'> <br>
name<input type='text' name='t2'> <br>
photo<input type='file' name='file'><br>

<input type='submit' value="ok">


</form>

<?php

if(isset($_POST['t1']))
{
$r=$_POST['t1'];
$n=$_POST['t2'];
$t=$_FILES['file'] ['tmp_name'];
$fn=$_FILES['file'] ['name'];

if(move_uploaded_file($t,$fn))
{
$con=mysqli_connect('localhost','root','seedit','onephpphoto');
$q="insert into profile values('$r','$n','$fn') ";
$res=mysqli_query($con,$q);
if($res==true)
{
    echo"save";
}
else 
{
    echo" error";
}


}







}







?>