<!DOCTYPE html>
<html>
<body>

<h1>Ejercicio 5</h1>

<?php
    header ("Content-type: text/html;charset=\"utf-8\"");
    $x = 1;
    while($x <=10){ 
      echo "<p>$x</p>"";
        $x++;
     }
        echo "<p>Finaliza ciclo while</p>";
       $x = 10;

        while($x >=0){
        echo "<p>$x</p>";
        $x--;
    }
    echo "<p>Finaliza ciclo for</p>";

    $familia = array("Maria", "Ana", "Jose", "Pedro");
     $x =0;

    while($x<=sizeof($familia))
    {
        echo "<h2>$familia[$x] numero de elemento $x </h2>";
        echo "<br>";
        $x++;

    }

?>

</body>
</html>