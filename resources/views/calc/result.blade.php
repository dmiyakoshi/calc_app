<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>result</title>
    </head>
    <body>
        <h1>計算アプリ</h1>
        <?php
            if ($how == 'addition')
            {
                echo $number1 + $number2;
            }
            elseif ($how == 'subtraction')
            {
                echo $number1 - $number2;
            }
            elseif ($how == 'multiplication')
            {
                echo $number1 * $number2;
            }
            elseif ($how == 'division')
            {
                echo $number1 / $number2;
            }
        ?>
    </body>
</html>