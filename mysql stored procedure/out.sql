DELIMITER $$

CREATE PROCEDURE get_mfc_cs(
	IN C INT,
    IN S VARCHAR(1),
    OUT TM INT,
    OUT TF INT 
)
COMMENT "get_mfc_cs = Get Male and Female student count by class and section"
BEGIN
	SELECT COUNT(*) FROM students WHERE class=C AND section=S AND sex= 'M' INTO TM;
    SELECT COUNT(*) FROM students WHERE class=C AND section=S AND sex= 'F' INTO TF;
END $$

DELIMITER ;

/* call */
CALL get_mfc_cs(1,'A',@totalMale,@totalFemale);
SELECT @totalMale, @totalFemale;