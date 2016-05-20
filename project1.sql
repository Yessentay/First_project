-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Май 19 2016 г., 23:46
-- Версия сервера: 10.1.10-MariaDB
-- Версия PHP: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `project1`
--

-- --------------------------------------------------------

--
-- Структура таблицы `project1`
--

CREATE TABLE `project1` (
  `id` int(10) NOT NULL,
  `news` mediumtext NOT NULL,
  `image` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `project1`
--

INSERT INTO `project1` (`id`, `news`, `image`) VALUES
(1, 'ALMATY. Nov 30 (Interfax-Kazakhstan) – Kazakh President Nursultan Nazarbayev has instructed the government to work out a new employment road map by the end of the 1st quarter of 2016.\r\n\r\n    With the aim of stepping up social support for fellow compatriots Nazarbayev in his address to the nation on Monday in Astana instructed the government to work out in these difficult times a new employment road map by the end of the 1st quarter of 2016 similar to that one which was devised in 2007-09.\r\n\r\n    The president urged more financial assistance for this program compared to that one which was done 2007-09 in order to maintain the labor market stability through local infrastructure development projects and improvements to populated areas.\r\n\r\n    Large-scale short-term staff re-training would be arranged, staff skills improved and more micro-loans provided for the development of entrepreneurship, he said', 'https://i.kapital.kz/c/00e4318946c974ea248be2484fa6c21d/n/1024/768/2/0/a/5/3/e8b9ddbed377f4330301c002740.jpg'),
(2, 'Social and digital media have become a huge part of today’s society. The Cyber World exists parallel to our physical reality in that the Internet, television, video games, and cell phones all play a role in shaping who we are as individuals existing together outside of technology. Experts say digital media helps us because it may enhance time management skills; increase productivity or social interactions; and may even improve optimism and self-esteem, as well as general knowledge. However, Sherry Turkle, a professor at MIT, claims that social media is a metaphor for real life. We think it might change our lives for the better, make it easier, make us happier… but we all know what they say: you can’t buy happiness. Well, social media comes with a cost. I want to argue that too much of it can become a problem where we are no longer helping ourselves, but where we are beginning to become handicapped by changing our relationships with society and perhaps even our evolutionary path.\r\n\r\n\r\n    Social media may appear to make our lives easier, but at the same time it complicates them. Studies show that the pressure of having to present oneself in a way that is acceptable to online friends increases stress levels. The fact that we have to worry about how we appear to “everyone” in cyber-society adds unnecessary stress to our lives. Simultaneously, we have far more information accessible to us than we’re programmed to have. Knowing too much about everything going on in the world through constant access to cyber reports requires us to be involved in it. We become seemingly too busy caring about the people we hardly know inside these machines; then we can no longer balance worrying about things with which we should be concerned, such as real-life relationships, skills, and (probably the most unfortunate) ourselves.', 'https://www.google.kz/url?sa=i&rct=j&q=&esrc=s&source=images&cd=&ved=0ahUKEwj1suSon9rMAhUnOpoKHZjtB00QjBwIBA&url=http%3A%2F%2Fasadmin.ru%2Fimages%2Fstories%2Fimages%2Fzona_program.jpg&bvm=bv.122129774,d.bGs&psig=AFQjCNGWHzDUUco1_tHu2glOAoUidSktcg&ust=1463339066835687'),
(3, 'Chelsea forward Diego Costa has been charged by the FA following Saturday''s 2-0 FA Cup defeat at Everton.\r\n\r\n    The Spain international stands accused of improper conduct for his behaviour after he was shown a second yellow card by referee Michael Oliver.\r\n\r\n    Costa has until 6pm on Thursday to respond to the charge and has until Wednesday to provide his observations to the FA in relation to an alleged gesture he made towards Everton fans as he left the pitch at half-time.', 'https://www.google.kz/url?sa=i&rct=j&q=&esrc=s&source=images&cd=&ved=0ahUKEwjE8ZaeodrMAhUGOpoKHdlODCYQjBwIBA&url=http%3A%2F%2F4design.kz%2Fimages%2F1%2Fcrop%2F370%2F250%2Fa5097ec450154e39f9d11023cf3f1520.tiff&bvm=bv.122129774,d.bGs&psig=AFQjCNFTxUyZyKvG6buCZiMIJ8Fyf6dWSA&ust=1463339314801724'),
(4, 'A HACKER WHO claims to have broken into the AOL account of CIA Director John Brennan says he obtained access by posing as a Verizon worker to trick another employee into revealing the spy chief’s personal information.\r\n\r\n    Using information like the four digits of Brennan’s bank card, which Verizon easily relinquished, the hacker and his associates were able to reset the password on Brennan’s AOL account repeatedly as the spy chief fought to regain control of it.\r\n\r\n    News of the hack was first reported by the New York Post after the hacker contacted the newspaper last week. The hackers described how they were able to access sensitive government documents stored as attachments in Brennan’s personal account because the spy chief had forwarded them from his work email.\r\n\r\n    The documents they accessed included the sensitive 47-page SF-86 application that Brennan had filled out to obtain his top-secret government security clearance. Millions of SF86 applications were obtained recently by hackers who broke into networks belonging to the Office of Personnel Management. The applications, which are used by the government to conduct a background check, contain a wealth of sensitive data not only about workers seeking security clearance, but also about their friends, spouses and other family members. They also include criminal history, psychological records and information about past drug use as well as potentially sensitive information about the applicant’s interactions with foreign nationals—information that can be used against those nationals in their own country.\r\n\r\n    The hacker, who says he’s under 20 years old, told WIRED that he wasn’t working alone but that he and two other people worked on the breach. He says they first did a reverse lookup of Brennan’s mobile phone number to discover that he was a Verizon customer. Then one of them posed as a Verizon technician and called the company asking for details about Brennan’s account.\r\n\r\n    “[W]e told them we work for Verizon and we have a customer on scheduled callback,” he told WIRED. The caller told Verizon that he was unable to access Verizon’s customer database on his own because “our tools were down.', 'https://www.google.kz/url?sa=i&rct=j&q=&esrc=s&source=images&cd=&ved=0ahUKEwi9k6j1odrMAhXhKJoKHaWhBEoQjBwIBA&url=http%3A%2F%2Falt-sector.net%2Fuploads%2Fposts%2F2011-10%2F1317584682_hacking.jpg&bvm=bv.122129774,d.bGs&psig=AFQjCNFpfFTYmEeBaszmYwwNCf6mCih5DQ&ust=1463339430899769');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `project1`
--
ALTER TABLE `project1`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `project1`
--
ALTER TABLE `project1`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
