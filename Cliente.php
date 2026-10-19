<?php

class Cliente{
    public $nome;
    public $idade;
    public $cpf;

    public function dados() {
        echo "<h1>Suas informações</h1>";
        echo "<h3>nome: " . $this->nome = "Oi</h3>";
        echo "<h3>idade: " . $this->idade = 20 . "</h3>";
        echo "<h3>cpf: " . $this->cpf = 12345678910 . "</h3>";
    }

}

?>