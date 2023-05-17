<?php
$connect = mysqli_connect("localhost", "root", "", "Candidate");
move_uploaded_file($_FILES["img"]["tmp_name"],"../img/".$_FILES["img"]["name"]);
$img = $_FILES["img"]["name"];
$query = "UPDATE `info` SET `name`='$_POST[name]',`img` = '$img'";
mysqli_query($connect, $query);
echo "<script> location.replace('../viewCandidate.php') </script>";
