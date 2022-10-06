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
$valores = $_POST["valores"];
// echo($valores[6]);

switch($opcao){
    case 1:
        $query = mysqli_query($conn, "SET FOREIGN_KEY_CHECKS=0;");
        $query = mysqli_query($conn, "UPDATE funcionarios SET codigoFuncionario='$valores[0]',nome='$valores[1]',telefone='$valores[2]',email='$valores[3]',cep='$valores[4]',nro='$valores[5]',tipo='$valores[6]' WHERE codigoFuncionario={$id}");
        $query = mysqli_query($conn, "SET FOREIGN_KEY_CHECKS=1;");
        mysqli_close($conn);
        // echo(' | ENTROU1');
        break;
    case 2:
        $query = mysqli_query($conn, "SET FOREIGN_KEY_CHECKS=0;");
        $query = mysqli_query($conn, "UPDATE cargo SET codigoCargo='$valores[0]',nome='$valores[1]',salario='$valores[2]',cargaHoraria='$valores[3]' WHERE codigoCargo={$id}; ");
        $query = mysqli_query($conn, "SET FOREIGN_KEY_CHECKS=1;");
        mysqli_close($conn);
        // echo(' | ENTROU2');
        break;
    case 3:
        $query = mysqli_query($conn, "SET FOREIGN_KEY_CHECKS=0;");
        $query = mysqli_query($conn, "UPDATE estoque SET codigoEstoque='$valores[0]',quantidade='$valores[1]',dataValidade='$valores[2]' WHERE codigoEstoque={$id}; ");
        $query = mysqli_query($conn, "SET FOREIGN_KEY_CHECKS=1;");
        mysqli_close($conn);
        // echo(' | ENTROU3');
        break;
    case 4:
        $query = mysqli_query($conn, "SET FOREIGN_KEY_CHECKS=0;");
        $query = mysqli_query($conn, "UPDATE ingredientes SET codigoIngrediente='$valores[0]',nome='$valores[1]',preco='$valores[2]' WHERE codigoIngrediente={$id}; ");
        $query = mysqli_query($conn, "SET FOREIGN_KEY_CHECKS=1;");
        mysqli_close($conn);
        // echo(' | ENTROU4');
        break;
    case 5:
        $query = mysqli_query($conn, "SET FOREIGN_KEY_CHECKS=0;");
        $query = mysqli_query($conn, "UPDATE pratos SET codigoPrato='$valores[0]',nome='$valores[1]',tempoPreparo='$valores[2]',preco='$valores[3]' WHERE codigoPrato={$id}; ");
        $query = mysqli_query($conn, "SET FOREIGN_KEY_CHECKS=1;");
        mysqli_close($conn);
        // echo(' | ENTROU5');
        break;
    case 6:
        $query = mysqli_query($conn, "SET FOREIGN_KEY_CHECKS=0;");
        $query = mysqli_query($conn, "UPDATE pedidos SET codigoPedido='$valores[0]',cliente='$valores[1]',valor='$valores[2]' WHERE codigoPedido={$id}; ");
        $query = mysqli_query($conn, "SET FOREIGN_KEY_CHECKS=1;");
        mysqli_close($conn);
        // echo(' | ENTROU6');
        break;
    case 7:
        $query = mysqli_query($conn, "SET FOREIGN_KEY_CHECKS=0;");
        $query = mysqli_query($conn, "UPDATE clientes SET codigoCliente='$valores[0]',nome='$valores[1]',telefone='$valores[2]',email='$valores[3]',cep='$valores[4]',nro='$valores[5]' WHERE codigoCliente={$id}; ");
        $query = mysqli_query($conn, "SET FOREIGN_KEY_CHECKS=1;");
        mysqli_close($conn);
        // echo(' | ENTROU7');
        break;
}
?>