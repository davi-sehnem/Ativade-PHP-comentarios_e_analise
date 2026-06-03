# Sistema Simples de Login e ligação com banco de dados

## Nome do Projeto

Login-PHP

## Objetivo da Aplicação

Praticar os fundamentos do desenvolvimento back-end (PHP), persistência de dados (MySQL) e controle de sessões. Para isso, será desenvolvida uma aplicação web simples que engloba o fluxo completo de usuários: cadastro, login e listagem.

## Tecnologias utilizadas

HTML: utilizado para a criação das páginas.
PHP: processa a lógica e monta a página no servidor.
SQL: armazena, busca e organiza os dados.
XAMPP: cria o servidor local para a conexão com o banco de dados.

## Estrutura básica dos arquivos

```text
ATIVIDADE_TESTE_UM/
├── infra/
│   ├── db/
│   │   ├── connect.php    <-- configura a conexão com banco de dados
│   │   └── script.sql     <-- script para criação da tabela do banco
│   └── redes/
├── public/
│   ├── component/
│   │   ├── table.php      <-- os elementos que compõe a tabela
│   │   └── navbar.php     <-- a barra de navegação para ser integrada nas páginas
│   ├── home.php           <-- página home onde mostra os usuários cadastrados e pode-se adicionar usuários
│   └── logout.php         <-- para encerrar a sessão do usuário
├── style/
│   └── style.css          <-- para personalização
├── index.php              <-- página do login
└── README.md              <-- documento .md para explicar o projeto elaborado
```


## Explicação geral sobre o funcionamento do código

O código funciona com o php sendo a base junto com banco de dados. O XAMPP cria um servidor local e permite testar o site localmente. 

## Principais aprendizados obtidos durante a análise.