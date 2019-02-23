# Users information will have a username and password to sign in.
# It will also have a display name for others to see when 
# they make a review
CREATE TABLE public.general_user
(
	id SERIAL NOT NULL PRIMARY KEY,
	username VARCHAR(100) NOT NULL UNIQUE,
	password VARCHAR(100) NOT NULL,
	display_name VARCHAR(100) NOT NULL
);

# The game will have a name and a description
# it will be crossrefrenced with its genre and 
# consoles in a many to many table 
CREATE TABLE public.game
(
	id SERIAL NOT NULL PRIMARY KEY,
	game_name VARCHAR(100) NOT NULL,  
	description TEXT NOT NULL
);

# A review will contain a score and a review(description).
# It will also have a refrence to what game it reviews, and
# the user who gave the review
CREATE TABLE public.review
(
	id SERIAL NOT NULL PRIMARY KEY,
	score INT NOT NULL,
	user_id INT NOT NULL REFERENCES public.general_user(id),
	game_id INT NOT NULL REFERENCES public.game(id),
	description TEXT NOT NULL
);

CREATE TABLE public.console
(
	id SERIAL NOT NULL PRIMARY KEY,
	console_name VARCHAR(100) NOT NULL
);

CREATE Table public.game_console
(
	game_id INT NOT NULL REFERENCES public.game(id),
	console_id INT NOT NULL REFERENCES public.console(id),
	CONSTRAINT id PRIMARY KEY (game_id, console_id)
);


INSERT INTO console(console_name) VALUES ('Xbox One');
INSERT INTO console(console_name) VALUES ('PlayStation 4');
INSERT INTO console(console_name) VALUES ('Nintendo Switch');

INSERT INTO game(game_name, description) VALUES ('Kingdom Hearts III', 'Kingdom Hearts III is the final installment int the Kingdom Hearts trilogy. It follows Sora in his quest of light against dark. Along with Donald and Goofy he embarks on what could be his last adventure to thwart the plans of Master Xehanort and Organization XIII to try and forge the X-blade');
INSERt INTO game(game_name, description) VALUES ('The Legend of Zelda: Breath of the Wild', 'Link is woken from a deep sleep to discover a ruined kingdom of Hyrule. Follow Link on his quest in a massive open world experience to defeat Ganon, investigate the fate of the Divine Beasts, and free the trapped Zelda before the world is laid to waste.');
INSERT INTO game(game_name, description) VALUES ('Red Dead Redemption 2', 'Red Dead Redemption 2 is a Western action-adventure game, taking place in the Western United States in 1899. It follows an outlaw named Arthur Morgan, a member of the Van der Linde gang, as he attempts to survive against government forces, rival gangs, and many other enemies');
INSERT INTO game(game_name, description) VALUES ('Super Smash Bros. Ultimate', 'Ultimate is the 5th instalment of the classic Super Smash Bros series. It follows the traditional Smash Bros gameplay as a nintendo crossover fighting game where the main goal is to knock your opponent out of the arena.');

INSERT INTO game_console(game_id, console_id) VALUES(1, 1);
INSERT INTO game_console(game_id, console_id) VALUES(1, 2);
INSERT INTO game_console(game_id, console_id) VALUES(2, 3);
INSERT INTO game_console(game_id, console_id) VALUES(3, 1);
INSERT INTO game_console(game_id, console_id) VALUES(3, 2);
INSERT INTO game_console(game_id, console_id) VALUES(4, 3);

INSERT INTO general_user(username, password, display_name) VALUES('NotAUser', 'NotAPassword', 'NotAName');
INSERT INTO general_user(username, password, display_name) VALUES('RealUser', 'RealPassword', 'RealName');

INSERT INTO review(score, user_id, game_id, description) VALUES(10, 1, 1, 'This was the best game EVER! NO QUESTIONS ASKED!');ory line wa
INSERT INTO review(score, user_id, game_id, description) VALUES(7, 2, 1, 'The game was really fun, but I never played any of the other games, so the sts super confusing. Like Whats with all these organization 13 guys?');

#Query Example getting all video game names one the xbox one console
SELECT game_name, description 
FROM game_console 
INNER JOIN game ON game_console.game_id = game.id 
INNER JOIN console ON game_console.console_id = console.id 
WHERE console_name = 'Xbox One';

#Query of getting all the reviews of a specific video game
SELECT score, r.description, display_name
FROM review AS r
JOIN game AS g 
ON r.game_id = g.id
JOIN general_user AS u
ON r.user_id = u.id
WHERE g.game_name = 'Kingdom Hearts III';

#Simple query to get all video game titles and descriptions from the data
SELECT game_name, description FROM game;

#create a review
INSERT INTO review(game_id, user_id, score, description) VALUES (2, 2, 9, 'This game was so much fun! You can literally go anywerhe you can see! The secret ending was pretty cool too.');

#create a new video game
#we need to remember to insert into our game_console table
INSERT INTO game(game_name, description) VALUES('Call Of Duty: Black Ops 4', 'Black ops 4 continues the Call Of Duty tradition being a multiplayer first-person shooter and is the 15th game in the series. Black ops 4 brings back traditional multiplayer, zombies, and brings a new battle royal mode called Blackout');
INSERT INTO game_console() VALUES();

SELECT currval(pg_get_serial_sequence('game', 'id'));