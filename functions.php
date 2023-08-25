<?php 
    include "connection.php";

function insertData() {
        global $connection;
        $username = $_POST["username"];
        $password = $_POST["password"];

        $query = "INSERT INTO users(username , password) VALUES ('$username' , '$password')";
        $result = mysqli_query($connection , $query);    
}  

function callAllID() {
    global $connection;
    $call = "SELECT * FROM users";
    $operation = mysqli_query($connection , $call);

    while($row = mysqli_fetch_assoc($operation)) {
        $id = $row['id'];
        echo "<option value = '$id'>$id</option>";
    }
            
}

function updateData() {
    global $connection;
    $username = $_POST["username"];
    $password = $_POST["password"];
    $id = $_POST['id'];
    $update = "UPDATE users SET username = '$username' , password = '$password' WHERE id = $id";
    $end = mysqli_query($connection , $update);
}

function deleteData() {
    global $connection;
    $username = $_POST["username"];
    $password = $_POST["password"];
    $id = $_POST['id'];
    $delete = "DELETE FROM users WHERE id = $id";
    $finish = mysqli_query($connection , $delete);
}
?>

