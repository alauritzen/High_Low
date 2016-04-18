<?php

$guess=0;
$play=true;

if ($argc == 3) {
    sort($argv);
    $min=$argv[0];
    $max=$argv[1];
    if (!ctype_digit($min) || !ctype_digit($max)) {
        fwrite(STDOUT, "I'm sorry. At least one of the inputs is invalid. The game will begin with the default range.\n");
        $min=1;
        $min=100;
    }
} else {
    $min=1;
    $max=100;
}


while ($play) {
    $randomNum=mt_rand($min, $max);
    $attempts=0;
    fwrite (STDOUT, "Guess the number between $min and $max!\n");
    while ($guess!=$randomNum) {
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
    
    fwrite (STDOUT, "Would you like to play again? (y/n)\n");
    $play=trim(fgets(STDIN));
    if ($play == "y") {
        $play=true;
    } else {
        $play=false;
    } 
}
