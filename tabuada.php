<?php
    //importando
    require_once('modulos/calculos.php');
    require_once('modulos/config.php');

    //Declaração de variaveis
    $valorTabuada = (int) 0;
    $valorContador = (int) 0;
    $resultadoTabuada = (string) null;
    
    //Validação para tratar se o botão foi clicado
    if(isset($_POST["btncalc"]))
    {   
        //Recebendo dados utilizando o POST do formulario
        $valorTabuada = $_POST ["txtn1"];
        $valorContador = $_POST ["txtn2"];
        $resultadoTabuada = "";

        if($_POST["txtn1"] == "" || $_POST["txtn2"] == "")
            echo (ERRO_MSG_CAIXA_VAZIA);
        else
        {
            if(!is_numeric($valorTabuada) || !is_numeric($valorContador))
                echo (ERRO_MSG_CARACTER_ENTRADA);
            else
            {
                if($valorContador == 0 || $valorTabuada == 0)
                    echo (ERRO_MSG_TABUADA_ZERO);
                else {
                    $resultadoTabuada = multiplicar($valorTabuada, $valorContador);
                }
            }
        }
        
    }
        
?>

<!DOCTYPE html>
<html lang="pt - BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style-tabuada.css">
    <title>Tabuada</title>
</head>
<body>
    <div id="conteudo">
        <div id="titulo">
            Tabuada
        </div>
        <div id="form">
            <form name="frmTabuada" action="tabuada.php" method="post">
                <div class="label">
                    Tabuada: <input type="text" name="txtn1" value="<?=($valorTabuada)?>"> <br>
                    Contador: <input type="text" name="txtn2" value="<?=($valorContador)?>"> <br>
                </div>
                <div>
                    <input type="submit" name="btncalc" value ="Calcular" >
                    <div id="botaoReset">
                        <a href="tabuada.php">
                            <input type="submit" name="reset" value="Novo Cálculo">
                        </a>    
                    </div>
                </div>
            </form>
            <footer id="resultado">
                <?php echo($resultadoTabuada); ?> 
            </footer>
        
        </div>

    
    
    </div>
    
</body>
</html>