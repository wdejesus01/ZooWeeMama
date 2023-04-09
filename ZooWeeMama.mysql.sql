CREATE TABLE ORDER(
    ID CHAR(10) PRIMARY KEY,
    ord_date DATE);

CREATE TABLE VISITOR(
    ID CHAR(10) PRIMARY KEY
        name varchar(255)
        age TINYINT);

CREATE TABLE SPECIES(
    family varchar(255) PRIMARY KEY,
    origin varchar(255),
    desc TEXT);

CREATE TABLE ANIMAL(
    name varchar(255) PRIMARY KEY,
    age CHAR(4),
    count TINYINT,
    f_name varchar(255),
    FOREIGN KEY (f_name) REFERENCES SPECIES(family));

CREATE TABLE BUILDING(
    name varchar(255) PRIMARY KEY,
    year char(4));

CREATE TABLE DEPARTMENT(
    ID char(10) PRIMARY KEY,
    name varchar(255),
    b_name varchar(255),
    FOREIGN KEY (b_name) REFERENCES BUILDING(name));

CREATE TABLE EMPLOYEE(
    ID char(10),
    name varchar(255),
    position varchar(255),
    start_date DATE,
    username varchar(255),
    password varchar(255),
    permission varchar(255),
    d_no char(10),
    FOREIGN KEY (d_no) REFERENCES DEPARTMENT(ID));

ALTER TABLE DEPARTMENT(
ADD e_id char(10),
ADD FOREIGN KEY (e_id) REFERENCES EMPLOYEE(ID));

CREATE TABLE EVENTS(
    name varchar(255),
    time DATE,
    cost float,
    capacity int,
    b_name,
    FOREIGN KEY(b_name)REFERENCES BUILDING(name));

CREATE TABLE STORE(
    name varchar(255) PRIMARY KEY,
    type varchar(255)
    b_name varchar(255)
    FOREIGN KEY (b_name) REFERENCES BUILDING(name));

CREATE TABLE ITEMS(
    ID char(10), amount INT, cost DECIMAL(3,2), s_name varchar(255),
    FOREIGN KEY(s_name) REFERENCES STORE(name));

CREATE TABLE WORKS_EXHIBIT(
	ex_name varchar(255),
	e_id char(10),
	PRIMARY KEY(ex_name,e_id),
	FOREIGN KEY (ex_name) REFERENCES EXHIBIT(name), 
	FOREIGN KEY (e_id) REFERENCES EMPLOYEE(ID));

CREATE TABLE WORKS_EVENT(
	ev_name varchar(255), 
	ev_time date,
	e_id char(10),
	PRIMARY KEY(e_id, ev_time,ev_name)
	FOREIGN KEY (ev_name) REFERENCES EVENT(name),
	FOREIGN KEY (ev_time) REFERENCES EVENT(time), 
	FOREIGN KEY (e_id) REFERENCES EMPLOYEE(ID));

CREATE TABLE WORKS_STORE(
       	s_name varchar(255),
	e_id char(10), 
	PRIMARY KEY(e_id,s_name)
	FOREIGN KEY (s_name) REFERENCES STORE(name),
	FOREIGN KEY (e_id) REFERENCES EMPLOYEE(ID));

CREATE TABLE PURCHASES(
	s_name varchar(255),
	i_id char(10),
	ord_id char(10),
	v_id char(10),
	FOREIGN KEY(s_name) REFERENCES STORE(name),
	FOREIGN KEY(i_id)REFERENCES ITEM(ID),
	FOREIGN KEY(ord_id) REFERENCES ORDER(ID),
	FOREIGN KEY(v_id) REFERENCES VISITOR(ID));

CREATE TABLE FOUND_IN(
	s_family varchar(255), ex_name varchar(255),
	PRIMARY KEY(s_family,ex_name),
	FOREIGN KEY (s_family) REFERENCES SPECIES(family);
	FOREIGN KEY (ex_name) REFERENCES EXHIBIT(name));
