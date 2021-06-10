<?php

session_start();

$categoria = [];
$categoria[] = 'infantil';
$categoria[] = 'adolescente';
$categoria[] = 'adulto';
$categoria[] = 'idoso';

$nome = $_POST['nome'];
$idade = $_POST['idade'];

if(empty($nome))
{
    $_SESSION['mensagem-nome-vazio'] = 'O nome não pode ser vazio.';
    header('location: index.php');
    return;
}
else if(strlen($nome) > 0 && strlen($nome) < 3)
{
    $_SESSION['mensagem-nome-vazio'] = 'Nome deve conter mais que 3 caracteres.';
    header('location: index.php');
    return;
}
else if(strlen($nome) > 40)
{
    $_SESSION['mensagem-nome-vazio'] = 'Nome muito extenso.';
    header('location: index.php');
    return;
}
else if(empty($idade))
{
    $_SESSION['mensagem-nome-vazio'] = 'A idade não pode estar vazia.';
    header('location: index.php');
    return;
}
else if(!is_numeric($idade))
{

    $_SESSION['mensagem-nome-vazio'] = 'Informe um numero para a idade.';
    header('location: index.php');
    return;
}

if($idade>= 6 && $idade <= 12)
{
    for($i = 0; $i <= count($categoria); $i++)
    {
        if($categoria[$i] == $categoria[0]) 
        {
            $_SESSION['mensagem-de-sucesso'] = "O nadador " + $nome + " compete na categoria "+ $categoria[0]+ ".";
            header('location: index.php');
            return;
        } 
    }
}
else if ($idade >= 13 && $idade <= 18)
{
    for($i = 0; $i <= count($categoria); $i++)
    {
        if($categoria[$i] == $categoria[1])
        {
            $_SESSION['mensagem-de-sucesso'] = 'O nadador '+ $nome+ ' compete na categoria '+ $categoria[1]+ '.';
            header('location: index.php');
            return;
        } 
    }
}
else
{
    for($i = 0; $i <= count($categoria); $i++)
    {
        if($categoria[$i] == $categoria[2]) 
        {
            $_SESSION['mensagem-de-sucesso'] = 'O nadador '.$nome. ' compete na categoria '.$categoria[2]. '.';
            header('location: index.php');
            return;
        } 
    }
}
?>