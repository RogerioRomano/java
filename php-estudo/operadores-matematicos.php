<?php

$var1 = 10;
$var2 = 20;
$var3 = 30;

echo 'Variáveis' . '<br />';
echo 'var1 = '. $var1 . '<br />'; 
echo 'var2 = '. $var2 . '<br />';
echo 'var3 = '. $var3 . '<br />';
echo '<hr />';

echo 'Adição';
echo '<br />';
echo 'var1 + var2 = ' . ($var1 + $var2);
echo '<br />';
echo '<hr />';

echo 'Subtração';
echo '<br />';
echo 'var1 - var2 = ' . ($var1 - $var2);
echo '<br />';
echo '<hr />';

echo 'Multiplicação';
echo '<br />';
echo 'var1 * var2 = ' . ($var1 * $var2);
echo '<br />';
echo '<hr />';

echo 'Divisão';
echo '<br />';
echo 'var1 / var2 = ' . ($var1 / $var2);
echo '<br />';
echo '<hr />';

echo 'Módulo';
echo '<br />';
echo 'var1 % 3 = ' . ($var1 % 3);
echo '<br />';  
echo 'var2 % 3 = ' . ($var2 % 3);
echo '<br />';
echo 'var3 % 3 = ' . ($var3 % 3);
echo '<br />';
echo '<hr />';

echo 'Ordem das operações';
echo '<br />';
echo '$var1 + $var2 * $var3: ' . ($var1 + $var2 * $var3);
echo '<br />';
echo '($var1 + $var2) * $var3: ' . ($var1 + $var2) * $var3;
echo '<hr />';

echo 'Incremento e decremento';
echo '<br />';
echo '$var1 = var1 +1: ' . $var1 = $var1 +1;
echo '<br />';
echo '$var1++;var1++;$var1++;$var1++;$var1--;$var1--: '; $var1++;$var1++;$var1++;$var1++;$var1--;$var1--;
echo $var1;
echo '<hr />';
