<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>

    <?php
        $number1 = 2;
        $number2 = 5;
        if($number1 == $number2 || $number1 === $number2) {
            echo "The numbers are equal";
        }elseif($number1 < $number2) {
            echo "Number 1 is less than number 2";
        }else {
            echo "Nothing";
        }
        echo "<br>";

        $name = "ali";
        switch($name) {
            case "ali";
            echo "This is ali";
            break;
            case "ramzi";
            echo "This is ramzi";
            break;
            default : echo "This is another name";
            break;
        }
        echo "<br>";

        $counter = 1;
        while($counter <= 20) {
            echo "shehab will be rich" . "<br>";
            $counter++;
        }
        echo "<br>";

        for($i=0; $i<=10; $i++) {
            echo $i . "<br>";
        }
        echo "<br>";

        $numbers = array(123 , 456 , 789 , 120);
        foreach($numbers as $number) {
            echo $number . "<br>";
        }
    ?>
        
    </body>
</html>