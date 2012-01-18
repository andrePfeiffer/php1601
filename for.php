<?php

for ($i = 0; $i < 10; $i++) {
    echo 'o valor de i eh ' . $i . '<br>';
}

echo '<br><hr><br>';

$i = 10;
while ($i < 10) {
    echo 'o valor de i eh ' . $i . '<br>';
    $i++;
}

echo '<br><hr><br>';

$i = 10;
do {
    if ($i < 10) {
        echo 'o valor de i eh ' . $i . '<br>';
        $i++;
    }
} while ($i < 10);

echo '<br><hr><br>';

$i = 10;
do {
    if ($i < 10) {
        echo 'o valor de i eh ' . $i . '<br>';
        $i++;
    }
} while ($i < 10);
