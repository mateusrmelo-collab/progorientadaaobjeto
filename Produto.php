<?php
class Produto {
    public $nome;
    public $modelo;
    public $valor;
    public $codigo;
    public $fabricante;
    public $peso;
    public $ano;
    public $categoria;
    
    public function produto() {
    echo "<h2>Produto substituído</h2>";
    echo "<h3>nome da peça: " . $this->nome = "rebimboca da parafuseta</h3>";
    echo "<h3>modelo: " . $this->modelo = "LG</h3>";
    echo "<h3>valor: " . $this->valor = 5000 . "</h3>";
    echo "<h3>codigo: " . $this->codigo = 99999 . "</h3>";
    echo "<h3>fabricante: " . $this->fabricante = "Mateus motors</h3>";
    echo "<h3>peso da peça: " . $this->codigo = 789432 . "</h3>";
    echo "<h3>ano de fabricação: " . $this->ano = 2005 . "</h3>";
    echo "<h3>categoria: " . $this->categoria = "Todas</h3>";
    }
}
?>