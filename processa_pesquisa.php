<?php
// Executa a consulta SQL para buscar os dados desejados
$sql = "SELECT cultura, valor_venda, mes_venda FROM culturas";
$result = mysqli_query($conn, $sql);


// capturar a pesquisa
$nome_cultura = isset($_POST['f_nome_cultura']) ? mysqli_real_escape_string($conn, $_POST ['f_nome_cultura']) : "";

// Executar a pesquisa
if ($nome_cultura) {
    $sql = "SELECT * FROM culturas WHERE cultura LIKE '%$nome_cultura%'";
    $result = mysqli_query($conn, $sql);

// exibir resultado
if(mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $cultura = $row['cultura'];
    $valor_venda = $row['valor_venda'];
    $mes_venda = $row ['mes_venda'];
    } else {
        echo "nenhum resultado encontrado";
    }
}
?>