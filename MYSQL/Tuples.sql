INSERT INTO ZooWeeMama.BUILDING(NAME, YEAR)
VALUES ('Headquarters', 2019),
       ('Harambe Memorial', 2016);


INSERT INTO ZooWeeMama.DEPARTMENT(ID, name, b_name)
VALUES ('1234567890', 'Executive', 'Headquarters');

INSERT INTO ZooWeeMama.DEPARTMENT(ID, name, b_name, parent_ID)
VALUES ('7777777777', 'GORILLAS', 'Harambe Memorial', '1234567890'),
       ('9999999999', 'Admins', 'Headquarters', '7777777777');


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

CALL Get_EMPLOYEES('1234567890');








