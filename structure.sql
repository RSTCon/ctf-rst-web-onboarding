
### second_order_sqli_exista
### RST{f415d1ee20062ff522e55c44dce38134a18da2bf4bbbbceacadd0cbdedaf7cfe}

CREATE TABLE users(id INT NOT NULL AUTO_INCREMENT PRIMARY KEY, username VARCHAR(50), password VARCHAR(50), country VARCHAR(300));
CREATE TABLE flags(id INT NOT NULL AUTO_INCREMENT PRIMARY KEY, flag VARCHAR(500));
CREATE TABLE countries(id INT NOT NULL AUTO_INCREMENT PRIMARY KEY, shortname VARCHAR(10), longname VARCHAR(100));

INSERT INTO flags(flag) VALUES("RST{f415d1ee20062ff522e55c44dce38134a18da2bf4bbbbceacadd0cbdedaf7cfe}");
INSERT INTO countries(shortname, longname) VALUES("RO", "Romania");
INSERT INTO countries(shortname, longname) VALUES("EN", "Statele Unite");
