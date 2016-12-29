<?php
$rowq = rand(2, 15);
$colsq = rand(2,15);

    $table = array();

for ($cols = 0; $cols < $colsq; $cols++) {
    for ($row = 0; $row < $rowq; $row++) {
        $table[$cols][$row] = rand(0, 2000);
            }
}

$colors = array('red','yellow','blue','gray','maroon','brown','green');

echo '<table border="1">';

foreach ($table as $key => $value) {
    echo "<tr>";
    foreach ($value as $data) {
        $rand = array_rand($colors, 1);
        echo "<td bgcolor =$colors[$rand]>" . $data . "</td>";
    }
    echo "</tr>";

}

echo "</table>";



