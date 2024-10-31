<form method="post">
Value 1: <input type="text" name="val1"> <br>
Value 2: <input type="text" name="val2">
<input type="submit" value="calc">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST["val1"]) && !empty($_POST["val2"])) {
        if (is_numeric($_POST["val1"]) && is_numeric($_POST["val2"])) {
            $val1 = $_POST["val1"];
            $val2 = $_POST["val2"];
            $sum = $val1 + $val2;
            echo "The sum of <u>$val1</u> and <u>$val2</u> is <u>$sum</u>";
        } else {
            $val1 = $_POST["val1"];
            $val2 = $_POST["val2"];
            echo "<u>$val1</u> kag <u>$val2</u>? <br> ano na man?";
        }
    } else {
        echo "please input data";
    }
}
?>
