<?php
if (
    !empty($_FILES['img']['name']) &&
    !empty($_POST['name'])
) {
    $connect = mysqli_connect("localhost", "root", "", "Candidate");
    move_uploaded_file($_FILES["img"]["tmp_name"],"../img/".$_FILES["img"]["name"]);
    $address = $_FILES["img"]["name"];
    $query = "INSERT INTO `info`(`name`, `img`) VALUES ('$_POST[name]','$address')";
    mysqli_query($connect,$query);
    echo "<script> window.alert('اطلاعات با موفقیت وارد شد');
    location.replace('insert.html');
</script>";
} else {
    echo "<script> window.alert('همه موارد را پر کنید');
    location.replace('insert.html');
</script>";
}
