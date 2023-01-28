<?php
    include('connection.php');
    $deleteUserId=$_GET['id'];
    $query="delete from donor_registration where user_id='$deleteUserId';";
    $res=mysqli_query($con,$query);
    if($res)
    {
        echo "<script>alert('Success');</script>";
        echo "<script>window.location.href='donor_details.php'</script>";
    }
?>