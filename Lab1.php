<form method="post">
        <input type="text" name="val">
        <input type="submit" value="Check"> <br>
    </form>

<?php
    if ($_SERVER ['REQUEST_METHOD'] == "POST" && is_numeric( $_POST ["val"])) {
            $num = $_POST["val"];
            echo "Number: $num <br>";

        if ($num % 2 == 0) {
        echo "$num is an even number";
        } else {
        echo "$num is an odd number";
        }
    } else {
        echo "Number na sa imo?";
    }
?>
