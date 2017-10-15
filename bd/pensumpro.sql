create database pensumpro;
use pensumpro;

select * from usuario;
create table tipo_usuario(
id_tpus int not null auto_increment primary key,
tipo varchar(250) not null
);
insert into tipo_usuario values('0', 'Administrador');
insert into tipo_usuario values('0', 'Usuario');
insert into tipo_usuario values('0', 'Alumno');

set  @idactual = (select  t1.id_us  from usuarios t1);
select id_us  from usuario where id_us>@idactual order by id_us limit 1;

select * from tipo_usuario where id_tpus <3;

select id_alumno, nombre  from usuarios where not exists(select id_alumno from inscrip where usuarios.id_alumnoa=inscrip.id_alumno);

create table usuario(
id_us int not null auto_increment primary key,
usuario varchar(500) not null,
contra varchar(500) not null,
id_tpus int not null,
foreign key(id_tpus) references tipo_usuario(id_tpus) on delete cascade on update cascade
);
delete from usuario where id_us=5;
select * from usuarios;
create table usuarios(/*alumnos*/
id_alumno int not null auto_increment primary key,
nombre  varchar (300) not null,
apellido varchar (300) not null,
foto varchar (1000) not null,
sexo varchar (50) not null,
edad numeric(3) not null,
numero_tel varchar(12) not null,
email_alum  varchar (500) not null,
id_us int not null,
foreign key(id_us) references usuario(id_us) on delete cascade on update cascade
);
create table usuarios1(/*usuarios*/
id_usuario int not null auto_increment primary key,
nombre  varchar (300) not null,
apellido varchar (300) not null,
foto varchar (1000) not null,
sexo varchar (50) not null,
edad numeric(3) not null,
numero_tel varchar(12) not null,
email_usua  varchar (500) not null,
id_us int not null,
foreign key(id_us) references usuario(id_us) on delete cascade on update cascade
);
create table usuarios2(/*administardor*/
id_admin int not null auto_increment primary key,
nombre  varchar (300) not null,
apellido varchar (300) not null,
foto varchar (1000) not null,
sexo varchar (50) not null,
edad numeric(3) not null,
numero_tel varchar(12) not null,
email_admin  varchar (500) not null,
id_us int not null,
foreign key(id_us) references usuario(id_us) on delete cascade on update cascade
);

create table bitacora_ingresos(
id_bit int not null auto_increment primary key,
id_us int not null,
foreign key(id_us) references usuario(id_us) on delete cascade on update cascade
);

create table carrera(
id_ca int auto_increment not null primary key,
nombre varchar(500) not null
);
select * from carrera;
insert into carrera values (0,'Ingenieria');

create table materia(
id_materia int auto_increment not null primary key,
codigo varchar(7) not null,
nombre varchar(500) not null,
uv int not null,
id_ca int not null,
foreign key(id_ca) references carrera(id_ca) on delete cascade on update cascade
);
select t1.id_materia as id_materia, t1.codigo as codigo, t1.nombre as nombre, t1.uv as uv, t2.nombre as nombre1 from materia t1 inner join carrera t2 on t1.id_ca = t2.id_ca
insert into materia values(0,'ETA','Etica',3,1);
select t1.id_materia, t1.codigo, t1.nombre, t1.uv, t2.nombre from materia t1 inner join carrera t2 on t1.id_ca = t2.id_ca

create table prerequisito(
id_pre int auto_increment not null primary key,
codigo varchar(7) not null,
nombre varchar(500) not null,
id_ca int not null,
foreign key(id_ca) references carrera(id_ca) on delete cascade on update cascade
);
select id_pre from prerequisito where prerequisito.codigo='aa' or prerequisito.nombre='asd';
 
 select * from asignpre;
create table asignpre(
id_aspre int auto_increment not null primary key,
id_materia int not null,
foreign key(id_materia) references materia(id_materia) on delete cascade on update cascade,
id_pre int not null,
foreign key(id_pre) references prerequisito(id_pre) on delete cascade on update cascade
);

select a.id_aspre as id, b.nombre as n1, c.nombre as n2 from asignpre a inner join materia b on a.id_materia = b.id_materia inner join prerequisito c on a.id_pre = c.id_pre
select id_materia from materia where nombre='aaa'

select id_materia, nombre from materia where not exists(select id_materia from asignpre where materia.id_materia=asignpre.id_materia)
insert into asignpre values('0',1,3)
select id_materia, nombre from materia ;

select id_pre, nombre from prerequisito

create table ciclo(
id_ciclo int auto_increment not null primary key,
nombre_c varchar(50)
)

create table inscrip(
id_ins int auto_increment not null primary key,
id_alumno int not null,
foreign key(id_alumno) references usuarios(id_alumno) on delete cascade on update cascade,
id_ca int not null,
foreign key(id_ca) references carrera(id_ca) on delete cascade on update cascade,
id_ciclo int not null,
foreign key(id_ciclo) references ciclo(id_ciclo) on delete cascade on update cascade,	
);
create table asigmate(
id_asigm int auto_increment not null primary key,
id_ins int not null,
foreign key(id_ins) references inscrip(id_ins) on delete cascade on update cascade,
id_materia int not null,
foreign key(id_materia) references materia(id_materia) on delete cascade on update cascade
);
select nombre from usuarios
select * from inscrip


	
select nombre as n  from usuarios where not exists(select id_alumno from inscrip where usuarios.id_alumno=inscrip.id_alumno) limit 1;

select nombre as n  from usuarios where not exists(select id_alumno from inscrip where usuarios.id_alumno=inscrip.id_alumno) limit 1;