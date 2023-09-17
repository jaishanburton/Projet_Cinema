-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : dim. 04 déc. 2022 à 14:14
-- Version du serveur : 5.7.36
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `a&hcinema`
--

-- --------------------------------------------------------

--
-- Structure de la table `movie`
--

DROP TABLE IF EXISTS `movie`;
CREATE TABLE IF NOT EXISTS `movie` (
  `movieid` int(11) NOT NULL,
  `moviename` text NOT NULL,
  `moviesynopsis` text NOT NULL,
  `movieduration` int(11) DEFAULT NULL,
  `moviecasting1` text NOT NULL,
  `moviecasting2` text NOT NULL,
  `moviecasting3` text NOT NULL,
  `moviecasting4` text NOT NULL,
  `moviecasting5` text NOT NULL,
  PRIMARY KEY (`movieid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `movie`
--

INSERT INTO `movie` (`movieid`, `moviename`, `moviesynopsis`, `movieduration`, `moviecasting1`, `moviecasting2`, `moviecasting3`, `moviecasting4`, `moviecasting5`) VALUES
(1, 'JOKER', 'In 1981, clown and aspiring stand-up comedian Arthur Fleck lives with and cares for his mother, Penny, in crime-ridden and economically stagnant Gotham City. Arthur suffers from a neurological disorder that causes him to laugh uncontrollably at inappropriate times, requiring medication, for which he depends on social services. After Arthur is attacked by juvenile delinquents, his co-worker Randall gives him a revolver for self-defense. Arthur pursues a relationship with his neighbor, single mother Sophie and invites her to see his stand-up routine at a comedy club. At a children\'s hospital, Arthur\'s revolver falls out of his pant leg onto the floor in full view of the children. Randall lies to their manager, stating the gun was Arthur\'s own and Arthur is subsequently fired. Depressed on the subway, still in clown makeup, Arthur suffers a laughing fit and is accosted by a group of three drunk businessmen, shooting two of them in self-defense and murdering the third as he attempts to flee. The killings are condemned by billionaire mayoral candidate Thomas Wayne, whom the men worked for, calling supporters of the killer \"clowns.\" Protesters react by donning clown masks in Arthur\'s image. Budget cuts shut down the social service program, leaving Arthur without medication.', 122, 'Joaquin Phoenix as Arthur Fleck / Joker', 'Robert De Niro as Murray Franklin', 'Zazie Beetz as Sophie Dumond', 'Frances Conroy as Penny Fleck', 'Brett Cullen portrays Thomas Wayne'),
(2, 'SPIDERMAN : NO WAY HOME', 'After Quentin Beck frames Peter Parker for his murder and reveals Parker\'s identity as Spider-Man, Parker, his girlfriend Michelle \"MJ\" Jones-Watson, best friend Ned Leeds, and aunt May are interrogated by the Department of Damage Control. Lawyer Matt Murdock gets Parker\'s charges dropped, but the group grapples with negative publicity. After Parker, MJ, and Ned\'s MIT applications are rejected, Parker goes to the New York Sanctum to ask Stephen Strange for help. Strange casts a spell that would make everyone forget Parker is Spider-Man, but it is corrupted when Parker repeatedly requests alterations to let his loved ones retain their memories. Strange contains the spell to stop it and makes Parker leave.', 148, 'Tom Holland as Peter Parker / Spider-Man', 'Tobey Maguire and Andrew Garfield return as their respective versions of Spider-Man', 'Zendaya as Michelle \"MJ\" Jones-Watson', 'Benedict Cumberbatch as Dr. Stephen Strange', 'Jon Favreau as Harold \"Happy\" Hogan'),
(3, 'THE BATMAN', 'On Halloween, Gotham City mayor Don Mitchell Jr. is murdered by the Riddler, a masked killer. Reclusive billionaire Bruce Wayne, who has operated for two years as the vigilante Batman, investigates the murder alongside the Gotham City Police Department (GCPD). Lieutenant James Gordon discovers a message that the Riddler left for Batman. The following night, the Riddler kills Commissioner Pete Savage and leaves another message for Batman. Batman and Gordon discover that the Riddler left a thumb drive in Mitchell\'s car containing images of Mitchell with a woman, Annika Kosolov, at the Iceberg Lounge, a nightclub operated by the Penguin, gangster Carmine Falcone\'s lieutenant. While the Penguin pleads ignorance, Batman notices that Selina Kyle, Annika\'s roommate, works at the club as a waitress. When Annika disappears, Batman sends Selina back to the Iceberg Lounge for answers and discovers that Savage was on Falcone\'s payroll, as is District Attorney Gil Colson.', 176, 'Robert Pattinson as Bruce Wayne / Batman', 'Zoe Kravitz as Selina Kyle / Catwoman', 'Paul Dano as Edward Nashton / Riddler', 'Jeffrey Wright as James Gordon', 'John Turturro as Carmine Falcone'),
(4, 'AVANGERS : ENDGAME', 'In 2018, twenty-three days after Thanos erased half of all life in the universe,Carol Danvers rescues Tony Stark and Nebula from deep space and they reunite with the remaining Avengers Bruce Banner, Steve Rogers, Thor, Natasha Romanoff, and James Rhodes and Rocket on Earth. Locating Thanos on an uninhabited planet, they plan to use the Infinity Stones to reverse his actions, but discover Thanos has already destroyed them to prevent further use. Enraged, Thor decapitates Thanos. Five years later, in 2023, Scott Lang escapes from the Quantum Realm.[b] Reaching the Avengers Compound, he explains that he experienced only five hours while trapped. Theorizing the Quantum Realm allows time travel, they ask Stark to help them retrieve the Stones from the past to reverse the actions of Thanos in the present. Stark, Rocket, and Banner, who has since merged his intelligence with the Hulk\'s strength, build a Time Machine. Banner notes that altering the past does not affect their present; any changes create alternate realities. Banner and Rocket travel to Norway, where they visit the Asgardian refugees\' settlement New Asgard and recruit an overweight and despondent Thor. In Tokyo, Romanoff recruits Clint Barton, who became a vigilante after the death of his family.', 182, 'Robert Downey Jr. as Tony Stark / Iron Man', 'Chris Evans as Steve Rogers / Captain America', 'Mark Ruffalo as Bruce Banner / Hulk', 'Chris Hemsworth as Thor', 'Scarlett Johansson as Natasha Romanoff / Black Widow'),
(5, 'PIRATE OF THE CARIBBEAN : THE CURSE OF THE BLACK PEARL', 'In 1720, while sailing to Port Royal, Jamaica, aboard HMS Dauntless, Governor Weatherby Swann\'s crew encounter a shipwreck and recover a boy, Will Turner. Swann\'s daughter Elizabeth discovers a golden pirate medallion around Will\'s neck, and takes it. Eight years later, Captain James Norrington is promoted to commodore and proposes to Elizabeth. Her corset makes her faint and fall into the sea, causing the medallion to emit a pulse. Captain Jack Sparrow, having just arrived in Port Royal to commandeer a ship, rescues Elizabeth. Norrington identifies Jack as a pirate, and a chase ensues. Jack encounters Will, now a blacksmith. They duel, and Jack is imprisoned. That night, the crew of the Black Pearl attacks Port Royal, searching for the medallion. The pirates capture Elizabeth, taking her to meet Captain Barbossa. Elizabeth claims her last name is Turner, to conceal her identity as the governor\'s daughter. Barbossa explains that the medallion is the last of 882 gold pieces his crew took from a lost treasure of Hernan Cortes on Isla de Muerta. Cortes had accepted the treasure as payment to prevent the Fall of Tenochtitlan, but did not fulfill his part of the bargain. The Aztec gods cursed the treasure; Barbossa and any members of his crew who took the coins were cursed by extension, and became immortals whose true, skeletal forms are revealed in moonlight. To lift the curse, they must return the treasure, each coin stained with the either its taker\'s blood or the blood of the taker\'s direct relative. Assuming Elizabeth is the daughter of Bill Turner (Will\'s father, whom Barbossa tried to drown after discovering he sent the medallion to his child), Barbossa decides to use her blood on the medallion.', 143, 'Johnny Depp as Jack Sparrow', 'Geoffrey Rush as Captain Barbossa', 'Orlando Bloom as Will Turner', 'Keira Knightley as Elizabeth Swann', 'Jack Davenport as Norrington'),
(6, 'FAST & FURIOUS 9', 'In 1989, Jack Toretto participates in an asphalt late model race on a short track, with his sons Dominic and Jakob working in the pit crew. Dom argues with rival racer Kenny Linder about his dirty tactics. During the race, Linder\'s car clips Jack\'s bumper, causing his car to crash and burn, killing him. A week after, Dom is arrested for beating Linder to near death. While serving his sentence, he recalls that Jakob had worked on their father\'s car the day he died and concludes that Jakob killed their father. Upon release, Dom confronts and challenges Jakob to a race, forcing him to leave town when he loses. In 2019, two years after the confrontation against cyberterrorist Cipher,[N 1] Dom is retired and raising his son Brian with his wife, Letty Ortiz. Roman Pearce, Tej Parker, and Ramsey arrive with news that, shortly after arresting Cipher, Mr. Nobody\'s plane was attacked by rogue agents, who abducted Cipher and crashed in Montequinto, South America. Although reluctant at first, Dom agrees to help them after realizing Jakob is involved. Searching the plane, they find part of a device named Project Aries, which can hack into any computer-controlled system. The team is then ambushed by a private army led by Jakob, who steals the device; Michael Stasiak helps Dom\'s crew escape to their safe house. Dom\'s sister Mia arrives to help, and Dom reluctantly allows her to join. The team learns that Han Lue is connected to Project Aries, and Letty and Mia go to Tokyo to investigate.', 143, 'Vin Diesel as Dominic Toretto', 'Michelle Rodriguez as Letty Ortiz', 'Tyrese Gibson as Roman Pearce', 'Chris \"Ludacris\" Bridges as Tej Parker', 'John Cena as Jakob Toretto'),
(7, 'BLACK ADAM', 'In 2600 BC, the tyrannical king Ahk-Ton of Kahndaq creates the Crown of Sabbac to attain great power. After attempting to stage a revolt, a young slave boy is given the powers of Shazam by the Council of Wizards, transforming him into Kahndaq\'s heroic champion, who kills Ahk-Ton and ends his reign. In the present day, Kahndaq is oppressed by the Intergang as Adrianna Tomaz, an archaeologist and resistance-fighter, tries to locate the Crown of Sabbac with the help of her brother Karim and their colleagues Samir and Ishmael. As Adrianna obtains the crown, Intergang ambushes them and kills Samir, forcing Adrianna to read an incantation that awakens Teth-Adam, whom she believes to be Kahndaq\'s champion, from a slumber. As he slaughters most of the Intergang troops, US government official Amanda Waller deems Adam a threat and contacts the Justice Society to apprehend him. Justice Society members Hawkman, Doctor Fate, Cyclone, and Atom Smasher arrive in time to stop Adam from causing further destruction to Kahndaq and Intergang\'s troops and explain to Adrianna that Adam was not an entombed savior, but an imprisoned madman.', 125, 'Dwayne Johnson as Teth-Adam / Black Adam', 'Aldis Hodge as Carter Hall / Hawkman', 'Noah Centineo as Albert \"Al\" Rothstein / Atom Smasher', 'Sarah Shahi as Adrianna Tomaz', 'Marwan Kenzari as Ishmael Gregor / Sabbac'),
(8, 'SONIC 2 : THE HEDGEHOG', 'Roughly nine months after defeating Dr. Robotnik,[c] Sonic attempts to help the public as a vigilante-hero to little success. Tom advises Sonic to remain patient for the day his powers will be needed before he and Maddie depart for Rachel\'s wedding in Hawaii. Sonic plans to have fun while home alone but is attacked by Robotnik, who has escaped the mushroom planet with the help of Knuckles. To honor his ancestors, Knuckles demands the location of the legendary Master Emerald, an ancient relic that grants its users immense power and the ability to bend reality to their will. Sonic is rescued by Miles \"Tails\" Prower, an anthropomorphic two-tailed fox who idolizes him and comes to warn him about Knuckles. Sonic convinces Tails to help him find the Master Emerald, while Robotnik reunites with his assistant Stone and, scheming to steal the emerald, offers to help Knuckles. Sonic and Tails follow clues to Siberia on a map Longclaw gave Sonic before sending him to Earth, where they find a compass within an old temple. Robotnik and Knuckles track them and chase Sonic and Tails down a mountain. Knuckles reveals that he lost his father and his whole tribe the same day Sonic lost Longclaw. Despite this brief moment of sympathizing with Sonic, Knuckles and Robotnik steal the compass, though Knuckles begins questioning Robotnik\'s sense of loyalty and honor when he makes fun of Sonic for choosing to save a wounded Tails instead of the compass.', 125, 'Ben Schwartz as Sonic the Hedgehog', 'Jim Carrey as Doctor Ivo Robotnik', 'James Marsden as Tom Wachowski', 'Colleen O\'Shaughnessey as Miles \"Tails\" Prower', 'Idris Elba as Knuckles the Echidna'),
(9, '007 : NO TIME TO DIE', 'A young Madeleine Swann witnesses the murder of her mother at their home by Lyutsifer Safin, whose family was assassinated by Swann\'s father Mr. White under orders from Ernst Stavro Blofeld. Swann shoots Safin and drags his body outside. When he suddenly regains consciousness, Swann flees across a nearby frozen lake but falls through the ice. Safin rescues her from drowning. In the present, after Blofeld\'s arrest,[a] Swann travels to Matera with James Bond. She asks Bond to visit the nearby grave of his ex-lover Vesper Lynd, where he narrowly survives an explosion orchestrated by a group of Spectre operatives led by Primo, a mercenary with a bionic eye. Bond evades Primo and his men and escapes with Swann, but he believes that Swann betrayed him, prompting him to end their relationship. Five years later, Spectre agents extract MI6 scientist Valdo Obruchev, who is secretly working for Safin, from a laboratory in London, and steal Project Heracles, an experimental weapon developed under M\'s oversight that consists of biological nanobots that spread through skin contact to execute targets based on DNA. Bond, retired and living in Jamaica, is contacted by CIA ally Felix Leiter and State Department agent Logan Ash, who ask for Bond\'s help extracting Obruchev from a Spectre party in Cuba. Bond initially declines, but later accepts after an encounter with Nomi, his 007 successor, who warns him not to interfere with her extraction of Obruchev and puts him in contact with M, who refuses to answer his questions about Heracles.', 163, 'Daniel Craig as James Bond', 'Lea Seydoux as Dr. Madeleine Swann', 'Rami Malek as Lyutsifer Safin', 'Lashana Lynch as Nomi', 'Ralph Fiennes as Gareth Mallory');

-- --------------------------------------------------------

--
-- Structure de la table `panier`
--

DROP TABLE IF EXISTS `panier`;
CREATE TABLE IF NOT EXISTS `panier` (
  `panierval` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`panierval`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `panier`
--

INSERT INTO `panier` (`panierval`) VALUES
(0);

-- --------------------------------------------------------

--
-- Structure de la table `panierinfo`
--

DROP TABLE IF EXISTS `panierinfo`;
CREATE TABLE IF NOT EXISTS `panierinfo` (
  `ticketid` int(11) NOT NULL,
  `ticketamount` int(11) NOT NULL DEFAULT '1',
  `tickettype` text NOT NULL,
  `ticketname` text NOT NULL,
  `ticketdate` text NOT NULL,
  `tickethour` int(11) NOT NULL,
  `ticketprice` int(11) NOT NULL,
  `ticketbuy` int(11) NOT NULL DEFAULT '1',
  `userid` int(11) NOT NULL,
  PRIMARY KEY (`ticketid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `panierinfo`
--

INSERT INTO `panierinfo` (`ticketid`, `ticketamount`, `tickettype`, `ticketname`, `ticketdate`, `tickethour`, `ticketprice`, `ticketbuy`, `userid`) VALUES
(1918, 4, 'Child Ticket', 'BLACK ADAM', '2022-12-15', 18, 15, 1, 0),
(8030, 5, 'Student Ticket', 'JOKER', '2022-12-22', 18, 20, 1, 0),
(8114, 2, 'Student Ticket', 'JOKER', '2022-12-16', 15, 20, 1, 0);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `userid` int(11) NOT NULL,
  `username` text NOT NULL,
  `userpassword` text NOT NULL,
  `userfirstname` text NOT NULL,
  `userlastname` text NOT NULL,
  `userphonenumber` text NOT NULL,
  `usermail` text NOT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`userid`, `username`, `userpassword`, `userfirstname`, `userlastname`, `userphonenumber`, `usermail`) VALUES
(1, 'andreasbazin', 'Testphp', 'Andreas', 'BAZIN', '0769349125', 'andreas.bazin@edu.ece.fr'),
(2, 'hugoblandel', 'Testphp', 'Hugo', 'BLANDEL', '000', 'hugo.blandel@edu.ece.fr'),
(3, 'dupontlaurence', 'LaulauDupont99', 'Laurence', 'DUPONT', '0769123456', 'laurence.dupont@gmail.com'),
(4, 'perrinlea', 'LoloPerrin21+', 'Lea', 'PERRIN', '0769123456', 'lea.perrin@gmail.com'),
(5, 'romanelob', 'LobRomane125', 'Romane', 'LOB', '0769123456', 'romane.lob@gmail.com'),
(6, 'theogobert', 'goberttete52', 'Theo', 'GOBERT', '0769123456', 'theo.gobert@gmail.com');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
