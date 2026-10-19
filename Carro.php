<?php
class Carro{
    public $marca;
    public $modelo;
    public $kilometragem;
    public $cor;
    
    public function carro() {
    echo "<h2>Sobre o seu carro</h2>";
    echo "<h3>marca: " . $this->marca = "não sei oq botar aq ainda</h3>";
    echo "<h3>modelo: " . $this->modelo = "não sei oq botar aq ainda tb</h3>";
    echo "<h3>kilometragem: " . $this->kilometragem = "não sei oq botar aq ainda</h3>";
    echo "<h3>cor: " . $this->cor = "preto</h3>";
    }
}
?>