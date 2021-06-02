<?php
echo '<h3>' . '<center>' . 'Choose the ingridients of your drink' . '</h3>' . '</center>';
$db = new PDO('mysql:dbname=basa1;host=127.0.0.1', 'root', 'root');
$stmt = $db->prepare('SELECT nameOfproduct,price, Id_ingridient FROM menu');
$stmt->execute();
$data = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo '<form action="" method="post">';

echo '<select name="ingridient[]" multiple="multiple">';
foreach ($data as $key => $value) {
    echo '<option value="' . $value['Id_ingridient'] . '">' . $value['nameOfproduct'] . '</option>';
}
echo '</select>' . '<br>' . '<br>';

echo 'Do you want trubochka? <br><input type="radio" name="trubochka" value="Yes">Yes';
echo '&nbsp<input type="radio" name="trubochka" value="0">No';
echo '<br>Do you want cover? <br><input type="radio" name="cover" value="Yes">Yes';
echo '&nbsp<input type="radio" name="cover" value="0">No<br>';


echo '<br><input type="submit"><br></form>';

$sum = 0;


if (!empty($_POST['ingridient'])) {
    foreach ($_POST['ingridient'] as $key => $item) {
        echo '<br>';
        $stmt = $db->prepare('SELECT price, nameOfproduct FROM menu WHERE Id_ingridient = "' . $item . '"');
        $stmt->execute();
        $data1[] = $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    echo '<h3>' . '<center>' . 'You have chosen:' . '</center>' . '</h3>' . '<br>';
    $trubochka = $_POST['trubochka'];
    $cover = $_POST['cover'];
    $rows = count($_POST['ingridient']);
    $cols = 2;
    if ($_POST['trubochka'] == 'Yes') {
        echo 'Trubochka will be cost you 0.5. ' . '<br>';
        $rows++;
        $sum += 0.5;
    }
    if ($cover == 'Yes') {
        echo 'Cover will be cost you 0.5 ' . '<br>';
        $rows++;
        $sum += 0.5;
    }
    echo '<style>' .
        'table {' .
        'border-collapse: collapse;
        }' .

        'table, td {' .
        ' border: 1px solid black;
           text-align: center;
           background: #e8edff;
           font-size: 24px;
           
        }' .
        '</style>';
    echo '<table border="1">';
    echo '<th>' . 'Ingridients' . '</th>';
    echo '<th>' . 'Cost' . '</th>';
    for ($tr = 1; $tr <= $rows; $tr++) {
        echo '<tr>';
        for ($td = 1; $td <= $cols; $td++) {
            echo '<td>';
            if ($td == 1) {
                foreach ($data1 as $key => $value2) {
                    if ($key + 1 != $tr) continue;
                    echo $value2[0]['nameOfproduct'] . ' ';
                }
                if ($trubochka == 'Yes' && $cover == 'Yes') {
                    if ($tr == $rows - 1) echo 'trubochka';
                    elseif ($tr == $rows) echo 'Cover';
                } elseif (($trubochka == 'Yes' || $cover == 'Yes') && $tr == $rows) {
                    if ($trubochka == 'Yes') echo 'trubochka';
                    if ($cover == 'Yes') echo 'Cover';
                }
            } else {
                foreach ($data1 as $key => $value) {
                    if ($key + 1 != $tr) continue;
                    echo $value[0]['price'] . ' ';
                    $sum += $value[0]['price'];
                }
                if ($trubochka == 'Yes' && $cover == 'Yes') {
                    if ($tr == $rows - 1) echo '0.5';
                    elseif ($tr == $rows) echo '0.5';
                } elseif (($trubochka == 'Yes' || $cover == 'Yes') && $tr == $rows) echo '0.5';
            }
            echo '</td>';
        }
        echo '</tr>';
    }
    echo '<th>' . 'You need to pay:' . '</th>';
    echo '<th>' . $sum . '</th>';
    echo '</table>';
}
else echo '<big>' . 'You need make choice' . '</big>';
?>