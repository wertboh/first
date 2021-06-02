<form action = '' method = 'post'>
    FIO: <input type = text name = fio><br>
    Month of starting wokr: <select name = monOfStart size = 6>
        <option value = 1>January</option><br>
        <option value = 2>February</option><br>
        <option value = 3>March</option><br>
        <option value = 4>April</option><br>
        <option value = 5>May</option><br>
        <option value = 6>June</option><br>
        <option value = 7>July</option><br>
        <option value = 8>August</option><br>
        <option value = 9>September</option><br>
        <option value = 10>October</option><br>
        <option value = 11>November</option><br>
        <option value = 12>December</option><br>
    </select>
    <br>Amount monthes working: <input type = text name = amount><br>
    <input type = submit value = sent>
</form>
<?php

    $fio = $_POST['fio'];
    $monOfStart = $_POST['monOfStart'];
    $amount = $_POST['amount'];
echo ' Month of starting: ' . $monOfStart . '<br>' . ' Amount month working: ' .$amount. '<br>';


echo ' Rising: '. ' ';
if ($amount == 0) {
    echo 'Rising after 5 month';
    $leftToRising = 5;
}
else {
    $leftToRising = $amount % 5;

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

    $month = (($amount + $monOfStart + $leftToRising)% 12);
switch ($month) {
    case 1:
        $month = 'January';
        break;
    case 2:
        $month = 'February';
        break;
    case 3:
        $month = 'March';
        break;
    case 4:
        $month = 'April';
        break;
    case 5:
        $month = 'May';
        break;
    case 6:
        $month = 'June';
        break;
    case 7:
        $month = 'July';
        break;
    case 8:
        $month = 'August';
        break;
    case 9:
        $month = 'September';
        break;
    case 10:
        $month = 'October';
        break;
    case 11:
        $month = 'November';
        break;
    case 12:
        $month = 'December';
        break;


}
    echo '<br>' . 'It will be in ' .$month . ' month';

$db = new PDO ('mysql:dbname=basa1;host=127.0.0.1', 'root', 'root');
$statement = $db->prepare('INSERT INTO table1 (fio, monOfStart, amount, leftToRising, month)VALUE(:fio, :monOfStart, :amount, :leftToRising,:month )');
$statement->bindParam(':fio', $fio);
$statement->bindParam(':monOfStart', $monOfStart);
$statement->bindParam(':amount', $amount);
$statement-> bindParam(':leftToRising',$leftToRising);
$statement-> bindParam(':month',$month);
$statement->execute();

//Вывести фио сотрудников которые получат повыщение в April (4)
//$stmt = $db-> prepare ('SELECT fio FROM table1 WHERE month = 4');
//$stmt ->execute();
//$data = $stmt->fetchAll(PDO::FETCH_ASSOC);
//echo '<br>';
//foreach ($data as $key => $value) {
//    echo '<br>'.$value['fio'];
//}

