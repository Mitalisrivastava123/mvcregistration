<?php
include  "../config/config.php";
// taking form values
$email = $_POST["email"];
$password = $_POST["password"];
// finding data from array
$user1 = User::find(array('email' => $email, 'password' => $password));
echo "<h2>Name:" .$user1->name. "</h2>";
echo "<h2>Email:" .$user1->email. "</h2>";
// condition checking if true then successfully login else give alert passsword not match
if($user1)
{
    echo "<h3>Successfully login</h3>";
}
else
{
    echo "<script>alert('your email and password does not match');
    window.location.href='../Views/userloginform.php';
    </script>"; 
}
// defined logout button 
echo "<form action = '../Controllers/logoutcontroller.php' method='POST'>
<button type='submit' name='logout' style='background-color:#17a2b8;padding:10px;color:#fff;margin-top:10px;margin:auto;'>logout User</button></form>";



