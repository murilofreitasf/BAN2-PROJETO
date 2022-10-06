<?php 
include('dbpreset.php');

$conn = new mysqli($host, $username, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// echo "Connected successfully | ";

mysqli_set_charset($conn,"utf8");

$opcao = 0;
if (isset($_POST["opcao"])){
    $opcao = $_POST["opcao"];
}
$id = $_POST["id"];
// echo($opcao);

switch($opcao){
    case 1:
        $query = mysqli_query($conn, "SET FOREIGN_KEY_CHECKS=0;");
        $query = mysqli_query($conn, "DELETE FROM funcionarios WHERE codigoFuncionario={$id}");
        $query = mysqli_query($conn, "SET FOREIGN_KEY_CHECKS=1;");
        mysqli_close($conn);
        // echo(' | ENTROU1');
        break;
    case 2:
        $query = mysqli_query($conn, "SET FOREIGN_KEY_CHECKS=0;");
        $query = mysqli_query($conn, "DELETE FROM cargo WHERE codigoCargo={$id}; ");
        $query = mysqli_query($conn, "SET FOREIGN_KEY_CHECKS=1;");
        mysqli_close($conn);
        // echo(' | ENTROU2');
        break;
    case 3:
        $query = mysqli_query($conn, "SET FOREIGN_KEY_CHECKS=0;");
        $query = mysqli_query($conn, "DELETE FROM estoque WHERE codigoEstoque={$id}; ");
        $query = mysqli_query($conn, "SET FOREIGN_KEY_CHECKS=1;");
        mysqli_close($conn);
        // echo(' | ENTROU3');
        break;
    case 4:
        $query = mysqli_query($conn, "SET FOREIGN_KEY_CHECKS=0;");
        $query = mysqli_query($conn, "DELETE FROM ingredientes WHERE codigoIngrediente={$id}; ");
        $query = mysqli_query($conn, "SET FOREIGN_KEY_CHECKS=1;");
        mysqli_close($conn);
        // echo(' | ENTROU4');
        break;
    case 5:
        $query = mysqli_query($conn, "SET FOREIGN_KEY_CHECKS=0;");
        $query = mysqli_query($conn, "DELETE FROM pratos WHERE codigoPrato={$id}; ");
        $query = mysqli_query($conn, "SET FOREIGN_KEY_CHECKS=1;");
        mysqli_close($conn);
        // echo(' | ENTROU5');
        break;
    case 6:
        $query = mysqli_query($conn, "SET FOREIGN_KEY_CHECKS=0;");
        $query = mysqli_query($conn, "DELETE FROM pedidos WHERE codigoPedido={$id}; ");
        $query = mysqli_query($conn, "SET FOREIGN_KEY_CHECKS=1;");
        mysqli_close($conn);
        // echo(' | ENTROU6');
        break;
    case 7:
        $query = mysqli_query($conn, "SET FOREIGN_KEY_CHECKS=0;");
        $query = mysqli_query($conn, "DELETE FROM clientes WHERE codigoCliente={$id}; ");
        $query = mysqli_query($conn, "SET FOREIGN_KEY_CHECKS=1;");
        mysqli_close($conn);
        // echo(' | ENTROU7');
        break;
}
?>