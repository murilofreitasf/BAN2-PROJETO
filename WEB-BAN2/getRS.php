<?php 
include('dbpreset.php');

$conn = new mysqli($host, $username, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// echo "Connected successfully | ";

mysqli_set_charset($conn,"utf8");

$opcao = 0;
if (isset($_GET["opcao"])){
    $opcao = $_GET["opcao"];
}

// echo($opcao);

switch($opcao){
    case "RS1":
        $query = mysqli_query($conn, "SELECT c.nome FROM clientes as c JOIN pedidos as p ON c.codigoCliente = p.cliente WHERE p.valor >= 50;");
        $data = [];
        while($retorno = mysqli_fetch_array($query, MYSQLI_ASSOC)){
            $data[] = $retorno;
        }
        echo json_encode($data);
        mysqli_close($conn);
        // echo(' | ENTROU1');
        break;
    case "RS2":
        $query = mysqli_query($conn, "SELECT f.nome FROM funcionarios as f JOIN cargo as c ON f.tipo = c.codigoCargo WHERE c.salario > 3000;");
        $data = [];
        while($retorno = mysqli_fetch_array($query, MYSQLI_ASSOC)){
            $data[] = $retorno;
        }
        echo json_encode($data);
        mysqli_close($conn);
        // echo(' | ENTROU2');
        break;
    case "RS3":
        $query = mysqli_query($conn, "SELECT i.nome FROM ingredientes as i JOIN estoque as e ON i.codigoIngrediente = e.codigoEstoque WHERE e.quantidade >= 20;");
        $data = [];
        while($retorno = mysqli_fetch_array($query, MYSQLI_ASSOC)){
            $data[] = $retorno;
        }
        echo json_encode($data);
        mysqli_close($conn);
        // echo(' | ENTROU3');
        break;
}
?>