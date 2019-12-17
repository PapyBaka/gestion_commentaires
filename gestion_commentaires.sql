-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 17, 2019 at 05:34 PM
-- Server version: 5.7.24
-- PHP Version: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gestion_commentaires`
--

-- --------------------------------------------------------

--
-- Table structure for table `commentaires`
--

CREATE TABLE `commentaires` (
  `id` int(11) NOT NULL,
  `contenu` text NOT NULL,
  `valide` tinyint(4) NOT NULL DEFAULT '0',
  `ko_1` tinyint(4) NOT NULL DEFAULT '0',
  `ko_2` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `commentaires`
--

INSERT INTO `commentaires` (`id`, `contenu`, `valide`, `ko_1`, `ko_2`) VALUES
(1, 'Qui praesentium illo quo officia amet. Id neque ut hic et suscipit. Possimus totam molestiae rerum et sit quia. Nemo rerum ut suscipit assumenda. Amet expedita veniam doloremque nam ratione. Pariatur doloremque et nulla dolore modi facilis. A eum repudiandae perferendis. INTERDIT Blanditiis inventore unde dolor. Delectus consequatur sapiente non est temporibus sed. Autem officia accusantium consequatur quis omnis.', 1, 1, 0),
(2, 'Dolores officia sit adipisci iusto ipsa nisi vero tempora. Voluptate quam tempore consequuntur non aut itaque ab. Voluptatem soluta dolorum aliquam sed aliquam excepturi. Non ut quasi est temporibus. Corporis laudantium ad explicabo magnam excepturi delectus. INTERDIT Qui omnis nam reiciendis accusamus. Voluptatem eveniet dignissimos recusandae quod sed eaque ipsa. Ut et sint aut unde repellendus earum voluptatem quod. Fuga aspernatur aut aperiam. Dolore quis voluptatem debitis laboriosam.', 1, 0, 0),
(3, 'INTERDIT Quisquam explicabo esse neque deserunt quia et blanditiis. Doloribus quasi quisquam ut fugiat aliquam qui dolorum sit. Est tenetur ipsa doloremque et dicta. Quod perferendis dolores rerum quo amet distinctio ut. Voluptatem rem est cum vitae amet. Error dolores quidem ratione autem. Magni consectetur iste ut adipisci delectus ab. Dolorem temporibus omnis voluptates tempora eaque. Libero consequatur nobis veniam placeat. Enim ipsum molestiae aut itaque impedit neque sequi.', 0, 0, 1),
(4, 'Sed mollitia maxime quas consequuntur. Aspernatur velit aut aliquam veniam rerum placeat nisi et. Quia quis est iste a est. Ipsam aut molestiae tempore fugit. Impedit veritatis harum minima aut quo et sint qui. Consequatur et vitae quia sit esse sint. Cum cupiditate qui nam eaque ut nulla. INTERDIT Enim id illo illo ex. Nulla aliquid ipsam saepe nihil id alias. Consectetur sed distinctio vel aut dolore ipsa aperiam voluptatem.', 1, 0, 0),
(5, 'Eum tenetur rerum quo explicabo id fuga odio. Aperiam odio nam vel debitis. INTERDIT Possimus libero rerum sit perferendis voluptatem voluptatem. Aut aliquid praesentium quod saepe. Sed dolores nihil ducimus ab commodi maiores voluptatum. Totam vel unde molestias maiores. Aliquid sequi est eius. Non asperiores provident porro omnis corporis quia qui accusamus. Et et doloremque quis et nemo. Iste quo blanditiis ut.', 1, 0, 0),
(6, 'Sequi temporibus dolorem quis fugiat. Sed culpa non quia officia ratione. Consequuntur nisi nihil eum ipsam laudantium ullam. Sit commodi eligendi consequatur aut reiciendis ut. INTERDIT Voluptate dolorem et facere explicabo. Quod consequatur suscipit architecto iusto. Omnis distinctio necessitatibus esse sint iste sint. Voluptas error in velit laborum molestias iure est. Nostrum rerum dolor dignissimos minus quas suscipit rem. Enim quas cumque magni consequatur ullam ea.', 1, 0, 0),
(7, 'Qui ut qui ex eum quo illum officia. Vel dolorem inventore recusandae dolores et sit voluptatem minus. Quo velit nostrum suscipit nihil atque recusandae. Quod cum dolorum sint. Cupiditate ut consequatur et sed enim corrupti dolore. INTERDIT Est autem rem aut voluptatem voluptas quisquam veritatis. Fuga non blanditiis quia fugit. Autem ut aspernatur dolorum officia alias vel. Harum qui itaque vitae qui tempore minus non fugit. Aperiam officiis eaque ipsam exercitationem repellendus voluptate.', 1, 0, 0),
(8, 'Commodi est veniam sapiente explicabo dignissimos blanditiis. Rerum doloremque qui incidunt saepe officiis blanditiis ut. Impedit ratione repellendus sed repellendus ea nostrum. INTERDIT Velit numquam est quia ipsam eaque aspernatur voluptas. Inventore voluptate architecto explicabo deserunt dolorem veniam quisquam. Maiores aut occaecati tempore sed hic. Veniam consectetur repudiandae sint odit porro ea. Fugit tempore voluptates excepturi sequi. Et officiis qui porro iusto voluptas. Praesentium sunt reprehenderit sint nam perspiciatis et harum.', 1, 0, 0),
(9, 'Voluptate rem inventore ipsa sint animi. Molestiae quia aut quia doloremque voluptatem ea doloremque. Enim aut aut dolorem est nulla. Omnis enim voluptas ea iure qui. Corrupti nihil sed accusamus odit est. Quis est numquam rerum sit est nesciunt dicta. Quasi unde voluptates quia illo dolorem est fuga. Saepe sed velit rerum voluptatum enim omnis. INTERDIT Exercitationem dolorem aut harum corrupti totam quas aut aliquid. Quia tenetur sequi est molestias eligendi consequuntur.', 1, 0, 0),
(10, 'Officiis autem consectetur explicabo. Unde qui placeat minus et. INTERDIT Est sed neque recusandae. Maxime qui odit placeat fugit qui delectus. Quis quasi et ipsam deserunt. Dicta cum eligendi in qui error numquam deserunt sunt. Iure nam dolorem praesentium. Ducimus amet ut deleniti qui omnis eum enim. Quia labore omnis unde consequatur sit. Quod voluptate pariatur quasi quaerat suscipit sed eaque.', 1, 0, 0),
(11, 'Dolores commodi veniam excepturi voluptate nemo doloribus repudiandae. Dolorem minima facere nam. Mollitia sequi sed fugit et ab eaque fugit natus. Recusandae voluptates illum facilis consequatur ab reiciendis excepturi. Atque aspernatur quia qui perspiciatis. Qui sunt quia consequuntur dicta soluta veritatis. INTERDIT Et illo quia dolore omnis quia quia vero et. Velit molestias esse quia porro. Velit ut labore assumenda velit qui. Explicabo fugiat vel ut.', 1, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `labels`
--

CREATE TABLE `labels` (
  `label` varchar(255) NOT NULL,
  `id_comment` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `labels`
--

INSERT INTO `labels` (`label`, `id_comment`) VALUES
('INTERDIT', 1),
('INTERDIT', 2),
('INTERDIT', 3),
('INTERDIT', 4),
('INTERDIT', 5),
('INTERDIT', 6),
('INTERDIT', 7),
('INTERDIT', 8),
('INTERDIT', 9),
('INTERDIT', 10),
('INTERDIT', 11);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `commentaires`
--
ALTER TABLE `commentaires`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `labels`
--
ALTER TABLE `labels`
  ADD KEY `fk_id_comment` (`id_comment`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `commentaires`
--
ALTER TABLE `commentaires`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `labels`
--
ALTER TABLE `labels`
  ADD CONSTRAINT `fk_id_comment` FOREIGN KEY (`id_comment`) REFERENCES `commentaires` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
