
<?php
function comprimento($nome = "Olá", $sobrenome = "Cliente") 
{
    return "Hello, $nome $sobrenome!<br>";
}

echo comprimento();
echo comprimento(null);
echo comprimento(null, null);
echo comprimento("Senhor", "Senhora");

echo "<br>";

function pedido($lanche, $suco = "Açai") 
{
    echo "O que você gostaria para comer: $lanche <br>";
    echo "O que você gostaria para comer: $suco <br>";
}

pedido("Pizza");
//anotarPedido("coxinha", "suco natural");

echo "<br>";

function pedidoAnotado($suco = "Vinho", $lanche) {
    echo "O que você gostaria para comer: $lanche <br>";
    echo "O que você gostaria para comer: $suco <br>";
}


pedidoAnotado("Refrigerante2", "Pizza2");