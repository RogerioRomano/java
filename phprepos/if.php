<?php

$idade = 18;
if($idade >= 18) {
    echo 'Você é maior de idade';
}

/*
 * == igualdade
 * != desigualdade
 * > maior que
 * >= maior ou igual a
 * < menor que
 * <= menor que ou igual a
 */
echo '<br><hr><br>';

$nacionalidade = 'brasileira';
if($idade >=18 && $nacionalidade) {
    echo 'seja bem vindo';
}elseif($idade <18){
    echo 'Você precisa ter 18 anos ou mais.';
}elseif($nacionalidade == 'brasileria'){
    echo 'Em breve estaremos no Brasil';
}else{
    echo 'você não tem acesso';   
}

