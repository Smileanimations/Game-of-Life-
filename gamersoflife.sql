SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `patterns` (
  `id` mediumint(9) NOT NULL,
  `title` varchar(25) DEFAULT NULL,
  `details` varchar(300) DEFAULT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `patterns` (`id`, `title`, `details`, `image`) VALUES
(1, 'Glider', 'Het kleinste spaceship, volgt een diagonale lijn. De richting wordt bepaald door de \"punt\" in het patroon.', 'glider.png'),
(2, 'Acorn', 'Een simpele methuselah gevonden rondt 1971.', 'acorn.png'),
(3, 'Butterfly', 'Vormt twee beehives na 33 generaties.', 'butterfly.png'),
(4, 'Toad', 'A periode 2 oscillator. De tweede meest voorkomende oscillator (na de blinker).', 'toad.png'),
(5, 'Blinker', 'De meest voorkomende en kleinste oscillator.', 'blinker.png'),
(6, 'Block and glider', 'Een methuselah die eindigt met een losse glider.', 'blockandglider.png'),
(7, 'Diehard', 'Een methuselah die totaal sterft na 130 generaties.', 'diehard.png'),
(8, 'Fox', 'De kleinste asymmetrische periode 2 oscillator.', 'fox.png'),
(20, 'Bozotje', 'IK HAAT alles', 'emoji-desintegrandose.png');

ALTER TABLE `patterns`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `patterns`
  MODIFY `id` mediumint(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;
