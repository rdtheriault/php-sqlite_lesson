CREATE TABLE IF NOT EXISTS users (
	id integer PRIMARY KEY,
	userName text NOT NULL,
	passWord text,
	sec text
);

INSERT INTO users (userName, passWord, sec) VALUES ('admin',"SuperSecure",'a');
INSERT INTO users (userName, passWord, sec) VALUES ('user1',"myPW",'u');
INSERT INTO users (userName, passWord, sec) VALUES ('tinytim',"scrooge",'u');
INSERT INTO users (userName, passWord, sec) VALUES ('steve',"alex",'u');

SELECT * FROM users;

CREATE TABLE IF NOT EXISTS msgs (
	id integer PRIMARY KEY,
	userID integer NOT NULL,
	msg text
);

INSERT INTO msgs (userID, msg) VALUES (1,"Hello World");
INSERT INTO msgs (userID, msg) VALUES (1,"Welcome Everyone");
INSERT INTO msgs (userID, msg) VALUES (2,"Hello Admin");
INSERT INTO msgs (userID, msg) VALUES (3,"Hello Everyone");
INSERT INTO msgs (userID, msg) VALUES (4,"Hi");
INSERT INTO msgs (userID, msg) VALUES (4,"Hi");
INSERT INTO msgs (userID, msg) VALUES (2,"You said that twice");
INSERT INTO msgs (userID, msg) VALUES (3,"You said that twice");
INSERT INTO msgs (userID, msg) VALUES (3,"doh");
INSERT INTO msgs (userID, msg) VALUES (1,"I will delete it");

SELECT * FROM msgs;
SELECT msg FROM msgs WHERE userID = 1;
