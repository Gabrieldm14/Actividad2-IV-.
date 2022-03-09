<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplicacion</title>
</head>
<body>
    
    <?php 

function tablas ($inicio,$fin){
	for ($i=$inicio;$i<=$fin;$i++){
    echo "<p>Tabla del $i : <br/></p>";
    	multiplicar($i);
}
}
function multiplicar($num) {
for ($i=1; $i<=12; $i++){
	echo "<br>$i x $num =".$i*$num;
    }
}
do {
$inicio = rand (1,10);
$fin = rand (1,10);
}
while ($inicio > $fin);
tablas ($inicio, $fin);
?>

</body>
</html>