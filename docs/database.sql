
DROP TABLE IF EXISTS categoria;

CREATE TABLE categoria (
    id INT(10) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nome varchar(200) NOT NULL,
    created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE = InnoDB;

INSERT INTO categoria (nome) values ('Saúde');

DROP TABLE IF EXISTS debito;

CREATE TABLE debito (
    id INT(11) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    titulo varchar(200) NOT NULL,
    valor FLOAT NOT NULL,
    recorrente BOOLEAN,
    obs VARCHAR(200),
    instituicao VARCHAR(200),
    prioridade INT(1),
    status BOOLEAN,
    vencimento DATETIME,
    categoria_id INT(10) UNSIGNED,
    user_id BIGINT(20) UNSIGNED,
    created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    CONSTRAINT `fk_categoria_debito` FOREIGN KEY (categoria_id) REFERENCES categoria(id) ON DELETE CASCADE,
    CONSTRAINT `fk_users_debito` FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE
) ENGINE = InnoDB;


SHOW ENGINE INNODB STATUS;