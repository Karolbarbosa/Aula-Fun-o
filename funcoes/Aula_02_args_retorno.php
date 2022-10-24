
<?php
function obterMensagem() 
{
    return "Bonjour bonne journée!";
}

obterMensagem();
$a = obterMensagem();
echo $a;

echo "<br>"; 
obterMensagem();
echo "<br>";

echo "<br>";

function mensagemComNome($nome) 
{
    return "What  your name: (Qual Seu nome: ), {$nome}!";
}

echo "<br>";
mensagemComNome("Karolyne");
echo "<br>"; 
mensagemComNome("Tavares");

echo "<br>";
echo "<br>";



function adisão($x, $y) 
{
    return $x + $y;
    
}

$x = 5;
$y = 10;

echo "<br>";
divisao(10,15);
echo "<br>";
divisao($x, $y);

