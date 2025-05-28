<form action="" method="post">
    <center><h3>Information about animal1</h3></center>
    Name of animal: <input type="text" name="nameAnimal"><br>
    <br>Animal species: <input type="radio" name="anSpecies" value="1">Dog1
    <input type="radio" name="anSpecies" value="2">Cat
    <input type="radio" name="anSpecies" value="3">Mouse
    <input type="radio" name="anSpecies" value="4">Rabbit3333
    <input type="radio" name="anSpecies" value="5">Raccoogn1111<br>
    <br>YearsOld: <input type="text" name="YearsOld"><br>
    <br>Number of months spent at the shelter: <input type="text" name="NumMonShelter"><br>
    <br><input type="submit"><br>
</form>
<?php
$nameAnimal = $_POST['nameAnimal'];
$anSpecies = $_POST['anSpecies'];
$YearsOld = $_POST['YearsOld'];
$NumMonShelter = $_POST['NumMonShelter'];
echo $nameAnimal . ' ' . $anSpecies . ' ' . $YearsOld . ' ' . $NumMonShelter . '<br>';
$db = new PDO('mysql:dbname=basa1;host=127.0.0.1', 'root','root');
//$statements = $db->prepare('INSERT INTO table3 (ameAnimal, anSpecies, YearsOld, NumMonShelter)
// VALUE (:ameAnimal,:anSpecies,:YearsOld, :NumMonShelter)');
//$statements->bindParam(':ameAnimal', $nameAnimal);
//$statements->bindParam(':anSpecies', $anSpecies);
//$statements->bindParam(':YearsOld', $YearsOld);
//$statements->bindParam(':NumMonShelter', $NumMonShelter);
//$statements->execute();

//Тобі потрібно порахувати кількість тварин кожного виду
//$stmt = $db->prepare('SELECT anSpecies, COUNT(*)  FROM table3 GROUP BY anSpecies');
//$stmt->execute();
//$data = $stmt->fetchAll(PDO::FETCH_ASSOC);
//var_dump($data);
//foreach ($data as $key=>$value) {
//    echo $value['anSpecies'].  ' - ' ;
//    echo $value['COUNT(*)'] . '<br>';
//}

//Тобі потрібно порахувати кількість тварин кожного виду И вывести имена животных которые относятся к одномы виду
//$stmt = $db->prepare('SELECT ameAnimal, anSpecies FROM table3 ORDER BY anSpecies ');
//$stmt->execute();
//$data = $stmt->fetchAll(PDO::FETCH_ASSOC);
//var_dump($data);
//foreach ($data as $key=>$value) {
//    echo $value['anSpecies'].  ' - ' ;
//
//    echo $value['ameAnimal'] . ' ' . '<br>';
//}

//Вивести імена і вид всіх тварин, які старше 5 років і в притулку більше року
//$stmt = $db->prepare('SELECT ameAnimal, anSpecies FROM table3 WHERE YearsOld > 5 AND NumMonShelter > 12');
//$stmt->execute();
//$data = $stmt->fetchAll(PDO::FETCH_ASSOC);
//
//foreach ($data as $key=>$value) {
//    echo $value['ameAnimal'] . ' ';
//    echo $value['anSpecies'] . ' ';
//echo '<br>';
//}

//Если возраст животного больше 10 лет и она уже 2 месяца в приюте то животное убивают.
$stmt = $db->prepare('SELECT ameAnimal FROM table3 WHERE YearsOld > 10 AND NumMonShelter > 2');
$stmt->execute();
$data = $stmt->fetchAll(PDO::FETCH_ASSOC);
var_dump($data);
foreach ($data as $key=>$datum) {
    echo $datum['ameAnimal'];

}
?>