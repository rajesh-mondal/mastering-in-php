/* Duplicating MySQL table in various way*/
CREATE TABLE newtable SELECT* FROM students; /*wrong way*/
CREATE TABLE newtable SELECT* FROM students LIMIT 0; /*wrong way*/

/* Right way is:- */
CREATE TABLE newtable LIKE students;
INSERT INTO newtable SELECT* FROM students;