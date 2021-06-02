<form action = '' method="post">
    FIO: <input type = text name = fio><br>
    Profession: <input type = text name = profession><br>
    Marriedstatus: <input type = radio name = marriedstatus value="1">Yes
    <input type = radio name = marriedstatus value="0">No<br>
    Years.old: <input type = taxt name = yearsold><br>
    Emails: <input type = text name = emails><br>
    Login: <input type = text name = login><br>
    Password: <input type = password name = password><br>
    Which pet do you have?<br>
    <input type = radio name = pets value = cat>cet<br>
    <input type = radio name = pets value = dog>dog<br>
    <input type = radio name = pets value = fish>fish<br>
    <input type = radio name = pets value = 'I don`t have'>I don`t have<br>
    Your sex: <input type = radio name = sex value = male> male
    <input type = radio name = sex value = female>female<br>
    <input type = submit value = sent>
</form>
<?php
$fio = $_POST['fio'];
$profession = $_POST['profession'];
$marriedstatus = $_POST['marriedstatus'];
$yearsold = $_POST['yearsold'];
$emails = $_POST['emails'];
$login = $_POST['login'];
$password = $_POST['password'];
$pets = $_POST['pets'];
$sex = $_POST['sex'];

$db = new PDO('mysql:dbname=human;host=127.0.0.1', 'root', 'root');//подключение сервера

//$statement = $db -> prepare('INSERT INTO people (FIO, PROFESSOIN, MARRIEDSTATUS, YEARSOLD, EMAILS, LOGIN, PASSWORD, PETS, SEX)
//VALUE (:FIO, :PROFESSOIN, :MARRIEDSTATUS, :YEARSOLD, :EMAILS, :LOGIN, :PASSWORD, :PETS, :SEX)');//Команда с БД для вставления
//$statement -> bindParam(':FIO', $fio);
//$statement -> bindParam(':PROFESSOIN', $profession);
//$statement -> bindParam(':MARRIEDSTATUS', $marriedstatus);
//$statement -> bindParam(':YEARSOLD', $yearsold);
//$statement -> bindParam(':EMAILS', $emails);
//$statement -> bindParam(':LOGIN', $login);
//$statement -> bindParam(':PASSWORD', $password);
//$statement -> bindParam(':PETS', $pets);
//$statement -> bindParam(':SEX', $sex);// вручную вносим эти данные в таблицу.
//$statement->execute();

//Вывела фамилии людей, которым больше 25 ИЛИ они есть менеджерами.
//$stmt = $db -> prepare('SELECT  FIO  FROM people WHERE YEARSOLD > 25 or PROFESSOIN = "manager" ');
//$stmt -> execute();
//$data = $stmt -> fetchAll(PDO::FETCH_ASSOC);
//var_dump($data);
//foreach ($data as $key => $value){
//    echo $value['FIO']. '<br>';
//}

//Вывела количество неженатых людей с таблицы с помощью ф-ии rowCount()
//$stmt = $db -> prepare('SELECT * FROM people WHERE MARRIEDSTATUS = 0');
//$stmt -> execute();
//$data = $stmt -> rowCount();
//echo $data;

//Вывела количество замужних женщин
//$stmt = $db -> prepare('SELECT * FROM people WHERE MARRIEDSTATUS = 1 AND SEX ="female"');
//$stmt -> execute();
//$data = $stmt -> rowCount();
//echo $data;

//Вывела фамилии замужних женщин
//$stmt = $db -> prepare('SELECT  FIO  FROM people WHERE MARRIEDSTATUS = 1 AND SEX = "female" ');
//$stmt -> execute();
//$data = $stmt -> fetchAll(PDO::FETCH_ASSOC);
//foreach ($data as $key => $value){
//    echo $value['FIO'] . '<br>';
//}

//ывести логины всех людей, которые имеют животное (собака, кот или рыба) и которые имею профессию manager
$stmt = $db -> prepare ('SELECT  LOGIN FROM people WHERE PROFESSOIN = "manager" AND PETS != "I don`t have" ');
$stmt -> execute();
$data = $stmt -> fetchAll(PDO::FETCH_ASSOC);
foreach ($data as $key => $value){
    echo $value['LOGIN'] . '<br>';
}
?>

