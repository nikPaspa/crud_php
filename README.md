# CRUD Simples em PHP

Um projeto de CRUD de usuários utilizando PHP e MySQL
## Índice
* **Visão Geral**
* **Estrutura do Projeto**
* **Descrição dos Arquivos**
* **Pré-Requisitos**
* **Configuração**
* **Execução**
* **Utilize o menu de navegação para**
* **Tecnologias Utilizadas**

## Visão Geral
Este repositório apresenta um sistema de CRUD (Create, Read, Update, Delete) para gerenciamento de usuários, desenvolvido em PHP com MySQL. Ele oferece funcionalidades de cadastro, listagem, edição e exclusão de registros.

## Estrutura do Projeto

```
.
├── config.php         # Arquivo de configuração do banco de dados
├── crud.php           # Página principal que faz a navegação entre as funcionalidades
├── novo-usuario.php   # Formulário para criação de um novo usuário
├── listar-usuario.php # Exibe a lista de usuários cadastrados
├── editar-usuario.php # Formulário para edição de um usuário existente
└── salvar-usuario.php # Responsável por inserir, atualizar ou excluir registros no DB
```

## Descrição dos Arquivos
* **config.php:** Contém as definições de conexão com o banco de dados (host, usuário, senha e nome da base) config.
* **crud.php:** Serve como “hub” de navegação, redirecionando para as demais páginas (listagem, criação de usuário, etc.) e exibindo um menu simples crud.
* **novo-usuario.php:** Formulário para cadastrar um novo usuário, permitindo inserir dados como nome, e-mail, senha e data de nascimento novo-usuario.
* **listar-usuario.php:** Responsável por exibir a lista de usuários cadastrados, mostrando ações de edição e exclusão para cada um listar-usuario.
* **editar-usuario.php:** Permite alterar as informações de um usuário específico, selecionado pela ID editar-usuario.
* **salvar-usuario.php:** Realiza as operações no banco (inserir, atualizar ou excluir) de acordo com o parâmetro de ação enviado pelo formulário salvar-usuario.

## Pré-Requisitos
* **Servidor local (XAMPP, WAMP, etc.) ou servidor remoto com suporte a PHP e MySQL.**
* **Acesso ao MySQL para criação e gerenciamento do banco de dados.**

## Configuração
Clone ou baixe este repositório no seu ambiente de desenvolvimento:
```
git clone https://github.com/nikPaspa/crud_php.git
```

## Crie o banco de dados no MySQL
```
CREATE DATABASE cadastro;
USE cadastro;
```

## Crie a tabela de usuários

```
CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    password VARCHAR(255) NOT NULL,
    born_date DATE
);
```
Ajuste as credenciais de conexão (host, usuário, senha e nome do banco) no arquivo config.php caso necessário config.

## Execução
Inicie o servidor Apache e o MySQL no seu ambiente local (XAMPP, WAMP ou outro).

Acesse, via navegador, o caminho onde o projeto foi colocado. Exemplo:
```
http://localhost/crud_php/crud.php
```

## Utilize o menu de navegação para
* **Novo Usuário:** Cadastrar um novo usuário novo-usuario.
* **Listar Usuários:** Ver todos os usuários cadastrados (opções de editar e excluir) listar-usuario.

## Tecnologias Utilizadas
* **PHP 7 ou superior**
* **MySQL 5 ou superior**
* **Bootstrap (para layout e estilização)**
