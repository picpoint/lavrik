-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Авг 20 2020 г., 07:31
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
-- База данных: `lavrik`
--

-- --------------------------------------------------------

--
-- Структура таблицы `articles`
--

CREATE TABLE `articles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(100) NOT NULL,
  `content` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `articles`
--

INSERT INTO `articles` (`id`, `title`, `content`) VALUES
(1, 'Наглядно о том, почему скорость света не такая быстрая', 'Для любого человека выражение «со скоростью света» стало синонимом слова «мгновенно». Действительно, масштабы нашей планеты не позволяют уловить конечность скорости света, однако уже довольно давно физиками была установлена предельная величина, с которой можно передвигаться сквозь пространство — 299 792 458 м / с.\r\n\r\nМного это или мало? Безусловно, для наших повседневных занятий — более чем достаточно. Но если взглянуть на скорость света в масштабах Вселенной, становится понятно, что предельная скорость взаимодействия удручающе мала.'),
(2, 'Сколько фотонов во Вселенной?', 'Фотоны — элементарные безмассовые частицы, кванты электромагнитного излучения, которые мы воспринимаем как свет. Множество фотонов попадают на окружающие нас предметы и отражаются в сетчатку нашего глаза, давая нам возможность видеть.\r\n\r\nКазалось бы, подсчитать количество фотонов во Вселенной — задача невозможная. Но так не считают физики из университета Клемсона, США. Чтобы понять хотя бы приблизительное количество фотонов в нашем мире, необходимо учитывать все время существования Вселенной — около 13,7 млрд. лет. Ведь свет, испущенный уже давно погибшими звездами, до сих пор летит сквозь пространство.'),
(3, 'Ученые обнаружили возможные следы предыдущей Вселенной', 'Среди множеств теорий, объясняющих жизненный цикл нашей Вселенной, особый интерес представляет «Конформная циклическая космология». Её автор — известный физик Роджер Пенроуз, стоящий в одном ряду с такими личностями, как, например, Стивен Хокинг.\r\n\r\nВ теории рассказывается о том, что наш мир существует в непрерывном цикле рождения и смерти: то есть у нашей Вселенной были потомки, а после гибели на ее месте появится новая Вселенная. Как же произойдет конец нашей Вселенной? \r\n\r\nУченый считает, что в отдаленном будущем все частицы нашей Вселенной, имеющие массу, будут постепенно втянуты в огромные черные дыры. Постепенно экстремально расширившаяся Вселенная будет состоять только из безмассовых частиц — фотонов — и черных дыр. Но это не будет продолжаться вечно: из-за излучения Хокинга любая черная дыра постепенно испаряется. Это занимает миллиарды лет, но конец предопределен заранее.'),
(4, 'Превратится ли когда-нибудь Солнце в черную дыру?', 'У Солнца не хватает массы, чтобы коллапсировать в черную дыру. Через миллиарды лет, когда солнце подойдет к концу своей жизни, оно превратится в гигантскую красную звезду. Затем, когда она израсходует все свое топливо, звезда сбросит свои внешние слои и превратится в пылающее газовое кольцо, называемое планетарной туманностью. Наконец, все, что останется от Солнца - это остывающий белый карлик.'),
(5, 'Космическая погода: солнечные пятна, вспышки и корональные выбросы массы.', 'Хотя Солнце находится на расстоянии 149 млн км от Земли, оно активно воздействует на нашу планету. Мы видим солнечный свет и ощущаем его тепло. Однако это далеко не единственные результаты воздействия звездного товарища. Еще есть постоянный поток частиц в виде солнечного ветра, непредсказуемые солнечные вспышки, корональные выбросы массы. Все они попадают под определение «космической погоды».\r\n\r\nПятна на Солнце\r\n\r\nВ ходе изучения поверхности Солнца на ней можно заметить небольшие темные области. Они различаются по размерам и месторасположению. Как правило, эти пятна сосредоточены в областях выше и ниже экватора. Они образуются в результате взаимодействия плазмы на поверхности Солнца с магнитным полем.\r\n\r\nСолнечные пятна – это области на Солнце, температура которых значительно ниже в сравнении с другими участками. Температура в данных областях достигает 3 527 градусов по Цельсию, что почти на 1 727 градусов меньше, чем на остальных участках Солнца. Однако не позволяйте цифрам себя обмануть. Если бы нам представилась возможность созерцать на ночном небе одно солнечное пятно, оно сияло бы в 10 раз ярче полной луны. Если же сравнивать с Солнцем, диаметр которого составляет 1 392 млн километров, солнечные пятна могут показаться небольшими по величине. Как правило, данные области занимают менее 4% видимого диска Светила. Они соизмеримы с диаметром Нептуна, самой маленькой из газовых планет. Однако продолжительность жизни солнечных пятен вне зависимости от места расположения не превышает нескольких недель.\r\n\r\nСолнечный цикл, под которым понимается цикл солнечной активности, длится 11 лет. Последний солнечный цикл начался в январе 2008 года и достиг своего пика в 2013. Несмотря на низкий уровень солнечной активности, крупнейшее солнечное пятно за всю историю ученые наблюдали в ноябре 2014 года. Оно было соизмеримо с Юпитером.\r\n\r\nСолнечные вспышки\r\n\r\nИнтенсивные магнитные поля в областях возникновения солнечных пятен также приводят ко взрывам, известным как солнечные вспышки. Энергия при этом высвобождается наружу с силой, превышающей энерговыделение миллионов водородных бомб.\r\n\r\nТемпература внешней части солнечной атмосферы, известной как корона, в момент солнечных вспышек, как правило, достигает нескольких миллионов К. Когда солнечные вспышки минуют корону, они нагревают газ до 10-20 млн K, иногда данный показатель достигает ста миллионов К. По данным НАСА, энергия, которая выделяется при солнечной вспышке «эквивалентна энергии, выделяемой при одновременном взрыве миллиона 100-мегатонных водородных бомб».\r\n\r\nКрупнейшие солнечные вспышки оказывают значительное влияние на Землю. Они могут вызвать длительные радиационные бури в верхних слоях атмосферы и стать причиной прекращения радиосвязи. Средние вспышки могут также вызвать кратковременное прекращение радиосвязи в полярных регионах и иногда незначительные радиационные бури.\r\n\r\nКорональные выбросы массы\r\n\r\nВо время солнечных вспышек магнитная энергия, которая накапливается в активных областях на Солнце, в большей части реализуется в виде электромагнитного излучения. Во время корональных выбросов массы она расходуется на то, чтобы ускорить массы вещества в солнечной коре.\r\n\r\nКак и солнечные вспышк, корональные выбросы масс повышают радиацию во внешних слоях земной атмосферы, влияя на космонавтов и радиосигналы. Однако в отличие от вспышек, они также приносят заряженные частицы материи, которые взаимодействуют с полем, окружающим нашу планету. Результаты такого взаимодействия могут варьироваться в зависимости от размера, скорости и магнитной силы данных частиц.');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `articles`
--
ALTER TABLE `articles`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `articles`
--
ALTER TABLE `articles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;