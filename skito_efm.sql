-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 17 mai 2021 à 09:39
-- Version du serveur :  10.4.11-MariaDB
-- Version de PHP : 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `skito_efm`
--

-- --------------------------------------------------------

--
-- Structure de la table `courses`
--

CREATE TABLE `courses` (
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `course_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `id_teatcher` bigint(20) UNSIGNED NOT NULL,
  `course_thumnail` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `courses`
--

INSERT INTO `courses` (`course_id`, `course_title`, `course_description`, `created_at`, `updated_at`, `id_teatcher`, `course_thumnail`) VALUES
(5, 'cv', 'sdfgber', '2021-04-15 03:39:13', '2021-04-15 03:39:13', 7, 'a1.jpg'),
(7, 'cv', 'sdfgber', '2021-04-16 11:56:20', '2021-04-16 11:56:20', 7, 'a3.jpg'),
(8, 'react js', 'none', '2021-04-19 09:12:34', '2021-04-19 09:12:34', 8, 'book.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `levels`
--

CREATE TABLE `levels` (
  `id_level` bigint(20) UNSIGNED NOT NULL,
  `libelle_level` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `levels`
--

INSERT INTO `levels` (`id_level`, `libelle_level`, `created_at`, `updated_at`) VALUES
(1, 'Senior', NULL, NULL),
(2, 'Midd Level', NULL, NULL),
(3, 'Junior', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `messages`
--

CREATE TABLE `messages` (
  `id_message` bigint(20) UNSIGNED NOT NULL,
  `message_text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_sender` bigint(20) UNSIGNED NOT NULL,
  `id_receiver` bigint(20) UNSIGNED NOT NULL,
  `message_response` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'No Reponse',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `messages`
--

INSERT INTO `messages` (`id_message`, `message_text`, `id_sender`, `id_receiver`, `message_response`, `created_at`, `updated_at`) VALUES
(1, 'wsd', 1, 7, 'nonse', '2021-04-27 10:33:24', '2021-04-27 15:01:21'),
(2, 'qsd', 1, 8, 'No Reponse', '2021-04-27 10:34:11', '2021-04-27 10:34:11'),
(3, 'hello nezha', 1, 8, 'No Reponse', '2021-04-27 11:51:33', '2021-04-27 11:51:33'),
(4, 'qsd', 1, 7, 'ff', '2021-04-27 13:51:02', '2021-05-08 17:53:35'),
(5, 'wdf', 1, 7, 'sedfer', '2021-04-27 13:51:23', '2021-04-27 16:04:05'),
(6, 'hello reda i have a problems', 1, 7, 'what\'s your problem', '2021-05-03 06:53:43', '2021-05-03 06:54:52'),
(7, 'hello nezha i have a problems', 1, 8, 'No Reponse', '2021-05-03 06:54:14', '2021-05-03 06:54:14'),
(8, 'ertherhe', 1, 7, 'No Reponse', '2021-05-03 09:03:54', '2021-05-03 09:03:54'),
(9, 'ttt', 9, 7, 'No Reponse', '2021-05-04 09:50:29', '2021-05-04 09:50:29'),
(10, 'dfgdddddddddd', 1, 8, 'No Reponse', '2021-05-11 11:16:01', '2021-05-11 11:16:01'),
(11, 'vvvvvvvvvvvvv', 1, 8, 'No Reponse', '2021-05-11 11:17:36', '2021-05-11 11:17:36'),
(12, 'ff', 1, 7, 'No Reponse', '2021-05-14 19:20:31', '2021-05-14 19:20:31');

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_04_09_153459_create_type_users_table', 2),
(5, '2021_04_10_075700_create_student_docs_table', 3),
(10, '2021_04_10_080907_create_profiles_table', 4),
(11, '2021_04_10_084337_create_types_table', 5),
(12, '2021_04_10_091151_create_levels_table', 6),
(13, '2021_04_10_091937_create_student_spaces_table', 7),
(14, '2021_04_10_094807_ass_student_id', 8),
(15, '2021_04_10_100111_account_state_isactive', 9),
(16, '2021_04_10_114306_create_courses_table', 10),
(18, '2021_04_10_145030_create_teatchers_table', 11),
(19, '2021_04_10_145906_add_id_teatcher', 12),
(21, '2021_04_10_153533_add_id_teatcher_users', 13),
(22, '2021_04_15_095152_create_videos_table', 13),
(23, '2021_04_24_112041_create_resources_table', 14),
(24, '2021_04_25_045657_create_quizzes_table', 15),
(26, '2021_04_25_125157_create_questions_table', 16),
(27, '2021_04_25_222715_create_user_ans_table', 16),
(28, '2021_04_26_100956_add_is_wrong', 17),
(29, '2021_04_26_120453_add_point_to_question', 18),
(30, '2021_04_26_120957_create_user_quizes_table', 19),
(31, '2021_04_26_122633_add_rating_to_user_quize', 20),
(32, '2021_04_26_141934_add_is_enrolled_to_user_quize', 21),
(33, '2021_04_27_110937_create_messages_table', 22);

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `profiles`
--

CREATE TABLE `profiles` (
  `profile_id` bigint(20) UNSIGNED NOT NULL,
  `profile_libelle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_profile_type` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `profiles`
--

INSERT INTO `profiles` (`profile_id`, `profile_libelle`, `id_profile_type`, `created_at`, `updated_at`) VALUES
(1, 'Service desk analyst', 2, NULL, NULL),
(2, 'Network administrator', 2, NULL, NULL),
(3, 'Network engineer\r\n\r\n', 2, NULL, NULL),
(5, 'Network architect\r\n\r\n', 2, NULL, NULL),
(6, 'Network manager\r\n\r\n', 2, NULL, NULL),
(7, 'Wireless network engineer\r\n\r\n', 2, NULL, NULL),
(8, 'Telecommunications manager or specialist\r\n\r\n', 2, NULL, NULL),
(9, 'Pre-sales engineer\r\n\r\n', 2, NULL, NULL),
(10, 'Data Center Support Specialist', 4, NULL, NULL),
(11, 'Data Quality Manager\r\n', 4, NULL, NULL),
(12, 'Database Administrator', 4, NULL, NULL),
(13, 'Front End', 3, NULL, NULL),
(14, 'Back End', 3, NULL, NULL),
(15, 'Full Stack', 3, NULL, NULL),
(16, 'Cloud Engineer', 1, NULL, NULL),
(17, 'Cloud Systems Administrator', 1, NULL, NULL),
(18, 'Cloud Consultant', 1, NULL, NULL),
(19, 'Android Developer', 5, NULL, NULL),
(20, 'IOS Developer', 5, NULL, NULL),
(21, 'Security Specialist', 6, NULL, NULL),
(22, 'Data Scientist', 7, NULL, NULL),
(23, 'Data Analyst', 7, NULL, NULL),
(24, 'Machine Learning', 7, NULL, NULL),
(25, 'A.I', 7, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `questions`
--

CREATE TABLE `questions` (
  `question_id` bigint(20) UNSIGNED NOT NULL,
  `question_text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `question_right_ans` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `question_wrong_ans_one` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `question_wrong_ans_two` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `question_quiz` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `question_note` int(11) NOT NULL DEFAULT 10
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `questions`
--

INSERT INTO `questions` (`question_id`, `question_text`, `question_right_ans`, `question_wrong_ans_one`, `question_wrong_ans_two`, `question_quiz`, `created_at`, `updated_at`, `question_note`) VALUES
(1, 'HTML ??', 'Hyper text markup language', 'hilqeic', 'edfvselfivh', 1, '2021-04-26 07:23:37', '2021-04-26 07:23:37', 10),
(2, 'JS ??', 'JavaScript', 'node js', 'none', 1, '2021-04-26 07:24:14', '2021-04-26 07:24:14', 10),
(3, 'JSON', 'Javascript Object Notation', 'qzc', 'sdfv', 1, NULL, NULL, 10),
(4, 'API', 'application programing interface', 'dfgb', 'dfgb', 2, '2021-05-08 20:02:24', '2021-05-08 20:02:24', 10),
(5, 'TS', 'type script', 'none', 'none', 1, '2021-05-10 09:38:16', '2021-05-10 09:38:16', 10),
(6, 'ROUTING ??', 'web', 'nn', 'zz', 2, '2021-05-11 08:32:34', '2021-05-11 08:32:34', 10);

-- --------------------------------------------------------

--
-- Structure de la table `quizzes`
--

CREATE TABLE `quizzes` (
  `quiz_id` bigint(20) UNSIGNED NOT NULL,
  `quiz_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quiz_technology` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quiz_teatcher` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `quizzes`
--

INSERT INTO `quizzes` (`quiz_id`, `quiz_title`, `quiz_technology`, `quiz_teatcher`, `created_at`, `updated_at`) VALUES
(1, 'qsd', 'sd', 7, '2021-04-25 09:17:06', '2021-04-25 09:17:06'),
(2, 'sdf', 'sdf', 7, '2021-04-25 09:17:33', '2021-04-25 09:17:33');

-- --------------------------------------------------------

--
-- Structure de la table `resources`
--

CREATE TABLE `resources` (
  `resources_id` bigint(20) UNSIGNED NOT NULL,
  `resource_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `resources_desc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `resources_file_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `video_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `skills`
--

CREATE TABLE `skills` (
  `id_skill` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `level_id` bigint(20) UNSIGNED NOT NULL,
  `profile_id` bigint(20) UNSIGNED NOT NULL,
  `type_domaine_id` bigint(20) UNSIGNED NOT NULL,
  `technology_name` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `skills`
--

INSERT INTO `skills` (`id_skill`, `created_at`, `updated_at`, `id_user`, `level_id`, `profile_id`, `type_domaine_id`, `technology_name`) VALUES
(1, '2021-04-14 15:30:27', NULL, 1, 2, 14, 3, 'Laravel 8'),
(2, '2021-04-12 14:27:47', '2021-04-12 14:27:47', 1, 2, 13, 3, 'React js'),
(8, '2021-04-19 09:18:13', '2021-04-19 09:18:13', 8, 1, 13, 3, 'angular js'),
(10, '2021-04-28 19:58:42', '2021-04-28 19:58:42', 1, 2, 15, 3, 'test'),
(12, '2021-05-13 16:37:35', '2021-05-13 16:37:35', 7, 2, 13, 3, 'React js');

-- --------------------------------------------------------

--
-- Structure de la table `student_docs`
--

CREATE TABLE `student_docs` (
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `student_age` int(11) NOT NULL,
  `student_years_experiance` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `student_docs`
--

INSERT INTO `student_docs` (`student_id`, `student_age`, `student_years_experiance`, `created_at`, `updated_at`) VALUES
(1, 20, 20, '2021-04-12 09:56:16', '2021-04-12 09:56:16'),
(3, 10, 10, '2021-04-10 10:21:03', '2021-04-10 10:21:03'),
(4, 20, 20, '2021-04-10 11:19:40', '2021-04-10 11:19:40'),
(9, 100, 20, '2021-05-04 09:41:38', '2021-05-04 09:41:38');

-- --------------------------------------------------------

--
-- Structure de la table `teatchers`
--

CREATE TABLE `teatchers` (
  `id_teatcher` bigint(20) UNSIGNED NOT NULL,
  `age_teatcher` int(11) NOT NULL,
  `teatcher_years_experiance` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `teatchers`
--

INSERT INTO `teatchers` (`id_teatcher`, `age_teatcher`, `teatcher_years_experiance`, `created_at`, `updated_at`) VALUES
(7, 4, 40, '2021-04-14 08:14:33', '2021-04-14 08:14:33'),
(8, 20, 10, '2021-04-19 09:12:10', '2021-04-19 09:12:10');

-- --------------------------------------------------------

--
-- Structure de la table `types`
--

CREATE TABLE `types` (
  `id_type` bigint(20) UNSIGNED NOT NULL,
  `libelle_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `types`
--

INSERT INTO `types` (`id_type`, `libelle_type`, `created_at`, `updated_at`) VALUES
(1, 'Cloud', NULL, NULL),
(2, 'Network', NULL, NULL),
(3, 'Web ', NULL, NULL),
(4, 'Database ', NULL, NULL),
(5, 'Mobile', NULL, NULL),
(6, 'Security ', NULL, NULL),
(7, 'Data', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `type_users`
--

CREATE TABLE `type_users` (
  `id_user_type` bigint(20) UNSIGNED NOT NULL,
  `libelle_user_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `type_users`
--

INSERT INTO `type_users` (`id_user_type`, `libelle_user_type`, `created_at`, `updated_at`) VALUES
(1, 'Teatcher', NULL, NULL),
(2, 'Student', NULL, NULL),
(3, 'admin', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_user_type` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `id_user_type`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `active`) VALUES
(1, 'zack', 2, 'elhossnizakaria@gmail.com', NULL, '$2y$10$MY.PtThSD7iiPb0Kjn1A7OoUoULVkzO6oYHg0bpA9VEECKNiK.NMC', NULL, '2021-04-09 14:42:47', '2021-04-12 09:56:16', 1),
(3, 'ahmad', 2, 'ahmad@gmail.com', NULL, '$2y$10$37K1fTsh9rpuqRQ4Fgwcd.5vHPhXyjmsd7WC4gq6yd4t9OklKB95K', NULL, '2021-04-10 08:03:57', '2021-04-10 09:33:51', 1),
(4, 'rajaa', 2, 'rajaa@gmail.com', NULL, '$2y$10$.cD1l9F5Su/QZ91C3mzknOZKofdLplyeTJ8MkJO5XNstCmv1.jgsW', NULL, '2021-04-10 11:19:34', '2021-04-10 11:19:40', 1),
(7, 'reda', 1, 'reda@gmail.com', NULL, '$2y$10$CiTZePQFjKbc7D4jf/KBb.xKsS2UYnxHr/hf1ncRy.nmz2elX.L0O', NULL, '2021-04-14 08:09:54', '2021-04-14 08:14:33', 1),
(8, 'nezha', 1, 'nezha@gmail.com', NULL, '$2y$10$8sjr3jQ4J.dlpc33fphh1e21cKuE4GvSapoNvAaB2zfYJRvNHFcEW', NULL, '2021-04-19 09:12:03', '2021-04-19 09:12:10', 1),
(9, 'ayman', 2, 'ayman@gmail.com', NULL, '$2y$10$pP.jgtFkDSq4QjV/FJh5iu9sR6fNxvu9NiU/d/LLKSkVUEpYo9Pwu', NULL, '2021-05-04 09:40:49', '2021-05-04 09:41:38', 1);

-- --------------------------------------------------------

--
-- Structure de la table `user_ans`
--

CREATE TABLE `user_ans` (
  `answer_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `answer_question` bigint(20) UNSIGNED NOT NULL,
  `answer_question_id` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_state` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'wrong'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `user_ans`
--

INSERT INTO `user_ans` (`answer_id`, `user_id`, `answer_question`, `answer_question_id`, `created_at`, `updated_at`, `is_state`) VALUES
(256, 1, 4, 'application programing interface', '2021-05-11 07:37:37', '2021-05-11 07:37:37', 'wrong'),
(257, 1, 4, 'dfgb', '2021-05-11 07:39:31', '2021-05-11 07:39:31', 'wrong'),
(258, 1, 4, 'application programing interface', '2021-05-11 08:14:39', '2021-05-11 08:14:39', 'wrong'),
(259, 7, 4, 'application programing interface', '2021-05-11 08:33:10', '2021-05-11 08:33:10', 'wrong'),
(261, 7, 1, 'Hyper text markup language', '2021-05-11 08:43:27', '2021-05-11 08:43:27', 'right'),
(262, 7, 4, 'application programing interface', '2021-05-11 08:43:45', '2021-05-11 08:43:45', 'wrong'),
(263, 7, 6, 'web', '2021-05-11 08:43:50', '2021-05-11 08:43:50', 'right'),
(264, 7, 1, 'Hyper text markup language', '2021-05-11 08:44:41', '2021-05-11 08:44:41', 'right'),
(265, 7, 2, 'JavaScript', '2021-05-11 08:44:44', '2021-05-11 08:44:44', 'right'),
(266, 7, 3, 'Javascript Object Notation', '2021-05-11 08:44:47', '2021-05-11 08:44:47', 'right'),
(267, 7, 5, 'none', '2021-05-11 08:44:52', '2021-05-11 08:44:52', 'wrong'),
(268, 7, 4, 'application programing interface', '2021-05-11 08:45:09', '2021-05-11 08:45:09', 'wrong'),
(269, 7, 6, 'nn', '2021-05-11 08:45:12', '2021-05-11 08:45:12', 'wrong'),
(270, 7, 4, 'application programing interface', '2021-05-11 08:47:32', '2021-05-11 08:47:32', 'right'),
(271, 7, 6, 'web', '2021-05-11 08:47:36', '2021-05-11 08:47:36', 'right'),
(272, 7, 1, 'Hyper text markup language', '2021-05-13 18:37:48', '2021-05-13 18:37:48', 'right'),
(273, 7, 2, 'JavaScript', '2021-05-13 18:37:51', '2021-05-13 18:37:51', 'right'),
(274, 7, 3, 'Javascript Object Notation', '2021-05-13 18:37:53', '2021-05-13 18:37:53', 'right'),
(275, 7, 5, 'none', '2021-05-13 18:37:57', '2021-05-13 18:37:57', 'wrong'),
(276, 7, 4, 'application programing interface', '2021-05-14 12:40:35', '2021-05-14 12:40:35', 'right'),
(277, 7, 6, 'web', '2021-05-14 12:40:39', '2021-05-14 12:40:39', 'right');

-- --------------------------------------------------------

--
-- Structure de la table `user_quizes`
--

CREATE TABLE `user_quizes` (
  `id_user_quize` bigint(20) UNSIGNED NOT NULL,
  `id_quize` bigint(20) UNSIGNED NOT NULL,
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `Rating` int(11) NOT NULL DEFAULT 0,
  `is_enrolled` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `user_quizes`
--

INSERT INTO `user_quizes` (`id_user_quize`, `id_quize`, `id_user`, `created_at`, `updated_at`, `Rating`, `is_enrolled`) VALUES
(163, 1, 7, '2021-05-13 18:37:44', '2021-05-13 18:37:53', 30, 1),
(164, 2, 7, '2021-05-14 12:40:31', '2021-05-14 12:40:39', 20, 1);

-- --------------------------------------------------------

--
-- Structure de la table `videos`
--

CREATE TABLE `videos` (
  `video_id` bigint(20) UNSIGNED NOT NULL,
  `title_video` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `video_path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `videos`
--

INSERT INTO `videos` (`video_id`, `title_video`, `video_path`, `course_id`, `created_at`, `updated_at`) VALUES
(21, 'hhhhh', 'vid04.mp4', 5, '2021-04-19 08:56:13', '2021-04-19 08:56:13'),
(22, 'drter', 'vid03.mp4', 8, '2021-04-19 09:49:00', '2021-04-19 09:49:00');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`course_id`),
  ADD KEY `id_teatcher` (`id_teatcher`);

--
-- Index pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Index pour la table `levels`
--
ALTER TABLE `levels`
  ADD PRIMARY KEY (`id_level`);

--
-- Index pour la table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id_message`),
  ADD KEY `messages_ibfk_1` (`id_sender`),
  ADD KEY `id_receiver` (`id_receiver`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Index pour la table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`profile_id`),
  ADD KEY `id_profile_type` (`id_profile_type`);

--
-- Index pour la table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`question_id`),
  ADD KEY `questions_ibfk_1` (`question_quiz`);

--
-- Index pour la table `quizzes`
--
ALTER TABLE `quizzes`
  ADD PRIMARY KEY (`quiz_id`),
  ADD KEY `quiz_teatcher` (`quiz_teatcher`);

--
-- Index pour la table `resources`
--
ALTER TABLE `resources`
  ADD PRIMARY KEY (`resources_id`),
  ADD KEY `video_id` (`video_id`);

--
-- Index pour la table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id_skill`),
  ADD KEY `id_student` (`id_user`),
  ADD KEY `level_id` (`level_id`),
  ADD KEY `profile_id` (`profile_id`),
  ADD KEY `type_domaine_id` (`type_domaine_id`);

--
-- Index pour la table `student_docs`
--
ALTER TABLE `student_docs`
  ADD PRIMARY KEY (`student_id`);

--
-- Index pour la table `teatchers`
--
ALTER TABLE `teatchers`
  ADD PRIMARY KEY (`id_teatcher`);

--
-- Index pour la table `types`
--
ALTER TABLE `types`
  ADD PRIMARY KEY (`id_type`);

--
-- Index pour la table `type_users`
--
ALTER TABLE `type_users`
  ADD PRIMARY KEY (`id_user_type`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `id_user_type` (`id_user_type`);

--
-- Index pour la table `user_ans`
--
ALTER TABLE `user_ans`
  ADD PRIMARY KEY (`answer_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `answer_question` (`answer_question`);

--
-- Index pour la table `user_quizes`
--
ALTER TABLE `user_quizes`
  ADD PRIMARY KEY (`id_user_quize`),
  ADD KEY `id_quize` (`id_quize`),
  ADD KEY `id_user` (`id_user`);

--
-- Index pour la table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`video_id`),
  ADD KEY `course_id` (`course_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `courses`
--
ALTER TABLE `courses`
  MODIFY `course_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `levels`
--
ALTER TABLE `levels`
  MODIFY `id_level` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `messages`
--
ALTER TABLE `messages`
  MODIFY `id_message` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT pour la table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `profile_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT pour la table `questions`
--
ALTER TABLE `questions`
  MODIFY `question_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `quizzes`
--
ALTER TABLE `quizzes`
  MODIFY `quiz_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `resources`
--
ALTER TABLE `resources`
  MODIFY `resources_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `skills`
--
ALTER TABLE `skills`
  MODIFY `id_skill` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `types`
--
ALTER TABLE `types`
  MODIFY `id_type` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `type_users`
--
ALTER TABLE `type_users`
  MODIFY `id_user_type` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `user_ans`
--
ALTER TABLE `user_ans`
  MODIFY `answer_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=278;

--
-- AUTO_INCREMENT pour la table `user_quizes`
--
ALTER TABLE `user_quizes`
  MODIFY `id_user_quize` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=165;

--
-- AUTO_INCREMENT pour la table `videos`
--
ALTER TABLE `videos`
  MODIFY `video_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `courses`
--
ALTER TABLE `courses`
  ADD CONSTRAINT `courses_ibfk_1` FOREIGN KEY (`id_teatcher`) REFERENCES `teatchers` (`id_teatcher`);

--
-- Contraintes pour la table `messages`
--
ALTER TABLE `messages`
  ADD CONSTRAINT `messages_ibfk_1` FOREIGN KEY (`id_sender`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `messages_ibfk_2` FOREIGN KEY (`id_receiver`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `profiles`
--
ALTER TABLE `profiles`
  ADD CONSTRAINT `profiles_ibfk_1` FOREIGN KEY (`id_profile_type`) REFERENCES `types` (`id_type`);

--
-- Contraintes pour la table `questions`
--
ALTER TABLE `questions`
  ADD CONSTRAINT `questions_ibfk_1` FOREIGN KEY (`question_quiz`) REFERENCES `quizzes` (`quiz_id`);

--
-- Contraintes pour la table `quizzes`
--
ALTER TABLE `quizzes`
  ADD CONSTRAINT `quizzes_ibfk_1` FOREIGN KEY (`quiz_teatcher`) REFERENCES `teatchers` (`id_teatcher`);

--
-- Contraintes pour la table `resources`
--
ALTER TABLE `resources`
  ADD CONSTRAINT `resources_ibfk_1` FOREIGN KEY (`video_id`) REFERENCES `videos` (`video_id`);

--
-- Contraintes pour la table `skills`
--
ALTER TABLE `skills`
  ADD CONSTRAINT `skills_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `skills_ibfk_2` FOREIGN KEY (`level_id`) REFERENCES `levels` (`id_level`),
  ADD CONSTRAINT `skills_ibfk_3` FOREIGN KEY (`profile_id`) REFERENCES `profiles` (`profile_id`),
  ADD CONSTRAINT `skills_ibfk_4` FOREIGN KEY (`type_domaine_id`) REFERENCES `types` (`id_type`);

--
-- Contraintes pour la table `student_docs`
--
ALTER TABLE `student_docs`
  ADD CONSTRAINT `student_docs_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `teatchers`
--
ALTER TABLE `teatchers`
  ADD CONSTRAINT `teatchers_ibfk_1` FOREIGN KEY (`id_teatcher`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`id_user_type`) REFERENCES `type_users` (`id_user_type`);

--
-- Contraintes pour la table `user_ans`
--
ALTER TABLE `user_ans`
  ADD CONSTRAINT `user_ans_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `user_ans_ibfk_2` FOREIGN KEY (`answer_question`) REFERENCES `questions` (`question_id`);

--
-- Contraintes pour la table `user_quizes`
--
ALTER TABLE `user_quizes`
  ADD CONSTRAINT `user_quizes_ibfk_1` FOREIGN KEY (`id_quize`) REFERENCES `quizzes` (`quiz_id`),
  ADD CONSTRAINT `user_quizes_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `videos`
--
ALTER TABLE `videos`
  ADD CONSTRAINT `videos_ibfk_1` FOREIGN KEY (`course_id`) REFERENCES `courses` (`course_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
