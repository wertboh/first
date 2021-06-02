<form action="" method="post" enctype=multipart/form-data>
    <h2>
        <center>Anketa</center>
    </h2>
    <input type=file name=uploadfile>
    <input type=submit value=Загрузить>
    <file_uploads
    =On></file_uploads>
    <upload_tmp_dir
    =/tmp></upload_tmp_dir>
    <br></br>Firstname: <input type=text name=firsname><br>
    <br></br>Lastname: <input type=text name=lastname><br>
    <br>Day of Birth: <input type=text name="Day">&nbsp
    &nbsp Month of Birth:
    <select name=month size=4>
        <option value=1>01</option>
        <option value=2>02</option>
        <option value=3>03</option>
        <option value=4>04</option>
        <option value=5>05</option>
        <option value=6>06</option>
        <option value=7>07</option>
        <option value=8>08</option>
        <option value=9>09</option>
        <option value=10>10</option>
        <option value=11>11</option>
        <option value=12>12</option>
    </select>&nbsp
    &nbsp&nbspYear of Birth: <input type=text name=year><br>
    <br>You married status
    <br> <input type=radio name=status value=1>Single
    <br><input type=radio name=status value=2>Married
    <br><input type=radio name="status" value=3>in active search
    <br><input type=radio name="status" value=4>be alone it is cool
    <br><input type=radio name="status" value=5 checked>I am happy with ma cat<br>
    <br> Are you love coffee? <br>
    <input type=checkbox name=koffee1 value="YES">YES<br>
    <input type=checkbox name=koffe2 value="No">No<br>
    <input type=checkbox name=koffee3 value="I can kill you if you stole my cap of coffee"> I can kill you if you
    stole my cap of coffee<br>
    <br><input type="submit" value="SENT">
    <input type="reset" value="reset"> <br>
    ______________________________________________________________________________________________________________<br>


</form>

<?php
$firsname = $_POST['firsname'];
$lastname = $_POST['lastname'];
if (!empty($firsname) && !empty($lastname)) {
    echo '<h3>' . '<center>' . 'Hello ' . $_POST['firsname'] . ' ' . $_POST['lastname'] . '!' . '</center>' . '</h2>';
    echo '<big>' . '<center>' . 'Your personal information : ' . '<br>' . '</center>';
    echo "<img src = file/" . $_FILES["uploadfile"]["name"] . " width='140' height='140'" . ">" . '<br>';
    echo '<ul>';
    echo '<br>' . '<li>' . '<mark>' . ' Your Day of Birth:' . '</mark>' . ' ' . $_POST['Day'] . '.';
    echo $_POST['month'] . '.' . $_POST['year'] . ' <br>' . '</li>';
    echo '<br>' . '<li>' . '<mark>' . 'You select this married status:' . '</mark>';
    switch ($_POST['status']) {
        case 1:
            echo ' ' . 'Single' . '</li>' . '<br>';
            break;
        case 2:
            echo ' ' . 'Married' . '</li>' . '<br>';
            break;
        case 3:
            echo ' ' . 'in active search ' . '</li>' . '<br>';
            break;
        case 4:
            echo ' ' . 'be alone it is cool' . '</li>' . '<br>';
            break;
        case 5:
            echo ' ' . 'I am happy with ma cat' . '</li>' . '<br>';
            break;
    }
    echo '<li>' . '<mark>' . 'Do you like coffe?' . '</mark>';

    if (isset($_POST['koffee1'])) echo ' ' . $_POST['koffee1'] . '</li>';
    if (isset($_POST['koffee2'])) echo ' ' . $_POST['koffee2'] . '</li>';
    if (isset($_POST['koffee3'])) echo ' ' . $_POST['koffee3'] . '</li>';
    echo '</ul>';
}


//Робота над htm формами. Заповнення даних про людину, аби було завантаження зображень,
//числа, дати народження, літери і радіобокси (наприклад, одружений/неодружений)
//2:53
//Сформуй це красиво на сторінці
//2:53
//За допомогою html форм і обробки даних php
?>