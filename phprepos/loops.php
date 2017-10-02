<?php

for ($i = 0; $i < 10; $i++) {
    echo 'i é igual a ' . $i . '<br>';
}
echo '<br><hr><br>';

for ($i = 10; $i > 0; $i--) {
    echo 'i é igual a ' . $i . '<br>';
}
echo '<br><hr><br>';

$i = 10; 
while ($i < 0) {
    echo 'i é igual a ' . $i . '<br>';
    $i++;
}
echo '<br><hr><br>';

$i = 10; 
do  {
    echo 'i é igual a ' . $i . '<br>';
    $i++;
}while ($i < 0);
echo '<br><hr><br>';