# database has already been created in heroku

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

CREATE Table public.genre
(
	id SERIAL NOT NULL PRIMARY KEY,
	genre_name VARCHAR(100) NOT NULL
);

CREATE TABLE public.console
(
	id SERIAL NOT NULL PRIMARY KEY,
	console_name VARCHAR(100) NOT NULL
);

CREATE Table public.game_console
(
	game_id INT NOT NULL REFERENCES public.game(id),
	console_id INT NOT NULL REFERENCES public.console(id)
);

CREATE TABLE public.game_genre
(
	game_id INT NOT NULL REFERENCES public.game(id),
	console_id INT NOT NULL REFERENCES public.console(id)
);


INSERT INTO console VALUES (1, 'Xbox One');
INSERT INTO console VALUES (2, 'PlayStation 4');
INSERT INTO console VALUES (3, 'Nintendo Switch');

INSERT INTO general_user VALUES (1, 'fakeusername', 'j12k9d2kj', 'fakedisplayname');