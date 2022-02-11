<?php
    //Função para tabuada
    function multiplicar($numerador, $multiplicador) 
    {

        //Declaração para variaveis
        $numNumerador = (int) $numerador;
        $numMultiplicador = (int) $multiplicador;
        $cont = (int) 0;
        $resultado = (string) null;
        $resultadoLocal = (int) 0;

        while ($cont <= $numMultiplicador) {
            $resultadoLocal = $numNumerador * $cont;
            $resultado = $resultado . ("$numNumerador X $cont = " . ("$resultadoLocal") . '<br/>');
            $cont++;   
        }
        return $resultado;      
    }

?>