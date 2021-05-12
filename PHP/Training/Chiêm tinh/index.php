<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
$day = "";
$month = "";

$image = "";
$name = "";
$time = "";
$result = "";
$flagShow = true;


if (isset($_POST["day"]) && isset($_POST["month"])) {
    $day = $_POST["day"];
    $month = $_POST["month"];

    if (is_numeric($day) && is_numeric($month)) {

        switch ($month) {
            case 1:
                if ($day <= 19) {
                    $image = "capricorn";
                    $name = "Ma Kết";
                    $time = "23/12  - 19/1";
                }
                if ($day >= 20) {
                    $image = "aquarius";
                    $name = "Bảo Bình";
                    $time = "20/create  - 19/2";
                }
                if ($day <1 || $day > 31) $flagShow = false;
                break;
            case 2:
                if ($day <= 19) {
                    $image = "capricorn";
                    $name = "Bảo Bình";
                    $time = "20/1  - 19/2";
                }
                if ($day >= 20) {
                    $image = "pisces";
                    $name = "Song Ngư";
                    $time = "20/02  - 19/3";
                }
            default:
                $flagShow = false;
                break;
        }

    }else{
        if($flagShow == true){
            $result = '   <div class="result">
        <img src="images/ '. $image.'.jpg alt="'.$image.'">
        <p>'. $name.'<span>('.ucfirst($image).' :  '.$time.'</span></p>
    </div>';
        }else{
            $result = "Mày vừa nhập cái rì đấy ?";
        }
    }
}
?>
<div class="content">
    <h1>Lấy Chòm Sao nhé các em</h1>
    <form action="#" method="post" name="main_form">
        <div class="row">
            <span>Ngày Sinh</span>
            <input type="text" name="number1" value="<?php echo $day; ?>"/>

        </div>
        <div class="row">
            <span>Tháng Sinh</span>
            <input type="text" name="caculate" value="<?php echo $month; ?>"/>

        </div>
        <div class="row">
            <input type="submit" name="submit" value=" lấy chòm sao"/>

        </div>

    </form>
    <?php
     echo $result;
    ?>
<!--       <div class="result">
        <img src="images/<?php /*echo $image; */?>.jpg" alt="<?php /*$image; */?>">
        <p><?php /*echo $name; */?><span>(<?php /*echo $image; */?>: <?php /*echo $time; */?>)</span></p>
</div>-->




</div>
</body>
</html>
