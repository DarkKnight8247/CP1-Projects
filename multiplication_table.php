<?php
    $row = 3;
    $col = 5;

    for ($r = 1; $r <= $row; $r++) {
        for ($c = 1; $c <= $col; $c++){
        #..-. .-. .- -. --..
            echo ($r * $c) . "\t";
        }
        echo "<br>";
    }
?>
