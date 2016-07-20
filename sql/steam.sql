-- creating the user table

CREATE TABLE user(
	-- always start with your primary key first!!
	-- make it of size and type INT, give it auto increment bec it's a primary key, and require a value so use NOT NULL
	userId INT UNSIGNED AUTO_INCREMENT NOT NULL,
	-- now make the other attributes
	-- bec its a handle, use varchar(32), and NOT NULL, because it's required
	userHandle VARCHAR(32) NOT NULL,
	userImage VARCHAR(32) NOT NULL,
	userEmail VARCHAR(128) NOT NULL,

)