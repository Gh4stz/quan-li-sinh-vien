<?php
if (!empty($_GET)) {
    $id = $_GET["id"];
    //ket noi den server
    require_once('config.php');
    $query = "SELECT * FROM SINH_VIEN WHERE ID = '$id'";
    $data = mysqli_query($connect, $query);
    $result = mysqli_fetch_array($data);
    $connect->close();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm sinh viên</title>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <h1>Sửa thông tin sinh viên</h1>
    <form method="post" action="add_sv.php">
        <input type="hidden" name="id" value="<?php echo $id?>">
        <label for="msv">Mã sinh viên</label><br>
        <input type="text" id="msv" name="msv" value="<?php echo $result['MA_SV']?>"><br>
        <label for="fullname">Họ và tên:</label><br>
        <input type="text" id="fullname" name="fullname" value="<?php echo $result['FULLNAME']?>"><br>
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" value="<?php echo $result['EMAIL']?>"><br>
        <label for="address">Địa chỉ:</label><br>
        <input type="text" id="address" name="address" value="<?php echo $result['ADDRESS']?>"><br>
        <label for="phone_number">Số điện thoại:</label><br>
        <input type="tel" id="phone_number" name="phone_number" value="<?php echo $result['PHONE_NUMBER']?>"><br>
        <button type="submit">Sửa</button>
    </form>
    <?php
    if (!empty($_POST)) {
        $id = $_POST['id'];
        $msv = $_POST['msv'];
        $fullname = $_POST['fullname'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $phone_number = $_POST['phone_number'];
        require_once('config.php');
        $query = "UPDATE SINH_VIEN SET MA_SV = '$msv' FULLNAME = '$fullname' EMAIL = '$email' ADDRESS = '$address' PHONE_NUMBER = '$phone_number' WHERE ID = '$id'";
        mysqli_query($connect, $query);
        $connect->close();
        header('Location: index.php');
    }
    ?>
</body>

</html>
