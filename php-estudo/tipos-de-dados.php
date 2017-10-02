<?php

//numeros inteiros
$variavel = 13;
echo is_integer($variavel);
echo '<br>';

//numero com ponto flutuante
$variavel = 13.10;
echo is_float($variavel);
echo '<br>';

//strings
$variavel = 'Rogerio Romano';
echo is_string($variavel);
echo '<br>';

//boleanos
$variavel = true;
$variavel = false;
echo is_bool($variavel);
echo '<br>';

//arrays
$variavel = array(1,2,3,4,5,10.1,'rogerio',true);
echo is_array($variavel);
echo '<br>';

//objetos
$variavel = mysql_connect('192.168.0.110','root');
echo is_resource($variavel);
//nulo
$variavel = null;
echo is_null($variavel);
echo '<br>';

