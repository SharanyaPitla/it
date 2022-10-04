<?php
 include("db_connect.php");
 if(isset($_POST["sign in"]))
 {
 $username=$_POST["username"];
 $password=$_POST["password"];
 $query="select* from login
 where username='$username' and password='$password'";
 $result =mysqli_query($com,$query($com,$query);
 $row=mysqli_fetch_array($result);
 if($row['username']==$username && $row['password']=$password)
 {
  echo"login successfully":
  echo"welcom".$username;
 }else{
  echo"provide correct details"
 }
 mysqli_close($conn)
 ?>
  
