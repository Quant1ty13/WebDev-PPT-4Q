<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Welcome to Shame Factory</h1>
    <h3>Order our products now from below!</h3>
    <form action="index.php" method="post">
        <input type="checkbox" name="Item1" value="Metal Spiked Soccer Ball">
        <label>Metal Spiked Soccer Ball (Php 1500)</label>
        <input type="number" name="Soccer Order"><br>

        <input type="checkbox" name="Item2" value="Clear Ink Ballpen">
        <label>Clear Ink Ballpen (Php 150)</label>
        <input type="number" name="Ballpen Order"><br>

        <input type="checkbox" name="Item3" value="Used Toothpick">
        <label>Used Toothpick (Php 30)</label>
        <input type="number" name="Toothpick Order"><br>

        <input type="checkbox" name="Item4" value="Featherless Shuttlecock">
        <label>Featherless Shuttlecock (Php 250)</label>
        <input type="number" name="Shuttlecock Order"><br>

        <input type="checkbox" name="Item5" value="Meatless Chicken">
        <label>Meatless Chicken (Php 750)</label>
        <input type="number" name="Chicken Order"><br>

        <input type="checkbox" name="Item6" value="Dirty Eraser">
        <label>Dirty Eraser (Php 50)</label>
        <input type="number" name="Eraser Order"><br><br>

        <input type="submit" name="Order" value="Order">
    </form>

    <p><?php

        $items = [];

        if (isset($_POST["Order"]))
        {
            if (isset($_POST["Item1"]))
            {
                array_push($items, $_POST["Item1"]);
                $itemt["Metal Spiked Soccer"] = 1500;
            }
            if (isset($_POST["Item2"]))
            {
                array_push($items, $_POST["Item2"]);
                $itemt["Clear Ink Ballpen"] = 150;
            }
            if (isset($_POST["Item3"]))
            {
                array_push($items, $_POST["Item3"]);
                $itemt["Used Toothpick"] = 30;
            }
            if (isset($_POST["Item4"]))
            {
                array_push($items, $_POST["Item4"]);
                $itemt["Featherless Shuttlecock"] = 250;
            }
            if (isset($_POST["Item5"]))
            {
                array_push($items, $_POST["Item5"]);
                $itemt["Meatless Chicken"] = 250;
            }
            if (isset($_POST["Item6"]))
            {
                array_push($items, $_POST["Item6"]);
                $itemt["Dirty Eraser"] = 50;
            }

            foreach ($items as $ordered)
                {
                    echo "Purchased ", $ordered, "!<br>";
                }
            echo "Total: Php ", array_sum($itemt);
        }

    ?></p>
</body>
</html>