<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
        <link rel="stylesheet" href="../style.css">
        <title>3. Order Confirmation</title>
    </head>
    <body>
        <nav>
            <a class="nav" href="../index.html">Home</a> |
            <a class="nav" href="php_tutorial.html">Multiplication Table</a> |
            <a class="nav" href="quiz.html">Quiz</a> |
            <a class="nav" href="store.html">Store</a> |
        </nav>
        <div>
            <h2>Order Confirmation</h2>
            <p><u>Thank for shopping with us!</u></p>
            <?php
                error_reporting(E_ALL);
                ini_set("display_errors", 1);
                //Data Value
                $sum                = 0;
                $usr_pass           = $_POST["pass"];
                $ship_price         = $_POST["shipping"];
                $ship_op;
                $iphone_quantity    = $_POST["iphone"];
                $iphone_price       = 350.40;
                $ipad_quantity      = $_POST["ipad"];
                $ipad_price         = 750.52;
                $imac_quantity      = $_POST["imac"];
                $imac_price         = 1045.24;

                if ($ship_price == 25.00)
                {
                    $ship_op = "Standard";
                }
                else if ($ship_price == 50.00)
                {
                    $ship_op = "Next Business Day";
                }
                else if ($ship_price == 75.00)
                {
                    $ship_op = "Overnight";
                }
                //Writing to Screen
                echo "Your password is '<b>" . $usr_pass . "</b>'<br><br>";
                echo "<h2>Order Receipt</h2>";
                echo "<table><tr><th></th><th>Quantity</th><th>Cost Per Item</th><th>Sub Total</th></tr>";
                $sum = $sum + ($iphone_quantity*$iphone_price);
                echo "<tr><th>iPhone</th><td>" . $iphone_quantity . "</td><td>$" . $iphone_price . "</td><td>$" . ($iphone_quantity*$iphone_price) . "</td></tr>";
                $sum = $sum + ($ipad_quantity*$ipad_price);
                echo "<tr><th>iPad</th><td>" . $ipad_quantity . "</td><td>$" . $ipad_price . "</td><td>$" . ($ipad_quantity*$ipad_price) . "</td></tr>";
                $sum = $sum + ($imac_quantity*$imac_price);
                echo "<tr><th>iMac</th><td>" . $imac_quantity . "</td><td>$" . $imac_price . "</td><td>$" . ($imac_quantity*$imac_price) . "</td></tr>";
                $sum = $sum + $ship_price;
                echo "<tr><th>Shipping</th><td colspan='2'>" . $ship_op . "</td><td>$" . $ship_price . "</td></tr>";
                echo "<tr><th colspan='3'>Total Cost</th><td>$" . $sum . "</td></tr>";
            ?>
            </table>
            <br><br><hr>
            <a href="customerFrontend.html">Return to Store</a>
        </div>
    </body>

</html>