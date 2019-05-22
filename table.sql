DROP DATABASE IF EXISTS hlps5;

CREATE DATABASE hlps5;

GRANT ALL PRIVILEGES ON hlps5.* to grader@localhost IDENTIFIED BY 'allowme';

USE hlps5;

create table board (
     number int unsigned not null primary key auto_increment,
     title varchar(150) not null,
     content text not null,
     id varchar(20) not null,
     password varchar(20) not null,
     date datetime not null,
     hit int unsigned not null default 0
     );
create table comment (
     number int unsigned not null primary key auto_increment,
     board_number int unsigned not null,
     id varchar(20) not null,
     content text not null,
     date datetime not null,
     parent_number int unsigned not null default 0
     );
 create table member (
		      id varchar(16) not null,
		      pw varchar(20) not null,
          email varchar(50) not null,
		      permit tinyint(3) unsigned
		      );

          insert into member (id, pw, email, permit)values ('sg04108', '$sjaqjwm39', '$sg04108', 0);
