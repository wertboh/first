<form action="" method="post">
    <center><h3>Enter name and price of prodact</h3></center>
    <br>Product: <input type="text" name="nameOfproduct1111111"><br>
    <br>Price: <input type="text" name="price"><br>
    <br><input type="submit"><br>
</form>
<?php
$nameOfproduct = $_POST['nameOfproduct'];
$price = $_POST['price'];
echo 'You enter ' . $nameOfproduct . '. The cost of this product: ' . $price;

$db = new PDO('mysql:dbname=basa1;host=127.0.0.1','root','root');
$stmt = $db->prepare('INSERT INTO menu (nameOfproduct, price) VALUE (:nameOfproduct, :price)');
$stmt->bindParam(':nameOfproduct',$nameOfproduct);
$stmt->bindParam(':price1',$price);
$stmt->bindParam(':price2',$price);
$stmt->bindParam(':price4',$price);
$stmt->bindParam(':price3',$price);
$stmt->execute();
?>
