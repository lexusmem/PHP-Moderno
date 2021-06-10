<?php
    session_start();
?>
<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8">
<title>Formulário de Inscrição</title>
<meta name="author" content="">
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>

    <p>FORMULÁRIO PARA INSCRIÇÃO DE COMPETIDORES</p>

    <form action="script.php" method="post">
        <?php

            $mensagemDesucesso = isset($_SESSION['mensagem-de-sucesso']) ? $_SESSION['mensagem-de-sucesso'] : '';
            if(!empty($mensagemDesucesso))
            {
                echo $mensagemDesucesso;
            }
            
            $mensagemDeerro = isset($_SESSION['mensagem-nome-vazio']) ? $_SESSION['mensagem-nome-vazio'] : '';
            if(!empty($mensagemDeerro))
            {
                echo $mensagemDeerro;
            }
        ?>
        <p>Seu nome: <input type="text" name="nome" /></p>
        <p>Sua Idade: <input type="text" name="idade" /></p>
        <p><input type="submit" /></p>
    </form>

</body>

</html>