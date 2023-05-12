INSERT INTO ZooWeeMama.BUILDING(NAME, YEAR)
VALUES ('Headquarters', 2019),
       ('Harambe Memorial', 2016),
       ('Congo',2023);


INSERT INTO ZooWeeMama.DEPARTMENT(ID, name, b_name)
VALUES ('1234567890', 'Executive', 'Headquarters');

INSERT INTO ZooWeeMama.DEPARTMENT(ID, name, b_name, parent_ID)
VALUES ('7777777777', 'GORILLAS', 'Harambe Memorial', '1234567890'),
       ('9999999999', 'Admins', 'Headquarters', '7777777777'),
        ('1234567899','Maintenance','congo','1234567890');


INSERT INTO ZooWeeMama.EMPLOYEE(ID, name, position, start_date, username, password, permission, d_no)
VALUES ('0000000000', 'Harmabe Jr', 'CEO', '2019-11-11', 'TheOneandOnly', 'password', 2, '1234567890'),
       ('1234567890', 'Harambe Sr', 'Administrator', '2019-12-12', 'yeeyee', 'NothingHere', 2, '7777777777');

INSERT INTO ZooWeeMama.EVENT
VALUES ('Harambe Memorial', '2019-12-12', '54', '4', 'Headquarters', '7777777777');


UPDATE DEPARTMENT
SET DEPARTMENT.e_ID = '0000000000'
WHERE DEPARTMENT.ID = '1234567890';

UPDATE DEPARTMENT
SET DEPARTMENT.e_ID = '1234567890'
WHERE parent_ID = '7777777777';

INSERT INTO ZooWeeMama.EXHIBIT(name, biome, b_name) VALUE ('Glorilla Exhibit', 'Jungle', 'Headquarters');
INSERT INTO ZooWeeMama.SPECIES(family, origin, description) VALUE ('Gorilla', 'Africa', 'strong bois. monke' );
INSERT INTO ZooWeeMama.ANIMAL(name, age, count, f_name, e_name) VALUE ('Harambe', 13, 1, 'Gorilla', 'Glorilla Exhibit');

INSERT INTO ZooWeeMama.BUILDING(name, year) VALUES ('Rainbow Road', 2012), ('Cage A', 2012), ('Cage B', 2013), ('Aquarium', 2016);
INSERT INTO ZooWeeMama.EXHIBIT(name, biome, b_name) VALUE ('Aquarium Exhibit', 'Ocean', 'Aquarium');
INSERT INTO ZooWeeMama.SPECIES(family, origin, description) VALUE ('Seahorse', 'Pacific Ocean', 'horses of the sea');

INSERT INTO ZooWeeMama.STORE(name, type, b_name) VALUES ('Gift Shop','Customers','Headquarters'),
('Fish Food', 'Customers', 'Aquarium'),
('Lettuce', 'Customers', 'Cage A');

INSERT INTO ZooWeeMama.EVENT(name, time, cost, capacity, b_name, Dep_ID) VALUE ('Seahorseback Riding', '2017-08-15 19:30:10', 69.99, 50, 'Aquarium', 9999999999);


insert into EVENT values('Lion_Feeding','2023-01-01',999.9,75,'congo','1234567899');

insert into EMPLOYEE values('1111111111','Joe Shmoe','Zoo Cleaner','2023-01-01','JoeShmoe','password',1,'1234567890');

insert into VISITOR values('2222222222','Stefan Magardino',24);

insert into STORE values('gift_shop','gifts','congo');

insert into ITEM values('5555555555',23,1.99,'gift_shop');





