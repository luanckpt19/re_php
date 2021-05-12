<?php
require_once "connect.php";

if (is_array($_POST) && !empty($_POST)) {
    // $_POST là 1 mảng và không rỗng

    echo "<pre>";
    print_r($_POST);
    echo "</pre>";
    $product_name = isset($_POST['product_name']) ? $_POST['product_name'] : '';
    $product_price_sell = isset($_POST['product_price_sell']) ? $_POST['product_price_sell'] : '';
    $product_price_core = isset($_POST['product_price_core']) ? $_POST['product_price_core'] : '';
    $product_quantily = isset($_POST['product_quantily']) ? $_POST['product_quantily'] : '';
    $product_desc = isset($_POST['product_desc']) ? $_POST['product_desc'] : 0;

    $created = date("Y-m-d H:i:s");
    $updated = date("Y-m-d H:i:s");
    $sqlInsert = "INSERT INTO `products` (`product_id`, `product_name`, `product_price_sell`, `product_price_core`, `product_quantily`, `product_desc`, `created`, `updated`) 
VALUES (NULL, '$product_name', '$product_price_sell', '$product_price_core', '$product_quantily', '$product_desc', '$created','$updated');";

    echo $sqlInsert;
    $resultInsert = $connection->exec($sqlInsert);

    if ($resultInsert == 1) {
         //insert thành công

        header("Location: list.php");
        exit();
    }

}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Thêm Mới Sản Phẩm</h1>
            <form name="themsp" method="post" action="">
                <div class="form-group">
                    <label>Tên sản phẩm</label>
                    <input type="text" name="product_name" class="form-control">
                </div>

                <div class="form-group">
                    <label>Giá Bán</label>
                    <input type="number" name="product_spice_sell" class="form-control">
                </div>

                <div class="form-group">
                    <label>Giá Niêm yết</label>
                    <input type="number" name="product_spice_core" class="form-control">
                </div>
                <div class="form-group">
                    <label>Tồn Kho</label>
                    <input type="number" name="product_quantily" class="form-control">
                </div>
                <div class="form-group">
                    <label>Mô Tả</label>
                    <input type="text" name="product_desc" class="form-control">
                </div>

                <button type="submit" class="btn btn-primary">Thêm mới</button>
            </form>
        </div>
    </div>
</div>

</body>
</html>
