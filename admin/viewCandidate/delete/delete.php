<?php
$connect = mysqli_connect("localhost", "root", "", "Candidate");
$queryDelete = "DELETE FROM `info` WHERE(`id` = '$_GET[id]')";
mysqli_query($connect, $queryDelete);
echo "<script> location.replace('../viewCandidate.php') </script>";
