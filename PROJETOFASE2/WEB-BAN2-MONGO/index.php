<?php
    use MongoDB\Driver\ServerApi;
    require_once __DIR__ . '/vendor/autoload.php';

    $serverApi = new ServerApi(ServerApi::V1);
    $client = new MongoDB\Client(
        'mongodb+srv://<USUARIO>:<SENHA>@cluster0.c7vtamz.mongodb.net/?retryWrites=true&w=majority', [], ['serverApi' => $serverApi]);
    $db = $client->PROJETOBAN2;
    $collection = $db->Cargo;


    //INSERÇÃO CARGO TESTE NA COLLECTION "Cargo"
    // function addCargoTeste(){
        // $insertCargo = $collection->insertOne([
        //     'nome' => 'teste',
        //     'salario' => 2000,
        //     'cargaHoraria' => 2,
        // ]);
    // }

    //RECUPERAÇÃO DOS DADOS DO CARGO COZINHEIRO
    // function readCargoCozinheiro(){
        // $readCargo = $collection->find([
        //     'nome' => 'cozinheiro'
        // ]);
        // foreach ($readCargo as $value) {
        //     echo "<p>" . $value["nome"];
        //     echo "<p>" . $value["salario"];
        //     echo "<p>" . $value["cargaHoraria"];
        // }
    // }

    //ATUALIZAÇÃO DO SALÁRIO DO CARGO COZINHEIRO
    // function updateCargoCozinheiro(){
        // $updateCargo = $collection->updateOne(
        //     [ 'nome' => 'cozinheiro' ],
        //     [ '$set' => [ 'salario' => 6000]]
        // );
    // }

    //REMOÇÃO DO CARGO TESTE CRIADO NA PRIMEIRA FUNÇÃO
    // function deleteCargoTeste(){
        // $deleteCargo = $collection->deleteOne([
        //     'nome' => 'teste'
        // ]);
    // }

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <!-- <link rel="stylesheet" href="projetoBan2.css"> -->
    </head>
    <body>
        <!-- <div class="containerGeral">
            <div class="tituloSiteGeral">Inimigo do MongoDB</div>
            <div class="containerActionButtons">
                <button class="actionButton" onclick="alertAdicao()">ADICIONAR CARGO TESTE</button>
                <button class="actionButton" onclick="alertRecuperacao()">RECEBER DADOS DO COZINHEIRO</button>
                <button class="actionButton" onclick="alertAtualizacao()">ATUALIZAR SALÁRIO DO COZINHEIRO</button>
                <button class="actionButton" onclick="alertRemocao()">REMOVER CARGO TESTE CRIADO</button>
            </div>
        </div> -->
    </body>
    <script>
        // function alertAdicao(){
        //     <?php echo addCargoTeste()?>
        //     alert("Cargo teste adicionado! Verifique o banco de dados.")
        // }
        // function alertRecuperacao(){
        //     let resposta = <?php echo readCargoCozinheiro()?>;
        //     alert(<?php echo readCargoCozinheiro()?>)
        //     // alert("Cargo recuperado com dados => nome: "++" | salário: "++" | cargaHorária: "+)
        // }
        // function alertAtualizacao(){
        //     <?php echo updateCargoCozinheiro()?>
        //     alert("Cargo cozinheiro atualizado com sucesso!")
        // }
        // function alertRemocao(){
        //     <?php echo deleteCargoTeste()?>
        //     alert("Cargo teste removido com sucesso!")
        // }
    </script>
</html>