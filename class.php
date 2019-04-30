<?php

class Imc {
    private $peso;
    private $altura;

    function __construct($p, $a)
    {
        $this->peso = $p;
        $this->altura = $a;
    }
    function calcular() {

        $msg = "<span class='danger'>Peso e altura não compatíveis.</span>";
        
        if ($this->altura > 1 || $this->peso > 19) {

            $result = $this->peso / ($this->altura ^ 2);
            $NumFtd = number_format($result,2,",",".");
    
            switch ($result) {
                case $result <= 18.5:
                    $msg = 	 "Resultado: $NumFtd."
                            ."\n\t\t\t"
                            ."<br/>\n"
                            ."\t\t\t"
                            ."<span class='warning'>Abaixo do peso</span>.";
                    break;
                case $result > 18.5 and $result < 25:
                    $msg = 	 "Resultado: $NumFtd."
                            ."\n\t\t\t"
                            ."<br/>\n"
                            ."\t\t\t"
                            ."<span class='success'>Peso normal</span>.";
                    break;
                case $result >= 25 and $result < 30:
                    $msg = 	 "Resultado: $NumFtd."
                            ."\n\t\t\t"
                            ."<br/>\n"
                            ."\t\t\t"
                            ."<span class='warning'>Sobrepeso</span>.";
                    break;
                case $result >= 30 and $result < 35:
                    $msg =  "Resultado: $NumFtd."
                            ."\n\t\t\t"
                            ."<br/>\n"
                            ."\t\t\t"
                            ."<span class='between'>Obesidade grau 1</span>.";
                    break;
                case $result >= 35 and $result < 40:
                    $msg = 	 "Resultado: $NumFtd."
                            ."\n\t\t\t"
                            ."<br/>\n"
                            ."\t\t\t"
                            ."<span class='danger'>Obesidade grau 2</span>.";
                    break;
                case $result >= 40:
                    $msg = 	 "Resultado: $NumFtd."
                            ."<br/>\n"
                            ."\t\t\t"
                            ."<span class='danger'>Obesidade grau 3</span>.";
                    break;
                default:
                    $msg = "ERRO!!!!";
                    break;
            }
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
