--Consulta para Eliminar las tablas.
Drop table Animes;
Drop table Catalogo;

--Consultas para sacar solo el día, Fecha o Año de una tabla.
select extract(day from FechaEstreno) from Animes;
select extract(month from FechaEstreno) from Animes;
select extract(year from FechaEstreno) from Animes;
SELECT extract(year FROM now());
SELECT extract(year FROM current_date);
/*
Invierno.-Enero-Marzo
Primavera.-Abril-Junio
Verano.-Julio-Septiembre
Otoño.-Octubre-Diciembre
*/
select * from Animes where FechaEstreno between '2020/01/01' and '2020/03/31';
select * from Animes where FechaEstreno between '2020/04/01' and '2020/06/30';
select * from Animes where FechaEstreno between '2020/07/01' and '2020/09/30';
select * from Animes where FechaEstreno between '2020/10/01' and '2020/12/31';

SELECT Nombre,Imagen,TipoVisto FROM Animes WHERE FechaEstreno BETWEEN '1994-03-04' AND '2020-04-02';

SELECT Nombre,Imagen,TipoVisto FROM Animes WHERE Nombre ='';
SELECT Nombre,Imagen,TipoVisto FROM Animes WHERE Nombre ILIKE '%1%';


SELECT * FROM Animes WHERE Nombre ILIKE 'A%';

SELECT * FROM Animes WHERE Nombre ILIKE '0%' OR Nombre ILIKE '1%' OR Nombre ILIKE '2%' OR Nombre ILIKE '3%' OR Nombre ILIKE '4%' OR Nombre ILIKE '5%' OR Nombre ILIKE '6%' OR Nombre ILIKE '7%' OR Nombre ILIKE '8%' OR Nombre ILIKE '9%';




--Creación de tabla pricipal.
CREATE TABLE Animes
(
	Complemento varchar(30) DEFAULT '',
	Nombre varchar(100) NOT NULL,
	TipoAnime varchar(15) NOT NULL DEFAULT 'Anime',
	Capitulos int NOT NULL DEFAULT 12,
	Estado varchar(15) NOT NULL DEFAULT 'Finalizado',
	Imagen varchar(100) NOT NULL,
	TipoVisto varchar(10) NOT NULL,
	CapitulosOVA int NOT NULL DEFAULT 0,
	CapitulosONA int NOT NULL DEFAULT 0,
	CapitulosEspeciales int NOT NULL DEFAULT 0,
	CapitulosOmakes int NOT NULL DEFAULT 0,
	Peliculas int NOT NULL DEFAULT 0,
	Descripcion Varchar(200) NOT NULL DEFAULT '',
	FechaEstreno date NOT NULL,	
	Primary key (Complemento,Nombre)
);
--Registros con la Letra A:

--Registros con la Letra B:
--Registros con la Letra C:
--Registros con la Letra D:
--Registros con la Letra E:
INSERT INTO Animes VALUES('','Egao no Daika',Default,Default,Default,'Egao no Daika.jpg','Verde',Default,Default,Default,Default,Default,Default,'04/01/2019');
INSERT INTO Animes VALUES('','Elfen Lied',Default,13,Default,'Elfen Lied.jpg','Naranja',1,Default,Default,Default,Default,Default,'25/07/2004');
INSERT INTO Animes VALUES('','Enen no Shouboutai',Default,24,Default,'Enen no Shouboutai.jpg','Naranja',Default,Default,Default,Default,Default,Default,'05/07/2019');
INSERT INTO Animes VALUES('','Eromanga-Sensei',Default,Default,Default,'Eromanga-Sensei.jpg','Naranja',Default,Default,Default,Default,Default,Default,'08/04/2017');
INSERT INTO Animes VALUES('','Etotama',Default,Default,Default,'Etotama.jpg','Verde',Default,Default,6,Default,Default,Default,'09/04/2015');
INSERT INTO Animes VALUES('','Eyeshield 21',Default,Default,Default,'Eyeshield 21.jpg','Azul',Default,Default,Default,Default,Default,Default,'06/04/2005');
--Registros con la Letra F:
--Registros con la Letra G:
--Registros con la Letra H:
--Registros con la Letra I:
--Registros con la Letra J:
--Registros con la Letra K:
--Registros con la Letra L:
--Registros con la Letra M:
--Registros con la Letra N:
--Registros con la Letra O:
--Registros con la Letra P:
--Registros con la Letra Q:
--Registros con la Letra R:
--Registros con la Letra S:
--Registros con la Letra T:
--Registros con la Letra U:
--Registros con la Letra V:
--Registros con la Letra W:
--Registros con la Letra X:
--Registros con la Letra Y:
--Registros con la Letra Z:
--Registros con la Letra 0-9:
INSERT INTO Animes VALUES('','11 eyes',Default,Default,Default,'11 eyes.jpg','Verde',1,Default,Default,Default,Default,Default,'06/10/2009');
INSERT INTO Animes VALUES('','91 days',Default,Default,Default,'91 days.jpg','Verde',Default,Default,Default,Default,Default,Default,'09/07/2016');






select * from Animes Order by FechaEstreno desc limit 10;
SELECT Nombre,Imagen FROM Animes WHERE TipoVisto='Verde';


--Tabla para visualizar que contenido va en los campos de TipoAnime, Estado y TipoVisto.
CREATE TABLE Catalogo
(
	TipoAnime varchar(50) NOT NULL,
	Estado varchar(50) NOT NULL,
	TipoVisto varchar(50) NOT NULL
);
INSERT INTO Catalogo VALUES ('Anime,OVA,ONA,Especial,Spin-Off,Pelicula','Finalizado,En Emisión','Verde,Azul,Naranja,Sin Color/Negro');
SELECT * FROM Catalogo;












