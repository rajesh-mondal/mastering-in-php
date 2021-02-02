DELIMITER $$

CREATE PROCEDURE get_students_by_class(IN C INT)
BEGIN
	SELECT * FROM students WHERE class=C ORDER BY section, roll;
END $$
DELIMITER ;

/* CALL */
CALL get_students_by_class(2)