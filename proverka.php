<?php
echo "<table border = 1>";
$rows = 10;
$cols = 5;
for ($tr = 1; $tr <= $rows; $tr++){
    echo '<tr>';
    for ($td = 1; $td <= $cols; $td++) {
        echo '<td>' . $tr . '</td>';
    }
    echo '</tr>';
}



