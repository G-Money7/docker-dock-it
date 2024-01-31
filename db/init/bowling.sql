-- Start of SQL Script

-- Creating the database if it does not exist
CREATE DATABASE IF NOT EXISTS bowling_db;

-- Selecting the database to use
USE bowling_db;

-- Dropping the table if it already exists (optional)
DROP TABLE IF EXISTS scores;

-- Creating the table
CREATE TABLE scores (
                        id INT AUTO_INCREMENT PRIMARY KEY,
                        player_name VARCHAR(100) NOT NULL,
                        score INT NOT NULL
);

-- Inserting sample data into the scores table
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

