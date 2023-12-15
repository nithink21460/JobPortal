SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone="+00:00";

CREATE TABLE candidates
(
    name varchar(10) NOT NULL,
    apply varchar(10) NOT NULL,
    qual varchar(10) NOT NULL,
    year varchar(10) NOT NULL,
    id int(11) NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO candidates(name,apply,qual,year,id) VALUES
('Raina','Full Stack Web Dev','M.S','2022',1),
('Dhoni','Java Dev','M.Tech','2022',2);

CREATE TABLE jobs
(
    id int(10) NOT NULL,
    cname varchar(50) NOT NULL,
    position varchar(50) NOT NULL,
    skills varchar(50) NOT NULL,
    CTC varchar(50) NOT NULL,
    Jdesc varchar(50) NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO jobs(id,cname,position,skills,CTC,Jdesc) VALUES
(1,'IBM','Java Dev','Java,MySQL,DBMS,Data Structures','8LPA','Good Programming Skills'),
(2,'MICROSOFT','Full Stack','HTML,CSS,Javascript,React JS','12LPA','Good Programming Skills'),
(3,'GOOGLE','Software Developer','Java,OOPS,Data Structures','10LPA','Good Programming Skills'),
(4,'INFOSYS','PHP Dev','HTML,CSS,Javascript,PHP','6LPA','Good Programming Skills');

CREATE TABLE user
(
    id int(10) NOT NULL,
    email varchar(50) NOT NULL,
    name varchar(50) NOT NULL,
    number varchar(50) NOT NULL,
    password varchar(50) NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO user(id,email,name,number,password) VALUES
(1,'raina123@gmail.com','Raina','9780045632','1234'),
(2,'dhoni123@gmail.com','Dhoni','9780145632','5678'),
(3,'jadeja123@gmail.com','Jadeja','9780245632','4321'),
(4,'surya123@gmail.com','Surya','9780345632','8765');

ALTER TABLE candidates
    ADD PRIMARY KEY(id);

ALTER TABLE jobs
    ADD PRIMARY KEY(id);

ALTER TABLE user
    ADD PRIMARY KEY(id);

ALTER TABLE candidates
    MODIFY id int(11) AUTO_INCREMENT,AUTO_INCREMENT=1;

ALTER TABLE jobs
    MODIFY id int(10) AUTO_INCREMENT,AUTO_INCREMENT=1;


ALTER TABLE user
    MODIFY id int(10) AUTO_INCREMENT,AUTO_INCREMENT=1;
COMMIT;

