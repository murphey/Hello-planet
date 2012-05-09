-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Machine: localhost
-- Genereertijd: 24 Apr 2012 om 10:28
-- Serverversie: 5.1.53
-- PHP-Versie: 5.3.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `irollator`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `producten`
--

CREATE TABLE IF NOT EXISTS `producten` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `naam` varchar(100) NOT NULL,
  `beschrijving` varchar(1500) NOT NULL,
  `prijs` decimal(8,2) NOT NULL,
  `kwaliteit` int(11) NOT NULL,
  `verzendkosten` float NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=77 ;

--
-- Gegevens worden uitgevoerd voor tabel `producten`
--

INSERT INTO `producten` (`product_id`, `naam`, `beschrijving`, `prijs`, `kwaliteit`, `verzendkosten`) VALUES
(3, 'Rollz motion', ' De Rollz Motion is uniek en combineert twee functies in een stijlvol pakket. In een simpele handomdraai transformeert u de Rollz van een stabiele en veilige rollator in een comfortabele rolstoel. Niet voor niets wordt gezegd dat u met de Rollz verder komt.  De Rollz is standaard voorzien van verschillende comfort- en veiligheidverhogende details, zoals solide trommelremmen, schuimgevulde achterwielen, een ruime bagagetas en een comfortabel zitkussen. Om de Rollz eenvoudig mee te kunnen nemen in de auto, kunt u hem eenvoudig in de breedte opvouwen.', '495.10', 60, 33),
(39, 'Active rollator', '<p>De Active rollator is een Noors kwaliteitsproduct  en heeft in hoogte verstelbare duwhandvatten.</p><p> Ook het zitje is in hoogte verstelbaar. De remkabels zijn in het frame verborgen, zodat de kabels niet achter een stoel of stoel blijven hangen. </p><p>De rollator is voorzien van een trapdop, waardoor met een kleine inspanning stoepen of drempels kunnen worden genomen. </p><p>Heeft u de Active rollator even niet nodig, dan is deze eenvoudig en veilig inklapbaar door een makkelijk te bedienen handel.</p>  <p>Het afsluitbare en afneembare mandje is een veilige opbergplek voor uw boodschappen en portemonnee. </p><p>De Active is leverbaar in de kleur zilver met grijze accenten.</p>', '441.00', 10, 5),
(40, 'Active light Olympos', 'De Olympos is de volgende stap als het gaat om comfortabel, met name buitenshuis, lopen. <br>De grote wielen maken het makkelijker over ruwe oppervlaktes heen te rijden en de rubberen banden zijn zacht genoeg om schokken te verminderen. Heeft u snel problemen met pijnlijke gewrichten, dan is deze rollator een uitstekende keus.', '315.00', 70, 10),
(50, 'Topro Troja 2G', 'De nieuwe Topro Troja 2G neemt een voorsprong op de concurrentie als het gaat om veiligheid, flexibiliteit en comfort. Zijn voorganger, de TOPRO Troja Classic werd als winnaar gekozen van de Duitse <i>Stiftung Warentest</i> editie 9 / 2005.<br>Sindsdien is TOPRO bezig geweest met de ontwikkeling van de TOPRO Troja 2G op basis van onderzoek en feedback van gebruikers en therapeuten.Het resultaat is de 2e generatie Topro Troja met nog meer gebruiksvriendelijke functies, een hoge focus op veiligheid en comfort.', '462.00', 72, 6),
(60, 'Volaris-s7-Smart', 'De Zweedse Volaris S7 Smart is een lichte en stabiele designrollator met oranje accenten. Deze rollator is geschikt voor iedere lichaamslengte door de makkelijk te verstellen handvatten en het in hoogte te verstellen zitje. <br>De vouwbare X-type constructie maakt het tevens mogelijk om de rollator makkelijk op te vouwen en eventueel vrijstaand aan de kant te zetten. <br>De S7 Smart wordt gemaakt in Zweden van volledig recyclebare en lichte materialen. De rollator is voorzien van het VABS remsysteem met een ergonomische parkeerstand voor maximale gebruiksvriendelijkheid.', '368.00', 73, 3.44),
(76, 'Dolomate jazz', 'De Dolomate jazz overtuigt door het totale concept van wiel tot handgreep. De Dolomate jazz is leverbaar in 2 uitvoeringen en leverbaar met een pallet van toebehoor. Winnaar van diverse prijzen om zijn geweldige design. Deze rollator is zeer makkelijk om mee te nemen in de auto omdat hij zeer compact is en erg licht!  Dolomate jazz is een technische hoogwaardige rollator met een modern design.<br> Loopt zeer soepel en biedt de beste ondersteuning tijdens de wandeling.', '338.00', 74, 5.5);
