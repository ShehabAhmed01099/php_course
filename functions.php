<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>

    <?php
    
        function calculate() {
            $number1 = 20;
            $number2 = 20;
            if($number1 == $number2) {
                echo "num 1 equal num 2";
            }elseif($number1 > $number2) {
                echo "num 1 is greater than num 2";
            }else {
                echo "num 1 is less than num 2";
            }
        }
        function sayhello() {
            for($i=1; $i<=10; $i++) {
               calculate();
            }
        }
        sayhello();
        
    ?>
        
    </body>
</html>