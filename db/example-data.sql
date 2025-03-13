-- Drop database (comment to do surgery)
DROP DATABASE IF EXISTS dev_to;
CREATE DATABASE dev_to;
USE dev_to;

-- Drop tables in reverse dependency order
DROP TABLE IF EXISTS Users;
DROP TABLE IF EXISTS Articles;
DROP TABLE IF EXISTS Tags;
DROP TABLE IF EXISTS TaggedArticles;

-- Recreate schema
CREATE TABLE Users (
    UserID INTEGER PRIMARY KEY AUTO_INCREMENT,
    Avatar VARCHAR(255),
    Name TEXT NOT NULL
);

CREATE TABLE Tags (
    TagID INTEGER PRIMARY KEY AUTO_INCREMENT,
    TagName TEXT NOT NULL
);

CREATE TABLE Articles (
    ArticleID INTEGER PRIMARY KEY AUTO_INCREMENT,
    Title TEXT NOT NULL,
    Featured TINYINT(1) DEFAULT FALSE,
    CreatedAt TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    AuthorID INTEGER,
    FOREIGN KEY (AuthorID) REFERENCES Users(UserID)
);

CREATE TABLE TaggedArticles (
    TaggedArticleID INTEGER PRIMARY KEY AUTO_INCREMENT,
    ArticleID INTEGER,
    TagID INTEGER,
    FOREIGN KEY (ArticleID) REFERENCES Articles(ArticleID),
    FOREIGN KEY (TagID) REFERENCES Tags(TagID)
);


-- Seed data
-- Tags
INSERT INTO Tags (TagName) VALUES
("webdev"), 
("ai"),
("programming"),
("softwaredevelopment"),
("softwareengineering"),
("nextjs"),
("frontend");

INSERT INTO Users (Name, Avatar) VALUES
("Walter", "imgs/walter.png"), 
("Jake Lundberg", "imgs/jake.png"), 
("Mahdi Jazini", "imgs/jazini.jpg");

INSERT INTO Articles (Title, Featured, AuthorID) VALUES
("It’s Not A.I. — Junior Developers Have Always Struggled to Code", 1, 1),
("Building for Users: The Real Purpose of Software Development", 0, 2),
("Codemod in Next.js 15: Updating Your Project Has Never Been Easier!", 0, 3);

INSERT INTO TaggedArticles (ArticleID, TagID) VALUES
(1, 1),
(1, 2),
(1, 3),
(2, 4),
(2, 5),
(3, 6),
(3, 7);
