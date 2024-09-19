<?php
setcookie("user", "John Doe", time()+3600);
if(isset($_COOKIE["user"])){
    echo "<br>Cookie telah diatur: " . $_COOKIE["user"];
}else{
    echo "<br>Cookie belum diatur.";
}
?>