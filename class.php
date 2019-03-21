<?php

class Imc {
    var $peso;
    var $altura;

    function calcular() {

        $auxUM = $this->altura * $this->altura;
        $auxDois = $this->peso / $auxUM;
        $result = $auxDois;
        $NumFtd = number_format($result,2,",",".");

        switch ($result) {
            case $result <= 18.5:
                $msg =  "Total: $NumFtd.<br/>Abaixo do peso";
                break;
            case $result >18.5 and $result < 25:
                $msg =  "Total: $NumFtd.<br/>Peso normal";
                break;
            case $result >= 25 and $result < 30:
                $msg = "Total: $NumFtd.<br/>Sobrepeso";
                break;
            case $result >= 30 and $result < 35:
                $msg = "Total: $NumFtd.<br/>Obesidade grau 1";
                break;
            case $result >= 35 and $result < 40:
                $msg = "Total: $NumFtd.<br/>Obesidade grau 2";
                break;
            case $result >= 40:
                $msg = "Total: $NumFtd.<br/>Obesidade grau 3";
                break;
            default:
                $msg = "ERRO!!!!";
                break;

        }

        return $msg;
    }
}
/*

IMC             	Resultado
Menos do que 18,5	Abaixo do peso
Entre 18,5 e 24,9	Peso normal
Entre 25 e 29,9 	Sobrepeso
Entre 30 e 34,9	    Obesidade grau 1
Entre 35 e 39,9	    Obesidade grau 2
Mais do que 40	    Obesidade grau 3


*/
?>