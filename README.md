INSTRUÇÕES PARA RODAR A APLICAÇÃO

FERRAMENTAS UTILIZADAS
    - XAMPP -> conexão com a aplicação web e com o banco de dados
    - MySQL Workbench -> ferramenta de gerência do banco
    - VSCODE -> codificação da aplicação

COMO RODAR
    - O primeiro passo é criar uma conexão com o banco no MySQL workbench seguindo
    as imagens da pasta dbConfig
    - Após ter criado a conexão, deve-se criar o banco de dados utilizando os comandos:
        - CREATE SCHEMA restauranteban2;
        - USE restauranteban2;
    - Já no esquema restauranteban2, deve-se criar as tabelas utilizando o script SQL
    createTables.sql presente na pasta da aplicação SQL
    - Depois de criar as tabelas é necessário inserir alguns dados para poder testar
    o programa com o script SQL insetTableData.sql
    - Com isso o banco está configurado. Seguindo deve-se abrir a ferramenta XAMPP e 
    ligar o Apache e o MySQL
    - Colocar a pasta do programa (WEB-BAN2) na pasta htdocs do xampp
    - Abrir o navegador e escrever localhost na url para conectar na aplicação
    - Pronto! a aplicação já pode ser utilizada

PARA RESOLVER QUALQUER DÚVIDA ENVIE UM EMAIL PARA: murilofreitas13041304@gmail.com

