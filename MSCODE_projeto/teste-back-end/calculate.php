<?php
//var_dump($_POST);
require_once('mysql.php');
// Verifica se a conexão foi bem sucedida
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Recebe os dados do formulário
$proprietario = $_POST["proprietario"];
$valor = $_POST["valor"];
$dataInicial = $_POST["dataInicial"];
$dataRetirada = $_POST["dataRetirada"];
//$datai = date_format($dataInicial, ("Y/m/d"));
//$datar = date_format($dataRetirada, ("Y/m/d"));
// Insere os dados no banco de dados
$sql = "INSERT INTO calculadora_investimentos 
VALUES ( NULL,'$proprietario', '$valor', '$dataInicial', '$dataRetirada')";

if ($conn->query($sql) === TRUE) {
    echo "";
} else {
    echo "Erro ao inserir dados: " . $conn->error;
}

// Fecha a conexão com o banco de dados


$conn->close();

class Investmento {
    public $proprietario;
    public $dataCriacao;
    public $valor;

    public function __construct($proprietario, $dataCriacao, $valor) {
        $this->proprietario = $proprietario;
        $this->dataCriacao = $dataCriacao;
        $this->valor = $valor;
    }
}

function calculoGanhos($investmento, $dataInicial, $dataRetirada) {
    // Calcula o número de meses entre as datas de início e fim
    $start = new DateTime($dataInicial);
    $end = new DateTime($dataRetirada);
    $intervalo = $start->diff($end);
    $meses = $intervalo->format('%m') + 12 * $intervalo->format('%y');

    // Calcula os ganhos de um investimento para cada mês
    $ganhos = 0;
    $principal = $investmento->valor;
    for ($i = 0; $i < $meses; $i++) {
        $ganhos += $principal * 0.0052;
        $principal += $principal * 0.0052;
    }

    return $ganhos;
}

function calculoImposto($investmento, $dataInicial, $dataRetirada) {
    // Calcula o número de meses entre as datas de início e fim
    $start = new DateTime($dataInicial);
    $end = new DateTime($dataRetirada);
    $intervalo = $start->diff($end);
    $meses = $intervalo->format('%m') + 12 * $intervalo->format('%y');

    // Calcula os ganhos de um investimento para cada mês
    $ganhos = 0;
$principal = $investmento->valor;

for ($i = 0; $i < $meses; $i++) {
    $ganhos += $principal * 0.0052;
    $principal += $principal * 0.0052;
}


if ($meses < 12) {
    $imposto = $ganhos * 0.225; 
} elseif ($meses < 24) {
    $imposto = $ganhos * 0.185;
} else {
    $imposto = $ganhos * 0.15;
}

    return $imposto;
}


// Obtém os dados do formulário
$proprietario = $_POST['proprietario'];
$valor = $_POST['valor'];
$dataInicial = $_POST['dataInicial'];
$dataRetirada = $_POST['dataRetirada'];

// Cria um novo investimento
$investmento = new Investmento($proprietario, $dataInicial, $valor);

// Calcula os ganhos entre as datas de início e fim
$ganhos = calculoGanhos($investmento, $dataInicial, $dataRetirada);

// Soma o valor inicial com os ganhos
$total = $valor + $ganhos;

// Calcula o imposto
$imposto = calculoImposto($investmento, $dataInicial, $dataRetirada);

//Mostra o restante final
$restante = $total - $imposto ;

// Formata os ganhos, total e imposto para incluir duas casas decimais
$ganhos = number_format($ganhos, 2, '.', '');
$total = number_format($total, 2, '.', '');
$imposto = number_format($imposto, 2, '.', '');
$restante = number_format($restante, 2, '.', '');


/* echo "O investimento de {$investmento->proprietario} de {$investmento->valor} reais
terá um ganho de {$ganhos} reais entre {$dataInicial} e {$dataRetirada}, totalizando
na sua carteira o valor de {$total} reais. Se você retirar o dinheiro entre essas datas, 
o imposto será de {$imposto} reais, tendo um restante final de {$restante}.";
modelo por extenso
*/


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
/* formato Json
    $investimentoArray[]=[
       "nome"=>$proprietario,
       "valor_inicial"=>$valor,
       "data_inicial"=>$dataInicial,
       "data_retirada"=>$dataRetirada,
       "valor_total"=>$total,
       "impostos"=>$imposto,
       "valor_final"=>$restante

    ];
    echo json_encode($investimentoArray);
*/
    ?>
<pre>
    {
        "nome": <?php echo $proprietario?>,
        "valor_inicial": <?php echo $valor?>,
        "data_inicial": <?php echo $dataInicial?>,
        "data_retirada": <?php echo $dataRetirada?>,
        "ganhos": <?php echo $ganhos?>,
        "valor_total_com_impostos": <?php echo $total?>,
        "impostos": <?php echo $imposto?>,
        "valor_final": <?php echo $restante?>

        }
</pre>

</body>
</html>