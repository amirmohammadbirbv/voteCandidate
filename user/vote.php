<?php
$connect = mysqli_connect("localhost", "root", "", "Candidate");
$id = $_GET['id'];
$get = "SELECT * FROM `info` WHERE `id` = '$id'";
$get2 = mysqli_query($connect, $get);
$get3 = mysqli_fetch_array($get2);
$newScore = ((int)$get3['score'])+1;
$query = "UPDATE `info` SET `score`='$newScore' WHERE `id` = '$id'";
mysqli_query($connect, $query);
echo "<script>location.replace('viewCandidate.php')</script>";
