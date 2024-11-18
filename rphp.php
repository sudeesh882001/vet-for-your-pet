<?php
$servername="localhost";
$user_name="root";
$password1="pooja";
$database_name="register";

$conn=mysqli_connect($servername,$user_name,$password1,$database_name);
if(!$conn)
{
    die("Connection failed:" . mysqli_connect_error());
}
if(isset($_POST['save']))
{
    $username=$_POST['uname'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $password=$_POST['password'];

    $sql_query="INSERT INTO register(uname,phone,email,password) VALUES('$username','$phone','$email','$password')";
    if(mysqli_query($conn,$sql_query))
    {
        echo " New details entered Successfully";
    }
    else
    {
       echo "Error:". $sql ."".mysqli_error($conn);
    }
    mysqli_close($conn);
?>















}