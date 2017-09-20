<?php
/**
 * napiši program koji će provjeravat je li 1000 veće od 10
 * i ispisivati koliko je  puta veći

$a = 10;
$b = 1000;
$c = $a/$b;
if($b>$a)
{
    echo "1000 je veće od 10 i to {$c} puta";
}
switch ($b>$a)
{
    case true:
        echo "1000 je veće od 10 i to {$c} puta";
}
 */