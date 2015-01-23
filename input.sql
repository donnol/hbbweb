create database book;

use book;

-- --------------------------------------------------------
-- --------- this is a book_room database------------------
-- --------------------------------------------------------

-- ---------------------------------------------------------
-- --------- Book table ------------------------------------
-- ---------------------------------------------------------

CREATE TABLE IF NOT EXISTS book (
	id int(64) PRIMARY KEY NOT NULL,
	name VARCHAR(128) NOT NULL,
	category VARCHAR(128) NOT NULL,
	page int(64) NOT NULL,
	content VARCHAR(64) NOT NULL
)

CREATE TABLE IF NOT EXISTS user(
	id int(64) PRIMARY KEY NOT NULL,
	name VARCHAR(128) NOT NULL,
	pwd VARCHAR(128) NOT NULL,
	tel VARCHAR(128) NOT NULL,
	addr VARCHAR(128) NOT NULL,
	cert VARCHAR(128) NOT NULL
)

