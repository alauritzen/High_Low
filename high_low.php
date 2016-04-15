<?php

$randomNum=rand(1, 100);
$guess=0;
$attempts=0;

while ($guess!=$randomNum) {
    fwrite (STDOUT, "Guess the number between 1 and 100!\n");
    $guess=fgets(STDIN);
    $attempts++;
    if ($guess>$randomNum) {
        fwrite (STDOUT, "It's lower than that!\n");
    } else if ($guess<$randomNum) {
        fwrite (STDOUT, "It's higher than that!\n");
    } else {
        fwrite (STDOUT, "INCONCEIVABLE!\nYou guessed it in $attempts tries!\n");
    }
}
