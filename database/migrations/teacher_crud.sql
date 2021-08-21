create database teacher_Crud;
use teacher_Crud;

drop table if exists gender cascade;
create table gender
(
    id   int,
    name varchar(50) not null unique check ( name <> '' )
);
alter table gender
    add primary key (id);


drop table if exists contracttype cascade;
create table contracttype
(
    id   int,
    name varchar(30) not null
);
alter table contracttype
    add primary key (id);



drop table if exists teacher cascade;
create table teacher
(
    id           int primary key,
    fullname     varchar(50) not null check ( fullname <> '' ),
    lastname     varchar(50) not null check ( lastname <> ''),
    photo        varchar(300) default 'https://image.flaticon.com/icons/png/512/147/147144.png',
    gender       int         not null,
    birthdate    date        not null,
    contracttype int         not null
);

alter table teacher
    add constraint fk_ctt foreign key (contracttype)
        references contracttype (id) on update cascade;
alter table teacher
    add constraint fk_gen foreign key (gender)
        references gender (id) on update cascade;

drop table if exists user;
create table user
(
    id        serial,
    email     varchar(255) unique not null,
    fullname  varchar(50)         not null check ( fullname <> '' ),
    lastname  varchar(50)         not null check ( lastname <> ''),
    photo     varchar(300) default 'https://image.flaticon.com/icons/png/512/147/147144.png',
    gender    int                 not null,
    birthdate date                not null,
    is_staff  boolean      default false,
    password  varchar(255)        not null check ( password <> '')
);

insert into contracttype (id, name)
values (1, 'Planta');
insert into contracttype (id, name)
values (2, 'Ocasional');
insert into contracttype (id, name)
values (3, 'Cátedra');
insert into contracttype (id, name)
values (4, 'Asistente');

insert into gender (id, name)
values (3, 'Masculino')
     , (2, 'Femenino')
     , (1, 'Otro');

insert into teacher (id, fullname, lastname, gender, birthdate, contracttype)
values (1, 'Fabian', 'Vera', 3, '1995-11-25', 1),
       (2, 'Wilmer', 'Rodriguez', 3, '1995-11-25', 1),
       (3, 'Juanita', 'Meneses', 2, '1995-11-25', 1),
       (4, 'Juanito', 'Diaz', 3, '1995-11-25', 3),
       (5, 'Timolion', 'Carrillo', 3, '1995-11-25', 2),
       (6, 'Juanita', 'Esperanza', 2, '1995-11-25', 2);

insert into user (id, email, fullname, lastname, gender, birthdate, is_staff, password)
    value (1, 'pepito@gmail.com', 'Pepito', 'Perez', 3, '2000-11-3', false, 'pepitoperez'),
    (2, 'juanitodiaz@gmail.com', 'Pepito', 'Perez', 3, '2000-11-3', false, 'pepitoperez'),
    (3, 'amdin@gmail.com', 'Pepito', 'Perez', 3, '2000-11-3', true, 'admin');

select * from teacher;