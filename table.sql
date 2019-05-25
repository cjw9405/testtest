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
	vid INTEGER NOT NULL,
	speed REAL,
  enginecapacity VARCHAR(10),
  weight REAL,
  color VARCHAR(20),
  PRIMARY KEY (vid),
  FOREIGN KEY (vid) REFERENCES Vehicle (vid) ON DELETE CASCADE
);

CREATE TABLE Tank(
	vid INTEGER NOT NULL,
	speed REAL,
  shell REAL,
  aromor REAL,
  weight REAL,
  PRIMARY KEY (vid),
  FOREIGN KEY (vid) REFERENCES Vehicle (vid) ON DELETE CASCADE
);
CREATE TABLE Car(
	vid  INTEGER NOT NULL,
	fuel VARCHAR(20),
  color VARCHAR(20),
  speed REAL,
  bodytype VARCHAR(20),
  PRIMARY KEY (vid),
  FOREIGN KEY (vid) REFERENCES Vehicle (vid) ON DELETE CASCADE
);
CREATE TABLE People (
	pid INTEGER NOT NULL,
  password INTEGER,
  email VARCHAR(256),
  isManager  BOOLEAN,
  telephoneNumber INTEGER,
  PRIMARY KEY (pid)
);
CREATE TABLE Customer (
	pid INTEGER NOT NULL,
  ranking VARCHAR(32),
  address VARCHAR(32),
  fax  REAL,
  PRIMARY KEY (pid),
  FOREIGN KEY (pid) REFERENCES People(pid) ON DELETE CASCADE
);
CREATE TABLE Discount (
  ranking VARCHAR(32),
  rate    NUMBER(8,2)
);

CREATE TABLE Admin (
	pid INTEGER NOT NULL,
  click INTEGER,
  PRIMARY KEY (pid),
  FOREIGN KEY (pid) REFERENCES People(pid) ON DELETE CASCADE
);
CREATE TABLE Rent (
  vid INTEGER NOT NULL,
	pid INTEGER NOT NULL,
  did INTEGER NOT NULL,
  PRIMARY KEY (vid,pid,did),
  FOREIGN KEY (pid) REFERENCES People(pid) ON DELETE CASCADE,
  FOREIGN KEY (vid) REFERENCES Vehicle (vid) ON DELETE CASCADE
  FOREIGN KEY (did) REFERENCES Duration (did) ON DELETE CASCADE

);
CREATE TABLE Duration (
  did INTEGER NOT NULL,
  datefrom INTEGER,
  dateto INTEGER,
  PRIMARY KEY (did)
);
