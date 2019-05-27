

2
3
4
5
6
7
8
9
10
11
12
13
14
15
16
<?php
$host = "localhost";
$db_name = "test_shop";
$username = "root";
$password = "";
 
try {
    $con = new PDO("mysql:host={$host};dbname={$db_name}", $username, $password);
}
 
//to handle connection error
catch(PDOException $exception){
    echo "Connection error: " . $exception->getMessage();
}
 
?>