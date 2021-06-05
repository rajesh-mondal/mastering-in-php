CREATE PROCEDURE get_all_students() 
BEGIN
	SELECT * FROM students ORDER BY class, section, roll;
END

/* for calling stored procedure*/
CALL get_all_students()