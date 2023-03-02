<?php
include("db/conexao.php");
include("processa_pesquisa.php");
?>

<form method="post" action="test.php">
  <input type="text" name="cultura" value="<?php echo $cultura ?>" placeholder="Título da pesquisa">
  <input type="text" name="valor_venda" value="<?php echo $valor_venda ?>" placeholder="Descrição da pesquisa">
  <input type="text" name="mes_venda" value="<?php echo $mes_venda ?>" placeholder="Link da pesquisa">
  <button type="submit">Pesquisar</button>
</form>

<?php
  if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
          // exiba os resultados da pesquisa em diferentes inputs
          echo "<input type='text' name='resultado_cultura' value='" . $row["cultura"] . "'><br>";
          echo "<input type='text' name='resultado_valor_venda' value='" . $row["valor_venda"] . "'><br>";
          echo "<input type='text' name='resultado_mes_venda' value='" . $row["mes_venda"] . "'><br>";
      }
  } else {
      echo "Nenhum resultado encontrado.";
  }

  $conn->close();
?>
