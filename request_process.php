<?php
    include('connection.php');
    $p_name=$_POST["p_name"];
    $g_name=$_POST["g_name"];
    $email=$_POST["email"];
    $phone=$_POST["phone"];
    $address=$_POST["address"];
    $state=$_POST["inputState"];
    $district=$_POST["inputDistrict"];
    $pincode=$_POST["pincode"];
    $age=$_POST["age"];
    $hospital=$_POST["hospital"];
    $bloodgroup=$_POST["bloodgroup"];
    $gender=$_POST["gender"];
    $weight=$_POST["weight"];
    $reason=$_POST["reason"];
    

    $query="insert into blood_request(p_name, g_name, email, phone, address, state, district, pincode, age, hospital, 
    bloodgroup, gender, weight, reason) values ('$p_name','$g_name','$email','$phone','$address','$state','$district','$pincode','$age',
    '$hospital','$bloodgroup','$gender','$weight','$reason')";

    $result=mysqli_query($con,$query);
    if($result)
    {
        echo "<script>alert('Request Submitted!')</script>";
        echo "<script>window.location.href='request.php'</script>";
    }
    else
    {
        echo "<script>alert('Something Went Wrong!')</script>";
        echo "<script>window.location.href='request.php'</script>";
    }
?>