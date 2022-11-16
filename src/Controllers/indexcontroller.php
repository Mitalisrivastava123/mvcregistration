<?php
include  "../config/config.php";
// taking form values
$name = $_POST["name"];
$email = $_POST["email"];
$password = $_POST["password"];
$cpassword = $_POST["cpassword"];

// creating array
if ($password == $cpassword) {
    $user = User::create(array('name' => $name, 'email' => $email, 'password' => $password));
    echo "<script>window.location.href='../Views/userloginform.php';</script>";
} else {
    echo "<script>alert('Your password not match');window.location.href='../Views/userregisterform.php'</script>";
}
?>
<!-- sending header location back into the login page  -->