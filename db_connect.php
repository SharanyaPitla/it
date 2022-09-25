<?php
$username=$_POST['username'];
$password=$_POST['password'];
$email=$_POST['email'];
//Database Connection
$conn=new mysqil_connect('localhost','root',' ','ram');
if($conn->connect_error){
echo "$conn->connect_error";
die("Connection failed:".$conn->connect_error);
}else{
$sql ="INSERT INTO stu(username,password,email) VALUES ('$username','$password',$email");
if(mysqli_query($conn,$)){
echo "Records added successfully.";}
else{
echo "ERROR; Could not able to excute $sql." .mysqli_error($conn);}
$conn->close();}
?>
