USE PraktijkOpdracht

CREATE DATABASE Kuijpers
GO

USE Kuijpers
GO

CREATE TABLE Medewerkers
(
		naam			VARCHAR(40)		NOT NULL
	,	telefoonNummer	VARCHAR(20)		NOT NULL
	,	emailAdres		VARCHAR(355)	NOT NULL
	,	werkzaamHeden	VARCHAR(100)	NOT NULL
);
CREATE TABLE [Login]
(
	[Username]	VARCHAR(100)	NOT NULL,
	[Password]	VARCHAR(200)	NOT NULL
);

INSERT INTO Medewerkers
VALUES
	('Eliene Holla', '06-44662246' , 'ElieneHolla@outlook.com', 'gebouwgebonden installatie'),
	('Philip Boekholt', '06-82528319' , 'PhilipBoekholt@outlook.com', 'procestechniek'),
	('Selami Meulenbroeks', '06-56109212' , 'SelamiMeulenbroeks@gmail.com', 'beveiliging'),
	('Semira Trines', '06-89084537' , 'SemiraTrines@yahoo.com', 'gebouwgebonden installatie, procestechniek'),
	('Christian Kroos', '06-28868799' , 'ChristianKroos@hotmail.nl', 'beveiliging'),
	('Doede Smeulders', '06-86217996' , 'DoedeSmeulders@gmail.com', 'Procestechniek, beveiliging'),
	('Siebren Breukers', '06-94192111' , 'SiebrenBreukers@yahoo.com', 'gebouwgebonden installatie'),
	('Jouke Walhout', '06-93561432', 'JoukeWalhout@gmail.com', 'beveiliging'),
	('Hossein Waterman', '06-44303878', 'HosseinWaterman@outlook.com', 'procestechniek'),
	('Lilia van Antwerpen', '06-44303878', 'HosseinWaterman@outlook.com', 'procestechniek'),
	('Allal Poelsma', '06-38560634', 'AllalPoelsma@ziggo.nl', 'gebouwgebonden installatie, Gebouw automatisering'),
	('Bouke Haalboom', '06-87883016', 'BoukeHaalboom@yahoo.com', 'Gebouw automatisering'),
	('Dio Bramer', '06-79615938', 'DioBramer@ziggo.nl', 'Beveiliging, Gebouw automatisering'),
	('Linda Butter', '06-28317272', 'LindaButter@ziggo.nl', 'Gebouw automatisering'),
	('Jorian de Bot', '06-88546197', 'JoriandeBot@ziggo.nl', 'gebouwgebonden installatie, procestechniek');
	
INSERT INTO [Login]
VALUES
	('Admin', 'P@ssword'),
	('Kaine', 'Welkom2022'),
	('Holla46', 'Welkom2022'),
	('Boekholt19', 'Welkom2022');