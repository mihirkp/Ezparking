<?php

session_start();
session_destroy();// all ses destroy
session_unset('name');// single 

setcookie('name',$name,time()-15);
setcookie('password',$password,time()-15);

header('location:index.php');
?>