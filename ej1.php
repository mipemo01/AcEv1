<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio1</title>
</head>
<body>
    <h1>Ejercicio 1</h1>
    
    <?php
    $precio = 0;
    if ($_SERVER["REQUEST_METHOD"]== "POST"){
        $paquetes = $_POST["paquetes"];
        $tamano = $_POST["tamano"];
        $peso = $_POST["peso"];
        $zona = $_POST["zona"];
    }
    
    if ($tamano <= 5) {
        $precio = $precio + 50;
    } elseif ($tamano <= 10){
        $precio = $precio + 75;
    } elseif ($tamano > 10){
        $precio = $precio + 100;
    
    }
    if ($peso <= 5)  {
        $precio = $precio;
    }
      elseif ($peso > 5)  {
        $precio = $precio + ($precio * 25 / 100);
    
    } elseif ($peso > 10)  {
        $precio = $precio + ($precio * 50 / 100);
    
    } if ($peso > 15)  {
echo "El precio se desestima" ;
    }
    if ($zona == "Peninsula"){
        $precio = $precio;
    }elseif ($zona == "BalearesAereo"){
        $precio = $precio ;
    } 
    elseif ($zona == "BalearesAereo"){
        $precio = $precio + ($precio * 10 / 100);
    } elseif ($zona == "Canarias"){
        $precio = $precio + ($precio * 10 / 100);
    }



    $precio = ($paquetes * $precio);

echo "<br> El precio es $precio €";
    ?>
    
    <form method="POST" action="">
        <label for="paquetes">PAQUETES:</label>
        <input type="number" id="paquetes" name="paquetes" value="">
        <label for="tamano">TAMAÑO:</label>
        <input type="number" id="tamano" name="tamano" value="">
        <label for="peso">PESO:</label>
        <input type="number" id="peso" name="peso" value="">
        <label for="zona">ZONA:</label>
        <input id="zona" name="zona" value="">
        <input type="submit" value="Calcular">
    </form>
</body>
</html>