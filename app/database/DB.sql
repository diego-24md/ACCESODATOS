CREATE DATABASE veterinaria;

use veterinaria;


create table propietarios
(
  idpropietario int auto_increment primary key,
  apellidos varchar(40) not null,
  nombres varchar(40) not null
)engine = innodb;

create table mascotas
(
  idmascota int auto_increment primary key,
  idpropietario int not null,
  tipo enum ('Perro', 'Gato') not null,
  nombre varchar(40) not null,
  color varchar(40) not null,
  genero enum ('hembra','macho'),
  vive enum('si', 'no') not null default 'si',
  constraint fk_idpropietario foreign key (idpropietario) references propietarios (idpropietario)
  )engine = innodb;

insert into propietarios (apellidos, nombres) VALUES
('Perez','Hugo'),
('Castilla', 'Teresa');

insert into mascotas (idpropietario, tipo, nombre, color, genero) VALUES
(1, 'Perro', 'Firulais', 'marron', 'macho'),
(1, 'Perro', 'Apolo', 'marron', 'macho'),
(2, 'Gato', 'Firulais', 'blanco', 'hembra'),
(1, 'Perro', 'Negra', 'negro', 'hembra');

update mascotas SET
  idpropietario = 1,
  tipo = 'Gato',
  nombre = 'Matador',
  color = 'chocolate',
  genero = 'macho'
where idmascota = 2;

select * from mascotas;

SELECT
  MA.idmascota,
  MA.nombre,
  MA.tipo,
  MA.color,
  MA.genero,
  CONCAT(PR.apellidos, ' ', PR.nombres) 'propietario'
  FROM mascotas MA
  INNER JOIN propietarios PR ON ma.idpropietario = idpropietario
  ORDER BY MA.nombre;

DELETE FROM mascotas WHERE idmascota = 6; --Para eliminar mascotas duplicadas (solo cambiar el ID)