<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <form action="" method="POST">
        <label>Roll no:</label><input type="number" placeholder="Enter your rollno" name="rollno">
        <br>
        <label>Name:</label><input type="text" placeholder="Enter your name" name="name">
        <br>
        <label>Email:</label><input type="email" placeholder="Enter your email" name="email">
        <br>
        <label>Phone no:</label><input type="number" placeholder="Enter your phoneno" name="phoneno">
        <br>
        <label>Password:</label><input type="password" placeholder="Enter your password" name="password">
        <br>
        <label>Retype Password:</label><input type="password" placeholder="Enter your password" name="repassword">
         <br>
        <input type="submit" name="sub"> 
    </form>
</body>
</html>

<?php
if(isset($_POST['sub']))
{
    $rollno=$_POST['rollno'];
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phoneno=$_POST['phoneno'];
    $password=$_POST['password'];
    $repassword=$_POST['repassword'];


    if($password!=$repassword)
    {
    echo "Password doesn't match";
    }
    else
    {
    $conn=mysqli_connect('localhost','root','','test1');
    }
    if(!$conn){
    echo "Cannot connect";
    }
    else{
    $q="INSERT INTO users( `Name`, `Email`, `Phone no`, `Password`) VALUES('$name','$email','$phoneno','$password')";
    $query=mysqli_query($conn,$q);
    if($query)
    {
    echo"<h2>Register!<h2>";
    }
    else
    {
    echo"Cannot register";
    }
    }
    mysqli_close($conn);
}
