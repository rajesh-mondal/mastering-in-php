PRAGMA foreign_keys=OFF;
BEGIN TRANSACTION;
CREATE TABLE users(id INTEGER PRIMARY KEY AUTOINCREMENT, name CHAR(100), email CHAR(100));
INSERT INTO users VALUES(1,'John','john@doe.com');
INSERT INTO users VALUES(2,'Jane','jane@doe.com');
INSERT INTO users VALUES(3,'Jessy','jessy@doe.com');
INSERT INTO users VALUES(4,'Jimmy','jimmy@doe.com');
DELETE FROM sqlite_sequence;
INSERT INTO sqlite_sequence VALUES('users',4);
COMMIT;
