<?php
 $con=mysqli_connect("localhost","root","Ritesh@8687","chatbot");
         
$firstname=$_POST["firstname"];
$lastname=$_POST["lastname"];
$email=$_POST["email"];
$mobile=$_POST["mobile"];
$state=$_POST["state"];
$city=$_POST["city"];
$gender=$_POST["gender"];
mysqli_query($con,"insert into contact (`First_Name`,`Last_Name`,`email`,`Phone_Number`,`State`,`City`,`gender`) values('$firstname','$lastname','$email','$mobile','$state','$city','$gender')");
echo "<script>alert('Submit the contact information succcessfully')</script>";
echo "<script>top.window.location.href='../home.html'</script>";
?>