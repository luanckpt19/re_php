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
<?php
function createbox($content, $width=150, $height=150){
    $result = '<div class="box" style="width: '.$width.'px; height: '.$height.'px; font-weight: bold;border: 5px solid pink">';
    $result .= '<p>'.$content.'<span style="font-weight: normal; font-style: italic">(300x200)</span></p>';
    $result .= ' </div>';
    return $result;
}
$boxA = createbox("BoxA", 300,200 );
$boxB = createbox("BoxB",100,50);
$boxC = createbox("BoxC");

echo $boxA . $boxB . $boxC;
?>
</body>
</html>


