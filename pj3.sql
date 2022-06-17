-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 17, 2022 at 04:11 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pj3`
--

-- --------------------------------------------------------

--
-- Table structure for table `coninfo`
--

CREATE TABLE `coninfo` (
  `con_id` int(11) NOT NULL,
  `con_location` varchar(250) NOT NULL,
  `con_phn` varchar(20) NOT NULL,
  `con_email` varchar(50) NOT NULL,
  `con_site` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `coninfo`
--

INSERT INTO `coninfo` (`con_id`, `con_location`, `con_phn`, `con_email`, `con_site`) VALUES
(0, '218 Sahera Tropical Center Room#7', '01923-970212, 01776-', 'suport@admincovid.com', 'shorifuddin.com');

-- --------------------------------------------------------

--
-- Table structure for table `covidtrack`
--

CREATE TABLE `covidtrack` (
  `id` int(11) NOT NULL,
  `total_cases` int(250) NOT NULL,
  `active_cases` int(250) NOT NULL,
  `recover_cases` int(250) NOT NULL,
  `deaths_cases` int(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `covidtrack`
--

INSERT INTO `covidtrack` (`id`, `total_cases`, `active_cases`, `recover_cases`, `deaths_cases`) VALUES
(1, 381761, 262774, 125050, 16558);

-- --------------------------------------------------------

--
-- Table structure for table `preavoid`
--

CREATE TABLE `preavoid` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `decp` text NOT NULL,
  `img` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `preavoid`
--

INSERT INTO `preavoid` (`id`, `title`, `decp`, `img`) VALUES
(1, 'Avoid contact with sick people', 'Our comprehensive Online Marketing strategy will boost your website trafic hence monthly sales.', 'Prevention-Should-Avoid1650573261829.jpg'),
(2, 'Avoid contact animals', 'Our comprehensive Online Marketing strategy will boost your website trafic hence monthly sales.', 'Prevention-Should-Avoid1650573272643.jpg'),
(3, 'Avoid crowded places', 'Our comprehensive Online Marketing strategy will boost your website trafic hence monthly sales.', 'Prevention-Should-Avoid1650573286556.jpg'),
(4, 'Contaminated objects', 'Our comprehensive Online Marketing strategy will boost your website trafic hence monthly sales.', 'Prevention-Should-Avoid1650573297213.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `predo`
--

CREATE TABLE `predo` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `decp` text NOT NULL,
  `img` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `predo`
--

INSERT INTO `predo` (`id`, `title`, `decp`, `img`) VALUES
(1, 'Wash your hands sanitizer', 'Our comprehensive Online Marketing strategy will boost your website trafic hence monthly sales.', 'Prevention-Should-Do1650573316126.jpg'),
(2, 'Ware a face mask outside', 'Our comprehensive Online Marketing strategy will boost your website trafic hence monthly sales.', 'Prevention-Should-Do165057332884.jpg'),
(3, 'Cover your cough tissue paper', 'Our comprehensive Online Marketing strategy will boost your website trafic hence monthly sales.', 'Prevention-Should-Do1650573341481.jpg'),
(4, 'Check your body regulerly', 'Our comprehensive Online Marketing strategy will boost your website trafic hence monthly sales.', 'Prevention-Should-Do1650573354581.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_phone` varchar(20) NOT NULL,
  `user_username` varchar(50) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_pas` varchar(250) NOT NULL,
  `role_id` int(11) NOT NULL,
  `user_img` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`user_id`, `user_name`, `user_phone`, `user_username`, `user_email`, `user_pas`, `role_id`, `user_img`) VALUES
(1, 'MD. SHORIF UDDIN', '01755', 'shorif', 'shorif@gmail.com', '6512bd43d9caa6e02c990b0a82652dca', 1, 'upload1650532851119.jpg'),
(2, 'Naeem Rony', '018', 'rony', 'rony@gmail.com', '6512bd43d9caa6e02c990b0a82652dca', 2, 'upload1650534026117.jpg'),
(3, 'TABAROK ULLAH TAREK', '012', 'tarek', 'tarek@gmail.com', '6512bd43d9caa6e02c990b0a82652dca', 3, 'upload1650534048258.jpg'),
(4, 'sagar', '012', 'sagar', 'sagar@gmail.com', '6512bd43d9caa6e02c990b0a82652dca', 4, 'upload1650534069130.jpg'),
(6, 'SHORIF UDDIN', '01755', 'shorifs', 'shorif@gmail.com', '6512bd43d9caa6e02c990b0a82652dca', 1, 'upload1650562000495.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `role_id` int(11) NOT NULL,
  `role_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`role_id`, `role_name`) VALUES
(1, 'Admin'),
(2, 'Superadmin'),
(3, 'Moderator'),
(4, 'Editor');

-- --------------------------------------------------------

--
-- Table structure for table `wbsym`
--

CREATE TABLE `wbsym` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `decp` text NOT NULL,
  `img` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wbsym`
--

INSERT INTO `wbsym` (`id`, `title`, `decp`, `img`) VALUES
(1, 'Coughing And Sneezing', 'Our comprehensive Online Marketing strategy will boost your website trafic hence monthly sales.', 'Symptoms1650624157981.jpg'),
(2, 'Hot Fever', 'Our comprehensive Online Marketing strategy will boost your website trafic hence monthly sales.', 'Symptoms1650624173698.jpg'),
(3, 'Strong Headacke', 'Our comprehensive Online Marketing strategy will boost your website trafic hence monthly sales.', 'Symptoms1650624207129.jpg'),
(4, 'Shortness Of Breath', 'Our comprehensive Online Marketing strategy will boost your website trafic hence monthly sales.', 'Symptoms1650624214637.jpg'),
(5, 'Confusion', 'Our comprehensive Online Marketing strategy will boost your website trafic hence monthly sales.', 'Symptoms1650624227800.jpg'),
(6, 'Sore Throat', 'Our comprehensive Online Marketing strategy will boost your website trafic hence monthly sales.', 'Symptoms1650624237266.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `wbvirus`
--

CREATE TABLE `wbvirus` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `decp` text NOT NULL,
  `img` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wbvirus`
--

INSERT INTO `wbvirus` (`id`, `title`, `decp`, `img`) VALUES
(1, 'Human Contact', 'Our comprehensive Online Marketing strategy will boost your website trafic hence monthly sales.', 'Symptoms1650628329505.jpg'),
(3, 'Air Transmission', 'Our comprehensive Online Marketing strategy will boost your website trafic hence monthly sales.', 'Symptoms1650628386143.jpg'),
(4, 'Contaminated Objects', 'Our comprehensive Online Marketing strategy will boost your website trafic hence monthly sales.', 'Symptoms1650628396663.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `webfq`
--

CREATE TABLE `webfq` (
  `fq_id` int(11) NOT NULL,
  `fq_qus` text NOT NULL,
  `fq_ans` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `webfq`
--

INSERT INTO `webfq` (`fq_id`, `fq_qus`, `fq_ans`) VALUES
(1, 'What are the objectives of this Website?', 'Perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore vertatis et quasi archtecto beatae vitae dicta sunt explicab Nemo enim ipsam voluptatem quia voluptas.'),
(2, 'What is the best features and services we deiver?', 'Perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore vertatis et quasi archtecto beatae vitae dicta sunt explicab Nemo enim ipsam voluptatem quia voluptas.'),
(3, 'Why this Prevention important to me?', 'Perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore vertatis et quasi archtecto beatae vitae dicta sunt explicab Nemo enim ipsam voluptatem quia voluptas.'),
(4, ' how may I take part in and purchase this?', 'Perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore vertatis et quasi archtecto beatae vitae dicta sunt explicab Nemo enim ipsam voluptatem quia voluptas.'),
(5, ' What kinds of security policy do you maintain?', 'Perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore vertatis et quasi archtecto beatae vitae dicta sunt explicab Nemo enim ipsam voluptatem quia voluptas.'),
(6, 'Get things done with this beautiful app?', 'Perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore vertatis et quasi archtecto beatae vitae dicta sunt explicab Nemo enim ipsam voluptatem quia voluptas.'),
(7, 'Starting with Aviki is easier than anything?', 'Perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore vertatis et quasi archtecto beatae vitae dicta sunt explicab Nemo enim ipsam voluptatem quia voluptas.'),
(8, '20k+ Customers Love Aviki App?', 'Perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore vertatis et quasi archtecto beatae vitae dicta sunt explicab Nemo enim ipsam voluptatem quia voluptas.'),
(9, 'Whatever Work You Do You Can Do It In Aviki?', 'Perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore vertatis et quasi archtecto beatae vitae dicta sunt explicab Nemo enim ipsam voluptatem quia voluptas.'),
(10, 'Download our guide manage your daily works?', 'Perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore vertatis et quasi archtecto beatae vitae dicta sunt explicab Nemo enim ipsam voluptatem quia voluptas.');

-- --------------------------------------------------------

--
-- Table structure for table `websms`
--

CREATE TABLE `websms` (
  `web_id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `address` varchar(250) NOT NULL,
  `company` varchar(250) NOT NULL,
  `sms` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `websms`
--

INSERT INTO `websms` (`web_id`, `name`, `email`, `address`, `company`, `sms`) VALUES
(1, 'MD. SHORIF UDDIN', 'shorif@gmail.com', 'Feni', 'shorif', 'hlw'),
(2, 'TABAROK ULLAH TAREK', 'shorif@gmail.com', 'Feni', 'shorif', 'd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `covidtrack`
--
ALTER TABLE `covidtrack`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `preavoid`
--
ALTER TABLE `preavoid`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `predo`
--
ALTER TABLE `predo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `role_id` (`role_id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `wbsym`
--
ALTER TABLE `wbsym`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wbvirus`
--
ALTER TABLE `wbvirus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `webfq`
--
ALTER TABLE `webfq`
  ADD PRIMARY KEY (`fq_id`);

--
-- Indexes for table `websms`
--
ALTER TABLE `websms`
  ADD PRIMARY KEY (`web_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `covidtrack`
--
ALTER TABLE `covidtrack`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `preavoid`
--
ALTER TABLE `preavoid`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `predo`
--
ALTER TABLE `predo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `wbsym`
--
ALTER TABLE `wbsym`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `wbvirus`
--
ALTER TABLE `wbvirus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `webfq`
--
ALTER TABLE `webfq`
  MODIFY `fq_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `websms`
--
ALTER TABLE `websms`
  MODIFY `web_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `user_info`
--
ALTER TABLE `user_info`
  ADD CONSTRAINT `user_info_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `user_role` (`role_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
