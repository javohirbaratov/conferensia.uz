-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 22 2023 г., 11:08
-- Версия сервера: 8.0.30
-- Версия PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `conferensia`
--

-- --------------------------------------------------------

--
-- Структура таблицы `admin`
--

CREATE TABLE `admin` (
  `id` int NOT NULL,
  `login` varchar(255) NOT NULL,
  `parol` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `admin`
--

INSERT INTO `admin` (`id`, `login`, `parol`) VALUES
(1, 'javohir', '1234');

-- --------------------------------------------------------

--
-- Структура таблицы `fayl`
--

CREATE TABLE `fayl` (
  `id` int NOT NULL,
  `nomi` varchar(255) NOT NULL,
  `user_id` int NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `fayl`
--

INSERT INTO `fayl` (`id`, `nomi`, `user_id`, `status`) VALUES
(2, 'f6916a4487179801d12dd9dd0ec9dc04.pdf', 3, '1');

-- --------------------------------------------------------

--
-- Структура таблицы `speaker`
--

CREATE TABLE `speaker` (
  `id` int NOT NULL,
  `fio` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `otm` varchar(255) NOT NULL,
  `mavzu` varchar(255) NOT NULL,
  `rasm` varchar(255) NOT NULL,
  `davlat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `speaker`
--

INSERT INTO `speaker` (`id`, `fio`, `email`, `otm`, `mavzu`, `rasm`, `davlat`) VALUES
(7, 'Нигматуллин Роберт Искандерович', 'sasa@gmail.com', 'М.Ломоносов номидаги Москва давлат университети', 'РФА академиги, ф.-м.ф.д., профессор', 'ba19981723097350adbb8af35e02309f.jpg', 'Russia');

-- --------------------------------------------------------

--
-- Структура таблицы `txt`
--

CREATE TABLE `txt` (
  `id` int NOT NULL,
  `txt` text NOT NULL,
  `category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `txt`
--

INSERT INTO `txt` (`id`, `txt`, `category`) VALUES
(18, '<p>&nbsp; &nbsp; &nbsp; &nbsp; Tashkiliy va boshqaruv qo&#39;mitalari nomidan sizni 17-2023 oktyabr kunlari gibrid rejimda bo&#39;lib o&#39;tadigan axborot-kommunikatsiya texnologiyalarini</p>\r\n\r\n<p>qo&#39;llash bo&#39;yicha 28-IEEE xalqaro konferentsiyasiga (AICT20) 2023-ga taqdim etishingizni xush kelibsiz.</p>\r\n\r\n<p>AICT2023 ADA universiteti, Jorj Vashington universiteti, Politecnico di Torino va IEEE Ozarbayjon Qo&#39;shma bo&#39;limi tomonidan tashkil etilgan</p>\r\n\r\n<p>va texnik jihatdan elektrotexnika va elektronika muhandislari instituti (IEEE) tomonidan homiylik qilingan. AICT2023 asosiy ma&#39;ruzalar, o&#39;quv</p>\r\n\r\n<p>qo&#39;llanmalari va tadqiqot taqdimotlarini taqdim etadi. Taqdim etilgan hujjatlarda zamonaviy texnologiyalar, nazariy tushunchalar, standartlar,</p>\r\n\r\n<p>mahsulotlarni joriy etish, amalga oshirilayotgan ilmiy loyihalar, shuningdek, AKTni qo&#39;llash masalalari qamrab olinishi kutilmoqda. Avvalgi AICT-da 70 dan ortiq</p>\r\n\r\n<p>okruglardan yuzlab ishtirokchilar qatnashgan.</p>\r\n', 'mualif'),
(20, '<p><strong>Амалий механиканинг долзарб муаммолари</strong></p>\r\n\r\n<p><strong>халқаро илмий конференцияси</strong></p>\r\n\r\n<p><strong>&ndash; АМДМ-2021</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>ТАШКИЛИЙ</strong><strong>&nbsp;ҚЎМИТА</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ol>\r\n	<li><strong>Халмурадов Рустам Ибрагимович,</strong>&nbsp;тех.ф.д., профессор, Самарқанд давлат университети, Самарқанд, Ўзбекистон.</li>\r\n</ol>\r\n\r\n<p><em>Раис</em></p>\r\n\r\n<ol>\r\n	<li><strong>Скрипняк Владимир Альбертович,</strong>&nbsp;ф.-м.ф.д., профессор, Миллий тадқиқот Томск давлат университети, Томск, Россия Федерацияcи.</li>\r\n</ol>\r\n\r\n<p><em>Ҳамраис</em></p>\r\n\r\n<ol>\r\n	<li><strong>Рапопорт Лев,</strong>&nbsp;др., профессор, Холон технология институти, Холон, Исроил.</li>\r\n</ol>\r\n\r\n<p><em>Ҳамраис</em></p>\r\n\r\n<ol>\r\n	<li><strong>Б</strong><strong>ў</strong><strong>ронов Худо</strong><strong>ё</strong><strong>р Махмадиярович,&nbsp;</strong>ф.-м.ф.н., доцент, Самарқанд давлат университети, Самарқанд, Ўзбекистон -&nbsp;<em>Илмий котиб</em></li>\r\n	<li><strong>Махмудов Жамол,</strong>&nbsp;ф.-м.ф.д., Самарқанд давлат университети, Самарқанд, Ўзбекистон -&nbsp;<em>Илмий котиб</em></li>\r\n	<li><strong>Косимова Феруза Улугбековна&nbsp;</strong>Самарқанд давлат университети, Самарқанд, Ўзбекистон -<em>секретарь</em></li>\r\n	<li><strong>Нигматуллин Роберт Искандерович,</strong>&nbsp;РФА&nbsp;академиги, д.-ф.-м.н., профессор, М.Ломоносов номидаги Москва давлат университети, Москва, Россия Федерацияcи.</li>\r\n	<li><strong>Мирсаидов Мирзиёт,&nbsp;</strong>ЎзР ФА&nbsp;академиги, тех.ф.д., профессор, Тошкент ирригация ва қишлоқ хўжалигини механизациялаш муҳандислари институти, Тошкент, Ўзбекистон.</li>\r\n	<li><strong>Лакаев Саидахмад Норжигитович,</strong>&nbsp;ЎзР ФА&nbsp;академиги,&nbsp;ф.-м.ф.д., профессор Самарқанд давлат университети, Самарқанд, Ўзбекистон.</li>\r\n	<li><strong>Плескачевский Юрий Михайлович,</strong>&nbsp;Белорусия ФА мухбир аъзоси, тех.ф.д., профессор, Белоруcсия миллий техника университети, Минск, Белоруссия.</li>\r\n	<li><strong>Мондрус Владимир Львович,</strong>&nbsp;тех.ф.д., профессор, В.В.Куйбышев номидаги Москва давлат қурилиш университети, Москва, Россиz&nbsp;Федерацияси.</li>\r\n	<li><strong>Телтаев Багдад Бурханбайулы</strong>,&nbsp;тех.ф.д., профессор,&nbsp;Қозоғистон йўллар илмий-текшириш институти,&nbsp;Олмата,&nbsp;Қозоғистон.</li>\r\n	<li><strong>Панахов Гейлани Минхадж оглы,&nbsp;</strong>Озарбайжон МФА мухбир аъзоси, тех.ф.д., профессор, МФА Математика ва механика институти, Баку, Озарбайжон</li>\r\n	<li><strong>Норихан Мд Арифин,&nbsp;</strong>профессор, др.,&nbsp;Малайзия Путра&nbsp;Университети<strong>,&nbsp;</strong>Селангор,<strong>&nbsp;</strong>Малайзия.</li>\r\n	<li><strong>Калтаев Айдархан,&nbsp;</strong>ф.-м.ф.д., профессор, К. И. Сатпаев&nbsp;номидаги Қозоқ миллий илмий техника&nbsp;университети,&nbsp;Олмота,&nbsp;Қозоғистон.</li>\r\n	<li><strong>Холжигитов Абдували Абдусаматович,&nbsp;</strong>ф.-м.ф.д., профессор,&nbsp;Тошкент ахборот технологиялари университети Самарқанд филиали, Самарқанд, Ўзбекистон.</li>\r\n	<li><strong>Солеев Ахмаджон Солеевич,</strong>&nbsp;ф.-м.ф.д., профессор, Самарқанд давлат университети, Самарқанд, Ўзбекистон.</li>\r\n	<li><strong>&nbsp;Носиров Мухтор Гафарович,&nbsp;</strong>д.б.н., профессор, Самарқанд давлат университети, Самарқанд, Ўзбекистон.</li>\r\n	<li><strong>Хушвактов Хаким Абдулхакович,&nbsp;</strong>ф.-м.ф.н., доцент, Самарқанд давлат университети, Самарқанд, Ўзбекистон.</li>\r\n	<li><strong>Артыков Турдали Усманалиевич,&nbsp;</strong>ф.-м.ф.д., проф.&nbsp;ЎзР ФА М.Т.Ўрозбоев номидаги Механика ва иншоотлар сейсмик мустаҳкамлиги институти, Тошкент, Ўзбекистон.</li>\r\n	<li><strong>Султанов Карим Султанович,&nbsp;</strong>ф.-м.ф.д., профессор, ЎзР ФА М.Т.Ўрозбоев номидаги Механика ва иншоотлар сейсмик мустаҳкамлиги институти, Тошкент, Ўзбекистон.</li>\r\n	<li><strong>Согдиев Хамидулла Согдиевич,&nbsp;</strong>тех.ф.н., к.и.х, ЎзР ФА М.Т.Ўрозбоев номидаги Механика ва иншоотлар сейсмик мустаҳкамлиги институти, Тошкент, Ўзбекистон.</li>\r\n	<li><strong>Бегматов Абдували Бегматович&nbsp;</strong>ф.-м.ф.д., профессор, Ўзбекистон Миллий университети, Тошкент, Ўзбекистон.</li>\r\n	<li><strong>Бегматов Акром Хасанович,&nbsp;</strong>ф.-м.ф.д., профессор, Самарқанд давлат университети, Самарқанд, Ўзбекистон.</li>\r\n	<li><strong>Хужаеров Бахтиер,&nbsp;</strong>ф.-м.ф.д., профессор<strong>&nbsp;</strong>Самарқанд давлат университети, Самарқанд, Ўзбекистон.</li>\r\n	<li><strong>Худойназаров Хайрулла,&nbsp;</strong>тех.ф.д., профессор Самарқанд давлат университети, Самарқанд, Ўзбекистон.</li>\r\n	<li><strong>Каримов Камолхон Аббосович,&nbsp;</strong>тех.ф.д., профессор Ислом Каримов номидаги Тошкент давлат техника университети, Тошкент, Ўзбекистон.</li>\r\n	<li><strong>Дусматов Олимжон Мусурмонович&nbsp;</strong>ф.&ndash;м.ф.д., Самарқанд давлат университети, Самарқанд, Ўзбекистон.</li>\r\n	<li><strong>Бердиев Шавкат Давранович,&nbsp;</strong>тех.ф.н., доцент, Самарқанд давлат университети, Самарқанд, Ўзбекистон.</li>\r\n	<li><strong>Абдуллаев Обид Абдуллаевич&nbsp;</strong>ф.&ndash;м.ф.н., доцент, Самарқанд давлат университети, Самарқанд, Ўзбекистон.</li>\r\n</ol>\r\n', 'qumita');

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `fio` varchar(255) NOT NULL,
  `davlat` varchar(255) NOT NULL,
  `otm` varchar(255) NOT NULL,
  `fayl` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL DEFAULT '0',
  `status` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL DEFAULT '0',
  `email` varchar(255) NOT NULL,
  `parol` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `fio`, `davlat`, `otm`, `fayl`, `status`, `email`, `parol`) VALUES
(3, 'Javohir', 'Uzb', 'Samdu', '0', '0', 's@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `fayl`
--
ALTER TABLE `fayl`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `speaker`
--
ALTER TABLE `speaker`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `txt`
--
ALTER TABLE `txt`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `fayl`
--
ALTER TABLE `fayl`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `speaker`
--
ALTER TABLE `speaker`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `txt`
--
ALTER TABLE `txt`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
