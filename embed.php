<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <?php  
            $list = array(12,10,"shehab",50,"<h1>hello</h1>","ali",400,500);    //array
            echo $list[4];
            $names = array("firstname" => 'shehab' , "lastname" => 'ahmed');    // associative array
            echo $names['firstname'] . " " . $names['lastname'];
        ?>
        
    
    </body>
</html>