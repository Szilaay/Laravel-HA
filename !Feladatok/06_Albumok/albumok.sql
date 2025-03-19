-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2025. Már 09. 20:53
-- Kiszolgáló verziója: 10.4.32-MariaDB
-- PHP verzió: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `albumok`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `album`
--

CREATE TABLE `album` (
  `album_id` int(11) NOT NULL,
  `album_cim` text NOT NULL,
  `megjelenes` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- A tábla adatainak kiíratása `album`
--

INSERT INTO `album` (`album_id`, `album_cim`, `megjelenes`) VALUES
(1, 'Az Ózdi Hős', '2003'),
(2, 'Majd Megszokod', '2002'),
(3, 'Jön A Gólem!', '2004'),
(4, 'Jégre Teszlek', '1997'),
(5, 'Helldorado', '1999'),
(6, 'Fekete Virág', '2005'),
(7, 'Elég Volt!', '2010'),
(8, 'Hagyd Meg Nekem A Dalt', '2004'),
(9, 'Bárhol Jársz', '2005'),
(10, 'És Mégis Forog A Föld', '2007'),
(11, 'Maradandók Tisztelettel', '2007'),
(12, 'Vigaszdíj', '2005'),
(13, 'Csak Egy Vallomás', '1991'),
(14, 'II. Jimmy', '1992'),
(15, 'Számíthatsz Rám', '1993'),
(16, 'Jimmy\'s Roussos', '1994'),
(17, 'IV. Jimmy', '1994'),
(18, 'Szeress, Hogy Szerethessenek!', '1995'),
(19, 'Mit Akarsz A Boldogságtól?', '1996'),
(20, 'Fogadj Örökbe!', '1998'),
(21, 'Dalban Mondom El', '1999');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `eloado`
--

CREATE TABLE `eloado` (
  `eloado_id` int(11) NOT NULL,
  `eloado_nev` text NOT NULL,
  `bio` text NOT NULL,
  `weboldal` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- A tábla adatainak kiíratása `eloado`
--

INSERT INTO `eloado` (`eloado_id`, `eloado_nev`, `bio`, `weboldal`) VALUES
(1, 'Majka', 'Majoros Péter, művésznevén Majka (Ózd, 1979. augusztus 5. –) Fonogram-díjas magyar rapper, dalszövegíró, műsorvezető. Majoros Péter az RTL klub Való Világ című valóságshow-ban tűnt fel 2002-ben, majd műsorvezetőként, színészként és Dopeman segítségével rapperként folytatta pályafutását.', 'majkashop.hu'),
(2, 'Bëlga', 'A Bëlga egy magyar könnyűzenei együttes, amely 1998 tavaszán alakult Budapest XVII. kerületében. Szövegeikre gyakran jellemző a szatirikus és társadalomkritikus hangvétel. A csapat alapító tagjai: Bauxit, Még5lövés és Tokyo, mindannyian A Tan Kapuja Buddhista Főiskola hallgatói voltak. Az 1990-es évek végén a Tilos Rádió egyik műsorában találkoztak, ahol megismerték DJ Tituszt és Sickratmant (akkor még „Secretman” volt). 2001-ben léptek fel először a Sziget Fesztiválon.  2003 tavaszán Sickratman és Lord Cursor elhagyta a csapatot. ', 'www.belga.hu'),
(3, 'Ganxsta Zolee és a Kartel', 'Ganxsta Zolee, születési nevén Zana Zoltán, becenevén Döglégy (Budapest, 1966. január 7. –) magyar rapper, dobos, előadóművész és színész. A Ganxsta Zolee és a Kartel nevű gengszter hiphop együttes frontembere (1995-től). A zenekar elhíresült szókimondó (gyakran vulgáris) szövegeiről. A Ganxsta Zolee és a Kartel együttes tagjai több alkalommal viselkedtek botrányosan a fellépéseik során. Zana elmondása szerint egyszer egy falunapon keveredtek verekedésbe egy vendéggel. Később Zana egy céges karácsonyi rendezvényen okozott súlyos, 8 napon túl gyógyuló sérüléseket az őket meghívó cég alkalmazottjának, majd a rendőrség kiérkezése előtt a zenekar elmenekült.', ''),
(4, 'Tóth Gabi', 'Tóth Gabi (Tapolca, 1988. január 17. –) magyar énekesnő. A 2005-ös Megasztár résztvevője, 2013-tól 2016-ig az X-Faktor egyik mentora, az Eurovíziós Dalfesztiválok magyarországi előválogatóinak résztvevője 2012-ben és 2017-ben. Nővére Tóth Vera énekesnő, az első Megasztár győztese.', 'www.tothgabi.hu'),
(5, 'Gáspár Laci', 'Gáspár Laci, polgári nevén Gáspár László (Balassagyarmat, 1979. június 12. –) énekes, dalszerző. Énekelni 7 éves korában kezdett komolyabban. Első sikerét az iskolai Ki Mit Tud?-on aratta, egy Demjén Ferenc-dallal megnyerte az ének kategóriát. Jutalmul az igazgató egy basszusgitárral ajándékozta meg. Autodidakta módon, kitartó szorgalommal sajátította el a hangszer használatának fortélyait. Ekkor ismerkedett meg olyan világhírű jazz-zenészek szerzeményeivel, mint Marcus Miller, Jaco Pastorius és George Benson. Ez az élmény a későbbiekben alapvetően meghatározta zenei ízlésvilágát, melyre a jazz mellett a soul és az R\'n\'B is hatott. A munka mellett minden idejét a basszusgitározásnak szentelte. Dolgozott útépítőként, gyertyaöntőként, volt bányász, festő és villanyszerelő, végül a helyi bútorgyárban helyezkedett el. 18 éves korában nősült meg, 6 év házasság után született meg kislánya, Mirjam.', ''),
(6, 'Pápai Joci', 'Pápai József vagy közismert nevén Pápai Joci (Tata, 1981. szeptember 22. –) Balázs János-díjas roma származású magyar énekes. Az előadó a zenével már korán kapcsolatba került, mivel bátyja hatására már 4 évesen elkezdett gitározni, dalokat írni. Fejlődése során hatással volt rá a 60-as, 70-es évek zenéje, a rock, a pop, soul, R&B zenei stílus. A nagyközönség előtt először 2005-ben mutatkozott be a TV2 Megasztár című tehetségkutató műsorának második évadában. A műsorban a vigaszágas körig jutott, ahova a Blikk olvasói szavazták be. A tehetségkutató után önálló nagylemezzel debütált.', ''),
(7, 'Zámbó Jimmy', 'Zámbó Imre, ismertebb nevén Zámbó Jimmy (Budapest, 1958. január 20. – Budapest, 2001. január 2.) kétszeres EMeRTon-díjas magyar énekes. Az 1990-es évek egyik legsikeresebb előadója. A magyar popszakma egyik legsikeresebb magyar énekese. Rajongói „A király”-ként tisztelték és emlegették. Legnagyobb hatást a görög énekes, Demis Roussos gyakorolt rá, akinek stílusa érződik Jimmy dalain. Saját, otthonában tartott fegyverével 2001. január 2-án hajnalban fejbe lőtte magát, majd délelőtt 10 órakor belehalt sérüléseibe.', 'zambojimmy.5mp.eu');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `szamok`
--

CREATE TABLE `szamok` (
  `szamok_id` int(11) NOT NULL,
  `eloado_id` int(11) NOT NULL,
  `szam_cim` text NOT NULL,
  `szam_hossz` time NOT NULL,
  `album_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- A tábla adatainak kiíratása `szamok`
--

INSERT INTO `szamok` (`szamok_id`, `eloado_id`, `szam_cim`, `szam_hossz`, `album_id`) VALUES
(1, 1, 'A nagy nap (intro)', '00:02:21', 1),
(2, 1, 'Az ózdi hős', '00:05:00', 1),
(3, 1, 'Én mindig is az...', '00:04:43', 1),
(4, 1, 'Kiszavazó show', '00:04:53', 1),
(5, 1, 'Még mindig minden úgy van', '00:05:30', 1),
(6, 1, 'Ózd meg a nyóc', '00:05:16', 1),
(7, 1, 'A játékos', '00:04:16', 1),
(8, 1, 'Mér\' van az, hogy mégis jó?', '00:04:16', 1),
(9, 1, 'Dolgok', '00:04:34', 1),
(11, 1, 'A fasz kivan', '00:03:44', 1),
(12, 1, 'Mosd ki a szennyest!', '00:01:33', 1),
(13, 1, 'A Massino család', '00:05:44', 1),
(14, 1, 'Bazdki parádé', '00:00:47', 1),
(16, 2, 'Ovi', '00:05:45', 2),
(17, 2, 'Maci', '00:04:10', 2),
(18, 2, 'Lyuk-lyuk', '00:05:34', 2),
(19, 2, 'Nemzeti hip-hop', '00:05:28', 2),
(20, 2, 'Külföldi', '00:03:42', 2),
(21, 2, 'Kalauz', '00:03:19', 2),
(22, 2, 'Bandzsa (dub)', '00:03:37', 2),
(23, 2, 'Hello', '00:05:49', 2),
(24, 2, 'Sámán', '00:01:32', 2),
(25, 2, 'Erős kép', '00:04:32', 2),
(26, 2, 'Gólem', '00:03:04', 3),
(27, 2, 'Az a baj', '00:05:37', 3),
(28, 2, 'Lottó', '00:03:55', 3),
(29, 2, 'Gyere kislány, gyere', '00:05:19', 3),
(30, 2, 'Bëlga', '00:03:05', 3),
(31, 2, 'Királyok a házban', '00:06:07', 3),
(32, 2, 'Mocskos', '00:05:45', 3),
(33, 2, 'Hazakísérlek', '00:02:48', 3),
(34, 2, 'Képviselő boogie', '00:04:05', 3),
(35, 2, '100', '00:04:21', 3),
(36, 2, 'Az átalakulás vége', '00:04:01', 3),
(37, 2, 'Huszonkét férfi', '00:06:04', 3),
(38, 2, 'Probléma', '00:04:34', 3),
(39, 2, 'Mr. Márka', '00:03:54', 3),
(40, 2, 'Új világ', '00:04:04', 3),
(41, 2, 'A producer dala', '00:05:27', 3),
(42, 3, 'Intro', '00:01:33', 4),
(43, 3, 'Kartel Anthem IV.', '00:00:12', 4),
(44, 3, 'Don Döglégy', '00:01:59', 4),
(45, 3, 'Ki a fasza gyerek?', '00:06:54', 4),
(46, 3, 'Keleti oldal – nyugati oldal', '00:04:44', 4),
(47, 3, 'Heroin', '00:04:29', 4),
(48, 3, 'Gyors sávban élek', '00:04:45', 4),
(49, 3, 'Nincs semmi jobb, mint egy ringyó', '00:03:13', 4),
(50, 3, 'Rossz vér', '00:03:55', 4),
(51, 3, 'Fekete ló', '00:03:21', 4),
(52, 3, 'Stricik és kurvák', '00:05:44', 4),
(53, 3, 'Kartel Anthem V.', '00:00:37', 4),
(54, 3, 'Nekünk csak a zene', '00:03:48', 4),
(55, 3, 'Kartel Anthem VI.', '00:00:51', 4),
(56, 3, 'Hyva Suomi', '00:04:58', 4),
(57, 3, 'Vigyázz, hogy mit teszel!', '00:05:14', 4),
(58, 3, 'Big Daddy L.', '00:02:09', 4),
(59, 3, 'Gengszter lingo', '00:04:39', 4),
(60, 3, 'Outro', '00:00:26', 4),
(61, 3, 'Entrée', '00:00:29', 5),
(62, 3, 'Kartel Anthem VII.', '00:00:45', 5),
(63, 3, 'A jó a rossz és a Kartel', '00:03:57', 5),
(64, 3, 'A való világ', '00:04:08', 5),
(65, 3, 'TKO', '00:00:29', 5),
(66, 3, 'Ez itt nem az', '00:03:36', 5),
(67, 3, 'A szerb határ felé', '00:03:14', 5),
(68, 3, 'Szűzoltók', '00:03:52', 5),
(69, 3, 'Bérgyilkosok', '00:03:27', 5),
(70, 3, 'Kartel Anthem VIII.', '00:00:44', 5),
(71, 3, 'Angyalföld a hely', '00:03:50', 5),
(72, 3, 'A sötét oldal', '00:03:27', 5),
(73, 3, 'Nincs az a csaj', '00:04:29', 5),
(74, 3, 'Kartel Anthem IX.', '00:01:40', 5),
(75, 3, 'Mexico Kid (Big Dally L.2.)', '00:02:02', 5),
(76, 3, 'Hasfelmetszők', '00:04:24', 5),
(77, 3, 'Ez nem a te napod', '00:04:43', 5),
(78, 3, 'Steve', '00:01:59', 5),
(79, 3, 'Dög és a többiek', '00:03:28', 5),
(80, 3, 'Blow-feld vs. O.J.Bond', '00:04:46', 5),
(81, 3, 'Helldorado', '00:04:55', 5),
(82, 4, 'Fekete Virág', '00:03:39', 6),
(83, 4, 'Titkos Ajtó', '00:03:59', 6),
(84, 4, 'Történhet Bármi', '00:03:38', 6),
(85, 4, 'Mire Jó A Szó', '00:04:00', 6),
(86, 4, 'Mindig Nevetek Rajtad', '00:03:26', 6),
(87, 4, 'Mindig Kék Az Ég', '00:03:54', 6),
(88, 4, 'Szélvihar', '00:03:08', 6),
(89, 4, 'Vágyom Rád', '00:04:20', 6),
(90, 4, 'Jó Lenne', '00:03:37', 6),
(91, 4, 'Most Szeress', '00:03:43', 6),
(92, 4, 'Thriller', '00:03:31', 6),
(93, 4, 'Fekete Virág (Szabó Zé Remix)', '00:03:15', 6),
(96, 4, 'Elég volt', '00:04:23', 7),
(97, 4, 'Salalla', '00:03:58', 7),
(98, 4, 'Trallala', '00:03:50', 7),
(99, 4, 'Tűrtem eleget', '00:02:59', 7),
(100, 4, 'Jöjj még', '00:03:39', 7),
(101, 4, 'Bárhogy fáj', '00:04:07', 7),
(102, 4, 'Megszakad a szívem', '00:05:01', 7),
(103, 4, 'Hallgass már', '00:03:15', 7),
(104, 4, 'Érte megérte', '00:03:39', 7),
(105, 4, 'Ami a szívemen...', '00:04:13', 7),
(106, 4, 'Valami Amerika még', '00:02:51', 7),
(107, 4, 'Don’t Wanna Be With You', '00:04:24', 7),
(108, 5, 'Hagyd Meg Nekem A Dalt', '00:03:46', 8),
(109, 5, 'A Játéknak Vége', '00:03:50', 8),
(110, 5, 'Lesz Még Nyár', '00:04:02', 8),
(111, 5, 'Miriam', '00:04:04', 8),
(112, 5, 'Elvarázsolt Éj', '00:04:19', 8),
(113, 5, 'Sosem Vagy Egyedül', '00:03:36', 8),
(114, 5, 'Hull Az Elsárgult Levél', '00:03:38', 8),
(115, 5, 'Kicsípted Magad', '00:03:17', 8),
(116, 5, 'Egy Percet Kérek Tőled', '00:04:02', 8),
(117, 5, 'Fülledt Nyár', '00:00:05', 8),
(118, 5, 'Ma Éjszaka', '00:03:27', 9),
(119, 5, 'Bárhol Jársz', '00:03:08', 9),
(120, 5, 'Zene Mindenhol', '00:04:07', 9),
(121, 5, 'Csak Neked Dúdolnék', '00:03:50', 9),
(122, 5, 'Őszi Eső', '00:04:31', 9),
(123, 5, 'A Funky Groove', '00:04:12', 9),
(124, 5, 'Maradj Tiszta', '00:03:42', 9),
(125, 5, 'Életfogytig Tánc', '00:03:56', 9),
(126, 5, 'Nekem Ez Kell', '00:03:37', 9),
(127, 5, 'Mindig Van Egy Történet...', '00:04:16', 9),
(128, 5, 'Most Élsz', '00:03:58', 9),
(129, 5, 'Most Jó', '00:04:18', 9),
(130, 5, 'Homok A Szélben (Live)', '00:03:05', 9),
(131, 5, 'Ne Állj Meg...', '00:03:22', 9),
(132, 5, 'És Mégis Forog A Föld', '00:04:13', 10),
(133, 5, 'Nem Kérdés', '00:03:50', 10),
(134, 5, 'Száz Év Egy Éj', '00:03:33', 10),
(135, 5, 'Dalban Küldöm', '00:03:26', 10),
(136, 5, 'Soul Bent Egy Dal', '00:04:01', 10),
(137, 5, 'Érezd, Hogy Élsz', '00:04:04', 10),
(138, 5, 'Még Nem Veszíthetek', '00:05:13', 10),
(139, 5, 'Bolond Vagyok Mert....', '00:04:26', 10),
(140, 5, 'Éjfél Múlt', '00:04:08', 10),
(141, 5, 'Mi!?', '00:01:18', 10),
(142, 5, 'Örök Dal', '00:03:35', 10),
(143, 5, 'Kikötők', '00:04:26', 10),
(144, 5, 'És Mégis Forog A Föld (Remix \"Summer Mix\")', '00:04:53', 10),
(145, 5, 'Dalban Küldöm (\"Barna Kislány Dzsukel Mix\")', '00:00:04', 10),
(146, 5, 'Elmegyek', '00:05:01', 11),
(147, 5, 'Engedj El', '00:03:22', 11),
(148, 5, 'Én Leszek', '00:03:49', 11),
(149, 5, 'Zene Nélkül Mit Érek Én', '00:03:13', 11),
(150, 5, 'Ez Majdnem Szerelem Volt', '00:03:39', 11),
(151, 5, 'Mikor Elindul A Vonat', '00:04:03', 11),
(152, 5, 'Szeretlek Én (Besame Mucho)', '00:02:55', 11),
(153, 5, 'Mondd Miért Szeretsz Te Mást', '00:04:03', 11),
(154, 5, 'Azért Vannak A Jó Barátok', '00:03:53', 11),
(155, 5, 'Mikor Jössz Már Énfelém (Quando, Quando)', '00:03:03', 11),
(156, 6, 'Ne Nézz Így Rám', '00:03:00', 12),
(157, 6, 'Ne Félj', '00:03:19', 12),
(158, 6, 'Adj Erőt', '00:03:02', 12),
(159, 6, 'Egy Új Világ', '00:03:51', 12),
(160, 6, 'Ölelj Át', '00:04:11', 12),
(161, 6, 'Hogyha Hallanám', '00:03:51', 12),
(162, 6, 'Új Hajnal Ébred', '00:03:18', 12),
(163, 6, 'Úgy Éltem', '00:02:41', 12),
(164, 6, 'Mint Egy Álom', '00:03:16', 12),
(165, 6, 'Nap Nap Után', '00:03:22', 12),
(166, 6, 'Nélküled', '00:03:58', 12),
(167, 6, 'Ha Igazán Szeretnéd', '00:02:36', 12),
(168, 6, 'Maria, Maria', '00:04:03', 12),
(169, 6, 'Ne Nézz Így Rám (Szabó Zé Remix)', '00:02:51', 12),
(170, 7, 'Csak Egy Vallomás', '00:03:26', 13),
(171, 7, 'A Világ Lassan Útra Kész', '00:02:47', 13),
(172, 7, 'Volt Egy Lány', '00:03:26', 13),
(173, 7, 'Éjek Asszonya', '00:03:00', 13),
(174, 7, 'Várlak', '00:04:38', 13),
(175, 7, 'I Love You', '00:00:03', 13),
(176, 7, 'Ave Maria', '00:03:28', 13),
(177, 7, 'Gondolj Egy Régi Dalra', '00:03:20', 13),
(178, 7, 'Dalolj Gitár', '00:03:04', 13),
(179, 7, 'Kisfiam (Legszebb Könnyek)', '00:03:47', 13),
(180, 7, 'Vándor Vagyok Ezen A Földön', '00:03:03', 13),
(181, 7, 'Valahol Bús Dal Szól', '00:02:39', 13),
(182, 7, 'Szemeddel Látsz, Szíveddel Érzel', '00:04:03', 14),
(183, 7, 'Szeress Úgy, Ahogy Itt Vagyok Veled', '00:03:55', 14),
(184, 7, 'Mondd, Mi... (Mr. Lonely)', '00:02:38', 14),
(185, 7, 'Vádol Az Élet', '00:04:03', 14),
(186, 7, 'Pretty Woman', '00:03:53', 14),
(187, 7, 'Szeretlek Nagyon', '00:04:00', 14),
(188, 7, 'Ugye Nem Bántad Meg?', '00:03:43', 14),
(189, 7, 'Only You', '00:02:30', 14),
(190, 7, 'Győzni Kell!', '00:04:05', 14),
(191, 7, 'Krisztina', '00:04:01', 14),
(192, 7, 'Nagy Út Vár Rám (Unchained Melody)', '00:03:20', 14),
(193, 7, 'Ha Majd Nem Leszek Melletted', '00:03:32', 15),
(194, 7, 'Ne Hívj', '00:05:11', 15),
(195, 7, 'Téged Vártalak', '00:03:20', 15),
(196, 7, 'Hidd El Nem Lesz Jobb Máshol', '00:04:01', 15),
(197, 7, 'Hol Jártál Mondd?', '00:03:42', 15),
(198, 7, 'Minden Meg Van Írva', '00:02:38', 15),
(199, 7, 'Ki Szeret Engem?', '00:04:27', 15),
(200, 7, 'Ha Boldog Lennék Mással', '00:04:55', 15),
(201, 7, 'Ne Törd A Szívem', '00:03:28', 15),
(202, 7, 'Számíthatsz Rám', '00:03:42', 15),
(203, 7, 'Good Bye My Love', '00:03:44', 16),
(204, 7, 'Ez A Kis Dal', '00:03:25', 16),
(205, 7, 'Rebecca', '00:03:36', 16),
(206, 7, 'Most Is Várok Rád', '00:03:36', 16),
(207, 7, 'Linda', '00:03:10', 16),
(208, 7, 'Örökkén Örökké', '00:03:40', 16),
(209, 7, 'Ö Köztünk Járt', '00:03:42', 16),
(210, 7, 'Gyere Hát', '00:03:51', 16),
(211, 7, 'Más Lettem Én', '00:03:47', 16),
(212, 7, 'Sírni Volna Jó', '00:03:55', 16),
(213, 7, 'Még Egy Tánc', '00:04:14', 16),
(214, 7, 'Még Nem Veszíthetek', '00:03:28', 17),
(215, 7, 'Egy Nagy Titkot Őrzök', '00:04:20', 17),
(216, 7, 'Csak Élni Akartam Őszintén', '00:04:12', 17),
(217, 7, 'Rólad Mesél', '00:04:20', 17),
(218, 7, 'Még Bennem Él', '00:04:41', 17),
(219, 7, 'Már Nem Fáj', '00:04:08', 17),
(220, 7, 'Bárhol Jársz', '00:03:45', 17),
(221, 7, 'Várj', '00:03:25', 17),
(222, 7, 'Szólj, Szólj 1 Szót', '00:03:25', 17),
(223, 7, 'Te Vagy A Végzetem (You Are My Destiny)', '00:02:24', 17),
(224, 7, 'Füstös Éjszaka Blues', '00:03:04', 17),
(225, 7, 'Ha Leszáll Az Éj', '00:02:32', 17),
(226, 7, 'Nézz Le Rám, Ó Istenem!', '00:03:02', 18),
(227, 7, 'Senki Nem Szeret', '00:04:10', 18),
(228, 7, 'Gyermekké Válva', '00:04:10', 18),
(229, 7, 'Miért Szerettem Úgy Beléd?', '00:03:18', 18),
(230, 7, 'Mindent Megbocsájt', '00:03:50', 18),
(231, 7, 'Kell, Hogy Sírni Lásson!', '00:03:00', 18),
(232, 7, 'Könyörgés A Szerelemért', '00:04:00', 18),
(233, 7, 'Te Vagy A Lány', '00:03:15', 18),
(234, 7, 'Ne Szeress Úgy!', '00:03:40', 18),
(235, 7, 'Bye-bye Lány!', '00:02:50', 18),
(236, 7, 'Nálad Már Nem Hibázom El', '00:02:53', 18),
(237, 7, 'Ugye Nem Adod Fel?!', '00:04:09', 18),
(238, 7, 'Egyszer Megjavulok Én', '00:04:12', 19),
(239, 7, 'Mit Akarsz A Boldogságtól', '00:04:38', 19),
(240, 7, 'Harag Vagy Béke', '00:04:13', 19),
(241, 7, 'Miért Vársz Még Rám', '00:04:22', 19),
(242, 7, 'Engedj El', '00:04:38', 19),
(243, 7, 'Bukott Diák', '00:03:15', 19),
(244, 7, 'Valamit Szeretnék', '00:03:34', 19),
(245, 7, 'Késő Már', '00:04:52', 19),
(246, 7, 'Ha Tiéd Lesz', '00:03:27', 19),
(247, 7, 'Leszek-e Boldog...', '00:03:37', 19),
(248, 7, 'Jobb Volt Úgy', '00:03:00', 19),
(249, 7, 'Fogadj Örökbe', '00:03:40', 20),
(250, 7, 'Az Elmúlt Bűnökért', '00:04:14', 20),
(251, 7, 'Élhetnénk Szépen', '00:03:29', 20),
(252, 7, 'Ha Nem Leszek', '00:03:34', 20),
(253, 7, 'Engem Csak Szeretni Kell', '00:04:05', 20),
(254, 7, 'Szeretnélek Újra Megtalálni', '00:03:41', 20),
(255, 7, 'Egy Nyugtalan Szív', '00:03:49', 20),
(256, 7, 'Könnyeiddel', '00:03:01', 20),
(257, 7, 'Maradok A Régi, Aki Voltam', '00:03:56', 20),
(258, 7, 'Szomorú Álmodozó', '00:03:25', 20),
(259, 7, 'Egymásra Várva', '00:03:35', 20),
(260, 7, 'Mit Kezdjek', '00:03:36', 20),
(261, 7, 'Dalban Mondom El', '00:03:26', 21),
(262, 7, 'Ne Mondd, Hogy Nem', '00:03:27', 21),
(263, 7, 'Szállj Velem', '00:04:23', 21),
(264, 7, 'Te Vagy, Aki Kell', '00:04:07', 21),
(265, 7, 'Engedd, Hogy Szeresselek', '00:03:41', 21),
(266, 7, 'Emlékezz Rám', '00:03:28', 21),
(267, 7, 'Most Kell, Hogy Nagyon Szeress', '00:04:10', 21),
(268, 7, 'Készülj Fel', '00:03:22', 21),
(269, 7, 'Azért, Hogy Szeressenek', '00:03:33', 21),
(270, 7, 'Mit Akar A Szív', '00:03:43', 21),
(271, 7, 'Éld Az Életem', '00:03:48', 21),
(272, 7, 'Sírj A Vállamon', '00:03:55', 21);

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `album`
--
ALTER TABLE `album`
  ADD PRIMARY KEY (`album_id`);

--
-- A tábla indexei `eloado`
--
ALTER TABLE `eloado`
  ADD PRIMARY KEY (`eloado_id`);

--
-- A tábla indexei `szamok`
--
ALTER TABLE `szamok`
  ADD PRIMARY KEY (`szamok_id`),
  ADD KEY `eloado_id` (`eloado_id`,`album_id`),
  ADD KEY `album_id` (`album_id`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `album`
--
ALTER TABLE `album`
  MODIFY `album_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT a táblához `eloado`
--
ALTER TABLE `eloado`
  MODIFY `eloado_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT a táblához `szamok`
--
ALTER TABLE `szamok`
  MODIFY `szamok_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=273;

--
-- Megkötések a kiírt táblákhoz
--

--
-- Megkötések a táblához `szamok`
--
ALTER TABLE `szamok`
  ADD CONSTRAINT `szamok_ibfk_1` FOREIGN KEY (`album_id`) REFERENCES `album` (`album_id`),
  ADD CONSTRAINT `szamok_ibfk_2` FOREIGN KEY (`eloado_id`) REFERENCES `eloado` (`eloado_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
