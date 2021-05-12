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
function createNumber($value){

    echo $value."<br/>";

    if ($value %2 ==0){
       return true;
    }else{
        return false;
    }


}
$result = createNumber(23);
if ($result == true){
    echo "Là số chẵn đấy mày";

}else{
    echo "Là số lẻ nghe con";
}



?>
</body>
</html>