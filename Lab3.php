<form method="post"> 
    Number 1: <input type="text" name="val1" required> <br>
    Number 2: <input type="text" name="val2" required> <br>
    Operation: 
    <select name="operator">
        <option value="add">Add</option>
        <option value="subtract">Subtract</option>
        <option value="divide">Divide</option>
        <option value="multiply">Multiply</option>
    </select>
    <input type="submit" value="calc">
</form>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $val1 = $_POST['val1'];
        $val2 = $_POST['val2'];
        $operator = $_POST['operator'];
        #..-. .-. .- -. --.. 

        switch ($operator) {
            case 'add':
                $fin = $val1 + $val2;
            break;

            case 'subtract':
                $fin = $val1 - $val2;
            break;

            case 'divide':
                if ($val2 != 0) {
                    $fin = $val1 / $val2;
                } else {
                    $fin = "Cannot be divided by zero >:(";
                }
            break;

            case 'multiply':
                $fin = $val1 * $val2;
            break;

            default:
          
            $fin = "Invalid operation selected >:(";
    }}
    echo "Results: $fin";
?>
