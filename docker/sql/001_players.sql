CREATE TABLE IF NOT EXISTS players (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    name VARCHAR(100) NOT NULL,
    surname VARCHAR(100) NOT NULL,
    position VARCHAR(50) NOT NULL,
    shirtNumber TINYINT UNSIGNED NOT NULL,
    PRIMARY KEY (id)
);

INSERT INTO players (name, surname, position, shirtNumber)
SELECT 'Dominik', 'Takáč', 'Brankár', 1
WHERE NOT EXISTS (SELECT 1 FROM players);

INSERT INTO players (name, surname, position, shirtNumber)
SELECT 'Dávid', 'Strelec', 'Útočník', 77
WHERE (SELECT COUNT(*) FROM players) = 1;
