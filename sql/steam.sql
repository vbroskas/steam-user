-- drop tables in reverse order to start fresh every time

DROP TABLE IF EXISTS input;
DROP TABLE IF EXISTS review;
DROP TABLE IF EXISTS user;




-- creating the user entity table

CREATE TABLE user (
	-- always start with your primary key first!!
	-- make it of size and type INT, give it auto increment bec it's a primary key, and require a value so use NOT NULL
	userId     INT UNSIGNED AUTO_INCREMENT NOT NULL,
	-- now make the other attributes
	-- bec its a handle, use varchar(32), and NOT NULL, because it's required
	userHandle VARCHAR(32)                 NOT NULL,
	userImage  VARCHAR(32)                 NOT NULL,
	userEmail  VARCHAR(128)                NOT NULL,

	-- using NVARCHAR for salt and hash because it can accept unicode
	userSalt   NVARCHAR(128)               NOT NULL,
	userHash   NVARCHAR(128)               NOT NULL,

		-- to make sure input is unique use UNIQUE to index

	UNIQUE(userHandle),
	UNIQUE(userEmail),

	-- create unique ID for this table:
	PRIMARY KEY (userId)

);

-- creating the review entity table----------------------------------------------------------------------------

CREATE TABLE review (

	-- creating the primary key for reviewId

	reviewId INT UNSIGNED AUTO_INCREMENT NOT NULL,
	reviewUserId INT UNSIGNED NOT NULL,
	reviewDate DATETIME NOT NULL,
	reviewContent VARCHAR(500) NOT NULL,

	-- use boolean for recommendation thumbs up/down
	reviewRecommendation BOOLEAN DEFAULT NULL,
	-- now, create index before creating foreign key
	INDEX(reviewUserId),
	-- now, create the foreign key relationship
	FOREIGN KEY(reviewUserId) REFERENCES user(userId),
	-- lastly create the primary key for the review table
	PRIMARY KEY (reviewId)

);

-- create the input entity table (WEAK ENTITY)-------------------------------------------------------------------------------
CREATE TABLE input(
	-- first call in the two foreign keys you will be using
	inputReviewId INT UNSIGNED NOT NULL,
	inputUserId INT UNSIGNED NOT NULL,
	inputHelpful BOOLEAN DEFAULT NULL,
	inputFunny BOOLEAN DEFAULT NULL,

	-- index the foreign keys
	INDEX (inputReviewId),
	INDEX (inputUserId),

	-- make the foreign key relationships
	FOREIGN KEY (inputReviewId) REFERENCES review(reviewId),
	FOREIGN KEY (inputUserId) REFERENCES user(userId),

	-- create primary key composite from two foreign keys
	PRIMARY KEY (inputReviewId, inputUserId)


);