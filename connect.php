

<?php
$a=$_POST["n"];
$b=$_POST["a"];
$c=$_POST["d"];
$d=$_POST["g"];
$e=$_POST["e"];
$f=$_POST["p"];
$g=$_POST["s"]; 
$mysqli = new mysqli("localhost", "root", "root", "codebind");
$sql="insert into data(n,a,d,g,e,p,s) values('$a','$b','$c','$d','$e','$f','$g')";
echo("registered");
if ($mysqli->query($sql)) {
   echo '<script>alert("Registered successfully we will convey further details in mail.");</script>';
} else {
   echo '<script>alert("Could not insert record into table: ' . $mysqli->error . '");</script>'; 
}
include("register.php");
            $mysqli->close(); 
            
            
            
?> 





