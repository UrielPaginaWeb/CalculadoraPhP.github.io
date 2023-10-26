<html>
<head>
     <title>Calcular</title>
     <style>
        .button-link {
            display: inline-block;
            padding: 10px 20px;
            background-color: white;
            color: black;
            text-decoration: none;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .button-link:hover {
            background-color: rgba(247, 9, 9, 0.404);
        }
    </style>
</head>
<body>
    <center>
    <div style="width: 600px; height:300px; background-color:  rgb(237, 222, 222); 
    text-align: center; padding: 90px; font-size: 30px">
    <?php
        if ($_REQUEST['radiol'] == "suma") {
        $suma = $_REQUEST['valor1'] + $_REQUEST['valor2']; 
        echo "La suma es:" . $suma;
        } elseif ($_REQUEST['radiol'] == "resta") { 
        $resta = $_REQUEST['valor1'] - $_REQUEST['valor2'];
        echo "La resta es:" . $resta; 
        }elseif ($_REQUEST['radiol'] == "multiplicacion") { 
        $multi = $_REQUEST['valor1'] * $_REQUEST['valor2'];
        echo "La multiplicacion es:" . $multi; 
        }elseif ($_REQUEST['radiol'] == "division") { 
        $divi = $_REQUEST['valor1'] / $_REQUEST['valor2'];
        echo "La division es:" . $divi; 
        }
    ?>

<br> <br>
<a href="index.html" class="button-link">Inicio</a><br><br><br>
<h1 style="font-family: Arial; font-size: 20px; float: right;">Uriel Hernandez Catarino</h1>
</div>
</center>
</body>
</html>