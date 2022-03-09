<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplica</title>
</head>
<body>
    
    <?php 
    
        function multiplica($numero){

            for($i=1; $i<=10;$i++){

                echo $i . " x " . " = " . $i * $numero;
                echo "<br>";
            }
        }


        $numero = rand(1,10);
        echo "Tabla del " . $numero;
        echo "<br>";
        multiplica($numero);
    ?>

</body>
</html>