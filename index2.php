<form action = "" method="post">
    Put the number: <input type = text name = numbs>

</form>


<?php
$numbs = $_POST['numbs1'];
echo '1' . 'дільниками цього числа ' . '<br>';
for ($i = 1; $i <= $numbs; $i++) {
    if ($numbs % $i == 0) echo  $i . '<br>';
}
echo '2' .  'ростими квадратами ' . '<br>';
for ($i = 1; $i <= sqrt($numbs); $i++) {
    if ($i ** 2 <= $numbs) echo  $i . '<br>';
}
echo '3' . 'сума цифр яких' . '<br>';

for ($i=1; $i <= $numbs; $i++) {
    $str = (string)$i;
    $sum = 0;
    for ($j = 0; $j < strlen($str); $j++) {
        $sum += $str[$j];
        if ($sum == 13) echo $str . ' ';
    }
}




//І виводь всі числа, які: 1) є дільниками цього числа 2) простими квадратами
//(що йдуть від 1 до n) 3) сума цифр яких = 13
?>