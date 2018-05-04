CREATE TABLE post 
(
  id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY, 
  title TEXT NULL, 
  body TEXT NULL,
  publicationDate DATETIME NULL
);

INSERT INTO 
  post (id, title, body, publicationDate)
VALUES 
  (1, "Lorem ipsum dolor sit amet", "Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vestibulum erat elit, vehicula nec rhoncus vitae, pretium a arcu. Fusce eu pretium augue. Nam pulvinar est eu varius posuere. Vestibulum in mattis ex, ac auctor leo. Nam eget facilisis erat, nec aliquet odio. In id turpis pellentesque, tincidunt sem at, volutpat ex. Praesent tempus metus ac nulla eleifend imperdiet.", '2018-05-05 14:29:36'),
  (2, "Lorem ipsum dolor sit amet", "Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vestibulum erat elit, vehicula nec rhoncus vitae, pretium a arcu. Fusce eu pretium augue. Nam pulvinar est eu varius posuere. Vestibulum in mattis ex, ac auctor leo. Nam eget facilisis erat, nec aliquet odio. In id turpis pellentesque, tincidunt sem at, volutpat ex. Praesent tempus metus ac nulla eleifend imperdiet.", '2018-05-05 14:29:36'),
  (3, "Lorem ipsum dolor sit amet", "Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vestibulum erat elit, vehicula nec rhoncus vitae, pretium a arcu. Fusce eu pretium augue. Nam pulvinar est eu varius posuere. Vestibulum in mattis ex, ac auctor leo. Nam eget facilisis erat, nec aliquet odio. In id turpis pellentesque, tincidunt sem at, volutpat ex. Praesent tempus metus ac nulla eleifend imperdiet.", '2018-05-05 14:29:36'),
  (4, "Lorem ipsum dolor sit amet", "Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vestibulum erat elit, vehicula nec rhoncus vitae, pretium a arcu. Fusce eu pretium augue. Nam pulvinar est eu varius posuere. Vestibulum in mattis ex, ac auctor leo. Nam eget facilisis erat, nec aliquet odio. In id turpis pellentesque, tincidunt sem at, volutpat ex. Praesent tempus metus ac nulla eleifend imperdiet.", '2018-05-05 14:29:36'),
  (5, "Lorem ipsum dolor sit amet", "Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vestibulum erat elit, vehicula nec rhoncus vitae, pretium a arcu. Fusce eu pretium augue. Nam pulvinar est eu varius posuere. Vestibulum in mattis ex, ac auctor leo. Nam eget facilisis erat, nec aliquet odio. In id turpis pellentesque, tincidunt sem at, volutpat ex. Praesent tempus metus ac nulla eleifend imperdiet.", '2018-05-05 14:29:36'),
  (6, "Lorem ipsum dolor sit amet", "Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vestibulum erat elit, vehicula nec rhoncus vitae, pretium a arcu. Fusce eu pretium augue. Nam pulvinar est eu varius posuere. Vestibulum in mattis ex, ac auctor leo. Nam eget facilisis erat, nec aliquet odio. In id turpis pellentesque, tincidunt sem at, volutpat ex. Praesent tempus metus ac nulla eleifend imperdiet.", '2018-05-05 14:29:36');

CREATE TABLE genus
(
  id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY, 
  name VARCHAR(100) NULL, 
  subFamily TEXT NULL,
  speciesCount INT(11) NULL,
  funFact TEXT NULL,
  isPublished BOOL NULL
);

INSERT INTO 
  genus (id, name, subFamily, speciesCount, funFact, isPublished)
VALUES 
  (1, "Spermophilus01", "Squirrel", 20, "Lorem ipsum dolor sit amet, consectetur adipiscing elit.", false),
  (2, "Spermophilus02", "Squirrel", 18, "Lorem ipsum dolor sit amet, consectetur adipiscing elit.", false),
  (3, "Spermophilus03", "Squirrel", 14, "Lorem ipsum dolor sit amet, consectetur adipiscing elit.", false),
  (4, "Spermophilus04", "Squirrel", 26, "Lorem ipsum dolor sit amet, consectetur adipiscing elit.", false),
  (5, "Spermophilus05", "Squirrel", 22, "Lorem ipsum dolor sit amet, consectetur adipiscing elit.", false);

CREATE TABLE genusnotes
(
  id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY, 
  username VARCHAR(100) NULL,
  userAvatarFilename TEXT NULL,
  note TEXT NULL,
  createdAt DATETIME NULL
);

INSERT INTO 
  genusnotes (id, username, userAvatarFilename, note, createdAt)
VALUES 
  (1, "jack1", "", "Lorem ipsum dolor sit amet, consectetur adipiscing elit.", '2018-05-05 14:29:36'),
  (2, "peppergreen", "", "Lorem ipsum dolor sit amet, consectetur adipiscing elit.", '2018-05-05 14:29:36'),
  (3, "kitty", "", "Lorem ipsum dolor sit amet, consectetur adipiscing elit.", '2018-05-05 14:29:36'),
  (4, "cyber_black", "", "Lorem ipsum dolor sit amet, consectetur adipiscing elit.", '2018-05-05 14:29:36'),
  (5, "stoneblue", "", "Lorem ipsum dolor sit amet, consectetur adipiscing elit.", '2018-05-05 14:29:36');


CREATE TABLE users 
(
  id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY, 
  name VARCHAR(255) NOT NULL, 
  email VARCHAR(255) NOT NULL,
  password VARCHAR(255) NOT NULL,
  remember_token VARCHAR(255),
  remember_identifier VARCHAR(255)
);

INSERT INTO 
  users (id, name, email, password, remember_token, remember_identifier)
VALUES 
  (1, "Israel Morales", "imoralescs@gmail.com", "$2a$12$jWz5man/w84aqb5Tu7I7JuP8.CSo8VNN/g7spotrfD7EGIgJkA0G.", null, null),
  (2, "Javier Perez", "perecito@gmail.com", "$2a$12$jWz5man/w84aqb5Tu7I7JuP8.CSo8VNN/g7spotrfD7EGIgJkA0G.", null, null),
  (3, "Michelle Louis", "michellin@gmail.com", "$2a$12$jWz5man/w84aqb5Tu7I7JuP8.CSo8VNN/g7spotrfD7EGIgJkA0G.", null, null),
  (4, "Stephany Mcnael", "stephkitty@gmail.com", "$2a$12$jWz5man/w84aqb5Tu7I7JuP8.CSo8VNN/g7spotrfD7EGIgJkA0G.", null, null),
  (5, "Pedro Diaz", "pedrito@gmail.com", "$2a$12$jWz5man/w84aqb5Tu7I7JuP8.CSo8VNN/g7spotrfD7EGIgJkA0G.", null, null),
  (6, "Adam Warlock", "adamhatethano@gmail.com", "$2a$12$jWz5man/w84aqb5Tu7I7JuP8.CSo8VNN/g7spotrfD7EGIgJkA0G.", null, null);

CREATE TABLE friendships
(
  friend_id INT(11) NULL,
  user_id INT(11) NULL,
  FOREIGN KEY(user_id) 
  REFERENCES users(id)
);

INSERT INTO 
  friendships (user_id, friend_id)
VALUES 
  (1, 2), 
  (2, 1), 
  (3, 4), 
  (4, 3), 
  (1, 5),
  (5, 1),
  (1, 6),
  (6, 1),
  (2, 5),
  (5, 2),
  (2, 6),
  (6, 2),
  (5, 6),
  (6, 5);

/* Query Mysql: */
/* Friends */
/* SELECT * from friendships JOIN users ON users.id = friendships.friend_id WHERE friendships.user_id = 2; */

# Add column to exist table.
# ALTER TABLE genusnotes ADD genus_id INT(11);

# Add foreign key to exist table.
# ALTER TABLE `genusnotes` ADD CONSTRAINT genus_id_refs FOREIGN KEY (`genus_id`) REFERENCES `genus`(`id`);

# Drop column to exist table.
# ALTER TABLE genusnotes DROP genus_id;