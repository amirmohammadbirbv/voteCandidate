<?php
session_start();
if (!empty($_POST['UN']) && !empty($_POST['pass'])) {
    $connect = mysqli_connect("localhost", "root", "", "Candidate");
    $query = mysqli_query($connect, "SELECT * FROM `admin`");
    while ($a = mysqli_fetch_array($query)) {
        if (($a['adminName'] == $_POST['UN']) && $a['Password'] == $_POST['pass']) {
            $_SESSION['admin'] = $_POST['UN'];
            echo '<script type="text/javascript"> location.replace("../viewCandidate/viewCandidate.php"); </script>';
        }
        echo '<script type="text/javascript"> 
        window.alert("نام کاربری یا رمز اشتباه است");
        location.replace("login.html");
</script>';
    }
}
else {
    echo '<script type="text/javascript"> 
        window.alert("همه موارد را پر کنید");
        location.replace("login.html");
</script>';
}

