Create database StefanoBarberiniDb;

use StefanoBarberiniDb;


Create tablevideos (
	id int primary key auto_increment,
    title varchar(100),
	thumbnail VARCHAR(5000),
	description VARCHAR(5000),
    content VARCHAR(5000),
    url VARCHAR(5000),
    datepost datetime
);

Create table subscribers(
	id int primary key auto_increment,
    email varchar(500),
    datesub datetime
);

Create table Emails (
	id int primary key auto_increment,
    email varchar(500),
    fullname varchar(100),
    mail_subject varchar(500),
    content VARCHAR(5000),
    datemail datetime
);

Create table Coach (
	id int primary key auto_increment,
    email varchar(500),
    fullname varchar(100),
    mail_subject varchar(500),
    content VARCHAR(5000),
    datemail datetime,
    confirmed bool
);

Create table users(
	id int primary key auto_increment,
    username_ varchar(500),
    password_ varchar(500),
    rights int
);
INSERT INTO `stefanobarberinidb`.`coach`
(`id`,
`email`,
`fullname`,
`mail_subject`,
`content`,
`datemail`,
`confirmed`)
VALUES
(<{id: }>,
<{email: }>,
<{fullname: }>,
<{mail_subject: }>,
<{content: }>,
<{datemail: }>,
<{confirmed: }>);

INSERT INTO `stefanobarberinidb`.`subscribers`
(`id`,
`email`,
`datesub`)
VALUES
(<{id: }>,
<{email: }>,
<{datesub: }>);

