create database mysql_php_01;

use mysql_php_01;

create table Pessoa(
	id_pessoa int not null auto_increment,
    nm_pessoa varchar(100),
    qt_idade int not null,
    sg_sexo char(1),
    constraint pk_pessoa primary key (id_pessoa),
    constraint ck_idade check(qt_idade > 0),
    constraint ck_sexo check(sg_sexo in ('M','F'))
);

/*
insert into Pessoa (nm_pessoa, qt_idade, sg_sexo)
	values ("Ivan Guimarães", 21, "M"),
		   ("Evelyn Rodriges", 25, "F");

truncate table Pessoa;
select * from Pessoa;
*/