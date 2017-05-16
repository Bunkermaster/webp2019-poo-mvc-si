INSERT INTO `pokemon`(`nom`, `type`) VALUES ("Pikachu","Eclectic");

SELECT `id`, `nom` FROM `pokemon`;

UPDATE `pokemon` SET `nom`="Pikachou",`type`="Vibrant" WHERE `id` = 1;

SELECT `id`, `nom`, `type` FROM `pokemon` WHERE `id` = 1;

DELETE FROM `pokemon` WHERE `id` = 1;

TRUNCATE `pokemon`;
