CREATE TABLE IF NOT EXISTS characters (
	id integer PRIMARY KEY,
	character text NOT NULL,
	desc text
);

INSERT INTO characters (character, desc) VALUES ('Spider Pic',"Does whatever a spider pig can.");
INSERT INTO characters (character, desc) VALUES ('Star Lord',"Jealous of Thor");
INSERT INTO characters (character, desc) VALUES ('Aquaman',"Yes, he can talk to fish");
INSERT INTO characters (character, desc) VALUES ('Dr, Strange',"Magic");
INSERT INTO characters (character, desc) VALUES ('Iron Man',"Not");
INSERT INTO characters (character, desc) VALUES ('Ash',"Gotta Catchem all...");

SELECT * FROM characters;

UPDATE characters SET character = "Dr. Strange" , desc = "Has no super hero name." WHERE id = "3";
UPDATE characters SET desc = "Not made of Iron" WHERE character = "Iron Man";

DELETE FROM characters WHERE character = "Ash";
