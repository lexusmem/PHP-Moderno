<?php

$categoria = [];
$categoria[] = 'infantil';
$categoria[] = 'adolescente';
$categoria[] = 'adulto';
$categoria[] = 'idoso';

$nome = $_POST['nome'];
$idade = $_POST['idade'];

# Print_r - Imprime informação sobre uma variável de forma legível.
print_r ($categoria);
echo "<br>";
echo "$categoria <br>";

#Var_dump imprime o dado da variavel e o tipo da variavel
var_dump($nome);
echo "<br>";
var_dump($idade);
echo "<br>";

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