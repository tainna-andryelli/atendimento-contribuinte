-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 18/12/2023 às 22:59
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `contribuinte`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_12_14_181525_create_model_pessoas_table', 1),
(6, '2023_12_14_181546_create_model_protocolos_table', 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(191) NOT NULL,
  `token` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `pessoa`
--

CREATE TABLE `pessoa` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nome` varchar(191) NOT NULL,
  `data_nasc` date NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `sexo` enum('masculino','feminino','transgênero','gênero neutro','não-binário','outro') NOT NULL,
  `cidade` varchar(191) DEFAULT NULL,
  `bairro` varchar(191) DEFAULT NULL,
  `rua` varchar(191) DEFAULT NULL,
  `complemento` varchar(191) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `pessoa`
--

INSERT INTO `pessoa` (`id`, `nome`, `data_nasc`, `cpf`, `sexo`, `cidade`, `bairro`, `rua`, `complemento`, `created_at`, `updated_at`) VALUES
(21, 'Maria Elisa Da Cunha', '2023-11-30', '04827757099', 'feminino', NULL, NULL, NULL, NULL, '2023-12-16 19:56:40', '2023-12-18 14:11:42'),
(22, 'Laura Gonçalves Dias', '2023-12-07', '04827757666', 'gênero neutro', NULL, NULL, NULL, NULL, '2023-12-16 19:56:58', '2023-12-18 14:11:27'),
(23, 'Laura Jéssica SIlvana', '2023-12-13', '04827754444', 'transgênero', NULL, NULL, NULL, NULL, '2023-12-16 20:28:17', '2023-12-18 14:10:34'),
(27, 'Tainná Ribeiro', '2002-12-11', '04827757003', 'feminino', NULL, NULL, NULL, NULL, '2023-12-18 04:01:18', '2023-12-18 14:10:22'),
(28, 'Maria Elisa', '2002-12-18', '99999999999', 'feminino', NULL, NULL, NULL, NULL, '2023-12-18 04:15:50', '2023-12-18 04:15:50'),
(29, 'Luciana Morais', '2023-01-01', '99988877766', 'feminino', 'Canoas', NULL, NULL, NULL, '2023-12-18 14:10:00', '2023-12-18 14:10:00'),
(30, 'Carlos Antônio da Silva ', '1960-01-01', '99999999977', 'masculino', 'Porto Alegre', NULL, NULL, NULL, '2023-12-18 14:10:00', '2023-12-18 14:10:00'),
(31, 'Leonardo Ribeiro', '1996-01-01', '00011229987', 'masculino', 'Novo Hamburgo', NULL, NULL, NULL, '2023-12-18 14:10:00', '2023-12-18 14:10:00'),
(32, 'Cristina da Silveira', '2002-01-01', '01235678910', 'feminino', 'São Leopoldo', NULL, NULL, NULL, '2023-12-18 14:10:00', '2023-12-18 14:10:00'),
(33, 'Victória Fagundes', '2000-01-01', '01235678955', 'feminino', 'Sapucaia do Sul', NULL, NULL, NULL, '2023-12-18 14:10:00', '2023-12-18 14:10:00'),
(34, 'Maria Cesar da Silva', '1994-01-01', '01235674444', 'feminino', 'Sapucaia do Sul', NULL, NULL, NULL, '2023-12-18 14:10:00', '2023-12-18 14:10:00'),
(35, 'Edemilson Leites Silva', '1997-02-19', '77665588667', 'masculino', NULL, NULL, NULL, NULL, '2023-12-18 14:12:15', '2023-12-18 14:20:21'),
(36, 'Valério Lucas Gonçalves', '1997-09-19', '04827755555', 'masculino', NULL, NULL, NULL, NULL, '2023-12-18 14:13:03', '2023-12-18 14:20:57'),
(37, 'Cristiano Dellamora', '2002-12-18', '66554433221', 'masculino', NULL, NULL, NULL, NULL, '2023-12-18 14:14:14', '2023-12-18 14:14:14'),
(38, 'Letícia Cristina Ortiz', '1996-12-19', '00998877667', 'feminino', NULL, NULL, NULL, NULL, '2023-12-18 14:16:04', '2023-12-18 14:21:31'),
(39, 'Fabrício Meirelles', '1990-08-17', '09876543212', 'masculino', NULL, NULL, NULL, NULL, '2023-12-18 18:09:31', '2023-12-18 18:09:31'),
(40, 'Bianca Maria Soares', '1984-09-17', '04825555555', 'feminino', NULL, NULL, NULL, NULL, '2023-12-18 18:10:13', '2023-12-18 18:10:13'),
(41, 'Luana Lucas Leites', '1995-09-12', '77776666543', 'feminino', NULL, NULL, NULL, NULL, '2023-12-18 18:10:48', '2023-12-18 18:10:48'),
(42, 'Lucas Augusto Moura', '1980-12-18', '12345678909', 'masculino', NULL, NULL, NULL, NULL, '2023-12-18 18:11:46', '2023-12-18 18:11:46'),
(43, 'Maria da Silva Pereira', '1990-03-12', '87875432341', 'feminino', NULL, NULL, NULL, NULL, '2023-12-18 18:12:24', '2023-12-18 18:12:24'),
(44, 'Milena Fagundes', '1985-12-17', '83838383776', 'feminino', NULL, NULL, NULL, NULL, '2023-12-18 18:12:58', '2023-12-18 18:12:58'),
(45, 'Carlos de Souza Filho', '1976-12-08', '89562300987', 'masculino', NULL, NULL, NULL, NULL, '2023-12-18 21:34:44', '2023-12-18 21:34:44');

-- --------------------------------------------------------

--
-- Estrutura para tabela `protocolo`
--

CREATE TABLE `protocolo` (
  `numero` int(10) UNSIGNED NOT NULL,
  `descricao` varchar(191) NOT NULL,
  `data` date NOT NULL,
  `prazo` int(11) NOT NULL,
  `contribuinte` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `protocolo`
--

INSERT INTO `protocolo` (`numero`, `descricao`, `data`, `prazo`, `contribuinte`, `created_at`, `updated_at`) VALUES
(11, 'O Lorem Ipsum é um texto modelo da indústria tipográfica e de impressão. O Lorem Ipsum é um texto modelo da indústria tipográfica e de impressão.', '2023-11-30', 5, 21, '2023-12-16 20:12:44', '2023-12-17 20:38:10'),
(13, 'O Lorem Ipsum é um texto modelo da indústria tipográfica e de impressão. O Lorem Ipsum é um texto modelo da indústria tipográfica e de impressão.', '2023-09-18', 4, 22, '2023-12-17 20:40:05', '2023-12-17 20:40:05'),
(15, 'descricao aleatoria', '2023-12-18', 7, 21, '2023-12-18 05:02:37', '2023-12-18 05:02:37'),
(16, 'O Lorem Ipsum é um texto modelo da indústria tipográfica e de impressão. O Lorem Ipsum é um texto modelo da indústria tipográfica e de impressão.', '2002-12-18', 4, 27, '2023-12-18 05:11:22', '2023-12-18 05:11:22'),
(17, 'O Lorem Ipsum é um texto modelo da indústria tipográfica e de impressão. O Lorem Ipsum é um texto modelo da indústria tipográfica e de impressão.', '2222-02-19', 3, 21, '2023-12-18 05:12:51', '2023-12-18 05:12:51'),
(18, 'O Lorem Ipsum é um texto modelo da indústria tipográfica e de impressão. O Lorem Ipsum é um texto modelo da indústria tipográfica e de impressão.', '2022-11-17', 6, 37, '2023-12-18 14:22:48', '2023-12-18 14:22:48'),
(19, 'O Lorem Ipsum é um texto modelo da indústria tipográfica e de impressão. O Lorem Ipsum é um texto modelo da indústria tipográfica e de impressão.', '2023-02-19', 10, 31, '2023-12-18 14:23:29', '2023-12-18 14:23:29'),
(20, 'O Lorem Ipsum é um texto modelo da indústria tipográfica e de impressão. O Lorem Ipsum é um texto modelo da indústria tipográfica e de impressão.', '2021-12-02', 15, 30, '2023-12-18 14:23:46', '2023-12-18 14:23:46'),
(21, 'O Lorem Ipsum é um texto modelo da indústria tipográfica e de impressão. O Lorem Ipsum é um texto modelo da indústria tipográfica e de impressão.', '2022-02-12', 20, 33, '2023-12-18 14:24:09', '2023-12-18 14:24:09'),
(22, 'O Lorem Ipsum é um texto modelo da indústria tipográfica e de impressão. O Lorem Ipsum é um texto modelo da indústria tipográfica e de impressão.', '2020-08-09', 7, 34, '2023-12-18 14:24:31', '2023-12-18 14:24:31'),
(23, 'O Lorem Ipsum é um texto modelo da indústria tipográfica e de impressão. O Lorem Ipsum é um texto modelo da indústria tipográfica e de impressão.', '2022-08-09', 5, 36, '2023-12-18 14:25:03', '2023-12-18 14:25:03'),
(24, 'O Lorem Ipsum é um texto modelo da indústria tipográfica e de impressão. O Lorem Ipsum é um texto modelo da indústria tipográfica e de impressão.', '2023-08-09', 9, 38, '2023-12-18 14:25:35', '2023-12-18 14:25:35'),
(25, 'O Lorem Ipsum é um texto modelo da indústria tipográfica e de impressão. O Lorem Ipsum é um texto modelo da indústria tipográfica e de impressão.', '2023-12-18', 6, 21, '2023-12-18 21:38:46', '2023-12-18 21:38:46');

-- --------------------------------------------------------

--
-- Estrutura para tabela `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Índices de tabela `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Índices de tabela `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Índices de tabela `pessoa`
--
ALTER TABLE `pessoa`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pessoa_cpf_unique` (`cpf`);

--
-- Índices de tabela `protocolo`
--
ALTER TABLE `protocolo`
  ADD PRIMARY KEY (`numero`),
  ADD KEY `protocolo_contribuinte_foreign` (`contribuinte`);

--
-- Índices de tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `pessoa`
--
ALTER TABLE `pessoa`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT de tabela `protocolo`
--
ALTER TABLE `protocolo`
  MODIFY `numero` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `protocolo`
--
ALTER TABLE `protocolo`
  ADD CONSTRAINT `protocolo_contribuinte_foreign` FOREIGN KEY (`contribuinte`) REFERENCES `pessoa` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
