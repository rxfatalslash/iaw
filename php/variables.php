<!DOCTYPE html>
<html>
    <head>
        <title>PHP</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <h1>Variables en PHP</h1>
        <?php
            // Variables
            $x = 5;
            $var1 = "Pepe";
            $var2 = "Luisa";
            $var3 = FALSE;
            $var4 = 5;
            echo "$var1<br>$var2<br>$var3<br>$var4<br> <br>";
            // Función ambito
            function ambito() {
                $x = 222;
                $y = 10;
                echo "x=$x<br>"; echo "y=$y<br> <br>";
            }
            ambito();
            echo "x=$x";
        ?>
    </body>
</html>