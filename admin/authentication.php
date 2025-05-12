<?php
include("connect.php");
$username=$_POST["username"];
$password=$_POST["password"];
$rs=mysqli_query($con,"select *from login");
while($d=mysqli_fetch_array($rs))
{
    if($d["username"]== $username && $d["password"] == $password)
    {
    echo "<script>alert('You are valid user Success.')</script>";
    echo "<script>top.window.location.href='view_contact.php'</script>";
    
    }
    else{
        echo "<script>alert('Invalid user or password Success.')</script>";
        echo "<script>top.window.location.href='index.php';</script>";
    }
}

?>