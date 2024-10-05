<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"> <!--Ang purpose sino is, gina automatic ya adjust ang interface based on what device your using, so kung tablet imo gamit ma automatic nisa adjust dako kung sa CP naman ma gamay-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Franx mwhehehe</title>
</head>
<body>
    <!-- Header lang ni -->
    <h1>Rectangle Calculator :x</h1>

    <!-- form na di -->
    <form method="post">
        <label for="length">Length:</label>
        <input type="text" name="length" id="length" value="<?php echo isset($_POST['length']) ? $_POST['length'] : ''; ?>" required><br><br>

        <label for="width">Width:</label>
        <input type="text" name="width" id="width" value="<?php echo isset($_POST['width']) ? $_POST['width'] : ''; ?>" required><br><br>

        <button type="submit" name="submit">Calculate</button> <br><br>
    </form>

    <?php
    // check kung may naka input nga data when submitting :x
    if (isset($_POST['submit'])) {
        $length = $_POST['length'];
        $width = $_POST['width'];

        // nag check liwat if numeric ang naka input then display if ara mweheheh :>
        if (is_numeric($length) && $length > 0 && is_numeric($width) && $length > 0) {
            $area = $length * $width;
            $perimeter = 2 * ($length + $width);

            echo "The rectangle with the length of $length and a width of $width is equal to:<br>";
            echo "&nbsp;&nbsp;&nbsp;&nbsp;Area: $area <br>";
            echo "&nbsp;&nbsp;&nbsp;&nbsp;Perimeter: $perimeter";
        }
        // if waay na meet ang requirements
        else {
            echo "Invalid input data, please enter a valid number";
        }
    }
    ?>
</body>
</html>