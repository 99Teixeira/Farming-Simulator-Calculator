document.getElementById("calcular").addEventListener("click", function(){
    console.log("Botão calcular clicado");
    var valorVenda = document.getElementById("f2_valor_venda").value;
    var quantidadeVenda = document.getElementById("f2_quantidade_venda").value;
    var resultado = valorVenda * quantidadeVenda;
    alert("O resultado é: " + resultado);
})
