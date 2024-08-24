<?php

function fibonacci($num) {

    $num_1 = 0;
    $num_2 = 1;
    $output = 0;

    for ($x = 0; $x <= $num; $x++) {

        if ($x <= 1) {
            $output = $x;
        }else {
            $output = $num_1 + $num_2;
            $num_1 = $num_2;
            $num_2 = $output;
        }
        echo $output . ",";
    }
}

fibonacci (10);