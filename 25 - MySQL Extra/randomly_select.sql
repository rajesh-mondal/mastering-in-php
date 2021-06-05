/* randomly selection of class from 1 to 10 && section A to D */
UPDATE students 
SET class = CEIL(RAND()*10), 
section = (SELECT ELT(CEIL(RAND()*4),'A','B','C','D'));

