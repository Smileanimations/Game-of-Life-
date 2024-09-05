DROP DATABASE IF EXISTS `gameoflife`;

CREATE DATABASE `gameoflife`;

USE `gameoflife`;

CREATE TABLE `patterns` (
    id MEDIUMINT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(25),
    details VARCHAR(300)
);

INSERT INTO `patterns` (`title`, `details`) Values 
    ('Glider', 'Het kleinste spaceship, volgt een diagonale lijn. De richting wordt bepaald door de "punt" in het patroon.'),
    ('Acorn', 'Een simpele methuselah gevonden rondt 1971.'),
    ('Butterfly', 'Vormt twee beehives na 33 generaties.'),
    ('Toad', 'A periode 2 oscillator. De tweede meest voorkomende oscillator (na de blinker).'),
    ('Blinker', 'De meest voorkomende en kleinste oscillator.'),
    ('Blockandglider', 'Een methuselah die eindigt met een losse glider.'),
    ('Diehard', 'Een methuselah die totaal sterft na 130 generaties.');
