<?php
$first_value = $_POST['first_value'];
$second_value = $_POST['second_value'];
$calculate = $_POST['calculate'];

$output = [];

switch ($calculate) {
    case 'plus':
        $output = $first_value + $second_value;
        break;
    case 'minus':
        $output = $first_value - $second_value;
        break;
    case 'multiply':
        $output = $first_value * $second_value;
        break;
    case 'divide':
        $output = $first_value / $second_value;
        break;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Calculator</title>
    <link rel="stylesheet" href="calculator.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Text:ital@0;1&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>

<body>
    <main>
        <h2>PHP Calculator</h2>
        <form method="POST">
            <label for="first_value">First value </label>
            <input type="number" name="first_value" required><br><br>

            <label for="second_value">Second value </label>
            <input type="number" name="second_value" required><br><br>

            <label for="calculate">Calculation: </label>
            <button type="submit" name="calculate" value="plus">Addition (+)</button>
            <button type="submit" name="calculate" value="minus">Subtraction (-)</button>
            <button type="submit" name="calculate" value="multiply">Multiply (*)</button>
            <button type="submit" name="calculate" value="divide"> Divide (/)</button> <br> <br>
        </form>

        <h3>Output: <span class="output"><?php echo $output; ?></span></h3>
    </main>
</body>

</html>