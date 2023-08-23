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

            <?php
            
                if(isset($_POST["submit"])) {
                    $username = $_POST["username"];
                    $password = $_POST["password"];
                    $connection = mysqli_connect("localhost" , "root" , "" , "loginapp");
                    if($connection) {
                        echo "We are connected";
                    }else {
                        die("We are not connected");
                    }

                    $query = "INSERT INTO users(username , password) VALUES ('$username' , '$password')";
                    $result = mysqli_query($connection , $query);

                    if(!$result) {
                        die("Fatal Error" . mysqli_error());
                    }
                }
            
            ?>

        <div class="container">
            <div class="col-sm-6">
                <form action="login_mysql.php" method="post">
                    <div class="form-group">
                        <label for="username">username</label>
                        <input type="text" class="form-control" name="username">
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="password">password</label>
                        <input type="password" class="form-control" name="password">
                    </div>
                    <br>
                    <input type="submit" class="btn btn-primary" name="submit" value = "Sign in">
                </form>
            </div>
        </div>
    </body>
</html>