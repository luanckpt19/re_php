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
<div class="content">
    <div class="box" style="width: 300px; height: 200px; font-weight: bold;border: 5px solid pink">
        <p>Box<span style="font-weight: normal; font-style: italic">(300x200)</span></p>
    </div>
</div>

<?php
function createbox(){
   $value = '<div class="box" style="width: 300px; height: 200px; font-weight: bold;border: 5px solid pink">';
   $value .= '<p>Box<span style="font-weight: normal; font-style: italic">(300x200)</span></p>';
   $value .= ' </div>';
    return $value;
}
$result = createbox();

echo $result;
?>
</body>
</html>


