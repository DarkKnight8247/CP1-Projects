<form method="post">
    Number 1<input type="number" name="num1" required><br>
    Number 2<input type="number" name="num2" required><br>
    Number 3<input type="number" name="num3" required><br>
    <input type="submit" value="Check">
</form>

<?php
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $num3 = $_POST["num3"];
        #..-. .-. .- -. --.. 

        if( $num1 > $num2 && $num1 > $num3 ) {
            echo"$num1 is greater than $num2 and $num3";
        } else if ( $num2 > $num3 && $num2 > $num1 ) {
            echo "$num2 is greater than $num1 and $num3";
        } else if ( $num3 > $num1 && $num3 > $num2 ) {
            echo "$num3 is greater than $num1 and $num2";
        } else if( $num1 == $num2 && $num1 == $num3 && $num2 == $num3) {
            echo "All numbers are equal";
        }
         else {
            echo "please input valid data";
        }
    }
?>
