<?php

    include "connection.php";
    include "functions.php";

    if(isset($_POST["submit"])) {
        deleteData();
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <style>
            label {
                display : block;
            }
        </style>
    </head>
    <body>
        <form action="" method = "post">
            <div>
                <label for="">username</label>
                <input type="text" name = "username">
            </div>
            <br>
            <div>
                <label for="">password</label>
                <input type="password" name = "password">
            </div>
            <br>
            <select name="id" id="">
            <?php callAllID(); ?>
            </select>
            <br>
            <div>
                <input type="submit" name = "submit">        
            </div>
        </form>
    </body>
</html>