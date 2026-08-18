<?php
//Creating Cookie
//setcookie("user","Jiya",time() + 300);

//Edit the Cookie
//setcookie("user","Developer",time() + 300);

//Deleting the Cookie
//setcookie("user","Jiya",time() - 300);

//Evaluate / Creating
function enc_cookie($data)
{
    $data = $data . "3454%$";
    setcookie("user", "$data", time() + 300);
    echo $_COOKIE['user'];
}


enc_cookie("Jiya");




?>