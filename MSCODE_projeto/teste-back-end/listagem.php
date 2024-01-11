<?php 
require_once('mysql.php');

$consultaInvestimentos = $conn->query("SELECT * FROM calculadora_investimentos ");
$investimentos = mysqli_fetch_all($consultaInvestimentos, MYSQLI_ASSOC);
foreach ($investimentos as $value) {
    echo $value["id"];
    echo " | ";
    echo $value["proprietario"];
    echo " | ";
    echo $value["valor"];
    echo " | ";
    echo $value["data_inicial"];
    echo " | ";
    echo $value["data_final"];
    echo "<br>";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        input[type="button"] {
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }
        input[type="button"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <a href="index.php" ><input type="button" value="Voltar"></a>
</body>
</html>
