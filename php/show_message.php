<?php 
$username  = @@act_txt_National_Code_a;
$username  = @@txt_Rep_national;
$password  = @@act_txt_Mobile_number_a;
$firstname = @@act_txt_name_and_surname;
$lastname  = @@act_txt_name_and_surname;


if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') 
	$link = "https://"; 
else
	$link = "http://"; 

@@printUrl=$link. $_SERVER['SERVER_NAME'].'/sys' . @@SYS_SYS .'/'.
   @@SYS_LANG .'/'. @@SYS_SKIN .'/'. @@PROCESS .'/new_user.php';

$_SESSION['username']   = $username;
$_SESSION['username']   = $username;
$_SESSION['password']   = $password;
$_SESSION['firstname']  = $firstname;
$_SESSION['lastname']   = $lastname;
?>
