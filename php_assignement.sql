-- phpMyAdmin SQL Dump
-- version 4.4.15.9
-- https://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 21, 2017 at 05:45 PM
-- Server version: 5.6.35
-- PHP Version: 7.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php_assignement`
--

-- --------------------------------------------------------

--
-- Table structure for table `komentari`
--

CREATE TABLE IF NOT EXISTS `komentari` (
  `id` int(11) NOT NULL,
  `komentar` text,
  `kategorija` varchar(125) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `komentari`
--

INSERT INTO `komentari` (`id`, `komentar`, `kategorija`) VALUES
(12, 'neki komentar', 'bikes');

-- --------------------------------------------------------

--
-- Table structure for table `korisnici`
--

CREATE TABLE IF NOT EXISTS `korisnici` (
  `id` int(11) NOT NULL,
  `korisnickoIme` varchar(256) NOT NULL,
  `sifra` varchar(256) DEFAULT NULL,
  `email` varchar(256) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `korisnici`
--

INSERT INTO `korisnici` (`id`, `korisnickoIme`, `sifra`, `email`) VALUES
(1, 'asda', 'root', 'sinisa@asd'),
(2, 'q', 'q', 'q@q.com'),
(3, 'qw', NULL, 'qw@qw.qw'),
(4, 'qqq', NULL, 'qqq@qqq'),
(5, 'tttt', 't', 'ttt@ttt'),
(6, '', 'q', 'q@q.com'),
(7, 'Aleksander', '1', 'aleksa@aleksa.com');

-- --------------------------------------------------------

--
-- Table structure for table `vesti`
--

CREATE TABLE IF NOT EXISTS `vesti` (
  `id` int(11) NOT NULL,
  `naslov` varchar(124) DEFAULT NULL,
  `text` text,
  `slika` varchar(250) DEFAULT NULL,
  `kategorija` varchar(256) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vesti`
--

INSERT INTO `vesti` (`id`, `naslov`, `text`, `slika`, `kategorija`) VALUES
(1, 'BMW M3', 'The BMW M3 is a high-performance version of the BMW 3 Series, developed by BMW in-house motorsport division, BMW M GmbH. M3 models have been derived from the E30, E36, E46, E90/E92/E93 and F80.\r\n\r\nThe initial model was a coupe body style. At times the M3 has also been available in saloon and convertible body styles. Due to the 4 Series coupe and convertible models no longer being part of the 3 Series range from 2015,[1][2] the F82/F83 coupe and convertible models are now called the M4. The M3 name remains in use solely for the saloon version.\r\n\r\nUpgrades over the "standard" 3 Series automobiles include more powerful and responsive engines, improved handling/suspension/braking systems, aerodynamic body enhancements, lightweight components, and interior/exterior accents with the tri-colour "M" (Motorsport) emblem.', 'libs/images/bmw3.jpg', 'cars'),
(2, 'McLaren p1', 'The McLaren P1 is a British limited-production plug-in hybrid sports car produced by McLaren. The concept car was capable of reaching speeds of 217 mph (350 km/h) with the limiter on. Debuted at the 2012 Paris Motor Show, retail began in the UK in October 2013 and all 375 units were sold out by November. Production ended in December 2015. The United States accounted for 34% of the units and Europe for 26%.\r\n\r\nIt was considered to be the successor to the F1, utilizing hybrid power and Formula 1 technology, but did not have the same three seat layout as its predecessor. Like the F1, the P1 is a mid-engine, rear wheel drive design that used a carbon fibre monocoque and roof structure safety cage concept called MonoCage, which is a development of the MonoCell first used in the MP4-12C and then in subsequent models. Its main competitors were the LaFerrari and the Porsche 918. They are all similar in specifications and performance, and in a race round Silverstone circuit they were all within half a second of each other, the P1 finishing first at 58.24 sec and the LaFerrari finishing last at 58.58 sec; the Porsche was in-between with 58.46 sec.', 'libs/images/mcp1.jpg', 'cars'),
(3, 'Volkswagen Beetle', 'The Volkswagen Beetle – officially the Volkswagen Type 1, informally in Germany the Käfer (German, "beetle") and in parts of the English-speaking world the Bug – is a two-door, four-passenger, rear-engine economy car that was manufactured and marketed by German automaker Volkswagen (VW) from 1938 until 2003.\r\n\r\nThe need for this kind of car, and its functional objectives, was formulated by the leader of Nazi Germany, Adolf Hitler, who wanted a cheap, simple car to be mass-produced for his country''s new road network. Hitler contracted Ferdinand Porsche in 1934 to design and build it. Porsche and his team took until 1938 to finalise the design. The influence on Porsche''s design of other contemporary cars, such as the Tatra V570 and the work of Josef Ganz remains a subject of dispute. The result was one of the first rear-engined cars since the Brass Era. With 21,529,464 produced, the Beetle is the longest-running and most-manufactured car of a single platform ever made.', 'libs/images/vw.jpg', 'cars'),
(4, 'Yamaha R1', 'Yamaha launched the YZF-R1 after redesigning the Genesis engine to create a more compact engine by raising the gearbox input shaft and allowing the gearbox output shaft to be placed beneath it. This design feature was revolutionary, called a ''stacked gearbox'', it has set a precedent for other manufacturers to follow. This "compacting" of the engine made the total engine length much shorter overall, thereby, allowing the wheelbase of the motorcycle to be shortened significantly. This, in turn, allowed the frame design to place the weight of the engine in the frame to aid handling because of an optimized center of gravity. The swingarm was able to be made longer without compromising the overall wheelbase, which was a short 1385mm. Four Kehin CV carburetors of 40mm diameter fed fuel to the engine, 140 bhp was claimed by the factory, at the countershaft. USD 41mm front forks supplied by KYB mounted 300mm semi-floating disk brakes. The instrument panel was electrical with, self diagnosis system inbuilt, and digital speed readout. The exhaust system utilised an EXUP valve, which controlled the exhaust gas flow, to maximise engine power production at all revs, creating a high powered but also torquey engine. The twin headlights were powerful. The Yamaha YZF-R6 was introduced in 1999 as the 600 cc version of the R1 super bike.', 'libs/images/yamaha.jpg', 'bikes'),
(5, 'Ducati', 'Ducati Motor Holding S.p.A. is an Italian company that designs and manufactures motorcycles. Headquartered in Bologna, Italy, Ducati is owned by German automotive manufacturer Audi through its Italian subsidiary Lamborghini, which is all owned by the Volkswagen Group.n 1926 Antonio Cavalieri Ducati and his three sons, Adriano, Marcello, and Bruno Cavalieri Ducati; founded Societa Scientifica Radio Brevetti Ducati in Bologna to produce vacuum tubes, condensers and other radio components. In 1935 they had become successful enough to enable construction of a new factory in the Borgo Panigale area of the city. Production was maintained during World War II, despite the Ducati factory being a repeated target of Allied bombing.', 'libs/images/ducati.jpg', 'bikes'),
(6, 'Honda CBR', 'The Honda CBR600RR is a 599 cc (36.6 cu in) sport bike, part of the CBR series that was introduced by Honda in 2003 as a race replica version of Honda''s CBR600F series. It won every Supersport World Championship title from 2002 to 2008, and again in 2010 and 2014.The Honda CBR models are a series of Honda sport bikes. With the exception of the single-cylinder CBR125R, CBR150R, CBR250R and CBR300R, all CBR motorbikes have inline engines. Less sporting/general models make up the CB series.', 'libs/images/honda.jpg', 'bikes'),
(7, 'Kawasaki', 'The Kawasaki Ninja H2 is a "supercharged supersport" class motorcycle in the Ninja sportbike series, manufactured by Kawasaki Heavy Industries, featuring a variable-speed centrifugal-type supercharger.[The H2R with 310 horsepower (230 kW) and 326 horsepower (243 kW) with ram air,[1] is the most powerful and fastest production motorcycle on the market. The H2R track-only variant has 50% more power than the fastest street-legal motorcycles, while the street-legal H2 has a lower power output of 200 hp (150 kW)]210 hp (160 kW)with ram air.\r\n\r\nIts namesake is the 750 cc Kawasaki H2 Mach IV, an inline triple that was introduced by Kawasaki in 1972 to "disrupt what it saw as a sleeping motorcycle market".', 'libs/images/kawasaki.jpg', 'bikes'),
(8, 'Cruise Ships', 'A cruise ship or cruise liner is a passenger ship used for pleasure voyages, where the voyage itself and the ship''s amenities are a part of the experience, as well as the different destinations along the way, i.e., ports of call. Transportation is not the only purpose of cruising, particularly on cruises that return passengers to their originating port (also known as a closed-loop cruise), with the ports of call usually in a specified region of a continent. There are even "cruises to nowhere" or "nowhere voyages" where the ship makes 2–3 night round trips without any ports of call.[1]\r\n\r\nBy contrast, dedicated transport oriented ocean liners do "line voyages" and typically transport passengers from one point to another, rather than on round trips. Traditionally, a liner for the transoceanic trade will be built to a higher standard than a typical cruise ship, including higher freeboard and stronger plating to withstand rough seas and adverse conditions encountered in the open ocean, such as the North Atlantic. Ocean liners also usually have larger capacities for fuel, food, and other stores for consumption on long voyages, compared to dedicated cruise ships, but they no longer exist with the exception of some preserved liners and Queen Mary 2 when on scheduled North Atlantic voyages.', 'libs/images/ship.jpg', 'ships'),
(9, 'Welcome to Auto Moto web site', 'You can here find some new news about new cars, motorbikes or ships', 'libs/images/cover.jpg', 'main');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `komentari`
--
ALTER TABLE `komentari`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `korisnici`
--
ALTER TABLE `korisnici`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vesti`
--
ALTER TABLE `vesti`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `komentari`
--
ALTER TABLE `komentari`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `korisnici`
--
ALTER TABLE `korisnici`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `vesti`
--
ALTER TABLE `vesti`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
