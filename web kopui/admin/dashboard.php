<?php
include "security.php";


$username = $_SESSION["username"];

echo "Welcome, ".$username."<br>";
?>
<a href="courses/index.php">Manajemen Kelas</a><br>
<a href="logout.php">Logout</a>