<?php

$username = $pass = $ngay = "";
$error = array();
$error["username"] = $error["password"] = $error["day"] = NULL;
if (isset($_POST["ok"])) {
    //Check xem nhap tài khoản chưa
    if(empty($_POST["txtname"]))
    {
        $error["username"] = "* Xin vui lòng nhập tên tài khoản <br> "  ;
    }
    else
    {
        $username=$_POST["txtname"];

    }
    if(empty($_POST["txtpass"]))
    {
        $error["password"] = "Xin vui lòng nhập mật khẩu <br> " ;
    }
    else
    {
        $pass=$_POST["txtpass"];
    }
    //Check xem có chọn ngày sinh chưa
    if(($_POST["ngay"]=="ngay"))
    {
        $error["day"] = "Xin vui lòng chọn ngày";
    }
    else
    {
        $ngay=$_POST["ngay"];
    }
    //Hien thi thong tin ra man hinh
    if (!empty($username) && !empty($pass)) {
        echo "Tài khoản: $username <br> ";
        echo "Mật Khẩu: $pass <br>"  ;
        echo "Ngày sinh: $ngay <br>" ;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="xuly.php"> -->

</head>
<body>
    <form action="register.php" method="post">
        <fieldset>
            <legend>REGISTER</legend>
            <table>
                <tr>
                    <td>Tài Khoản</td>
                    <td><input type="text" size="25" name="txtname" value="<?php echo $username; ?>"></td>
                    <td style="color: red;"><?php echo $error["username"]?></td>
                </tr>
                <tr>
                    <td>Mật Khẩu</td>
                    <td><input type="password"size="25" name="txtpass" value="<?php echo $pass; ?>"></td>
                    <td><?php echo $error["password"]?></td>
                </tr>
                <tr>
                    <td>Ngày Sinh</td>
                    <td>
                        <select name="ngay" id="ngaysinh1">
                           <option value="ngay">Ngày</option>
                            <?php
                           for($i=1;$i<=31;$i++)
                           {
                               echo "<option value ='$i'>$i</option>";
                           }

                            ?>
                        </select>
                    </td>
                    <td><?php echo $error["day"]?></td>
                </tr>
                <tr>
                    <td>Giới tính</td>
                    <td>
                        <input type="radio" name="gender" value="male" checked>Nam
                        <input type="radio" name="gender" value="female" checked>Nữ
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="Đăng ký" name="ok"></td>
                </tr>
            </table>
        </fieldset>
    </form>
</body>
</html>