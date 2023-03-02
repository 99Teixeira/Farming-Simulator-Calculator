<?php
include("db/conexao.php");
include("processa_pesquisa.php");
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <title>Calculadora Farm</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
    <head>
        <h2>Calculadora Farming Simulator 22 BETA</h2> 
        <hr />
    </head>
    <form action="index.php" method="POST">
   
    <label>Nome Cultura:</label>
<input type="text" name="f_nome_cultura" placeholder="Digite a cultura" value="<?php echo isset($nome_cultura) ? $nome_cultura : ''; ?>" id="f2_nome_cultura">

<input type="submit" value="Pesquisar">
        

        <br><br><br>
        <label>Melhor mês de venda:</label>
        <input type="text" name="f_mes_venda" value="<?php echo isset($mes_venda) ? $mes_venda : ''; ?>" id="f2_mes_venda">
        

        <br><br><br>
        <label>Melhor Valor de venda:</label>
        <input type="text" name="f_valor_venda" value="<?php echo isset($valor_venda) ? $valor_venda : ''; ?>" id="f2_valor_venda">
        

        <br><br><br>
        <label>Digite a quantidade para venda:</label>
        <input type="text" name="f_quantidade_venda" id="f2_quantidade_venda">
        

        <br><br>
        <input type="submit" value="Calcular" id="calcular">
        <br><br>
        <input type="submit" value="Limpar Pesquisa" id="limpar">
        
        </form>

    <script src="js/calculo_pesquisa.js"></script>
    <script src="js/limpa_botao.js"></script>
</body>
</html>
