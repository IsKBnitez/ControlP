create database pensumpro;
use pensumpro;


create table tipo_usuario(
id_tpus int not null auto_increment primary key,
tipo varchar(250) not null
);
insert into tipo_usuario values('0', 'Administrador');
insert into tipo_usuario values('0', 'Usuario');
select * from tipo_usuario where id_tpus <3;

create table usuario(
id_us int not null auto_increment primary key,
usuario varchar(500) not null,
contra varchar(500) not null,
id_tpus int not null,
foreign key(id_tpus) references tipo_usuario(id_tpus) on delete cascade on update cascade
);
insert into usuario values('0','slayer0963','123',1);
select count(id_us) from usuario;
select t1.id_us, t1.usuario, t1.contra, t2.tipo from usuario t1 inner join tipo_usuario t2 on t1.id_tpus = t2.id_tpus where t1.usuario like '%%';
create table bitacora_ingresos(
id_bit int not null auto_increment primary key,
id_us int not null,
foreign key(id_us) references usuario(id_us) on delete cascade on update cascade
);