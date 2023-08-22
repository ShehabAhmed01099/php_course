<?php

            $names = array("shehab" , "mohamed" , "ali" , "ashraf" , "rana" , "yasmine" , "khaled" , "mostafa" , "rehab" , "jana");
            $minimum = 5;
            $maximum = 12;
        
            if(isset($_POST["submit"])) {
                $username = $_POST["username"];
                $password = $_POST["password"];
                
                if(in_array($username , $names) && strlen($password) > $minimum && strlen($password) < $maximum) {
                    echo "Welcome to our site mr. " . $username;
                }else {
                    echo "Sorry you can't allow mr. " . $username . " please try again";
                } 
            }

?>