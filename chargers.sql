CREATE DATABASE chargers;

USE chargers;

/* Create table with basic information */

CREATE TABLE players (
player_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
player_first_name VARCHAR(30) NOT NULL,
player_last_name VARCHAR(30) NOT NULL,
height VARCHAR(4) NOT NULL,
weight SMALLINT NOT NULL,
position VARCHAR(3) NOT NULL,
player_number TINYINT NOT NULL,
college VARCHAR(30) NOT NULL,
experience SMALLINT NOT NULL
);

/* Insert the player data */

INSERT INTO players(player_first_name, player_last_name, height, weight, position, player_number, college, experience)
VALUES
('Jahleel', 'Addae', '5-10', 195, 'S', 37, 'Central Michigan', 3),
('Keenan', 'Allen', '6-2', 211, 'WR', 13, 'California', 3),
('Jeremiah','Attaochu', '6-3', 252, 'OLB', 97, 'Georgia Tech', 2),
('Joe', 'Barksdale', '6-5', 326, 'T', 72, 'LSU', 5),
('Travis', 'Benjamin', '5-10', 170, 'WR', 12, 'Miami', 5),
('Joey', 'Bosa', '6-5', 269, 'DE', 99, 'Ohio State', 0),
('Jatavis', 'Brown', '5-11', 227, 'OLB', 57, 'Akron', 0),
('Ryan', 'Carrethers', '6-1', 333, 'DT', 92, 'Arkansas State', 2),
('Donovan', 'Clark', '6-4', 315, 'G', 63, 'Michigan State', 0),
('Kellen', 'Clemens', '6-2', 220, 'QB', 10, 'Oregon', 10),
('Jeff', 'Cumberland', '6-4', 260, 'TE', 87, 'Illinois', 6),
('King', 'Dunlap', '6-9', 330, 'T' , 77, 'Auburn', 8),
('Kyle', 'Emmanuel', '6-3', 250, 'OLB', 51, 'North Dakota State', 1),
('Brandon', 'Flowers', '5-9', 187, 'CB', 24, 'Virginia Tech',  8),
('D.J.', 'Fluker', '6-5', 339, 'G', 76, 'Alabama', 3),
('Orlando', 'Franklin', '6-7', 320, 'G', 74, 'Miami', 5),
('Antonio', 'Gates', '6-4', 255, 'TE', 85, 'Kent State', 13),
('Melvin', 'Gordon', '6-1', 215, 'RB', 28, 'Wisconsin', 1),
('Chris', 'Hairston', '6-6', 330, 'T', 75, 'Clemson', 4),
('Casey', 'Hayward', '5-11', 192, 'CB', 26, 'Vanderbilt', 5),
('Hunter', 'Henry', '6-5', 250, 'TE', 86, 'Arkansas',  0),
('Melvin', 'Ingram', '6-2', 247, 'OLB', 54, 'South Carolina', 4),
('Dontrelle', 'Inman', '6-3', 205, 'WR', 15, 'Virginia', 2),
('Steve', 'Johnson', '6-2', 207, 'WR', 11, 'Kentucky', 8),
('Drew', 'Kaser', '6-2', 212, 'P', 8, 'Texas A&M', 0),
('Josh', 'Lambo', '6-0', 215, 'K', 2, 'Texas A&M', 1),
('Sean', 'Lissemore', '6-3', 303, 'DT', 98, 'William & Mary', 6),
('Corey', 'Liuget', '6-2', 300, 'DT', 94, 'Illinois', 5),
('Dwight', 'Lowery', '5-11', 212, 'S', 20, 'San Jose State', 9),
('Craig', 'Mager', '5-11', 200, 'CB', 29, 'Texas State', 1),
('Dexter', 'McCoil', '6-4', 220, 'ILB', 38, 'Tulsa', 0),
('Brandon', 'Mebane', '6-1', 311, 'DT', 91, 'California', 10),
('Zach', 'Mettenberger', '6-5', 224, 'QB',  4, 'LSU', 2),
('Branden', 'Oliver', '5-8', 208, 'RB', 43, 'Buffalo', 3),
('Joshua', 'Perry', '6-4', 254, 'ILB', 53, 'Ohio State', 0),
('Denzel', 'Perryman', '5-11', 240, 'ILB', 52, 'Miami', 1),
('Adrian', 'Phillips', '5-11', 210, 'S' , 31, 'Texas', 1),
('Darius', 'Philon', '6-1', 300, 'DE', 93, 'Arkansas', 2),
('Philip', 'Rivers', '6-5', 228, 'QB', 17, 'North Carolina State', 12),
('Matt', 'Slauson', '6-5', 320, 'C', 68, 'Nebraska', 8),
('Darrell', 'Stuckey', '5-11', 212, 'S' , 25, 'Kansas', 6),
('Chris', 'Swain', '6-0', 247, 'FB', 41, 'Navy', 0),
('Manti', 'Te`o', '6-1', 241, 'ILB', 50, 'Notre Dame', 3),
('Max', 'Tuerk', '6-5', 298, 'C', 62, 'USC', 0),
('Jason', 'Verrett', '5-10', 188, 'CB', 22, 'Texas Christian', 3),
('Chris', 'Watt', '6-3', 310, 'C', 65, 'Notre Dame', 3),
('Derek', 'Watt', '6-2', 236, 'FB', 34, 'Wisconsin', 0),
('Kenny', 'Wiggins', '6-6', 314, 'G', 79, 'Fresno State', 3),
('Steve', 'Williams', '5-10', 185, 'CB', 23, 'California', 4),
('Tourek', 'Williams', '6-4', 262, 'OLB', 58, 'Florida International', 4),
('Tyrell', 'Williams', '6-4', 205, 'WR', 16, 'Western Oregon', 2),
('Mike', 'Windt', '6-1', 237, 'LS', 47, 'Cincinnati', 7),
('Danny', 'Woodhead', '5-8', 200, 'RB', 39, 'Chadron State', 9);

/* Create position table and add data */

CREATE TABLE position
(position_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
position VARCHAR(3) NOT NULL) AS
SELECT position FROM players
GROUP BY position;

/* Add position_id relationship and constraint */

ALTER TABLE players
ADD position_id INT NOT NULL AFTER player_last_name,
ADD INDEX (position_id);

UPDATE players, position
SET players.position_id = position.position_id
WHERE players.position = position.position;

ALTER TABLE players
ADD CONSTRAINT position_id_fk FOREIGN KEY (position_id)
REFERENCES position (position_id)
ON DELETE RESTRICT
ON UPDATE RESTRICT;

/* Drop position from players table */

ALTER TABLE players
DROP COLUMN position;

/* Create college table and add data */

CREATE TABLE college
(college_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
college VARCHAR(30) NOT NULL) AS
SELECT college FROM players
GROUP BY college
ORDER BY college;

/* Add college_id relationship and constraint */

ALTER TABLE players
ADD college_id INT NOT NULL AFTER player_number,
ADD INDEX (college_id);

UPDATE players, college
SET players.college_id = college.college_id
WHERE players.college = college.college;

ALTER TABLE players
ADD CONSTRAINT college_id_fk FOREIGN KEY (college_id)
REFERENCES college (college_id)
ON DELETE RESTRICT
ON UPDATE RESTRICT;

/* Drop college from players table */

ALTER TABLE players
DROP COLUMN college;

/* Edit college name. Most sports websites refer to University of Miami as Miami (Fla.) since there is also a University of Miami in Ohio. */

UPDATE college
SET college = 'Miami (Fla.)'
WHERE college = 'Miami';

/* View records of players with 4 or more years experience and order by experience in descending order. */

SELECT *
FROM players
WHERE experience >= 4
ORDER BY experience DESC;

/* View players who went to college in California */

SELECT p.player_first_name, p.player_last_name, c.college
FROM players AS p
INNER JOIN
college AS c
on p.college_id = c.college_id
WHERE (c.college_id = 8)
OR (c.college_id = 14)
OR (c.college_id = 30)
OR (c.college_id = 37)
ORDER BY c.college;

/* Delete three players not likely to make the team since the roster size needs to be 53 players */

DELETE FROM players
WHERE (player_first_name = 'Mike' AND player_last_name = 'Bercovici')
OR (player_first_name = 'Kasey' AND player_last_name = 'Redfern')
OR (player_first_name = 'Matt' AND player_last_name = 'Weiser');
