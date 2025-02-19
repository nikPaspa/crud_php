CRUD Simples em PHP
Este repositório apresenta um sistema de CRUD (Create, Read, Update, Delete) para gerenciamento de usuários, desenvolvido em PHP com MySQL. Ele oferece funcionalidades de cadastro, listagem, edição e exclusão de registros, utilizando uma estrutura simples para fins de demonstração e aprendizado.

Visão Geral do Projeto
O projeto contém as seguintes páginas e scripts:

config.php: Arquivo de configuração do banco de dados, definindo os parâmetros de conexão (host, usuário, senha e nome da base) config.
crud.php: Página principal que atua como um roteador para as diferentes seções do sistema, incluindo as páginas de listagem, novo cadastro e edição. Também define uma barra de navegação para facilitar o acesso às funcionalidades crud.
novo-usuario.php: Formulário para criação de um novo usuário. Permite inserir nome, e-mail, senha e data de nascimento novo-usuario.
listar-usuario.php: Lista todos os usuários cadastrados no banco de dados, exibindo informações relevantes e opções para editar ou excluir um registro específico listar-usuario.
editar-usuario.php: Formulário para edição das informações de um usuário existente, com base em seu identificador (ID) editar-usuario.
salvar-usuario.php: Script responsável por inserir, atualizar ou excluir registros no banco de dados, de acordo com o parâmetro de ação recebido (cadastrar, editar ou excluir) salvar-usuario.

Pré-Requisitos
Servidor local (XAMPP, WAMP ou similar) ou servidor remoto com suporte a PHP e MySQL.
Banco de dados MySQL disponível para configuração.

Configuração
Clone ou faça o download deste repositório para o seu servidor local ou remoto.

Crie o banco de dados no MySQL conforme especificado em config.php (por padrão, o nome do banco é cadastro) config:
CREATE DATABASE cadastro;
USE cadastro;


Crie a tabela de usuários executando no MySQL:
CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(11) NOT NULL,
    email VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    born_date DATE
);

Ajuste as credenciais de conexão em config.php caso necessário, definindo host, user, pass e base de acordo com o seu ambiente config.

Executando o Projeto
No navegador, acesse o local onde o projeto foi instalado (por exemplo, http://localhost/seu_projeto/crud.php).

Utilize o menu de navegação para:
Novo Usuário: Cadastrar um novo usuário novo-usuario.
Listar Usuários: Visualizar todos os usuários cadastrados, bem como editar ou excluir algum registro listar-usuario.

Tecnologias e Dependências
PHP 7 ou superior
MySQL 5 ou superior
Bootstrap: Utilizado para estilização básica da interface crud.
