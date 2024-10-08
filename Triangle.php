  <?php 
    //varr
    $base = 5;
    $height= 6;

    //calculate
    $area = 0.5 * $base * $height;
    $hypotenuse = sqrt(pow($base, 2) + pow($height, 2));
    #..-. .-. .- -. --..

    // display
    echo "Base: $base <br>";
    echo "Height: $height <br>";
    echo "Area: $area <br>";
    echo "Hypotenuse: " . round($hypotenuse, 2);
?>