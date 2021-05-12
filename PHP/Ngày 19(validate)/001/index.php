<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://unpkg.com/purecss@2.0.5/build/pure-min.css" integrity="sha384-LTIDeidl25h2dPxrB2Ekgc9c7sEC3CWGM6HeFmuDNUjX76Ert4Z4IY714dhZHPLd" crossorigin="anonymous">
    <title>Document</title>


    <style>
        span {
            color: red;
        }
    </style>
</head>
<body>


    <form name="profile" method="post" action="">
        <div>
            <label for="">Họ tên</label>
            <input type="text" name="hoten" value="">
            <span>* Họ tên : từ 2 chữ đến 5 chữ. chỉ chứa chuỗi không chứa số
            và các ký tự đặc biệt</span>
        </div>

        <div>
            <label>Email</label>
            <input type="email" name="email" value="">
            <span>* Email : tên email từ 3 đến 32 ký tự . trong email phải có
            chữ @ . phần domain tên miền có độ dài từ 3 đến 15 ký tự
            ví dụ : admin@gmail.com, admin@yahoo.ocm, admin@vhost.com</span>
        </div>

        <div>
            <label for="">SDT</label>
            <input type="text" name="sdt" value="">
            <span> đảm bảo độ dài từ 10 đến 11 số . SDT chỉ được phép chứa số</span>
        </div>

        <div>
            <label for="">Ngày sinh</label>
            <input type="text" name="ngaysinh" value="">
            <span>dd/mm/YYYY => ngày/tháng/năm ví dụ  02/10/1995</span>
        </div>

        <div>
            <label for="">Ghi chú</label>
            <textarea name="ghichu" id="" cols="30" rows="10"></textarea>
            <span>Nhập độ dài từ 5 đến 100 chữ</span>
        </div>

        <div>
            <button type="submit">Gửi thông tin</button>
        </div>

    </form>
    <form class="pure-form pure-form-aligned">
    <fieldset>
        <div class="pure-control-group">
            <label for="aligned-name">Username</label>
            <input type="text" id="aligned-name" placeholder="Username" />
            <span class="pure-form-message-inline">This is a required field.</span>
        </div>
        <div class="pure-control-group">
            <label for="aligned-password">Password</label>
            <input type="password" id="aligned-password" placeholder="Password" />
        </div>
        <div class="pure-control-group">
            <label for="aligned-email">Email Address</label>
            <input type="email" id="aligned-email" placeholder="Email Address" />
        </div>
        <div class="pure-control-group">
            <label for="aligned-foo">Supercalifragilistic Label</label>
            <input type="text" id="aligned-foo" placeholder="Enter something here..." />
        </div>
        <div class="pure-controls">
            <label for="aligned-cb" class="pure-checkbox">
                <input type="checkbox" id="aligned-cb" /> I&#x27;ve read the terms and conditions</label>
            <button type="submit" class="pure-button pure-button-primary">Submit</button>
        </div>
    </fieldset>
</form>
    <?php
    $validateAll = true;

    if ($validateAll) {
        // validate đúng in ra thông tin của người dùng đã nhập
        ?>

        <?php
    } else {
        // validate sai
        // in ra lỗi cho người dùng biết họ đã nhập sai input nào
        // đồng thời điền lại các dữ liệu người dùng đã nhập

    }
    ?>
</body>
</html>