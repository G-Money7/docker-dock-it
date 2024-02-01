

CREATE DATABASE IF NOT EXISTS bowling_db;


USE bowling_db;

CREATE TABLE scores (
                        id INT AUTO_INCREMENT PRIMARY KEY,
                        player_name VARCHAR(100) NOT NULL,
                        score INT NOT NULL
);


INSERT INTO scores (player_name, score) VALUES
                                            ('Alice', 200),
                                            ('Bob', 150),
                                            ('Charlie', 180),
                                            ('Diana', 170),
                                            ('Ethan', 190),
                                            ('Fiona', 160),
                                            ('George', 145),
                                            ('Hannah', 155),
                                            ('Ian', 175),
                                            ('Jane', 165);

