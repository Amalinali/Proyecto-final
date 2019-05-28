<?php
// connect to database
include 'config/database.php';
 
// get the product id
$id = isset($_GET['id']) ? $_GET['id'] : "";
$name = isset($_GET['name']) ? $_GET['name'] : "";
$quantity = isset($_GET['quantity']) ? $_GET['quantity'] : "";
$quantity=intval($quantity);
$user_id=1;
 
// delete query
$query = "UPDATE cart_items SET quantity=? WHERE product_id=? AND user_id=?";
 
// prepare query
$stmt = $con->prepare($query);
 
// bind values
$stmt->bindParam(1, $quantity);
$stmt->bindParam(2, $id);
$stmt->bindParam(3, $user_id);
 
// execute query
if($stmt->execute()){
    // redirect and tell the user product was removed
    header('Location: carro.php?action=quantity_updated&id=' . $id . '&name=' . $name);
}
 
// if remove failed
else{
    // redirect and tell the user it failed
    header('Location: carro.php?action=failed&id=' . $id . '&name=' . $name);
}
?>