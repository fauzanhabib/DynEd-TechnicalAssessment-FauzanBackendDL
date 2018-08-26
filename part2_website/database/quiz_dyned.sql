-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.5.5-10.1.31-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             8.3.0.4694
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping database structure for quiz_dyned
CREATE DATABASE IF NOT EXISTS `quiz_dyned` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `quiz_dyned`;


-- Dumping structure for table quiz_dyned.questions
CREATE TABLE IF NOT EXISTS `questions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question` varchar(100) NOT NULL,
  `ans1` varchar(80) NOT NULL,
  `ans2` varchar(80) NOT NULL,
  `ans3` varchar(80) NOT NULL,
  `ans4` varchar(80) NOT NULL,
  `ans` int(4) NOT NULL,
  `cat_id` int(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

-- Dumping data for table quiz_dyned.questions: ~11 rows (approximately)
/*!40000 ALTER TABLE `questions` DISABLE KEYS */;
INSERT INTO `questions` (`id`, `question`, `ans1`, `ans2`, `ans3`, `ans4`, `ans`, `cat_id`) VALUES
	(1, ' What does PHP stand for?', 'PHP: Hypertext Preprocessor', 'Private Home Page', 'Personal Hypertext Processor', 'none of them', 0, 1),
	(2, 'How do you write "Hello World" in PHP', 'echo "Hello World";', '"Hello World";', ' Document.Write("Hello World");', 'none of them', 0, 1),
	(3, ' The PHP syntax is most similar to:', 'Perl and C', 'VBScript', 'JavaScript', 'none of them', 0, 1),
	(4, 'When using the POST method, variables are displayed in the URL:', 'true', 'false', 'none of them', 'return 1', 1, 1),
	(5, 'PHP server scripts are surrounded by delimiters, which?', '&lt;?php...?&gt;', '&lt;?php&gt;...&lt;/?&gt;', '&lt;&amp;&gt;...&lt;/&amp;&gt;', '&lt;script&gt;...&lt;/script&gt;', 0, 1),
	(6, 'All variables in PHP start with which symbol?', '@', '%', '$', '&amp;', 2, 1),
	(7, '', '', '', '', '', 0, 0),
	(8, 'What is the correct way to end a PHP statement?', '.', ';', 'new line', '&lt;php&gt;', 1, 1),
	(9, 'How php scripts for include file?', 'include text.php', 'include include text.php', 'include \'text.php\';', 'none of them', 2, 1),
	(10, 'session started with php?', 'session start();', 'start_session();', 'session_start();', 'start();', 2, 1),
	(11, 'function for change the current directory?', 'chdir();', 'change();', 'changedir();', 'chroot();', 0, 1);
/*!40000 ALTER TABLE `questions` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
