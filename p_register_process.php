<?php
    include("connection.php");
    $username=$_POST["user_name"];
    $password=$_POST["user_password"];
    $password_confirm=$_POST["user_passwordconfirm"];
    $name=$_POST["name"];
    $email=$_POST["user_email"];
    $phone=$_POST["phone"];
    $age=$_POST["age"];
    $bloodgroup=$_POST["bloodgroup"];
    $gender=$_POST["gender"];
    $weight=$_POST["weight"];

    $query="insert into patient_registration(username,password,name,email,phone,age,blood_group,gender,weight) 
    values('$username','$password','$name','$email','$phone','$age','$bloodgroup','$gender','$weight')";

    $result=mysqli_query($con,$query);
    if($result)
    {
        echo "<script>alert('Registration Successfull!')</script>";
        echo "<script>window.location.href='patient-login.html'</script>";
    }
    else
    {
        echo "<script>alert('Registration Failed!')</script>";
        echo "<script>window.location.href='patient-register.html'</script>";
    }
?>