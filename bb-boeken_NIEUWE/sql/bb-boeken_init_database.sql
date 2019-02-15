create table categorien (
                      `categorie_id` int(11) not null auto_increment,
                      `categorie_naam` varchar(255) collate utf8_unicode_ci not null,
                      primary key (`categorie_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1;
create table boeken (
                      `boeken_id` int(11) not null auto_increment,
                      `naam` varchar(255) collate utf8_unicode_ci not null,
                      `beschrijving` varchar(600) collate utf8_unicode_ci not null,
                      `schrijver` varchar(255) collate utf8_unicode_ci not null,
                      `link` varchar(255) collate utf8_unicode_ci not null,
                      `fk_categorie` int(11) not null,
                      primary key (`boeken_id`),
                      foreign key (`fk_categorie`) references categorien(`categorie_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1;
CREATE TABLE `users` (
                       `id` int(11) NOT NULL AUTO_INCREMENT,
                       `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
                       `password` char(64) COLLATE utf8_unicode_ci NOT NULL,
                       `salt` char(16) COLLATE utf8_unicode_ci NOT NULL,
                       `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
                       PRIMARY KEY (`id`),
                       UNIQUE KEY `username` (`username`),
                       UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1;