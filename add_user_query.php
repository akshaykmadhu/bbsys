<?php
    include("connection.php");
    $username=$_POST["username"];
    $password=$_POST["password"];
    $password_confirm=$_POST["passwordconfirm"];
    $name=$_POST["name"];
    $email=$_POST["email"];
    $phone=$_POST["phone"];
    $age=$_POST["age"];
    $bloodgroup=$_POST["blood_group"];
    $gender=$_POST["gender"];
    $weight=$_POST["weight"];

    $query="insert into donor_registration(username,password,name,email,phone,age,blood_group,gender,weight) 
    values('$username','$password','$name','$email','$phone','$age','$bloodgroup','$gender','$weight')";

    $result=mysqli_query($con,$query);
    if($result)
    {
        echo "<script>alert('User Added Successfull!')</script>";
        echo "<script>window.location.href='donor_details.php'</script>";
    }
    else
    {
        echo "<script>alert('Adding User Failed!')</script>";
        echo "<script>window.location.href='donor_details.php'</script>";
    }
?>