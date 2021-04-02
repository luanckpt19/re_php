<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    if else if else <br>
    <?php
    $tuoi = 18;

    // khi sử dụng if elseif
    // nếu cùng thỏa mãn nhiều điều kiện đúng
    // thì nó chỉ thực hiện điều kiện đầu tiên

    if ($tuoi < 6) {
        echo "mầm non mẫu giáo";
    } elseif ($tuoi < 11) {
        echo "bậc học cấp 1";
    } elseif ($tuoi < 16) {
        echo "bậc học cấp 2";
    } elseif ($tuoi < 19) {
        echo "Đủ tuổi đi tù, Bớt trơi bố láo lại hộ tao cái";
    } elseif ($tuoi < 23) {
        echo "Nợ bao nhiêu tín rồi";
    } else {
        echo "Còn mấy năm nữa ra trường ?";
    }

    ?>
</body>
</html>