<?php
    error_reporting(E_ALL);
    ini_set("display_errors",1);
    //Inside of myfirstprogram.php
    function sum($x, $y)
    {
        $z = $x + $y;
        return $z;
    }
    function mult($x, $y)
    {
        $z = $x*$y;
        return $z;
    }
    echo "<h2>PHP My First Program - Adder</h2>";
    echo "5+10 = <b>" . sum(5,10) . "</b><br>";
    echo "6+20 = <b>".sum(6,20)."</b><br>";
    echo "<p>End PHP Adder</p>";
    echo "<h2>PHP - Multiplication Table</h2>";
    echo "<table><tbody>";
    for ($i=1; $i<=100; $i++)
    {
        echo "<tr>";
        for ($j=1; $j<=100; $j++)
        {
            echo "<td>".mult($i,$j)."</td>";
        }
        echo "</tr>";
    }
    echo "</tbody></table><p>End PHP Multipication Table</p>";

?>