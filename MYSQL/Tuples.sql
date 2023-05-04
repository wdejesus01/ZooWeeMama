

VALUES ('Headquarters',2019);

INSERT INTO ZooWeeMama.DEPARTMENT(ID, name, b_name)
VALUES ('1234567890','Executive','Headquarters');

INSERT INTO ZooWeeMama.EMPLOYEE(ID, name, position, start_date, username, password, permission, d_no)
VALUES ('0000000000','Harmabe Jr','CEO','2019-11-11','TheOneandOnly','password',5,'1234567890');


UPDATE ZooWeeMama.DEPARTMENT
SET DEPARTMENT.e_id='0000000000'
WHERE DEPARTMENT.name = 'Executive';

UPDATE ZooWeeMama.EMPLOYEE
SET  EMPLOYEE.permission=2
WHERE EMPLOYEE.ID='0000000000';


