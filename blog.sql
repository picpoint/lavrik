-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Сен 28 2020 г., 07:48
-- Версия сервера: 10.4.11-MariaDB
-- Версия PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `blog`
--

-- --------------------------------------------------------

--
-- Структура таблицы `articles`
--

CREATE TABLE `articles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `headpost` varchar(300) NOT NULL,
  `bodypost` varchar(3000) NOT NULL,
  `author` varchar(50) NOT NULL,
  `date` varchar(30) NOT NULL,
  `moderation` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `articles`
--

INSERT INTO `articles` (`id`, `headpost`, `bodypost`, `author`, `date`, `moderation`) VALUES
(5, ' 35-летнего путешествия Вояджера могло и не быть', 'Зонд \"Вояджер-1\" уже давно несётся по направлению к межзвёздному пространству, но этот самый далеко запущенный человечеством искусственный объект Солнечной системы едва не застрял на земной орбите после своего запуска, состоявшегося в 1977 г.\r\n\r\nУ ракеты \"Титан-Центавр\", на которой был отправлен \"Вояджер-1\", во время подъёма космического аппарата 5 сентября 1977 г. почти полностью закончилось горючее, и оставшихся запасов должно было хватить лишь на 3,5 секунды, сообщили должностные лица миссии на праздновании 35-й годовщины запуска, проходившем в Лаборатории реактивного движения НАСА в Пасадене, Калифорния.\r\n\r\n\"\"Вояджер-1\" едва не остался на орбите, - сказал Чарли Колхейз (Charley Kohlhase), бывший менеджер диспетчерского отдела миссии. - Мы сейчас тут с вами празднуем 35-летие \"Вояджера\", но экспедиция была на волоске от провала\".', 'den', '24:09:2020 22:32:33', '0'),
(6, ' Чёрные дыры', 'Чёрные дыры - это гигантские космические монстры, экзотические объекты, чья гравитация настолько сильна, что ничто, даже свет, не может вырваться из их когтей.\r\n\r\nЧёрные дыры поражают воображение огромным разнообразием форм, от небольших тел звёздных размеров до сверхмассивных чудовищ, которые прячутся в сердцах галактик. Здесь перечислены несколько чёрных дыр-рекордсменов: самая маленькая, невероятно огромные, а также чёрные дыры, способные пожирать не только окружающую их материю, но и целиком проглатывать себе подобных.\r\n\r\nСамые большие чёрные дыры\r\n\r\nСчитается, что в центрах почти всех галактик лежат сверхмассивные чёрные дыры с массами от нескольких миллионов до нескольких миллиардов солнечных масс. Недавно учёные открыли две самые большие известные на настоящий момент чёрные дыры в двух близлежащих галактиках.', 'den', '24:09:2020 22:35:10', '0'),
(7, ' Термоядерные двигатели на антиматерии', 'Новости космоса становятся всё жарче: НАСА собирается использовать антиматерию в космических кораблях будущего.\r\n\r\nРеакции слияния ядер, инициированные пучками частиц антиматерии, могут начать приводить в движение сверхвысокоскоростные космические корабли, отправляемые в длительные путешествия, уже к середине этого века, говорят исследователи.\r\n\r\nКорабли с термоядерными двигателями смогут добраться до Юпитера за 4 месяца, открывая таким образом путь к внешней Солнечной системе человеческим экспедициям, согласно отчёту НАСА за 2010 г.\r\n\r\nЧтобы сделать эту технологию доступной, учёным придётся преодолеть немало препятствий - в частности связанных с получением и хранением антиматерии, - но некоторые эксперты полагают, что она может быть готова уже к середине столетия.\r\n\r\nСила ядерного синтеза потрясает воображение', 'gontik', '24:09:2020 22:36:10', '0'),
(8, ' Энцелад: дом для инопланетных форм жизни?', 'Занимаясь поисками внеземной жизни на других планетах солнечной системы, мы пока еще уделяем основное внимание Марсу, однако сегодня все большее число ученых считают, что Энцелад, покрытый льдом спутник Сатурна, является в этом плане гораздо более перспективным объектом для исследований\r\n\r\nПо размерам Энцелад представляет собой небольшой обломок породы, поэтому до недавнего времени астрономы, изучающие межзвездное пространство с помощью телескопов, не придавали ему особого значения. Между тем, сегодня этот крошечный спутник Сатурна вдруг превратился в объект серьезного внимания со стороны ученых. Многие из них полагают, что данное небесное тело является весьма перспективным с точки зрения обнаружения там инопланетной жизни, если она существует в пределах солнечной системы.\r\n\r\nМысль о том, что этот спутник, имеющий всего 310 миль в диаметре, который вращается в холодном межзвездном пространстве по орбите Сатурна на расстоянии 1 млрд. миль от Солнца, действительно является домом для внеземных цивилизаций, может кому-то показаться просто невероятной. Тем не менее, число ученых, серьезно относящихся к подобной перспективе, постоянно растет, и эти исследователи утверждают, что Энцелад должен стать приоритетной целью для будущих космических полетов.', 'goSHA', '24:09:2020 22:41:34', '0'),
(9, ' Переменные звезды: история и виды', 'Что же такое переменная звезда? Все просто: переменными называют те звезды, которые меняют свою яркость.\r\n\r\nЗвезда считается переменной в том случае, если ее видимая величина, то есть яркость, при наблюдении с Земли меняется. Неважно, происходят ли эти изменения в течение нескольких лет или занимают лишь долю секунды. Также не имеет значения и то, насколько меняется яркость звезды. Разница может составлять от одной тысячной до 20-ти магнитуд. На сегодняшний день было открыто более 100 тысяч переменных звезд, еще примерно тысячу звезд ученые гипотетически считают переменными.\r\n\r\nОдним из ярких примеров переменных звезд является Солнце. На протяжении солнечного цикла, длительность которого составляет 11 лет, излучаемая Солнцем энергия изменяется на 0,1% или одну тысячную долю своей величины.\r\n\r\nИстория переменных звезд\r\n\r\nПервой переменной звездой, обнаруженной в современной истории, была звезда Омикрон Кита, позже получившая название Мира. В 1596 году Давид Фабрициус назвал ее «новой звездой». Спустя более 4-ех десятилетий с момента ее открытия, а именно в 1638 году, Йохан Холвард обнаружил, что звезда является переменной, а период изменения ее блеска составляет 11 месяцев.', 'shimerT', '24:09:2020 22:43:26', '0'),
(18, 'Пост от админа!!!', 'Я админ всея Руси!!! ))))', 'admin', '28:09:2020 08:32:48', '0'),
(19, 'New post', 'check field', 'den', '28:09:2020 08:47:47', '0');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `login` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `password`, `role`) VALUES
(60, 'gontik', '$2y$10$CCuDZdLpBJOWHIrKLd8WVeqC1J8GgvO3ty1VMhuZQzjdc/2PtCiJq', '1'),
(61, 'shimerT', '$2y$10$yHeEmtoIkwlBOyIgA/qXtOPTZdQ/9Wid0i4K3QpQ2JoDJ7Uirci36', '1'),
(62, 'goSHA', '$2y$10$w1XGq2cK.wXRnHQVl8tT1ulVs0po4yqBNwrmYqCL01K7JAeTzqQpK', '1'),
(63, 'den', '$2y$10$x.a6aFbn4FphETr5emZ4bOPvDkLFkfhSIm.rpB3dDs73IlukgxISe', '1'),
(71, 'admin', '$2y$10$rvxavBX3Tn4RhTJP4kZROOhFhOKBcFCrxcIMBh/4Tiqz/eN1xCAKy', '0');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `articles`
--
ALTER TABLE `articles`
  ADD UNIQUE KEY `id` (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `articles`
--
ALTER TABLE `articles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
