<?php
/**
 *napiši program koji će za višekratnike broja 4 do 100
 * ispisivati one dijeljive sa 6

$a = 4;
for ($a;$a==100;$a+=4)
{
    if($a%6==0)
    {
        echo "{$a} je dijeljiv sa 6";
    }
}
for ($a;$a==100;$a+=4)
{
    switch($a%6)
    {
        case 0:
            {
                echo "{$a} je dijeljiv sa 6";
            }
    }
}
 */

