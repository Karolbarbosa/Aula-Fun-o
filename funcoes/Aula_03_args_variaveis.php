
<?php
function somar($m, $n) 
{
    return $m + $n;
}

echo somar(10, 20) . "<br>";
echo somar(7, 3, 2) . "<br>";

echo "<br>";
echo "<br>";

function completa(...$variavel) 
{
    $adisao = 0;
    foreach($variavel as $numero) 
    {
        $adisao += $numero;
    }
    return $adisao;
}

echo completa(6, 7, 8, 9);

echo "<br>";
echo "<br>";

function colaboradores($autor, ...$escritor) 
{
    echo "Titular: $autor <br>";
    if($escritor) 
    {
        foreach($escritor as $esc) 
        {
            echo "Dependente: $esc <br>";
        }
    }
}

echo "<br>";
membros("Zezinho", "Luluzinho", "Fernandinho", "rafaelzinho");

echo '<br>';
membros("Karolyne", "Tavares");