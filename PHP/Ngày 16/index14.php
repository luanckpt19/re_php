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

    <table class="table">
        <thead>
            <tr>
                <td>id</td>
                <td>tên</td>
                <td>tuổi</td>
            </tr>
        </thead>

        <tbody>

            <?php
            for($i = 1; $i <= 50; $i++) {
                $tuoi = rand(1,70);
                echo "<tr>
                    <td>" . $i . "</td>
                    <td>abc " . $i . "</td>
                    <td>".$tuoi."</td>
                </tr>";
            }
            ?>



        </tbody>
    </table>

</body>