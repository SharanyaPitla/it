<?php
 include("db-connect.php)
 if(isset($_POST[signup"])
  {
  $username=$_POST["Username"];
  $Password=$_post["password"];
  $email=$_post["email"];
  $query="insert into login(username,password,email);
       values($username,$password,$email)";
  if(musqli_query($conn,$query))
  {
   echo "Registration Successfull";
  }else{
   echo "Registration unsuccessful";
  }
  ?>
