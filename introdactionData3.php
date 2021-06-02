<form action='' method='post'>
    <br>Your name: <input type=text name=name><br>
    <br>Month of starting working: <input type=text name=monthOfstart><br>
    <br>Amount month of working: <input type=text name=amountMoOfwork><br>
    <br>Amount of hours worked this month: <input type=text name=amHours><br>
    <br>Date of birth: <input type = text name = dateB >&nbsp
    Month of birth: <input type=text name=monthB>&nbsp
    Year of birth: <input type=text name = yearB><br>
    <br><input type=submit name=sent><br>
</form>
<?php
$name = $_POST['name'];
$monthOfstart = $_POST['monthOfstart'];
$amountMoOfwork = $_POST['amountMoOfwork'];
$amHours = $_POST['amHours'];
$dateB = $_POST['dateB'];
$monthB = $_POST['monthB'];
$yearB = $_POST['yearB'];
echo '<hr>' . '<big>' . '<center>' . 'Information about ' . '</big>' . $name . '</center>' . '<br>';
echo '<big>' . ' Month of srarting: ' . '</big>' . $monthOfstart . '<br>' . '<big>' . ' Amount month working: ' . '</big>' . $amountMoOfwork . '<br>';

$nRate = floor($amountMoOfwork / 5);
echo '<big>' . 'It is your nRate = ' . '</big>' . $nRate . '<br>';
$rateSalary = ($nRate * 0.2) + 1;
echo '<big>' . ' Suma Rate  = ' . '</big>' . $rateSalary . ' %' . '<br>' . '<big>' . 'Left to rising: ' . '</big>';

if ($amountMoOfwork == 0) {
    echo 'Rising after 5 month';
    $leftToRising = 5;
} else {
    $leftToRising = $amountMoOfwork % 5;

    switch ($leftToRising) {
        case 0:
            $leftToRising = 4;
            echo 'Rising in this  month';
            break;
        case 1:
            $leftToRising = 3;
            echo '4 month left';
            break;
        case 2:
            $leftToRising = 2;
            echo '3 month left';
            break;
        case 3:
            $leftToRising = 1;
            echo '2 month left';
            break;
        case 4:
            $leftToRising = 0;
            echo ' 1 month left';
            break;

    }
}
echo '<br>' . '<big>' . 'Amount hours working: ' . '</big>' . $amHours . '<br>';


$a = ($monthOfstart + $amountMoOfwork) % 12;
$ostacha = $amountMoOfwork % 12;

switch ($ostacha) {
    case 0:
        $nHappyBir = $amountMoOfwork / 12;
        break;
    case 1:
        if ($monthB - $monthOfstart <= 2 || $monthB - $monthOfstart == 11) $nHappyBir = ceil($amountMoOfwork / 12);
        else $nHappyBir = floor($amountMoOfwork / 12);
        break;
    case 2:
        if ($monthB - $monthOfstart <= 2 || $monthB - $monthOfstart == 10) $nHappyBir = ceil($amountMoOfwork / 12);
        else $nHappyBir = floor($amountMoOfwork / 12);
        break;
    case 3:
        if ($monthB - $monthOfstart <= 3|| $monthB - $monthOfstart == 9) $nHappyBir = ceil($amountMoOfwork / 12);
        else $nHappyBir = floor($amountMoOfwork / 12);
        break;
    case 4:
        if ($monthB - $monthOfstart <= 4|| $monthB - $monthOfstart == 8) $nHappyBir = ceil($amountMoOfwork / 12);
        else $nHappyBir = floor($amountMoOfwork / 12);
        break;
    case 5:
        if ($monthB - $monthOfstart <= 5|| $monthB - $monthOfstart == 7) $nHappyBir = ceil($amountMoOfwork / 12);
        else $nHappyBir = floor($amountMoOfwork / 12);
        break;
    case 6:
        if ($monthB - $monthOfstart <= 6|| $monthB - $monthOfstart == 6) $nHappyBir = ceil($amountMoOfwork / 12);
        else $nHappyBir = floor($amountMoOfwork / 12);
        break;
    case 7:
        if ($monthB - $monthOfstart <= 7|| $monthB - $monthOfstart == 5) $nHappyBir = ceil($amountMoOfwork / 12);
        else $nHappyBir = floor($amountMoOfwork / 12);
        break;
    case 8:
        if ($monthB - $monthOfstart <= 8|| $monthB - $monthOfstart == 4) $nHappyBir = ceil($amountMoOfwork / 12);
        else $nHappyBir = floor($amountMoOfwork / 12);
        break;
    case 9:
        if ($monthB - $monthOfstart <= 9|| $monthB - $monthOfstart == 3) $nHappyBir = ceil($amountMoOfwork / 12);
        else $nHappyBir = floor($amountMoOfwork / 12);
        break;
    case 10:
        if ($monthB - $monthOfstart <= 10|| $monthB - $monthOfstart == 2) $nHappyBir = ceil($amountMoOfwork / 12);
        else $nHappyBir = floor($amountMoOfwork / 12);
        break;
    case 11:
        if ($monthB - $monthOfstart <= 11|| $monthB - $monthOfstart == 1) $nHappyBir = ceil($amountMoOfwork / 12);
        else $nHappyBir = floor($amountMoOfwork / 12);
        break;



}
echo 'Amount Birthday days while working: ' . $nHappyBir;

//$sumSalary = ($rateSalary + $nHappyBir * 0.2) * $amHours;
//echo '<big>' . 'Suma of your salary: ' . '</big>' . $sumSalary;

$db = new PDO('mysql:dbname=basa1;host=127.0.0.1', 'root', 'root');
//$stmt = $db->prepare('INSERT INTO table2 (name, monthOfstart, amountMoOfwork, leftMonRising, rateSalary, amHours, sumSalary, dateB, monthB) VALUE
//(:name, :monthOfstart, :amountMoOfwork, :leftMonRising, :rateSalary, :amHours, :sumSalary, :dateB, :monthB)');
//$stmt->bindParam(':name',$name);
//$stmt->bindParam(':monthOfstart',$monthOfstart);
//$stmt->bindParam(':amountMoOfwork',$amountMoOfwork);
//$stmt->bindParam(':leftMonRising',$leftToRising);
//$stmt->bindParam(':rateSalary',$rateSalary);
//$stmt->bindParam(':amHours', $amHours);
//$stmt->bindParam(':sumSalary', $sumSalary);
//$stmt->bindParam(':dateB', $dateB);
//$stmt->bindParam(':monthB',$monthB);
//$stmt->bindParam(':yearB',$yearB);
//$stmt->execute();


//ывести имя, ставку, зарплату пользователей в порядке спадания  ЗП
//$statements = $db->prepare('SELECT name, rateSalary, sumSalary FROM table2 ORDER BY sumSalary DESC');
//$statements->execute();
//$data = $statements->fetchAll(PDO::FETCH_ASSOC);
//foreach ($data as $key => $value) {
//    echo '<br>' . '<hr>';
//    echo '<h3>' . 'Name: ' . '</h3>' . $value['name'];
//    echo '<h3>' .'Rate of salery: '. '</h3>' . $value['rateSalary'];
//    echo '<h3>' .'Suma of salary: ' . '</h3>' . $value['sumSalary'];
//}

//вибираєш людей від найбільшої ставки до найменшої і які попрацювали більше 4 місяців.
$stataments = $db->prepare('SELECT name, rateSalary, amountMoOfwork FROM table2 WHERE 
amountMoOfwork > 14 ORDER BY rateSalary DESC ');
$stataments->execute();
$data = $stataments->fetchAll(PDO::FETCH_ASSOC);
foreach ($data as $key=>$value) {
    echo '<br>' . '<hr>';
    echo '<h3>' . 'Name: ' . '</h3>' . $value['name'];
    echo '<h3>' .'Rate of salery: '. '</h3>' . $value['rateSalary'];
//    echo '<h3>' .'Suma of salary: ' . '</h3>' . $value['sumSalary'];
    echo '<h3>' . 'Month of working: ' . '</h3>' . $value['amountMoOfwork'];
}


