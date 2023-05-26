<?php

$a=$_POST["n"];
$b=$_POST["a"];
$c=$_POST["d"];
$d=$_POST["g"];
$e=$_POST["e"];
$f=$_POST["p"];
$g=$_POST["s"];

$servername = "localhost";
$username = "root";
$password = "";
$con = new mysqli($servername, $username, $password);
$con -> select_db("firstdb");
$con -> query("insert into registration(n,a,d,g,e,p,s) values('$a','$b','$c','$d','$e','$f','$g')");
echo("Registered Successfully");
include("register1.php");
$con->close();
?>
