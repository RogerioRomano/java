<?php
$acesso =0;
echo 'usuario '; 
echo ($acesso > 0) ? 'registrado':'não registrado';

if ($acesso > 0) {
    echo 'usuario registrado';      
}else {
    echo 'usuário não registrado!';
}
