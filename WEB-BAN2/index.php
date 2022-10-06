<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="projetoBan2.css">
        <script src="scripts/jquery.js"></script>
    </head>
    <body>
        <div class="containerOverlayInicio" id="containerOverlayInicio">
            <div class="overlayInicioBase">
                <div class="camadaOverlayInicioBase1"></div>
                <div class="camadaOverlayInicioBase2"></div>
                <div class="camadaOverlayInicioBase1"></div>
                <div class="camadaOverlayInicioBase2"></div>
                <div class="camadaOverlayInicioBase1"></div>
                <div class="camadaOverlayInicioBase2"></div>
                <div class="camadaOverlayInicioBase1"></div>
                <div class="camadaOverlayInicioBase2"></div>
                <div class="camadaOverlayInicioBase1"></div>
                <div class="camadaOverlayInicioBase2"></div>
                <div class="camadaOverlayInicioBase1"></div>
                <div class="camadaOverlayInicioBase2"></div>
                <div class="camadaOverlayInicioBase1"></div>
                <div class="camadaOverlayInicioBase2"></div>
                <div class="camadaOverlayInicioBase1"></div>
            </div>
            <button class="escritoAcessar" onclick="acessarRestaurante()">ACESSAR</button>
            <div class="macanetaAcessar">
                <div class="macanetaEsquerda"></div>
                <div class="macanetaDireita"></div>
                <div class="macanetaBaixo"></div>
            </div>
        </div>
        <button class="voltarMenu" id="voltarMenu" onclick="returnMenu()" hidden>VOLTAR</button>
        <div class="containerPrincipal" id="containerPrincipal">
            <div class="containerLogoRestaurante">
                <div class="logoRestaurante"></div>
            </div>
            <div class="camadaSuperiorTopo"></div>
            <div class="camadaInferiorTopo"></div>
            <div class="containerTabela" id="containerTabela" hidden>
                <table class="tabelaOpcao" id="tabelaOpcao">
                    <thead><tr id=cabecalhoTabelaOpcao></tr></thead>
                    <tbody id="corpoTabela"></tbody>
                </table>
            </div>
            <div class="containerPaginaEscolha" id="containerPaginaEscolha">
                <div class="containerOpcoesBanco">
                    <div class="correnteOpcao"></div>
                    <div class="correnteOpcao"></div>
                    <div class="correnteOpcao"></div>
                    <div class="correnteOpcao"></div>
                    <div class="correnteOpcao"></div>
                    <div class="correnteOpcao"></div>
                    <div class="correnteOpcao"></div>
                    <button class="opcaoBanco" id="1" onclick="showTable(this)">Funcionários</button>
                    <button class="opcaoBanco" id="2" onclick="showTable(this)">Cargos</button>
                    <button class="opcaoBanco" id="3" onclick="showTable(this)">Estoque</button>
                    <button class="opcaoBanco" id="4" onclick="showTable(this)">Ingredientes</button>
                    <button class="opcaoBanco" id="5" onclick="showTable(this)">Pratos</button>
                    <button class="opcaoBanco" id="6" onclick="showTable(this)">Pedidos</button>
                    <button class="opcaoBanco" id="7" onclick="showTable(this)">Clientes</button>
                </div>
                <div class="disclaimerOpções">Escolha uma das opções acima para<br><span style="color: #ffc000">realizar ações sobre o banco!</span><div> 
                <button class="opcaoBanco" id="RS1" onclick="showRS(this)">Nome dos clientes com pedidos >= 50</button>
                <button class="opcaoBanco" id="RS2" onclick="showRS(this)">Nome dos funcionarios que ganham mais de 3000</button>
                <button class="opcaoBanco" id="RS3" onclick="showRS(this)">Nome dos ingredientes com quantidade >= 20</button>
            </div>
        </div>
    </body>
    <script>
        var opcaoEscolhida = 0

        function acessarRestaurante(){
            document.getElementById("containerOverlayInicio").style.top = "-100vh"
        }

        function showTable(e){
            opcaoEscolhida = e.id
            request = $.ajax({
                type: 'GET',
                async: false,
                url: 'getData.php',
                data: {
                opcao: opcaoEscolhida,
                },
            }).fail(function(jqXHR, resp) {
                alert('A requisição gerou um erro: ' + resp);
            });
            var jsonResposta = JSON.parse(request.responseText)
            console.log(jsonResposta)
            $("#containerPaginaEscolha").prop("hidden", true)
            $("#containerTabela").prop("hidden", false)
            $("#voltarMenu").prop("hidden", false)
            document.getElementById("cabecalhoTabelaOpcao").innerHTML = ""
            document.getElementById("cabecalhoTabelaOpcao").innerHTML = document.getElementById("cabecalhoTabelaOpcao").innerHTML + "<th></th>"
            Object.keys(jsonResposta[0]).map((item) => {
                document.getElementById("cabecalhoTabelaOpcao").innerHTML = document.getElementById("cabecalhoTabelaOpcao").innerHTML + "<th>" + item + "</th>"
            })
            document.getElementById("cabecalhoTabelaOpcao").innerHTML = document.getElementById("cabecalhoTabelaOpcao").innerHTML + "<th>EXCLUIR</th>"
            let data = ""
            jsonResposta.map((item) => {
                data = data + "<td><button class='salvarLinha' onclick='salvarLinha(this)'>SALVAR</button></td>"
                for(let i = 0;i<Object.keys(item).length;i++){
                    data = data + "<td><input class='inputDado' type='text' value='" + item[Object.keys(item)[i]] + "'</td>"
                }
                data = data + "<td><button class='excluirLinha' onclick='excluirLinha(this)'>X</button></td>"
                document.getElementById("corpoTabela").innerHTML = document.getElementById("corpoTabela").innerHTML + "<tr>" + data + "</tr>"
                data = ""
            })
            data = data + "<td><button class='addLinha' onclick='addLinha(this)'>+</button></td>"
            for(let i = 0;i<Object.keys(jsonResposta[0]).length;i++){
                console.log(Object.keys(jsonResposta[0])[i])
                data = data + "<td><input class='inputDado' type='text' placeholder='" + Object.keys(jsonResposta[0])[i] + "'</td>"
            }
            data = data + "<td></td>"
            document.getElementById("corpoTabela").innerHTML = document.getElementById("corpoTabela").innerHTML + "<tr>" + data + "</tr>"
        }

        function returnMenu(){
            document.getElementById("cabecalhoTabelaOpcao").innerHTML = ""
            document.getElementById("corpoTabela").innerHTML = ""
            $("#containerPaginaEscolha").prop("hidden", false)
            $("#containerTabela").prop("hidden", true)
            $("#voltarMenu").prop("hidden", true)
        }

        function excluirLinha(e){
            let codExclusao = e.parentNode.parentNode.children[1].firstElementChild.value
            request = $.ajax({
                type: 'POST',
                async: false,
                url: 'deleteRow.php',
                data: {
                    opcao: opcaoEscolhida,
                    id: codExclusao
                },
            }).fail(function(jqXHR, resp) {
                alert('A requisição gerou um erro: ' + resp);
            });
            alert("Linha excluída, volte e entre novamente na tabela para recarregar!")
        }

        function salvarLinha(e){
            var valores = []
            let codSalva = e.parentNode.parentNode.children[1].firstElementChild.value
            for(let i = 1;i<=(e.parentNode.parentNode.children.length-2);i++){
                valores.push(e.parentNode.parentNode.children[i].firstElementChild.value)
            }
            request = $.ajax({
                type: 'POST',
                async: false,
                url: 'saveRow.php',
                data: {
                    opcao: opcaoEscolhida,
                    id: codSalva,
                    valores: valores
                },
            }).fail(function(jqXHR, resp) {
                alert('A requisição gerou um erro: ' + resp);
            });
            alert("Linha salva, volte e entre novamente na tabela para recarregar!")
        }

        function addLinha(e){
            var valores = []
            let codSalva = e.parentNode.parentNode.children[1].firstElementChild.value
            for(let i = 1;i<=(e.parentNode.parentNode.children.length-2);i++){
                valores.push(e.parentNode.parentNode.children[i].firstElementChild.value)
            }
            console.log(valores)
            request = $.ajax({
                type: 'POST',
                async: false,
                url: 'addRow.php',
                data: {
                    opcao: opcaoEscolhida,
                    id: codSalva,
                    valores: valores
                },
            }).fail(function(jqXHR, resp) {
                alert('A requisição gerou um erro: ' + resp);
            });
            alert("Linha criada, volte e entre novamente na tabela para recarregar!")
        }

        function showRS(e){
            opcaoEscolhida = e.id
            console.log(opcaoEscolhida)
            request = $.ajax({
                type: 'GET',
                async: false,
                url: 'getRS.php',
                data: {
                opcao: opcaoEscolhida,
                },
            }).fail(function(jqXHR, resp) {
                alert('A requisição gerou um erro: ' + resp);
            });
            var jsonResposta = JSON.parse(request.responseText)
            console.log(jsonResposta)
            $("#containerPaginaEscolha").prop("hidden", true)
            $("#containerTabela").prop("hidden", false)
            $("#voltarMenu").prop("hidden", false)
            document.getElementById("cabecalhoTabelaOpcao").innerHTML = ""
            Object.keys(jsonResposta[0]).map((item) => {
                document.getElementById("cabecalhoTabelaOpcao").innerHTML = document.getElementById("cabecalhoTabelaOpcao").innerHTML + "<th>" + item + "</th>"
            })
            let data = ""
            jsonResposta.map((item) => {
                for(let i = 0;i<Object.keys(item).length;i++){
                    data = data + "<td>" + item[Object.keys(item)[i]] + "</td>"
                }
                document.getElementById("corpoTabela").innerHTML = document.getElementById("corpoTabela").innerHTML + "<tr>" + data + "</tr>"
                data = ""
            })
        }
    </script>
</html>