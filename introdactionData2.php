<form action = '' method = 'post'>
    <h4>Chose the month:</h4>
    <input type = checkbox name = month1 value = 1>January<br>
    <input type = checkbox name = month2 value = 2>February<br>
    <input type = checkbox name = month3 value = 3>March<br>
    <input type = checkbox name = month4 value = 4>April<br>
    <input type = checkbox name = month5 value = 5>May<br>
    <input type = checkbox name = month6 value = 6>June<br>
    <input type = checkbox name = month7 value = 7>July<br>
    <input type = checkbox name = month8 value = 8>August<br>
    <input type = checkbox name = month9 value = 9>September<br>
    <input type = checkbox name = month10 value = 10>October<br>
    <input type = checkbox name = month11 value = 11>November<br>
    <input type = checkbox name = month12 value = 12>December<br>
    <br><input type = submit value = sent><br>
</form>
<?php

if(isset($_POST['month1'])) $option = $_POST['month1'];
if(isset($_POST['month2'])) $option = $_POST['month2'];
if(isset($_POST['month3'])) $option = $_POST['month3'];
if(isset($_POST['month4'])) $option = $_POST['month4'];
if(isset($_POST['month5'])) $option = $_POST['month5'];
if(isset($_POST['month6'])) $option = $_POST['month6'];
if(isset($_POST['month7'])) $option = $_POST['month7'];
if(isset($_POST['month8'])) $option = $_POST['month8'];
if(isset($_POST['month9'])) $option = $_POST['month9'];
if(isset($_POST['month10'])) $option = $_POST['month10'];
if(isset($_POST['month11'])) $option = $_POST['month11'];
if(isset($_POST['month12'])) $option = $_POST['month12'];
echo '<big>' . 'You select ' . $option . ' month' . '</big>' . '<br>' . 'In this month increasing salary will be: ';

$db = new PDO('mysql:dbname=basa1;host=127.0.0.1', 'root', 'root');
$stmt = $db->prepare('SELECT * FROM table1 WHERE month = :month');
$stmt->bindParam(':month',$option);
$stmt->execute();
$data = $stmt->fetchAll(PDO::FETCH_ASSOC);
foreach ($data as $key=>$value) {
    echo '<br>' . '<hr> ';
    echo '<br>' . '<mark>' . 'Name workers: ' . '</mark>'  . $value['fio'] . '<br>';
    echo '<br>' .'<mark>' . 'Month of starting work: ' . '</mark>' . $value['monOfStart'] . '<br>';
    echo '<br>' .'<mark>' . 'Amount month working: ' . '</mark>' . $value['amount'] . '<br>';
    echo '<br>' .'<mark>' . 'Left month to rising: ' . '</mark>' . $value['leftToRising'] . '<br>';
    echo '<br>' .'<mark>' . 'Month of rising:' .  '</mark>' . $value['month'] . '<br>';

}

?>