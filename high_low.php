<?php

$randomNum=rand(1, 100);
$guess=0;

while ($guess!=$randomNum) {
    fwrite (STDOUT, "Guess the number between 1 and 100!\n");
    $guess=fgets(STDIN);
    if ($guess>$randomNum) {
        fwrite (STDOUT, "It's lower than that!");
    } else if ($guess<$randomNum) {
        fwrite (STDOUT, "It's higher than that!");
    } else {
        fwrite (STDOUT, "WHAT?! INCONCEIVABLE!\n");
    }
}
