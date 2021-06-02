<form action = "" method = "post">
    Vedit n: <input type = text name = 'kolichestvo' >



</form>
<?php
$kol = $_POST['kolichestvo'];
function Sand ($a1,$b1) {
    $S = $a1 * $b1;
    return  $S;
}
function Pand ($a1,$b1) {
    $P = ($a1 + $b1) * 2;
    return $P;
}
function SandP ($i,$kol1) {
    if($i <= $kol1) {
        $a = rand(1, 9);
        $b = rand(1, 9);

        return  'a = ' . $a . ' b = ' . $b  . ' S = '. Sand($a,$b) . ' P = ' . Pand($a,$b) . '<br>' .SandP($i+1,$kol1);
    }
}
echo SandP(1,$kol);
//222223222222
//function SandP ($kol1, $i) {
//    if ($i < $kol1) {
//        $a = rand(1,9);
//        $b = rand (1,9);
//        $S = $a * $b;
//        $P = ($a + $b) * 2;
//        return 'a' .' = '.$a . ' b'.' = '.$b.  ' S = '. $S. ' P = '. $P .'<br>' .SandP($kol1,$i+1) ;
//    }
//}
//
//echo SandP ($kol,0);
// 11111111111111111111111
//function Sand ($a1,$b1)
//{
//    $S = $a1 * $b1;
//
//    return 'a' .' = '.$a1 . ' b'.' = '.$b1.  ' S = '. $S;
//
//}
//function Pand ($a1,$b1){
//    $P = ($a1 + $b1) * 2;
//    return ' P = '. $P .'<br>';
//}
//for ($i = 1; $i <= $kol; $i++) {
//    $a = rand(1,9);
//    $b = rand (1,9);
//    echo Sand($a,$b);
//    echo Pand($a,$b);
//}




//У тебе є число n (вводиш його через форму), ти маєш для n прямокутників вирахувати їх площу і периметр. В цій задачі
//використати цикл і функції для вирахування площі і переметра. Сторони для кожного прямокутника задаєш рандомно.
?>