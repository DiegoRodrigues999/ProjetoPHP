<?php
    $num1 = 0;
    $num2 = 3;
    $numero_binario;

    function somar($num1,$num2){
        return $num1 + $num2;
    }//fim da somar

    function subtrair($num1,$num2){
        return $num1 - $num2;
    }//fim da subtração

    function multiplicar($num1,$num2){
        return $num1 * $num2;
    }//fim da multiplicação

    function dividir($num1,$num2){
        if($num1 <= 0){
            return "Impossivel dividir por zero";
        }else{
            return $num1 / $num2;
        } 
    }//fim do divisão

    function escolher($num1){
        switch($num1){
            case 1:
                return "Rosa";
                break;
            case 2:
                return "Preto";
                break;
            case 3:
                return "white";
                break;
          default:
                return "Cor não identificado";
        }//fim do Switch
    }

    function 


    //imprimir dos dados na tela 
    // echo "><br>A Soma dos numeros é:".somar(5,6);
    // echo "><br>A subtração dos numeros é".subtrair(5,6);
    // echo "><br>A multiplicação dos numeros".multiplicar (5,6);
    // echo "><br>A divisão dos numeros é".dividir(6,7);
    // echo "<br>A escolha é:".escolher(2);   















?>
