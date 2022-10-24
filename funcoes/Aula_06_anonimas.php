
<?php

$somacao = function ($a, $b) 
{
    return $a + $b;
};

echo $somacao(1, 2) . "<br>";


echo "<br>";


function exibir($a, $j, $o, $funcoes) 
{
    $resu = $funcoes($a, $j);
    echo "$a $o $b = $resu <br>";
}

exibir(5, 4, '+', $somacao);


echo "<br>";


$vezes = function($c, $d) 
{
    return $c * $d;
};

exibir(6, 7, '*', $vezes);

