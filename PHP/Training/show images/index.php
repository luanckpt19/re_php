<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="content">
        <h1> Images</h1>
    <div class="images">
        <?php
        $i=1;
        do{
            echo '<img src="images/89925053_732828890588431_6238108095252267008_o.jpg '.$i.'.".jpg>';
            $flagShow = 0;
            if (isset($_GET['show'])){
                $flagShow = $_GET["show"];
                $i++;
            }
        }while($i<=10 && $flagShow ==1);
        ?>
        <a href="index.php?show=1">Show All</a>
        <a href="index.php?show=0">Show Demo</a>

    </div>
</div>
</body>
</html>
