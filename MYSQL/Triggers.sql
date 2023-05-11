use ZooWeeMama;
DROP TRIGGER IF EXISTS before_Delete_Employee;
CREATE TRIGGER before_Delete_Employee
    BEFORE DELETE ON EMPLOYEE
    FOR EACH ROW
    BEGIN
    IF OLD.ID IN ( SELECT e_ID
                       FROM DEPARTMENT
                       INNER JOIN EMPLOYEE E on DEPARTMENT.e_ID = E.ID)
    THEN
UPDATE DEPARTMENT
SET e_ID = NULL WHERE OLD.ID= DEPARTMENT.e_ID;
    END IF;
    END;





