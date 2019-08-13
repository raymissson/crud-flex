-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 12-Ago-2019 às 17:43
-- Versão do servidor: 10.1.37-MariaDB
-- versão do PHP: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `flexpeak`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `alunos`
--

CREATE TABLE `alunos` (
  `id` int(10) UNSIGNED NOT NULL,
  `aluno_nome` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `aluno_nasc` date NOT NULL,
  `aluno_logra` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `aluno_cep` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `aluno_bairro` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `aluno_cidade` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `aluno_estado` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `aluno_num` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `curso_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `alunos`
--

INSERT INTO `alunos` (`id`, `aluno_nome`, `aluno_nasc`, `aluno_logra`, `aluno_cep`, `aluno_bairro`, `aluno_cidade`, `aluno_estado`, `aluno_num`, `curso_id`, `created_at`, `updated_at`) VALUES
(1, 'Raymison Maklouf', '1996-02-18', 'Rua Juvenal Bezerra', '69093-082', 'Monte das Oliveiras', 'Manaus', 'AM', '58', 2, '2019-08-10 21:26:14', '2019-08-10 21:26:14'),
(2, 'Juliana', '1999-08-15', 'Rua Juvenal Bezerra', '69093-082', 'Monte das Oliveiras', 'Manaus', 'AM', '30', 2, '2019-08-10 22:44:18', '2019-08-10 22:44:18');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cursos`
--

CREATE TABLE `cursos` (
  `id` int(10) UNSIGNED NOT NULL,
  `curso_nome` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prof_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `cursos`
--

INSERT INTO `cursos` (`id`, `curso_nome`, `prof_id`, `created_at`, `updated_at`) VALUES
(2, 'Matemática', 2, '2019-08-10 19:02:54', '2019-08-10 19:02:54'),
(3, 'Letras', 4, '2019-08-10 19:03:21', '2019-08-10 19:03:21'),
(4, 'Geografia', 3, '2019-08-10 19:42:09', '2019-08-10 19:42:09');

-- --------------------------------------------------------

--
-- Estrutura da tabela `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(4, '2019_08_08_212056_create_professors_table', 1),
(5, '2019_08_09_181825_create_professors_table', 2),
(14, '2019_08_09_184841_create_professors_table', 3),
(15, '2019_08_09_185654_create_cursos_table', 3),
(16, '2019_08_09_194641_create_alunos_table', 4);

-- --------------------------------------------------------

--
-- Estrutura da tabela `professors`
--

CREATE TABLE `professors` (
  `id` int(10) UNSIGNED NOT NULL,
  `prof_nome` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prof_nasc` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `professors`
--

INSERT INTO `professors` (`id`, `prof_nome`, `prof_nasc`, `created_at`, `updated_at`) VALUES
(2, 'Marilha Mendonça', '2001-06-25', '2019-08-10 01:05:18', '2019-08-10 16:33:06'),
(3, 'Raymison Asthon', '1996-02-18', '2019-08-10 16:32:20', '2019-08-10 16:32:20'),
(4, 'Rayziane Asmin', '2001-06-25', '2019-08-10 16:32:45', '2019-08-10 16:55:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alunos`
--
ALTER TABLE `alunos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `alunos_curso_id_foreign` (`curso_id`);

--
-- Indexes for table `cursos`
--
ALTER TABLE `cursos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cursos_prof_id_foreign` (`prof_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `professors`
--
ALTER TABLE `professors`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alunos`
--
ALTER TABLE `alunos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cursos`
--
ALTER TABLE `cursos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `professors`
--
ALTER TABLE `professors`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `alunos`
--
ALTER TABLE `alunos`
  ADD CONSTRAINT `alunos_curso_id_foreign` FOREIGN KEY (`curso_id`) REFERENCES `cursos` (`id`);

--
-- Limitadores para a tabela `cursos`
--
ALTER TABLE `cursos`
  ADD CONSTRAINT `cursos_prof_id_foreign` FOREIGN KEY (`prof_id`) REFERENCES `professors` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
