-- Table structure for table <utilisateur>
DROP TABLE IF EXISTS e2295331.user;
CREATE TABLE user(
  userId INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  userName VARCHAR(45) NOT NULL,
  name VARCHAR(25) NOT NULL,
  password VARCHAR(255) NOT NULL,
  birthday DATE
);

-- Table structure for table <editeur>
DROP TABLE IF EXISTS forum;
CREATE TABLE forum(
  idForum INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  title VARCHAR(100),
  article TEXT(1000),
  creationDate DATE NOT NULL,
  author INT NOT NULL,
  CONSTRAINT fk_forum_users1 FOREIGN KEY (author) REFERENCES user (userId) ON DELETE NO ACTION ON UPDATE NO ACTION
);

        
