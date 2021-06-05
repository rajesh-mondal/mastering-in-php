DELIMITER $$

CREATE PROCEDURE get_students_by_class_and_section(IN C INT, IN S VARCHAR(1))
BEGIN
	SELECT * FROM students WHERE class=C AND section=S ORDER BY roll;
END $$

DELIMITER ;

/* CALL */
/* CALL get_students_by_class_and_section(7,'B') */ 