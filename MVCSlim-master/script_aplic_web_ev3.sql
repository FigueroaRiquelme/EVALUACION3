CREATE TABLE ALUMNO(

rut varchar(50),
carrera varchar(50),
id_usuario int(11),

constraint PK_USUARIO PRIMARY KEY(rut),
constraint FK_ALUM_USUA FOREIGN KEY(id_usuario)
REFERENCES USUARIO(id)

);




CREATE TABLE USUARIO(

id int(11) auto_increment,
nombre varchar(50),
password varchar(50),

constraint PK_ALUMNO PRIMARY KEY(id)

);