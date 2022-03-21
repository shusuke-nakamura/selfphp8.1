CREATE TABLE product (
    pid INT PRIMARY KEY AUTO_INCREMENT,
    pname VARCHAR(255) NOT NULL,
    price INT,
    category VARCHAR(255) DEFAULT '文房具'
);

INSERT INTO product (pname, price, category) VALUES ('メロン', 500, '食物'); 
INSERT INTO product (pname, price, category) VALUES ('マンゴー', 120, '食物');
INSERT INTO product (pname, price, category) VALUES ('シャープペンシル', 100, '文房具');
INSERT INTO product (pname, price, category) VALUES ('消しゴム', 50, '文房具');  