<?php

session_start();
session_destroy();// all ses destroy
session_unset('cname');// single 

setcookie('cname',$cname,time()-15);
setcookie('password',$password,time()-15);

header('location:clogin.php');
?>