<?php
    include("connection.php");
    $username=$_POST["username"];
    $password=$_POST["password"];

    $query="select * from donor_registration where username='$username' && password='$password'";
    $result=mysqli_query($con,$query);
    if(mysqli_num_rows($result)){
        while($row=mysqli_fetch_array($result)){
            $username=$row["username"];
            $id=$row["user_id"];
            session_start();
            $_SESSION["user_id"]=$id;
            $_SESSION["username"]=$username;
        }
        echo "<script>alert('Login Successfull!')</script>";
        echo "<script>window.location.href='donor_dashboard.php'</script>";
    }
    else{
        echo "<script>alert('Login Failed!')</script>";
        echo "<script>window.location.href='donor-login.html'</script>";
    }
?>