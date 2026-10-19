<?php
require_once('Cliente.php');
require_once('Carro.php');
require_once('Servico.php');
require_once('Produto.php');
require_once('Total.php');
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POO</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="dados">
        <div class="cliente">
            <?php
            $cliente = new Cliente();
            $cliente->dados();
            ?>
        </div>
        <div class="carro">
            <?php
            $carro = new Carro();
            $carro->carro();
            ?>
        </div>
        <div class="produto">
            <?php

            $produto = new Produto();
            $produto->produto();
            ?>
        </div>
        <div class="servico">
            <?php
            $servico = new Servico();
            $servico->Servico();
            ?>
        </div>
        <div class="total">
            <?php
   
            $total = new Total($produto, $servico);
            $total->calculo();
            ?>
        </div>
    </div>
</body>

</html>
