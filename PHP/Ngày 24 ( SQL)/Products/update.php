<?php
require_once "connect.php";

echo "<pre>";
print_r($connection);
echo "</pre>";

if (is_array($_POST) && !empty($_POST)) {
    // cập nhật dữ liệu mới vào db
    echo "<br> cập nhật dữ liệu mới";
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";
    $product_id = isset($_POST['product_id']) ? (int)$_POST['product_id'] : 0;
    $product_name = isset($_POST['product_name']) ? $_POST['product_name'] : '';
    $product_price_sell = isset($_POST['product_price_sell']) ? $_POST['product_price_sell'] : '';
    $product_price_core = isset($_POST['product_price_core']) ? $_POST['product_price_core'] : '';
    $product_quantily = isset($_POST['product_quantily']) ? $_POST['product_quantily'] : '';

    $created = date("Y-m-d H:i:s");
    $updated = date("Y-m-d H:i:s");

    $sqlUpdate = "UPDATE `products` SET `product_name`='$product_name', `product_price_sell`='$product_price_sell', `product_price_core`='$product_price_core', `product_quantily`='$product_quantily' WHERE `product_id`=$product_id";

    echo "$sqlUpdate";

    $resultUpdate = $connection->exec($sqlUpdate);

    //


}

// lấy ra dữ liệu cũ
$id = isset($_GET["id"]) ? $_GET["id"] : 0;
if ($id > 0) {
    $sqlSelect = "SELECT * FROM products WHERE product_id=$id";
    $stmt = $connection->prepare($sqlSelect);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_OBJ);
// lấy 1 bản ghi duy nhất ->fetchObject()
    $product = $stmt->fetchObject();

    echo "<pre>";
    print_r($product);
    echo "</pre>";
}


?>
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
            <h1>Sửa Sản Phẩm</h1>
            <form name="themsv" method="post" action="">

                <input type="hidden" name="product_id" value="<?php echo isset($product->product_id) ? $product->product_id : 0 ?>">
                <div class="form-group">
                    <label>Tên Sản Phẩm</label>
                    <input type="text" name="product_name" value="<?php echo isset($product->product_name) ? $product->product_name : '' ?>" class="form-control">
                </div>

                <div class="form-group">
                    <label>Giá Bán</label>
                    <input type="text" name="product_price_sell" value="<?php echo isset($product->product_price_sell) ? $product->product_price_sell : 0 ?>" class="form-control">
                </div>

                <div class="form-group">
                    <label>Giá Niêm yết</label>
                    <input type="text" name="product_price_core" value="<?php echo isset($product->product_price_core) ? $product->product_price_core : '' ?>" class="form-control">
                </div>
                <div class="form-group">
                    <label>Tồn Kho</label>
                    <input type="text" name="product_quantily" value="<?php echo isset($product->product_quantily) ? $product->product_quantily : '' ?>" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Cập nhật</button>
                <a href="list.php" class="btn btn-info" style="background: pink; text-decoration: none;border: 1px solid white;">Danh Sách Sản Phẩm</a>
            </form>
        </div>
    </div>
</div>

</body>
</html>
