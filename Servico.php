<?php

class Servico{
    public $problema;
    public $solucao;
    public $hora;
    public $nome;

    public function Servico () {
        echo "<h2>Sobre o serviço</h2>";
        echo "<h3>Problema: " . $this->problema = "Bala de magnum alojada na rebimboca da parafuseta</h3>";
        echo "<h3>Solução:" . $this->solucao = "substituição da peça afetada</h3>";
        echo "<h3>horas gastas: " . $this->hora = 3 . "</h3>";
        echo "<h3>Nome do funcionário:" . $this->nome = "Adailton</h3>";
    }

}

?>