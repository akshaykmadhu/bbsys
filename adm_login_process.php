<?php
    include('connection.php');
    session_start();
    $username=$_POST['username'];
    $password=$_POST['password'];
    $_SESSION['username']=$username;
    if($username=="admin" && $password=="admin")
    {
        ?>
        <script language="javascript">alert("Login Successfull!");
        window.location.href="admin_dashboard.php";
        </script>
        <?php
    }
    else
    {
        ?>
        <script language="javascript">alert("Login Failed!");
        window.location.href="admin-login.html";</script>
        <?php
    }
?>