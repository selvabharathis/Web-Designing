
<html>

<head>
      
<title>form</title>
      

</head>

<body>



<center><h1>Sign up Form</h1></center>
<form action="hai.php" method="post" >
<table align=center>
  <tr>
      <td>Name<sup>*</sup>:</td><td><input type="text" name="name"/></td>
  </tr>
 
  <tr>
      <td>Password<sup>*</sup>:</td><td><input type="password" name="pwd"/></td>
  </tr>
 
  <tr>
      <td>Re-enter Password<sup>*</sup>:</td><td><input type="password" name="rpwd"/></td>
   </tr>
 
   <tr>
      <td>E-mail:</td><td><input type="text" name="email"/></td>
   </tr>
 
   <tr>
        <td>Phone no<sup>*</sup>:</td><td><input type="text" name="phone"/></td>
   </tr>
  </br>
  <tr>
    <td><input type="submit" value="SIGNUP" name="submit"></td><td><input type="reset" value="CANCEL"></td>
   </tr>
</table>
</form>


</body>
</html>


<?php
mysql_connect("localhost","root","") or die("not connected");
mysql_select_db("hai") or die ("no db found");

if(isset($_POST['submit']))
{

$name=$_POST['name'];
$pwd=$_POST['pwd'];
$rpwd=$_POST['rpwd'];
$email=$_POST['email'];
$phone=$_POST['phone'];

if($name==''){
echo "<script>alert('enter name')</script>";
}

if($pwd==''){
echo "<script>alert('enter password')</script>";
}

if($rpwd==''){
echo "<script>alert('enter repeat password')</script>";
}



if($phone==''){
echo "<script>alert('enter phone')</script>";
}


$query="insert into welcome(name,pwd,rpwd,email,phone) values ('$name','$pwd','$rpwd','$email','$phone')";

if(mysql_query($query))
{
echo "<h3>successfully signed up</h3>";
}
}
?>
