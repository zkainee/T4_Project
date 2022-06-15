USE MASTER
GO

DROP DATABASE IF EXISTS [CosmoAcademy]
GO

CREATE DATABASE CosmoAcademy;
GO

USE CosmoAcademy;

CREATE TABLE [Login]
(
			[Username]		varchar(30)		NOT NULL
	,		[Password]		varchar(255)	NOT NULL
);

CREATE TABLE [LoginEditor]
(
			[Username]		varchar(30)		NOT NULL
	,		[Password]		varchar(255)	NOT NULL
);

CREATE TABLE [Overview]
(
			[EventID]		int IDENTITY(1,1)	NOT NULL
		,	[EventName]		varchar(40)			NOT NULL
		,	[EventStart]	smalldatetime		NOT NULL
		,	[EventEnd]		smalldatetime		NOT NULL
		,	[EventLocation]	varchar(30)			NOT NULL
);

CREATE TABLE [Edit]
(
			[EditName]		varchar(40)		NOT NULL
		,	[EditStart]		smalldatetime	NOT NULL
		,	[EditEnd]		smalldatetime	NOT NULL
		,	[EditLocation]	varchar(30)		NOT NULL
);

SELECT * FROM [Login]
SELECT * FROM [Overview]
SELECT * FROM [Edit]

INSERT INTO [Login] ([Username], [Password])
VALUES
('Admin','Admin'),
('340461', 'ICT');

DROP TABLE [Overview]

INSERT INTO [LoginEditor] ([Username], [Password])
VALUES
('Kaine', 'Password');

INSERT INTO [Overview] ([EventName], [EventStart], [EventEnd], [EventLocation])
VALUES
('Happy Hour', '2022-06-13 20:00:00', '2022-06-14 02:00:00', 'Nijmegen'),
('Toffler Techno Festival', '2022-07-10 12:00:00', '2022-07-11 03:00:00', 'Rotterdam'),
('Five Finger Death Punch', '2022-08-1 14:00:00', '2022-08-02 02:00:00', 'Breda'),
('Hans Zimmer', '2022-08-21 16:00:00', '2022-08-21 23:59:00', 'Amsterdam'),
('Joep Beving', '2022-09-30 15:00:00', '2022-09-30 22:30:00', 'Zaandam');
