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
    <h1>Thêm sinh viên</h1>
    <form method="post" action="add_sv.php">
        <label for="msv">Mã sinh viên</label><br>
        <input type="text" id="msv" name="msv"><br>
        <label for="fullname">Họ và tên:</label><br>
        <input type="text" id="fullname" name="fullname"><br>
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email"><br>
        <label for="address">Địa chỉ:</label><br>
        <input type="text" id="address" name="address"><br>
        <label for="phone_number">Số điện thoại:</label><br>
        <input type="tel" id="phone_number" name="phone_number"><br>
        <button type="submit">Thêm</button>
    </form>
    <?php
    if (!empty($_POST)) {
        $id = $_POST['msv'];
        $fullname = $_POST['fullname'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $phone_number = $_POST['phone_number'];
        require_once('config.php');
        $query = "INSERT INTO SINH_VIEN(MA_SV, FULLNAME, EMAIL, ADDRESS, PHONE_NUMBER) VALUES('" . $id . "', '" . $fullname . "', '" . $email . "', '" . $address . "', '" . $phone_number . "')";
        mysqli_query($connect, $query);
        $connect->close();
        header('Location: index.php');
    }
    ?>
</body>

</html>