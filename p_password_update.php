<?php
    include('connection.php');
    session_start();
    $id=$_SESSION['user_id'];
    $oldpass=$_POST['oldpass'];
    $newpass=$_POST['newpass'];
    $newpass_confirm=$_POST['newpass_confirm'];

    $query="select * from patient_registration where user_id='$id'";
    $res=mysqli_query($con,$query);
    $row=mysqli_fetch_array($res);
    if($oldpass==$row['password'])
    {
        if($newpass==$newpass_confirm)
        {
            $pass_query="update patient_registration set password='$newpass' where user_id='$id'";
            $result=mysqli_query($con,$pass_query);
            if($result)
            {
                echo "<script>alert('Password Changed!')</script>";
                echo "<script>window.location.href='patient_dashboard.php'</script>";
            }
            else
            {
                echo "<script>alert('Password Change Failed!')</script>";
                echo "<script>window.location.href='patient_dashboard.php'</script>";
            }
        }
        else{
            echo "<script>alert('New Password doesn\'t Match!')</script>";
            echo "<script>window.location.href='patient_dashboard.php'</script>";
        }
    }
    else
    {
        echo "<script>alert('Old Password Incorrect!')</script>";
        echo "<script>window.location.href='patient_dashboard.php'</script>";
    }
?>