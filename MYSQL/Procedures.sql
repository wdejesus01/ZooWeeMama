USE ZooWeeMama;
DROP PROCEDURE IF EXISTS Get_EVENTS;
DELIMITER //
CREATE PROCEDURE Get_EVENTS(IN dept char(10))
BEGIN
    with recursive cte (ID, name, b_name, parent_ID) AS (SELECT ID,
                                                                name,
                                                                b_name,
                                                                parent_id
                                                         from ZooWeeMama.DEPARTMENT
                                                         where ID = dept


                                                         UNION ALL

                                                         SELECT D.ID,
                                                                D.name,
                                                                D.b_name,
                                                                D.Parent_ID
                                                         FROM ZooWeeMama.DEPARTMENT AS D
                                                                  JOIN cte on D.Parent_ID = cte.ID)
    SELECT E.name, TIME, E.COST, E.CAPACITY, E.B_NAME, E.DEP_ID
    FROM EVENT AS E
             INNER JOIN cte ON E.Dep_ID = cte.ID;


END //

DELIMITER ;


DELIMITER //
DROP PROCEDURE IF EXISTS Get_EMPLOYEES;
CREATE PROCEDURE Get_EMPLOYEES(IN dept char(10))
BEGIN
    with recursive cte (ID, name, b_name, parent_ID) AS (SELECT ID,
                                                                name,
                                                                b_name,
                                                                parent_id
                                                         from ZooWeeMama.DEPARTMENT
                                                         where ID = dept

                                                        UNION ALL

                                                         SELECT D.ID,
                                                                D.name,
                                                                D.b_name,
                                                                D.Parent_ID
                                                         FROM ZooWeeMama.DEPARTMENT AS D
                                                                  JOIN cte on D.Parent_ID = cte.ID
                                                         and D.e_ID != cte.ID
                                                         )
    SELECT E.ID, E.name, E.position, E.start_date, E.username, E.permission, E.d_no
    FROM EMPLOYEE AS E
             INNER JOIN cte ON E.d_no = cte.ID;
END //
DELIMITER ;


call Get_EVENTS('1234567890');
call Get_EMPLOYEES(1234567890);
