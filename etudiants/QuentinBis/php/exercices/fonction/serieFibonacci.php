<?php
//---------------------------------------------serie Fibonacci-----------------------------------------------


function fibonacci($n)
{
    $nbDepart1 = 0;
    $nbDepart2 = 1;
    $compteur = 0;


    while ($compteur < $n) {
            echo $nbDepart1."<br>";
            $nb3 = $nbDepart2 + $nbDepart1;
            $nbDepart1 = $nbDepart2;
            $nbDepart2 = $nb3;
            $compteur = $compteur + 1;
    }
}

    $n = 20;
    fibonacci($n);