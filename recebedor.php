<?php
session_start();
$nome=filter_input(INPUT_POST,'nome',FILTER_SANITIZE_SPECIAL_CHARS);
$email=filter_input(INPUT_POST,'email',FILTER_VALIDATE_EMAIL);
$idade=filter_input(INPUT_POST,'idade',FILTER_VALIDATE_INT);

if($nome){
    echo 'Nome :'.$nome."<br/>";
    echo 'email :'.$email."<br/>";
    echo 'Idade :'.$idade."<br/>";
}else{
    $_SESSION['aviso']='preencha essas informações';
    echo 'Não enviou'; 
}


