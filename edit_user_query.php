<?php
    include('connection.php');

    $id=$_POST['id'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $age=$_POST['age'];
    $blood=$_POST['blood_group'];
    $gender=$_POST['gender'];
    $weight=$_POST['weight'];

    $query="update donor_registration set username='$username',password='$password',name='$name',email='$email',phone='$phone',
    age='$age',blood_group='$blood',gender='$gender',weight='$weight' where user_id='$id'";

    $res=mysqli_query($con,$query);
    if($res)
    {
        echo "<script>alert('User Updated');</script>";
        echo "<script>window.location.href='donor_details.php';</script>";
    }
    else
    {
        echo "<script>alert('Updation Failed');</script>";
        echo "<script>window.location.href='donor_details.php';</script>";
    }
?>
