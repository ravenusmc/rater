--The code in this file is where I wrote all the code for mysql.

--The code for the user table
CREATE TABLE users (
    user_id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(30) NOT NULL,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    city VARCHAR(30) NOT NULL,
    state char(2) NOT NULL,
    zip INT NOT NULL,
    latitude DECIMAL(7, 5) NOT NULL,
    longitude DECIMAL(7, 5) NOT NULL,
    password VARCHAR(255) NOT NULL
);

--The code for the blog table
CREATE TABLE posts (
  post_id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  user_id INT NOT NULL,
  post VARCHAR(255) NOT NULL,
  votes INT NOT NULL DEFAULT 0,
  FOREIGN KEY (user_id) REFERENCES users(user_id)
  ON DELETE CASCADE
);


INSERT INTO topics
(topic)
VALUES
('politics');

DROP TABLE users;
DROP TABLE posts;