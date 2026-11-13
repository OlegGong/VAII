CREATE TABLE IF NOT EXISTS teams (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    name VARCHAR(150) NOT NULL,
    country VARCHAR(100) NOT NULL,
    foundedYear SMALLINT UNSIGNED NULL,
    stadium VARCHAR(150) NOT NULL,
    PRIMARY KEY (id)
);

CREATE TABLE IF NOT EXISTS players (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    name VARCHAR(100) NOT NULL,
    surname VARCHAR(100) NOT NULL,
    position VARCHAR(50) NOT NULL,
    shirtNumber TINYINT UNSIGNED NOT NULL,
    teamId INT UNSIGNED NULL,
    PRIMARY KEY (id),
    CONSTRAINT fk_players_team
        FOREIGN KEY (teamId) REFERENCES teams (id)
        ON DELETE SET NULL
        ON UPDATE CASCADE
);

INSERT INTO teams (name, country, foundedYear, stadium)
SELECT 'ŠK Slovan Bratislava', 'Slovensko', 1919, 'Tehelné pole'
WHERE NOT EXISTS (SELECT 1 FROM teams);

INSERT INTO teams (name, country, foundedYear, stadium)
SELECT 'FC Spartak Trnava', 'Slovensko', 1923, 'Štadión Antona Malatinského'
WHERE (SELECT COUNT(*) FROM teams) = 1;

INSERT INTO players (name, surname, position, shirtNumber, teamId)
SELECT 'Dominik', 'Takáč', 'Brankár', 1, id
FROM teams
WHERE name = 'ŠK Slovan Bratislava'
  AND NOT EXISTS (SELECT 1 FROM players);

INSERT INTO players (name, surname, position, shirtNumber, teamId)
SELECT 'Dávid', 'Strelec', 'Útočník', 77, id
FROM teams
WHERE name = 'ŠK Slovan Bratislava'
  AND (SELECT COUNT(*) FROM players) = 1;
