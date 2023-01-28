<?php
    include('connection.php');
    session_start();
    $id=$_SESSION['user_id'];

    $uname=$_POST['username'];
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $age=$_POST['age'];
    $blood=$_POST['blood_group'];
    $gender=$_POST['gender'];
    $weight=$_POST['weight'];

    $query="update patient_registration set username='$uname',name='$name',email='$email',phone='$phone',
    age='$age',blood_group='$blood',gender='$gender',weight='$weight' where user_id='$id'";
    
    $res=mysqli_query($con,$query);
    if($res)
    {
        echo "<script>alert('Profile Updated Successfully!')</script>";
        echo "<script>window.location.href='patient_dashboard.php'</script>";
    }
    else{
        echo "<script>alert('Failed to Update!')</script>";
        echo "<script>window.location.href='patient_dashboard.php'</script>";
    }
?>