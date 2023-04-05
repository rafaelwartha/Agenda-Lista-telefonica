Crie uma DB com o nome "db_agenda" depois crie uma TABLE com o seguinte código: 


CREATE TABLE lista_telefonica (
  id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  nome VARCHAR(50) NOT NULL,
  telefone VARCHAR(20) NOT NULL,
  email VARCHAR(50) NOT NULL
);



Depois adicione os contatos teste com o seguinte código: 

INSERT INTO lista_telefonica (nome, telefone, email) VALUES ('João', '123456789', 'joao@email.com');
INSERT INTO lista_telefonica (nome, telefone, email) VALUES ('Maria', '987654321', 'maria@email.com');
INSERT INTO lista_telefonica (nome, telefone, email) VALUES ('Pedro', '456123789', 'pedro@email.com');
INSERT INTO lista_telefonica (nome, telefone, email) VALUES ('Ana', '789456123', 'ana@email.com');
INSERT INTO lista_telefonica (nome, telefone, email) VALUES ('Lucas', '321654987', 'lucas@email.com');



Lembre-se de editar o código da conexão do banco de dados com seu código ex:

$servername = "localhost";
$username = "root"; (esse e o usuario padrão do XAMPP)
$password = "";  (a senha padrão e assim mesmo sem senha)   
$dbname = "db_agenda"; (lembre-se de criar o banco de dados com o nome db_agenda)



