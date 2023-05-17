<!doctype html>
<html lang="en">
<head>
    <title>update</title>
</head>
<body>
<?php
$connect = mysqli_connect("localhost", "root", "", "Candidate");
$query = "SELECT * FROM `info` WHERE(`id` = '$_GET[id]')";
$Candidate = mysqli_query($connect, $query);
$CandidateAF = mysqli_fetch_array($Candidate);
?>

<div class="main">
    <form action="update.php" method="post" enctype="multipart/form-data">
        <div class="in">
            <label for="name"> نام کاندیدا :
                <input type="text" id="name" class="name" name="name" value="<?= $CandidateAF['name'] ?>">
            </label><br>
            <label for="img"> عکس کاندیدا :
                <input type="file" id="img" class="img" name="img">
            </label><br>
            <input type="submit" class="submit" value="افزودن">
            <input type="reset" class="reset" value="ریست">
        </div>
    </form>
</div>
</body>
</html>
