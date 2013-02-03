-- phpMyAdmin SQL Dump
-- version 3.4.11.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generato il: Feb 03, 2013 alle 13:09
-- Versione del server: 5.5.28
-- Versione PHP: 5.4.6-1ubuntu1.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ugrade`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `program`
--

CREATE TABLE IF NOT EXISTS `program` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `ammission` tinyint(1) DEFAULT NULL,
  `cost` int(11) DEFAULT NULL,
  `university_id` int(11) NOT NULL,
  `program_type_id` tinyint(4) NOT NULL,
  `ranking_financial_times` decimal(10,0) NOT NULL,
  `description` text NOT NULL,
  `schedule` text NOT NULL,
  `admission` text NOT NULL,
  `sector` varchar(250) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_program_university_idx` (`university_id`),
  KEY `fk_program_type_idx` (`program_type_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dump dei dati per la tabella `program`
--

INSERT INTO `program` (`id`, `name`, `ammission`, `cost`, `university_id`, `program_type_id`, `ranking_financial_times`, `description`, `schedule`, `admission`, `sector`) VALUES
(1, 'Master in Marketing and Creativity', 1, 17000, 1, 2, 0, '', '', '', 'Business'),
(2, 'Master in Management', 0, 15900, 1, 2, 0, 'The Master in Management programme consists of four semesters with a total of 120 ECTS credits. These semesters can be completed at our five European campuses (Paris, London, Berlin, Madrid, Torino) or at one of our 70 partner universities both within Europe and beyond.\r\n\r\nThe first year is focused on advanced learning within the different fields of management through core modules and a selection of electives (15-hour or 30-hour formats). Through these electives the students can explore one or two specific areas of interest in more detail.\r\n\r\nThe second year can be used to concentrate on one of several possible specialisations, and is also used for the writing of a Master thesis on a topic of the student’s choice. Further to this, students can choose from a rich catalogue of electives (15-hour or 30-hour formats) to further customise their learning experience and plan their professional career paths. In addition, language courses are part of the Master in Management programme.\r\n\r\nBeside the academic courses two mandatory internships are part of the Master in Management programme. Students can do these internships either in their countries of study or in a third country.\r\n\r\nAlongside the core courses, electives and specialisations, all students will participate in four seminars (one per semester). These are key elements in the Master in Management programme, with all current students coming together to benefit from the internationality of the courses and the participants.\r\n\r\nDuring the first seminar, ‘Start@Europe’ (video of the 2012 edition below), more than 700 students gather at the European Parliament in Strasbourg to immerse themselves in the complexity of European decision-making.\r\n\r\nThe second seminar consists of a three-day simulation game wherein students learn to combine the different business areas and experience the links between them.\r\n\r\nThe third seminar prepares students for the writing of their Master thesis.\r\n\r\nFinally, the closing seminar, ‘Business in Europe’, consists of a series of plenary sessions and discussions with notable guest speakers from a variety of companies and international institutions.', '', '', 'Business'),
(3, 'Master in Energy Management', 1, 21000, 1, 2, 0, 'The Master in Energy Management (MEM) at ESCP Europe is a one-year, full-time postgraduate programme for those aiming towards a career in the energy sector.\r\n\r\nThis Master is open to holders of a Bachelor degree. Its objective is to help students understand the energy business environment and its fundamental economic and technological concepts. Taught in English at our London and Paris campuses, it is delivered by a ESCP Europe faculty and specially selected industry practitioners.', '', '', 'Energy Management'),
(4, 'Executive Specialized Master in Financial and Fiscal Engineering', 1, 20000, 1, 1, 0, 'The Executive Specialized Master in Financial and Fiscal Engineering lies at the crossroads between business law and finance.\r\n\r\nThe course reflects recent trends in corporate finance and law.\r\nThe aim is to develop corporate finance specialist and lawyers able to work in investment banking, in consultancy or as business lawyers.', '', '', 'Financial'),
(5, 'History', 1, 15000, 8, 3, 0, 'he whole range of the Faculty''s research interests is covered including History of Science, History of Medicine and Economic History.\r\n\r\nThe DPhil entails the writing of a thesis of up to 100,000 words which may involve either the finding of new or re-examination of known sources. The DPhil programme is normally undertaken on a full-time basis but the History Faculty is able to accept a limited number of doctoral applicants as part-time students if their profession or employment arrangements allow for the necessary commitment of time, and if they do not require a visa for studying in the United Kingdom.  \r\n\r\nThe MLitt involves writing a thesis of up to 50,000 words which is usually based on original sources, printed or manuscript. \r\n\r\nDuring the first one or two years candidates for either degree pursue a mixed course of skills training (palaeography, statistics etc. as appropriate), seminars and paper writing, while preparing a detailed outline of their thesis under the guidance of a supervisor. They may be required to attend certain classes provided for the various taught graduate programmes described below.', '', '', 'Humanities'),
(7, 'Anthropology', 0, 17500, 8, 4, 0, 'The overwhelming majority of research students in the Institute of Social and Cultural Anthropology (ISCA) conduct research under the doctoral rather than MLitt programme, either via the MSt/MSc route (nine- to twelve-month taught course, followed by an additional nine to twelve months as a Probationer Research Student) or the MPhil route (two-year taught course followed by direct transfer to the research programme).\r\n\r\nStudents who already hold a taught course degree in anthropology may be enrolled directly within ISCA as Probationer Research Students. It is preferred that doctoral students in ICEA have a suitable master’s degree as background.\r\n\r\nResearch in ISCA spans a wide range of topics in social, medical, museum, materials and visual anthropology; geographical areas covered include Europe, Africa, the Middle East, South and East Asia, and Lowland South America.\r\n\r\nDoctoral students in the Institute of Cognitive and Evolutionary Anthropology website (ICEA) conduct research in various area of cognitive and evolutionary anthropology, including the development of language and the evolution of socio-cognitive systems. ', '', '', ''),
(8, 'Anthropology', 0, 17500, 8, 4, 0, 'The overwhelming majority of research students in the Institute of Social and Cultural Anthropology (ISCA) conduct research under the doctoral rather than MLitt programme, either via the MSt/MSc route (nine- to twelve-month taught course, followed by an additional nine to twelve months as a Probationer Research Student) or the MPhil route (two-year taught course followed by direct transfer to the research programme).\n\nStudents who already hold a taught course degree in anthropology may be enrolled directly within ISCA as Probationer Research Students. It is preferred that doctoral students in ICEA have a suitable master’s degree as background.\n\nResearch in ISCA spans a wide range of topics in social, medical, museum, materials and visual anthropology; geographical areas covered include Europe, Africa, the Middle East, South and East Asia, and Lowland South America.\n\nDoctoral students in the Institute of Cognitive and Evolutionary Anthropology website (ICEA) conduct research in various area of cognitive and evolutionary anthropology, including the development of language and the evolution of socio-cognitive systems. ', '', '', '');

-- --------------------------------------------------------

--
-- Struttura della tabella `program_question`
--

CREATE TABLE IF NOT EXISTS `program_question` (
  `program_id` int(11) NOT NULL,
  `question_id` int(11) NOT NULL,
  `user_account_id` int(11) NOT NULL,
  `comment` text,
  `vote` tinyint(4) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`program_id`,`question_id`,`user_account_id`),
  KEY `fk_program_question_question1_idx` (`question_id`),
  KEY `fk_program_question_user_account_idx` (`user_account_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struttura della tabella `program_type`
--

CREATE TABLE IF NOT EXISTS `program_type` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `description` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dump dei dati per la tabella `program_type`
--

INSERT INTO `program_type` (`id`, `description`) VALUES
(1, 'Bachelor Degree'),
(2, 'Master Degree'),
(3, 'MBA'),
(4, 'PHD');

-- --------------------------------------------------------

--
-- Struttura della tabella `question`
--

CREATE TABLE IF NOT EXISTS `question` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titolo` varchar(40) DEFAULT NULL,
  `text` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dump dei dati per la tabella `question`
--

INSERT INTO `question` (`id`, `titolo`, `text`) VALUES
(1, 'Admission', 'How it was your admission process'),
(2, 'Program Experience', 'it was more theoretical or pratical? Did you do workshops, events, networking, etc...?'),
(3, 'Teachers', 'How it was an high teaching level?'),
(4, 'International enviroment', 'Were the professors, the classmates, the staff and the speakers international?'),
(5, 'Internship', 'Did you find your job? Did the school help you? Is it paid or not?');

-- --------------------------------------------------------

--
-- Struttura della tabella `university`
--

CREATE TABLE IF NOT EXISTS `university` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `country` varchar(45) DEFAULT NULL,
  `city` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name_UNIQUE` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dump dei dati per la tabella `university`
--

INSERT INTO `university` (`id`, `name`, `country`, `city`) VALUES
(1, 'ESCP Europe', 'France', 'Paris'),
(2, 'Università degli Studi di Milano', 'Italy', 'Milan'),
(3, 'Politecnico di Milano', 'Italy', 'Milan'),
(4, 'Bocconi', 'Italy', 'Milan'),
(5, 'Corvinus University', 'Hungary', 'Budapest'),
(6, 'Università Vita-Salute San Raffaele', 'Italy', 'Milan'),
(8, 'Oxford University', 'United Kingdom', 'Oxford');

-- --------------------------------------------------------

--
-- Struttura della tabella `user_account`
--

CREATE TABLE IF NOT EXISTS `user_account` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(45) CHARACTER SET big5 DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username_UNIQUE` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dump dei dati per la tabella `user_account`
--

INSERT INTO `user_account` (`id`, `username`, `password`) VALUES
(1, 'christian.nastasi@gmail.com', 'passwd'),
(2, 'fabio.fabbrucci@gmail.com', 'passwd'),
(3, 'ofunwebservice@gmail.com', 'passwd'),
(4, 'pippo@gmail.com', 'passwd'),
(5, 'pluto@gmail.com', 'passwd'),
(6, 'fdjhdfsk@jfjfj.ii', 'passwd');

--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `program`
--
ALTER TABLE `program`
  ADD CONSTRAINT `fk_program_type1` FOREIGN KEY (`program_type_id`) REFERENCES `program_type` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_program_university` FOREIGN KEY (`university_id`) REFERENCES `university` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limiti per la tabella `program_question`
--
ALTER TABLE `program_question`
  ADD CONSTRAINT `fk_program_question_program1` FOREIGN KEY (`program_id`) REFERENCES `program` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_program_question_question1` FOREIGN KEY (`question_id`) REFERENCES `question` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_program_question_user_account` FOREIGN KEY (`user_account_id`) REFERENCES `user_account` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
