<?php

function validanome(string $nome) : bool
{
    if(empty($nome))
    {
        $_SESSION['mensagem-nome-vazio'] = 'O nome não pode ser vazio.';
        return false;
    }
    else if(strlen($nome) > 0 && strlen($nome) < 3)
    {
        $_SESSION['mensagem-nome-vazio'] = 'Nome deve conter mais que 3 caracteres.';
        return false;
    }
    else if(strlen($nome) > 40)
    {
        $_SESSION['mensagem-nome-vazio'] = 'Nome muito extenso.';
        return false;
    }
    return true;
}

function validaidade(string $idade)
{
    if(empty($idade))
    {
        $_SESSION['mensagem-nome-vazio'] = 'A idade não pode estar vazia.';
        # header('location: index.php');
        return;
    }
    else if(!is_numeric($idade))
    {
    
        $_SESSION['mensagem-nome-vazio'] = 'Informe um numero para a idade.';
        # header('location: index.php');
        return;
    }
}

?>