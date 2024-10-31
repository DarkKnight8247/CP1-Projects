<form method="post" action="">
    <select name="selector">
        <option value="f-c">Fahrenheit to Celsius</option>
        <option value="c-f">Celsius to Fahrenheit</option>
    </select>
    <input type="text" name="temp" required>
    <input type="submit" name="submit" value="Convert">
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $temp = $_POST['temp'];
    $selector = $_POST['selector'];

    switch ($selector) {
        case "f-c":
            $c = ($temp - 32) * (5/9);
            echo "<h3>The temperature in Celsius is: $c &deg;C</h3>";
            break;

        case "c-f":
            $f = ($temp * 9/5) + 32;
            echo "<h3>The temperature in Fahrenheit is: $f &deg;F</h3>";
            break;
    }
}
?>
