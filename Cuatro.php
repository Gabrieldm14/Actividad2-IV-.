<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Media</title>
</head>
<body>
    <?php 
    function calcular_media($valores){

        
        
        $num = 0;
        $total = count($valores);
        $promedio = 0;
            for($x= 0; $x < $total; $x++){
                echo "Valores dentro de la varible: ". $valores[$x] ."<br>";
                $num +=  $valores[$x];
            }
        
            $promedio = $num / $total;
        
            return "<br> La media es: $promedio<br>";
        }
        echo calcular_media([2, 8, 16]);
        
    ?>
</body>
</html>