

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Investimentos</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        h1 {
            color: #333;
            text-align: center;
        }
        form {
            width: 330px;
            margin: 0 auto;
            border: 2px solid #45a049;
            padding: 40px;
            box-sizing: border-box;
        }
        label {
            display: block;
            margin-top: 20px;
        }
        input[type="text"], input[type="number"], input[type="date"] {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
        }
        input[type="submit"], input[type="button"] {
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }
        input[type="submit"], input[type="button"]:hover {
            background-color: #45a049;
        }
        
    </style>
</head>
<body>
<h1>Calculadora de Investimentos</h1>

<form action="calculate.php" method="post">
    <label for="proprietario">Nome:</label><br>
    <input type="text" id="proprietario" name="proprietario" required><br>
    <label for="valor">Valor Inicial:</label><br>
    <input type="number" id="valor" name="valor" step="0.01" min="0" required><br>
    <label for="dataInicial">Data Inicial:</label><br>
    <input type="date" id="dataInicial" name="dataInicial" required><br>
    <label for="dataRetirada">Data de Retirada:</label><br>
    <input type="date" id="dataRetirada" name="dataRetirada" required><br>
    <input type="submit" value="Calcular">
    <a href="listagem.php" ><input type="button" value="Visualizar todos os registros"></a>
</form>
    
</body>
</html>
