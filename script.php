<?php

$categoria = [];
$categoria[] = 'infantil';
$categoria[] = 'adolescente';
$categoria[] = 'adulto';
$categoria[] = 'idoso';

$nome = $_POST['nome'];
$idade = $_POST['idade'];

if(empty($nome))
{
    echo 'O nome não pode ser vazio.';
    return;
}

if(strlen($nome) < 3)
{
    echo 'Nome deve conter mais que 3 caracteres.';
    return;
}

if(strlen($nome) > 40)
{
    echo 'Nome muito extenso.';
    return;
}

if(empty($idade))
{
    echo 'A idade não pode estar vazia.';
    return;
}

if(!is_numeric($idade))
{
    echo 'Informe um numero para a idade.';
    return;
}

if($idade>= 6 && $idade <= 12)
{
    echo $nome, ' tem ', $idade, ' anos de idade = ', $categoria[0], '<br>';
    for($i = 0; $i <= count($categoria); $i++)
    {
        if($categoria[$i] == $categoria[0]) 
        echo 'O nadador ', $nome, ' compete na categoria ', $categoria[0], '.';
    }
}
else if ($idade >= 13 && $idade <= 18)
{
    echo $nome, ' tem ', $idade, ' anos de idade = ', $categoria[1], '<br>';
    for($i = 0; $i <= count($categoria); $i++)
    {
        if($categoria[$i] == $categoria[1]) 
        echo 'O nadador ', $nome, ' compete na categoria ', $categoria[1], '.';
    }
}
else
{
    echo $nome, ' tem ', $idade, ' anos de idade = ', $categoria[2], '<br>';
    for($i = 0; $i <= count($categoria); $i++)
    {
        if($categoria[$i] == $categoria[2]) 
        echo 'O nadador ', $nome, ' compete na categoria ', $categoria[2], '.';
    }
}
?>