<?php

session_start();
session_destroy();// all ses destroy
session_unset('aname');// single 

setcookie('aname',$aname,time()-15);
setcookie('password',$password,time()-15);

header('location:alogin.php');
?>