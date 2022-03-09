<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posicion</title>
</head>
<body>
    
<?php 

function imprimir_array($array){
    echo "<table border='2px' solid black>";
    
    echo "<tr>";
        echo "<th>Valor</th>";
        echo "<th>Posicion</th>";
    echo "</tr>";

    foreach($array as $i =>$valor){

        echo "<tr>";
         echo "<td>$i</td> <td>$valor</td>";
        echo "</tr>";
    }

    
    echo "</table>";
}

imprimir_array([1,2,3,4,5,6,7,8,9,10]);

?>
</body>
</html>