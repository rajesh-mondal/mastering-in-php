/*Incrementing table column value using variable in update statement*/
SET @roll = 0;
UPDATE students SET roll=@roll:=@roll+1 WHERE class=1 AND section='A';