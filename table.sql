DROP DATABASE IF EXISTS hlps5;

CREATE DATABASE hlps5;

GRANT ALL PRIVILEGES ON hlps5.* to grader@localhost IDENTIFIED BY 'allowme';

USE hlps5;

CREATE TABLE Vehicle (
  vid INTEGER,
	maker VARCHAR(20),
	type VARCHAR(10),
  isrent  BOOLEAN,
  PRIMARY KEY (vid)
);

CREATE TABLE Motorcycle (
	vid INTEGER,
	speed REAL,
  enginecapacity VARCHAR(10),
  weight REAL,
  color VARCHAR(20),
  PRIMARY KEY (vid)
);

CREATE TABLE Tank(
	vid INTEGER,
	speed REAL,
  shell REAL,
  aromor REAL
  weight REAL,
  PRIMARY KEY (vid)
);
CREATE TABLE Car(
	vid  INTEGER,
	fuel VARCHAR(20),
  color VARCHAR(20),
  speed REAL,
  bodytype VARCHAR(20),
  PRIMARY KEY (vid)
);
CREATE TABLE People (
	pid INTEGER,
  password INTEGER,
  email VARCHAR(256),
  isManager  BOOLEAN,
  telephoneNumber INTEGER,
  PRIMARY KEY (pid)
);
CREATE TABLE Customer (
	pid INTEGER,
  ranking VARCHAR(32),
  address VARCHAR(32),
  fax  REAL,
  PRIMARY KEY (pid)
);
CREATE TABLE Discount (
  ranking VARCHAR(32),
  rate    NUMBER(8,2)
);

CREATE TABLE Admin (
	pid INTEGER,
  click INTEGER,
  PRIMARY KEY (pid)
);
CREATE TABLE Rent (
  vid INTEGER,
	pid INTEGER,
  did INTEGER,
  PRIMARY KEY (vid,pid,did)
);
CREATE TABLE Duration (
  did INTEGER,
  datefrom INTEGER,
  dateto INTEGER,
  PRIMARY KEY (did)
);
