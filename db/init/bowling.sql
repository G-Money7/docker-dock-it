

CREATE DATABASE IF NOT EXISTS bowling_db;


USE bowling_db;

CREATE TABLE scores (
                        id INT AUTO_INCREMENT PRIMARY KEY,
                        player_name VARCHAR(100) NOT NULL,
                        score INT NOT NULL
);


INSERT INTO scores (player_name, score) VALUES
 ('Gavin', 200),
 ('Tyler', 150),
 ('Julia', 180),
 ('Matt', 170),
 ('Josh', 190),
 ('Emily', 160),
 ('Tashina', 145),
 ('Mariana', 155),
 ('Archie', 175),


