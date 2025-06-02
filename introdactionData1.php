<form action='' method='post'>
    <input type=text name=info>
    <input type=submit name=sent>
</form>
<?php
$info = $_POST['info'];
echo '<h3>' . 'You enter name into form3: ' . $info . '</h3>';
echo '-------------------------------------------------------------------------' . '<br>';
$db = new PDO('mysql:dbname=basa1;host=127.0.0.1', 'root', 'root');
$stmt = $db->prepare("SELECT * FROM table1 WHERE fio = :fio");
$stmt->bindParam(':fio', $info);
$stmt->execute();
$data = $stmt->fetchAll(PDO::FETCH_ASSOC);
foreach ($data as $key => $value) {
    echo '<big>' . 'Worker Name:' . ' </big>' . '<br>' . $value['fio'] . '<br>';
    echo '<br>' . '<big>' . 'Month of starting:' . ' </big>' . '<br>' . $value['monOfStart'] . '<br>';
    echo '<br>' . '<big>' . 'Amount month of working:' . ' </big>' . '<br>' . $value['amount'] . '<br>';
    echo '<br>' . '<big>' . 'Left to rising:' . ' </big>' . '<br>' . $value['leftToRising'] . '<br>';
    echo '<br>' . '<big>' . 'Month of rising:' . ' </big>' . '<br>' . $value['month'] . '<br>';
}
?>
