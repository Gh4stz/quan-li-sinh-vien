<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <div id="header">
        <h1>
            <center>QUẢN LÍ DANH SÁCH SINH VIÊN</center>
        </h1>
    </div>
    <div id="content">
        <table border="1">
            <tr>
                <th colspan="8">THÔNG TIN SINH VIÊN</th>
            </tr>
            <tr>
                <th>STT</th>
                <th>Mã sinh viên</th>
                <th>Họ và tên</th>
                <th>Email</th>
                <th>Địa chỉ</th>
                <th>Số điện thoại</th>
                <th colspan="2">Chức năng</th>
            </tr>
            <tr>
                <?php
                //ket noi den database
                require_once('config.php');
                $query = "SELECT * FROM SINH_VIEN";
                $result = mysqli_query($connect, $query);
                $data = array();
                while ($value = mysqli_fetch_array($result, 1)) {
                    $data[] = $value;
                }
                //dong ket noi den database
                $connect->close();
                for ($i = 0; $i < count($data); $i++) {
                    echo
                    '<tr>
                        <td>'.($i+1).'</td>
                        <td>'.$data[$i]['MA_SV'].'</td>
                        <td>'.$data[$i]['FULLNAME'].'</td>
                        <td>'.$data[$i]['EMAIL'].'</td>
                        <td>'.$data[$i]['ADDRESS'].'</td>
                        <td>'.$data[$i]['PHONE_NUMBER'].'</td>
                        <td><center><a href = "sua_sv.php?id='.$data[$i]['ID'].'">Sửa</a></center></td>
                        <td><center><a href = "del_sv.php?id='.$data[$i]['ID'].'">Xóa</a></center></td>
                    </tr>';
                }
                ?>
            </tr>
        </table>
        <a href="add_sv.php" id="add">Thêm</a>
    </div>
</body>

</html>