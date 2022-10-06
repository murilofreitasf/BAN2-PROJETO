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
// echo($valores[0]);

switch($opcao){
    case 1:
        $query = mysqli_query($conn, "SET FOREIGN_KEY_CHECKS=0;");
        $query = mysqli_query($conn, "INSERT INTO funcionarios (codigoFuncionario,nome,telefone,email,cep,nro,tipo) VALUES ('$valores[0]','$valores[1]','$valores[2]','$valores[3]','$valores[4]','$valores[5]','$valores[6]') ;");
        $query = mysqli_query($conn, "SET FOREIGN_KEY_CHECKS=1;");
        mysqli_close($conn);
        // echo(' | ENTROU1');
        break;
    case 2:
        $query = mysqli_query($conn, "SET FOREIGN_KEY_CHECKS=0;");
        $query = mysqli_query($conn, "INSERT INTO cargo (codigoCargo,nome,salario,cargaHoraria) VALUES ('$valores[0]','$valores[1]','$valores[2]','$valores[3]') ;");
        $query = mysqli_query($conn, "SET FOREIGN_KEY_CHECKS=1;");
        mysqli_close($conn);
        // echo(' | ENTROU2');
        break;
    case 3:
        $query = mysqli_query($conn, "SET FOREIGN_KEY_CHECKS=0;");
        $query = mysqli_query($conn, "INSERT INTO estoque (codigoEstoque,quantidade,dataValidade) VALUES ('$valores[0]','$valores[1]','$valores[2]') ;");
        $query = mysqli_query($conn, "SET FOREIGN_KEY_CHECKS=1;");
        mysqli_close($conn);
        // echo(' | ENTROU3');
        break;
    case 4:
        $query = mysqli_query($conn, "SET FOREIGN_KEY_CHECKS=0;");
        $query = mysqli_query($conn, "INSERT INTO ingredientes (codigoIngrediente,nome,preco) VALUES ('$valores[0]','$valores[1]','$valores[2]') ;");
        $query = mysqli_query($conn, "SET FOREIGN_KEY_CHECKS=1;");
        mysqli_close($conn);
        // echo(' | ENTROU4');
        break;
    case 5:
        $query = mysqli_query($conn, "SET FOREIGN_KEY_CHECKS=0;");
        $query = mysqli_query($conn, "INSERT INTO pratos (codigoPrato,nome,tempoPreparo,preco) VALUES ('$valores[0]','$valores[1]','$valores[2]','$valores[3]') ;");
        $query = mysqli_query($conn, "SET FOREIGN_KEY_CHECKS=1;");
        mysqli_close($conn);
        // echo(' | ENTROU5');
        break;
    case 6:
        $query = mysqli_query($conn, "SET FOREIGN_KEY_CHECKS=0;");
        $query = mysqli_query($conn, "INSERT INTO pedidos (codigoPedido,cliente,valor) VALUES ('$valores[0]','$valores[1]','$valores[2]') ;");
        $query = mysqli_query($conn, "SET FOREIGN_KEY_CHECKS=1;");
        mysqli_close($conn);
        // echo(' | ENTROU6');
        break;
    case 7:
        $query = mysqli_query($conn, "SET FOREIGN_KEY_CHECKS=0;");
        $query = mysqli_query($conn, "INSERT INTO clientes (codigoCliente,nome,telefone,email,cep,nro) VALUES ('$valores[0]','$valores[1]','$valores[2]','$valores[3]','$valores[4]','$valores[5]') ;");
        $query = mysqli_query($conn, "SET FOREIGN_KEY_CHECKS=1;");
        mysqli_close($conn);
        // echo(' | ENTROU7');
        break;
}
?>