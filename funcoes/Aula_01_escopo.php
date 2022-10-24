
<?php
function pergaminhoMensagens() 
{
    echo "Olá Seja Bem-Vindos";
    echo "Vamos aprender a programar <br>";
}

pergaminhorMensagens();
pergaminhoMensagens();
pergaminhoMensagens();

echo "<br>";
echo "<br>";

$numero = 5;

function trocandoDeValor() 
{
    $numero = 6;
    echo " A variavel durante a função: $numero <br>";
}

echo " A variavel antes: $numero <br>";
trocandoDeValor();
echo "A variavel depois: $numero <br>";

echo "<br>";

function variavelGlobal() 
{
    global $numero;
    $numero = 7;
    echo " A variavel durante a função: $numero <br>";
}

echo "A variavel antes: $numero <br>";
variavelGlobal();
echo "A variavel depois: $numero <br>";