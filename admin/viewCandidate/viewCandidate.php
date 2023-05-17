<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="viewCandidate.css">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>view</title>
</head>
<body>
<?php
session_start();
$connect = mysqli_connect("localhost", "root", "", "Candidate");
$query = "SELECT * FROM  `info`";
$allCandidate = mysqli_query($connect, $query);
?>

<div class="main">
    <table>
        <thead>
        <th>نام کاندیدا</th>
        <th>عکس کاندیدا</th>
        <th>تعداد رای</th>
        <th>ویرایش</th>
        <th>خذف</th>
        </thead>
        <tbody>
        <?php
        while ($Candidate = mysqli_fetch_array($allCandidate)) {
            ?>
            <tr>
            <td><?= $Candidate['name'] ?></td>
            <td><img src="<?= '../img/'.$Candidate['img'] ?>" alt="عکس وجود ندارد"></td>
            <td><?= $Candidate['score'] ?></td>
            <?php
            if (!empty($_SESSION['admin'])) {
                ?>
                <td><a href="update/updateGUI.php?id=<?= $Candidate['id'] ?>">ویرایش</a></td>
                <td><a href="delete/delete.php?id=<?= $Candidate['id'] ?>">حذف</a></td>
                </tr>
                <?php
            }
        }
        ?>
        </tbody>
    </table>
</div>
<?php
if (empty($_SESSION['admin'])) {
    echo "<input type='button' value='ورود' onclick='quit()' class='addBtn'>";
} else {
    echo "<input type= 'button' value='افزودن کاندید' onclick='goToAdd()' class='addBtn'>";
    echo "<input type='button' value='خروج' onclick='quit()' class='quit'>";
}
?>
</body>
<script>
    function goToAdd() {
        location.replace("../insert/insert.html");
    }

    function quit() {
        location.replace("quit.php");
    }
</script>
</html>
