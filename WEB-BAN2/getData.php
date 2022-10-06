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
    case 1:
        $query = mysqli_query($conn, "SELECT * FROM funcionarios");
        $data = [];
        while($retorno = mysqli_fetch_array($query, MYSQLI_ASSOC)){
            $data[] = $retorno;
        }
        echo json_encode($data);
        mysqli_close($conn);
        // echo(' | ENTROU1');
        break;
    case 2:
        $query = mysqli_query($conn, "SELECT * FROM cargo");
        $data = [];
        while($retorno = mysqli_fetch_array($query, MYSQLI_ASSOC)){
            $data[] = $retorno;
        }
        echo json_encode($data);
        mysqli_close($conn);
        // echo(' | ENTROU2');
        break;
    case 3:
        $query = mysqli_query($conn, "SELECT * FROM estoque");
        $data = [];
        while($retorno = mysqli_fetch_array($query, MYSQLI_ASSOC)){
            $data[] = $retorno;
        }
        echo json_encode($data);
        mysqli_close($conn);
        // echo(' | ENTROU3');
        break;
    case 4:
        $query = mysqli_query($conn, "SELECT * FROM ingredientes");
        $data = [];
        while($retorno = mysqli_fetch_array($query, MYSQLI_ASSOC)){
            $data[] = $retorno;
        }
        echo json_encode($data);
        mysqli_close($conn);
        // echo(' | ENTROU4');
        break;
    case 5:
        $query = mysqli_query($conn, "SELECT * FROM pratos");
        $data = [];
        while($retorno = mysqli_fetch_array($query, MYSQLI_ASSOC)){
            $data[] = $retorno;
        }
        echo json_encode($data);
        mysqli_close($conn);
        // echo(' | ENTROU5');
        break;
    case 6:
        $query = mysqli_query($conn, "SELECT * FROM pedidos");
        $data = [];
        while($retorno = mysqli_fetch_array($query, MYSQLI_ASSOC)){
            $data[] = $retorno;
        }
        echo json_encode($data);
        mysqli_close($conn);
        // echo(' | ENTROU6');
        break;
    case 7:
        $query = mysqli_query($conn, "SELECT * FROM clientes");
        $data = [];
        while($retorno = mysqli_fetch_array($query, MYSQLI_ASSOC)){
            $data[] = $retorno;
        }
        echo json_encode($data);
        mysqli_close($conn);
        // echo(' | ENTROU7');
        break;
}
?>