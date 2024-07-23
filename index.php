<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina Inicial</title>
</head>
<body>
    <h1> Cálculos </h1>
    <form method="POST">
        <?php
            include 'funcoes.php';//Conectandp com o arquivo de funções
            ?>
        <label> Primeiro Número: </label>
        <input type ="number" id="num1" name="num1"/>
        
        <label> Segundo Número: </label>
        <input type="number" id="num2" name="num2"/>

            <button> Calcular
                <?php
                    $num1 = $_POST['num1'];
                    $num2 = $_POST['num2'];
                ?>
            </button>
        </textArea rows="100" cols="40" rows="100">
            <?php
            echo somar($num1, $num2).
            "\n".Subtrair($num1, $num2).
            "\n".Mult($num1, $num2).
            "\n".dividir($num1, $num2).
            "\n".escolher($num1, $num2).
            "\n".converteBinario($num1).
            "\n".converteBinario($num2).
            "\n".converteDecimalHexa($num1).
            "\n".converteDecimal($num2);
            ?>
        </textArea>
    </form>
</body>
</html>   