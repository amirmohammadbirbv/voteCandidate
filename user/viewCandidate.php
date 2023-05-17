<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="ViewG.css">
    <title>کاندیدا</title>
</head>
<body>
<?php
session_start();
$connect = mysqli_connect("localhost", "root", "", "Candidate");
$query = "SELECT * FROM `info`";
$allCandidate = mysqli_query($connect, $query);
while ($Candidate = mysqli_fetch_array($allCandidate)) {
    $source = "../admin/img/" . $Candidate['img'];
    ?>
    <div class="main">
        <img src="<?= $source ?>" class="ax">
        <div class="underAx">
            <div class="right"><?= $Candidate['name'] ?></div>
            <span class="left">
                <a href="vote.php?id=<?= $Candidate['id'] ?>"><img src="vote.png" class="voteIcon" title="رای دادن" </a>
            </span>
        </div>
    </div>
<?php } ?>
</body>
</html>
