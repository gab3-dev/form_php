create table user (
	id int not null auto_increment primary key,
	name varchar(50) not null,
	lastname varchar(50) not null,
	email varchar(50) not null unique key,
	cpf varchar(14) not null unique key,
	gender varchar(10) not null,
	user varchar(20) not null unique key,
	password varchar(20) not null
);
