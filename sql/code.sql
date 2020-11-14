--The code in this file is where I wrote all the code for mysql.

--The code for the user table
CREATE TABLE users (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(100) NOT NULL,
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

-- Example Area 
INSERT INTO topics
(topic)
VALUES
('politics');

-- Reference 
DROP TABLE users;
DROP TABLE posts;