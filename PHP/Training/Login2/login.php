
<?php
// Start the session
session_start();


print_r($_POST);

print_r($_SESSION);


$errors = [];
if (isset($_POST["username"]) && isset($_POST["password"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];
    if (strlen($username) == 0 || strlen($password) == 0) {
        $errors[] = "Chưa nhập username hay password";
    } else {
        // nhập dữ liệu vào
        if ($username == "thanhluanng" && $password == "luandeptrai") {
            // login thành công
            // tạo ra session user
            $_SESSION["user_login"] = ["username" => $username,
                "password" => $password, "login" => 1];

            // chuyển hướng login.php
            // header("Location: đích đến");
            header("Location: login.php");
            // chú ý sau khi chuyển hướng bằng header() thì phải kết thúc bằng
            // die hay exit
            die();

        } else {
            $errors[] = "username/password không đúng";
        }

    }
} else {
    $errors[] = "Chưa nhập username hay password";
}


print_r($errors);



?>
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
<div class='brand'>
    <a href='https://www.jamiecoulter.co.uk' target='_blank'>
        <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/logo.png'>
    </a>
</div>
<form name="login" action="" method="post">
<div class='login'>
    <div class='login_title'>
        <span>Login to your account</span>
    </div>
    <div class='login_fields'>
        <div class='login_fields__user'>
            <div class='icon'>
                <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/user_icon_copy.png'>
            </div>
            <input placeholder='Username' name="username" type='text'>
            <div class='validation'>
                <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/tick.png'>
            </div>
            </input>
        </div>
        <div class='login_fields__password'>
            <div class='icon'>
                <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/lock_icon_copy.png'>
            </div>
            <input placeholder='Password' name="password" type='password'>
            <div class='validation'>
                <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/tick.png'>
            </div>
        </div>
        <div class='login_fields__submit'>
            <input type='submit' value='Log In'>
            <div class='forgot'>
                <a href='#'>Forgotten password?</a>
            </div>
        </div>
    </div>
    <div class='success'>
        <h2>Authentication Success</h2>
        <p>Welcome back</p>
    </div>
    <div class='disclaimer'>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce semper laoreet placerat. Nullam semper auctor justo, rutrum posuere odio vulputate nec.</p>
    </div>
</div>
</form>
<div class='authent'>
    <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/puff.svg'>
    <p>Authenticating...</p>
</div>
<div class='love'>
    <p>Made with <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/love_copy.png" /> by <a href='https://www.jamiecoulter.co.uk' target='_blank'> Jcoulterdesign </a></p>
</div>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js'></script>
<script src="Script.js"></script>
</body>
</html>
