<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="content">
    <ul>
        <li><a href="index.php?type=1"><img src="" alt="1"></li>
        <li><a href="index.php?type=2"><img src="" alt="2"></li>
        <li><a href="index.php?type=3"><img src="" alt="3"></li>
    </ul>
    <div class="result">
        <?php

        $result="";
        if(isset($_GET['type'])){
            $type = $_GET['type'];
            switch ($type){
                case 1:
                    /*               i=1
                     * *             i=2
                     * * *           i=3
                     * * * *
                     */
                    $i=1;
                    $n = 6;
                    while ($i<=$n){
                        $result .= str_repeat("*",$i) . "<br />";
                        $i++;
                    }
                    break;
                case 2:
                    $i = 6;
                    $n = 1;
                    while ($i>=$n){
                        $result .= str_repeat("*",$i) . "<br />";
                        $i--;
                    }
                    break;
                case 3:

                    /*
                                 *                     i =1, space = 5, * = 1 (space = n-i )(*= i * 2 - 1 )
                               * * *                   i = 2, space = 4, * = 3
                             * * * * *                 i = 3, space =3 , * = 5;
                           * * * * * * *
                   */
                    $i = 1;
                    $n = 6;
                    while ($i<=$n){
                        $space  = str_repeat("&nbsp;&nbsp;", $n -$i);
                        $characer = str_repeat("*",2*$i-1);
                        $result .= $space . $characer . "<br />";
                        $i++;
                    }
                    break;
            }
        }
echo $result;
        ?>
    </div>
</div>
</body>
</html>

