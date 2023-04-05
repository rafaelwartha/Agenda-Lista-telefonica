Crie uma DB com o nome "db_agenda" depois crie uma TABLE com o seguinte código: 


CREATE TABLE lista_telefonica (
  id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  nome VARCHAR(50) NOT NULL,
  telefone VARCHAR(20) NOT NULL,
  email VARCHAR(50) NOT NULL
);



Depois adicione os contatos teste com o seguinte código: 

INSERT INTO lista_telefonica (nome, telefone, email) VALUES ('João', '123456789', 'joao@email.com');


