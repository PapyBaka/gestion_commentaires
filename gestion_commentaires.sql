
CREATE TABLE `commentaires` (
  `id` int(11) NOT NULL PRIMARY KEY,
  `contenu` text NOT NULL,
  `valide` tinyint(4) NOT NULL DEFAULT '0',
  `ko_1` tinyint(4) NOT NULL DEFAULT '0',
  `ko_2` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


CREATE TABLE `labels` (
  `label` varchar(255) NOT NULL,
  `id_comment` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


ALTER TABLE `labels`
  ADD KEY `fk_id_comment` (`id_comment`);


ALTER TABLE `labels`
  ADD CONSTRAINT `fk_id_comment` FOREIGN KEY (`id_comment`) REFERENCES `commentaires` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;