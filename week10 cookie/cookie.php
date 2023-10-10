<html>
    <body>
        <?php
        if(empty($_COOKIE["visit"])){
            setcookie("visit,0,time()+3600*24");
        }
        if(!isset)