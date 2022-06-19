-- MariaDB dump 10.19  Distrib 10.4.24-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: bz
-- ------------------------------------------------------
-- Server version	10.4.24-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `clanci`
--

DROP TABLE IF EXISTS `clanci`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `clanci` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `datum` varchar(32) CHARACTER SET utf8 COLLATE utf8_croatian_ci NOT NULL,
  `naslov` varchar(64) COLLATE latin2_croatian_ci NOT NULL,
  `sazetak` text COLLATE latin2_croatian_ci NOT NULL,
  `tekst` text COLLATE latin2_croatian_ci NOT NULL,
  `slika` varchar(64) COLLATE latin2_croatian_ci NOT NULL,
  `kategorija` varchar(64) COLLATE latin2_croatian_ci NOT NULL,
  `arhiva` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=latin2 COLLATE=latin2_croatian_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `clanci`
--

LOCK TABLES `clanci` WRITE;
/*!40000 ALTER TABLE `clanci` DISABLE KEYS */;
INSERT INTO `clanci` VALUES (19,'17.06.2022.','Vijest xyz','Ovo je naslov za XYZ vijest!','Ova vijest nije arhivirana. U nastavku je pasetan lorem ipsum.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Duis facilisis eros eget lacus efficitur volutpat. Quisque dictum velit vel tempor fermentum. Donec vel arcu metus.\r\n\r\nAliquam erat volutpat. Cras eu facilisis tortor, eu dapibus arcu. Suspendisse eu arcu eu metus auctor faucibus. Vivamus rhoncus dictum urna, in fringilla quam pretium sed. Donec quis dui a.','Youth-soccer-indiana.jpg','sport',0),(21,'17.06.2022.','IMAM ideju za nasov','      Ovo je opis naslova za koji više nemam ideja...Go, sports!!','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam vitae tempor ex, et posuere arcu. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis gravida sollicitudin venenatis. Sed dapibus nibh aliquet, interdum nisl et, viverra diam. Donec rhoncus metus justo, sit amet feugiat justo vestibulum et. Nullam ac metus non metus condimentum accumsan. Nunc laoreet nunc eget lectus tempus, vitae ultricies urna tincidunt. Nunc aliquet dui dignissim, dapibus ligula et, luctus velit. Aliquam nulla ex, gravida ut vehicula non, viverra in orci. Curabitur iaculis enim.','downloadd.png','sport',0),(22,'17.06.2022.','Prva Sportska vijest','Ovo je neka prva sportska vijest za kategorije sport','Ovo je sadržaj prve vijesti.\r\nSvi kolege na kolegiju su super i profeori i asistenti su top, bas dobar predmet i ostalo.\r\nSport je generalno super stvar a prva vijest iz zadane slike odnosi se na nekog mladog njemačkog golmana.\r\n\r\nPošto ne razumijem njemački, recimo da je promijenio klub i da je napravio transfer za neke velike pare. Brvo igrač!\r\n\r\nUvijeti su mu bolji i svi su sretni. Do sljedećeg transfera, želimom sve najbolje svima nama, igraču i klubovima. \r\n\r\nŽivjeli! ','prva.png','sport',0),(23,'17.06.2022.','Druga vijest iz sporta','Ovo je druga vijest vezana uz sport. Go, druga vijest!','Druga vijest vezana je uz nekog trenera koji je očito napravio neke velike stvari za svoj klub.\r\n\r\nVelika je mogućnost i da je napravio nešto loše za svoj klub, ali pošto za razumijevanje hardkodirane vijesti treba znati njemački-sve je moguće! \r\n\r\nRecimo da je trener donio prave odluke i napravio super stvari za svoj tim i da ovo nije vijest za crnu kroniku sporta.\r\n\r\nStoga čestitamo treneru i klubu i želimo im dobru proslavu! ','druga.jpg','sport',0),(24,'17.06.2022.','Treća!!!','Treća vijest za prikazana na ovoj stranici  je...','S obziromda ne znamo čemu se radi u ovoj vijesti a i nemam više inspiracije, copy-paste-at ćemo ovu rečenicu 3 puta.\r\n\r\nS obziromda ne znamo čemu se radi u ovoj vijesti a i nemam više inspiracije, copy-paste-at ćemo ovu rečenicu 3 puta.\r\n\r\nS obziromda ne znamo čemu se radi u ovoj vijesti a i nemam više inspiracije, copy-paste-at ćemo ovu rečenicu 3 puta.\r\n\r\nS obziromda ne znamo čemu se radi u ovoj vijesti a i nemam više inspiracije, copy-paste-at ćemo ovu rečenicu 3 puta.','treca.jpg','sport',0),(25,'17.06.2022.','Neka vijest iz kulture','Ovo je kraki sadržaj koji opisuje sadržaj ove vijesti','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam turpis quam, sodales sed volutpat a, maximus vitae velit. Nunc pretium est vitae eros tincidunt, in sagittis ligula hendrerit. Vestibulum non lorem nunc. Mauris ut accumsan felis.\r\n\r\nPhasellus ac tempus turpis, vitae posuere odio. Mauris nec bibendum libero. Sed rhoncus ante eget purus posuere, in blandit urna malesuada. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras dignissim euismod erat, id pharetra lorem feugiat eget. \r\n\r\nMaecenas vehicula magna et auctor hendrerit. Pellentesque vitae magna vitae quam ullamcorper placerat a et nulla. Integer sem metus, cursus nec varius in, finibus id nibh. Aliquam at lectus lorem. Donec','cult1.jpg','kultura',0),(26,'17.06.2022.','Kultura danas!!','Današnja ponuda kulturnih događanja u Berlinu','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam turpis quam, sodales sed volutpat a, maximus vitae velit. Nunc pretium est vitae eros tincidunt, in sagittis ligula hendrerit. Vestibulum non lorem nunc. Mauris ut accumsan felis. Phasellus ac tempus turpis, vitae posuere odio. Mauris nec bibendum libero. Sed rhoncus ante eget purus posuere, in blandit urna malesuada. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras dignissim euismod erat, id pharetra lorem feugiat eget. Maecenas vehicula magna et auctor hendrerit. Pellentesque vitae magna vitae quam ullamcorper placerat a et nulla. Integer sem metus, cursus nec varius in, finibus id nibh. Aliquam at lectus lorem. Donec','berlin-reichstag-bicycles.jpg','kultura',0),(27,'17.06.2022.','Sandra Maischenberger je tu!','Ovo je članak o Sandri i njezinom suprugu ','Sandra je u zadnje vrijeme često viđena u društvu svoga supruga Bezimenog.\r\n\r\nBezimeni ima odličan stil za što je ,gotovo sigurno, zaslužena gospođa Maischenberger.\r\n\r\nPar se u zadnjih nekoliko javnih pojavljivanja doimao staloženo i skladno, stoga im želimo i dalje mirnu i modno osviještenu budućnost.','cetvrta.png','kultura',0),(28,'17.06.2022.','Stariji gospodin!!','Ovo je vijest o Berlinskom slavuju, ili kome god već','Iskrno, ne znam je li on slavuj ii skladatelj ili drugo lice estradne Berlinske scene, ali zasigurno zaslužuje jedan lorem ipsum!\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. In rutrum tincidunt sem, eget pretium nulla auctor at. Praesent ut rutrum mauris. Donec vehicula tellus nec fermentum tempus. Donec rhoncus, sem et pulvinar feugiat, felis enim consequat nisl, id sagittis augue augue venenatis elit. Ut vehicula, ligula at malesuada mattis, diam nunc vestibulum est, eu sollicitudin.','peta.png','kultura',0),(29,'17.06.2022.','Zadnja vijest','Ovaj članak donosi zadnju izmišljenu vijest iz kategorije kulture.','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque quis felis et nunc tempor luctus at viverra velit. Sed porta dapibus lacus ut ornare. Etiam non fermentum eros. Vivamus euismod, velit lobortis pellentesque dictum, ex orci euismod dui, vel semper tellus diam sit amet felis. Duis eget pellentesque ante, non efficitur lacus. Nulla ac ornare ex, quis mollis sapien. Fusce sem ipsum, eleifend a pellentesque eu, iaculis a felis. Mauris sit amet dui eget enim ultrices ultricies. Interdum et malesuada fames ac ante ipsum primis.','sesta.jpg','kultura',0),(36,'17.06.2022.','dfgvb',' xfcgvjhbkjndftgz tfuzbn','xfcgvjhbkjndftgz tfuzbnxfcgvjhbkjndftgz tfuzbnxfcgvjhbkjndftgz tfuzbnxfcgvjhbkjndftgz tfuzbn\r\n\r\nxfcgvjhbkjndftgz tfuzbnxfcgvjhbkjndftgz tfuzbnxfcgvjhbkjndftgz tfuzbnxfcgvjhbkjndftgz tfuzbnxfcgvjhbkjndftgz tfuzbnxfcgvjhbkjndftgz tfuzbnxfcgvjhbkjndftgz tfuzbnxfcgvjhbkjndftgz tfuzbnxfcgvjhbkjndftgz tfuzbnxfcgvjhbkjndftgz tfuzbnxfcgvjhbkjndftgz tfuzbnxfcgvjhbkjndftgz tfuzbnxfcgvjhbkjndftgz tfuzbn\r\n\r\nxfcgvjhbkjndftgz tfuzbnxfcgvjhbkjndftgz tfuzbnxfcgvjhbkjndftgz tfuzbnxfcgvjhbkjndftgz tfuzbnxfcgvjhbkjndftgz tfuzbnxfcgvjhbkjndftgz tfuzbn','druga.jpg','sport',1);
/*!40000 ALTER TABLE `clanci` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `korisnik`
--

DROP TABLE IF EXISTS `korisnik`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `korisnik` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ime` varchar(30) COLLATE latin2_croatian_ci NOT NULL,
  `prezime` varchar(30) COLLATE latin2_croatian_ci NOT NULL,
  `username` varchar(30) COLLATE latin2_croatian_ci NOT NULL,
  `password` varchar(255) COLLATE latin2_croatian_ci NOT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin2 COLLATE=latin2_croatian_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `korisnik`
--

LOCK TABLES `korisnik` WRITE;
/*!40000 ALTER TABLE `korisnik` DISABLE KEYS */;
INSERT INTO `korisnik` VALUES (1,'Karla','Soldo','amy727','$2y$10$y5uibqvodhoFuZYOnvDQneHwMMgUkkUK/cy1c6aljWY',0),(2,'xcfv','dfvgb','yxrdtcfzgv','$2y$10$GgEdjNp385u5HVZzGHJ4xuGq28.Os9DXdqfpF7C6YZc',0),(3,'Karla','dfvgb','admiiiin','$2y$10$pVHAfzWjGEZ5rACVHAWAT.H/iP1KOfxLEq3DqpFUk1i',0),(4,'Karla','dfvgb','hhhhh','$2y$10$652Nm9eWTxXhBm1bXQ1bVepcn.JtVAgZQBYnqY/K6m4Qtcarqw0J2',1),(5,'Karla','Soldo','vjekom123','$2y$10$VsD/xIMwiD7CYYx/skmU4.IlHGCSlBRUm5nuW7RYC50RqiczJ/qSS',0),(7,'admin','admin','admin','$2y$10$P2cjoQtPIofS4fiY4etqouowTOUXNUxXEntdzLHJ9E8iwLeU0PcKa',0);
/*!40000 ALTER TABLE `korisnik` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-06-18 20:29:41
