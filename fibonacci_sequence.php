<?php
    $val1 = 0;
    $val2 = 1;
    $limit = 22;

    echo "$val1 $val2 ";
    #..-. .-. .- -. --..

    while (true){
        $next = $val1 + $val2;

        if ($next > $limit) {
            break;
        }
        echo "$next ";

        $val1= $val2;
        $val2= $next;
    }
?>
