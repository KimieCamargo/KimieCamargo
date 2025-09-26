CREATE DATABASE `db_papel_t342` ;
use `db_papel_t342`;

CREATE TABLE `db_papel_t342`.`tb_produtos` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome_prod` VARCHAR(45) NOT NULL,
  `quantEstoq_prod` INT NOT NULL,
  `precoCust_prod` REAL NOT NULL,
  `precoVend_prod` REAL NOT NULL,
  `quantMin_prod` INT NOT NULL,
  PRIMARY KEY (`id`));
  
  CREATE TABLE `db_papel_t342`.`tb_usuario` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome_usua` VARCHAR(45) NOT NULL,
  `login_usua` VARCHAR(45) NOT NULL,
  `senha_usua` VARCHAR(45) NOT NULL,
  `funcao_usua` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`));

SELECT * FROM db_papel_t342.tb_produtos;
INSERT INTO `db_papel_t342`.`tb_produtos` (`nome_prod`, `quantEstoq_prod`, `precoCust_prod`, `precoVend_prod`, `quantMin_prod`) VALUES ('caderno', '20', '15.50', '16.00', '5');
INSERT INTO `db_papel_t342`.`tb_produtos` (`nome_prod`, `quantEstoq_prod`, `precoCust_prod`, `precoVend_prod`, `quantMin_prod`) VALUES ('kit canetas', '10', '9.00', '12.00', '3');
INSERT INTO `db_papel_t342`.`tb_produtos` (`nome_prod`, `quantEstoq_prod`, `precoCust_prod`, `precoVend_prod`, `quantMin_prod`) VALUES ('borracha', '10', '1.50', '2.50', '5');

SELECT * FROM db_papel_t342.tb_usuario;
INSERT INTO `db_papel_t342`.`tb_usuario` (`nome_usua`, `login_usua`, `senha_usua`, `funcao_usua`) VALUES ('emanuel', 'emanuelB', '12356', 'funcionario');
INSERT INTO `db_papel_t342`.`tb_usuario` (`nome_usua`, `login_usua`, `senha_usua`, `funcao_usua`) VALUES ('Henrique', 'henriqueH', '36525', 'gerente');
INSERT INTO `db_papel_t342`.`tb_usuario` (`nome_usua`, `login_usua`, `senha_usua`, `funcao_usua`) VALUES ('Mavih', 'Vitorinha', '16067', 'Diretora');
INSERT INTO `db_papel_t342`.`tb_usuario` (`nome_usua`, `login_usua`, `senha_usua`, `funcao_usua`) VALUES ('yaya', 'KimieC', '13097', 'Coordenadora');


