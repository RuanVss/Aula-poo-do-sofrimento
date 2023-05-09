<?php class Carro
{
    // Atributos
    private $modelo;
    private $cor;
    private $placa;
    private $numeroPortas;

    // Construtores
    function __construct($Modelo, $Cor, $Placa, $NumeroPortas)
    {
        $this->modelo = $Modelo;
        $this->cor = $Cor;
        $this->placa = $Placa;
        $this->numeroPortas = $NumeroPortas;
    }

    // Getters e Setters
    function set_modelo($Modelo)
    {
        $this->modelo = $Modelo;
    }
    function get_modelo()
    {
        return ($this->modelo);
    }
    function set_cor($Cor)
    {
        $this->cor = $Cor;
    }
    function get_cor()
    {
        return ($this->cor);
    }
    function set_placa($Placa)
    {
        $this->placa = $Placa;
    }
    function get_placa()
    {
        return ($this->placa);
    }
    function set_numeroPortas($NumeroPortas)
    {
        $this->numeroPortas = $NumeroPortas;
    }
    function get_numeroPortas()
    {
        return ($this->numeroPortas);
    }


    // Métodos
    function corDoCarro()
    {
        echo "\tO carro de modelo " . $this->modelo . " é da cor " . $this->cor . "";
    }

    function ligar()
    {
        echo "<br>O carro " . $this->modelo . " está ligado!";
    }

    function acelearar()
    {
        echo "<br>O carro " . $this->modelo .  " está acelerando...";
    }
    function frear()
    {
        echo "<br>O carro " . $this->modelo . " está freiando!";
    }
    function acionarSeta($orientacao)
    {
        if ($orientacao == "esquerda") echo "\tO carro " . $this->modelo . " acionou seta esquerda!";
        else if ($orientacao == "direita") echo "\tO carro " . $this->modelo . " acionou seta direita!";
        else {
            echo "\tO carro " . $this->modelo . " é Prudentino...";
        }
    }
}
