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
    <link rel="stylesheet" href="style/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>


    <title>Calculadora Farm</title>
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
        <input class="btn-bd-primary" type="submit" value="calcular" id="calcular">
        <input type="submit" value="Limpar Pesquisa" id="limpar">
        
        </form>

    <script src="js/calculo_pesquisa.js"></script>
    <script src="js/limpa_botao.js"></script>
</body>
</html>
