<?php
    require_once 'vendor/autoload.php';
    use App\Calcula;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calculadora</title>
</head>
<body>

<?php

    $calculo =new Calcula();
    echo $calculo->valorInicial.PHP_EOL;
    echo $calculo->suma(5).PHP_EOL;
?>


    
</body>
</html>