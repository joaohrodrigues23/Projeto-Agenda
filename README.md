# Agenda pessoal 

Projeto de agenda pessoal, que permite cadastrar, listar, editar e apagar contatos.

## 📋 Pré-requisitos

Sistema de gerenciamento de banco de dados SQL, ou MYSQL. Servidores, como xampp e wampp.

## 🔧 Instalação

Colocar os arquivos em uma pasta no diretório host do seu servidor.

Exemplo:
```
diretório XAMPP: pasta htdocs, no diretório onde o xampp foi instalado;
WAMP: pasta www, no diretório onde o wamp foi instalado.
```
Importar o arquivo .sql da pasta banco_de_dados para o seu Sistema de gerenciamento de banco de dados, o arquivo ja contém script para criar o banco de dados e 
sua respectiva tabela.

A tabela ja terá um contato preenchido para ser visualizado como exemplo.


## ⚙️ Utilização

Para utilizar deve acessá-los pelo host do servidor local

```
No caso do xampp ou wamp, localhost/pasta onde os arquivos foram colocados.
```
O projeto será então aberto no index da página, a página inicial, onde constará os dados dos contatos cadastrados, opção de editar, apagar, páginas, 
menu: "adicionar contato" e logo com link para o index. 

Já existe um contato cadastrado para ser usado como exemplo.

### Adicionar contato

Ao clicar na opção superior de adicionar contato o usuário será redirecionado a página adicionar. Nessa página o usuário poderá registrar os dados 
do contato que deseja adicionar, sendo nome, ddd e telefone obrigatórios. 
Selecionando o botão cadastrar o contato será salvo no banco de dados e o usuário sera redirecionado ao index, onde ficarão visiveis os contatos adicionados.

### Editar

A opção editar serve para caso houver algum dado incorreto, ou atualização de dados de algum contato. Ao clicar nessa opção disponivel na lista de contatos, 
em baixo de cada contato, o usuário sera redirecionado a pagina onde poderão ser editados os dados do contato selecionado, que serão atualizados no banco de dados.

### Apagar

A opção apagar funciona de para excluir todos os dados do banco de dados para o contato onde foi selecionado, e remove-lo da lista de contatos.

### Páginas

Conforme o usuário for adicionando vários contatos, estes ficarão divididos por páginas. Ficarão visiveis no máximo 4 por página, podendo então, 
mudar de páginas selecionando seu número, ou pulando para a última ou primeira página. As páginas estão visivais abaixo da lista de contatos.

### Lista de contatos

Conforme descrito acima, a lista de contatos exibirá os contatos salvos pelo usuário ao banco de dados, cuja a página contem links para editar
e apagar contatos, páginas, e link de redirecionamento para a página de cadastro de contatos. 

A página de lista de contatos pode ser acessada tanto pelo menu "Lista de contatos", quanto ao clicar na logo de agenda na parte superior direita.

## 🛠️ Construído com

Desenvolvido através do Visual Studio Code, utilizando: mysql Workbench, PHP My Admin e XAMPP.

### Versões
PHP My Admin SQL : 5.0.2
Servidor Maria DB : 10.4.11
Versão PHP : 7.4.6
