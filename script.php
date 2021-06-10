<?php

session_start();

$categoria = [];
$categoria[] = 'infantil';
$categoria[] = 'adolescente';
$categoria[] = 'adulto';
$categoria[] = 'idoso';

$nome = $_POST['nome'];
$idade = $_POST['idade'];



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