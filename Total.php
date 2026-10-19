<?php
require_once('Servico.php');
require_once('Produto.php'); 

class Total {
    public $produto;
    public $servico;

    public function __construct($produtoJaCriado, $servicoJaCriado) {
        $this->produto = $produtoJaCriado; 
        $this->servico = $servicoJaCriado;  
    }
    
    public function calculo() {
        $valorLimpo = str_replace(',', '.', $this->produto->valor);
        $valor = (float) $valorLimpo;

        $hora = (int) $this->servico->hora;

        $vporh = 20;
        $totalhora = $valor + ($hora * $vporh);

        echo "<h2>Total: R$ " . number_format($totalhora, 2, ',', '.') . "</h2>";
    }

    }


