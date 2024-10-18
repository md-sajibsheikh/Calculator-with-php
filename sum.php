<?php

function solveMeFirst()
{
    fscanf(STDIN, "%d %d",$a,$b);
    $c = $a + $b;
    echo $c;
}

echo solveMeFirst();

?>