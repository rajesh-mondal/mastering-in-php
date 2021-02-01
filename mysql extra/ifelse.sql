/* changing sex using if else statement */
SELECT name, sex, IF(sex='boy',"M","F") AS gender FROM shufflednames;

/* filling up table data from another table using filterd data */
INSERT INTO students (name,sex) SELECT name, IF(sex='boy','M','F') AS sex FROM shufflednames