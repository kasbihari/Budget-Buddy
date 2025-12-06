-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Gegenereerd op: 13 nov 2025 om 08:08
-- Serverversie: 10.4.28-MariaDB
-- PHP-versie: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Database: `sololevelers`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `category`
--

CREATE TABLE `category` (
                            `id` int(11) NOT NULL,
                            `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
                                          (1, 'Salaris'),
                                          (2, 'Zorgtoeslag'),
                                          (3, 'Kleedgeld'),
                                          (4, 'Zakgeld'),
                                          (5, 'Huurtoeslag'),
                                          (6, 'studiefinanciering'),
                                          (7, 'Telefoon abonnement');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `doctrine_migration_versions`
--

CREATE TABLE `doctrine_migration_versions` (
                                               `version` varchar(191) NOT NULL,
                                               `executed_at` datetime DEFAULT NULL,
                                               `execution_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `doctrine_migration_versions`
--

INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES
                                                                                           ('DoctrineMigrations\\Version20250926104907', '2025-09-26 12:49:21', 119),
                                                                                           ('DoctrineMigrations\\Version20251006103606', '2025-10-06 12:36:12', 12),
                                                                                           ('DoctrineMigrations\\Version20251007093542', '2025-10-07 11:38:04', 8),
                                                                                           ('DoctrineMigrations\\Version20251007094022', '2025-10-07 11:40:32', 18),
                                                                                           ('DoctrineMigrations\\Version20251007095132', '2025-10-07 11:51:36', 9),
                                                                                           ('DoctrineMigrations\\Version20251007095609', '2025-10-07 11:56:16', 19),
                                                                                           ('DoctrineMigrations\\Version20251007095806', '2025-10-07 11:58:10', 7),
                                                                                           ('DoctrineMigrations\\Version20251028105505', '2025-10-28 11:56:48', 24),
                                                                                           ('DoctrineMigrations\\Version20251112185355', '2025-11-12 18:54:07', 48);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `messenger_messages`
--

CREATE TABLE `messenger_messages` (
                                      `id` bigint(20) NOT NULL,
                                      `body` longtext NOT NULL,
                                      `headers` longtext NOT NULL,
                                      `queue_name` varchar(190) NOT NULL,
                                      `created_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)',
                                      `available_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)',
                                      `delivered_at` datetime DEFAULT NULL COMMENT '(DC2Type:datetime_immutable)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `transactions`
--

CREATE TABLE `transactions` (
                                `id` int(11) NOT NULL,
                                `amount` decimal(6,2) NOT NULL,
                                `category_id` int(11) NOT NULL,
                                `user_id` int(11) NOT NULL,
                                `date` datetime NOT NULL,
                                `description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `transactions`
--

INSERT INTO `transactions` (`id`, `amount`, `category_id`, `user_id`, `date`, `description`) VALUES
                                                                                                 (7, 100.00, 4, 2, '2025-10-28 00:00:00', 'zakgeld'),
                                                                                                 (9, -12.00, 2, 2, '2025-10-28 00:00:00', 'zorgtoeslag'),
                                                                                                 (10, 900.00, 1, 2, '2025-10-28 00:00:00', 'oplevering website'),
                                                                                                 (11, -50.00, 3, 2, '2025-10-28 00:00:00', 'outfit'),
                                                                                                 (12, -200.00, 5, 2, '2025-10-28 00:00:00', 'huur'),
                                                                                                 (13, -900.00, 6, 2, '2025-10-28 00:00:00', 'afbetaling'),
                                                                                                 (14, 500.00, 1, 2, '2025-10-28 00:00:00', 'salaris'),
                                                                                                 (15, 900.00, 1, 1, '2025-07-04 00:00:00', 'Salaris'),
                                                                                                 (16, -50.00, 3, 1, '2025-07-24 00:00:00', 'nieuwe jas'),
                                                                                                 (17, 800.00, 1, 1, '2025-08-14 00:00:00', 'Salaris'),
                                                                                                 (18, -900.00, 3, 3, '2025-11-13 00:00:00', 'pattas'),
                                                                                                 (19, 20.00, 1, 3, '2025-11-13 00:00:00', ''),
                                                                                                 (20, 20.00, 1, 3, '2025-11-13 00:00:00', ''),
                                                                                                 (21, -900.00, 5, 3, '2025-11-13 00:00:00', '');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `user`
--

CREATE TABLE `user` (
                        `id` int(11) NOT NULL,
                        `email` varchar(180) NOT NULL,
                        `roles` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL COMMENT '(DC2Type:json)' CHECK (json_valid(`roles`)),
                        `password` varchar(255) NOT NULL,
                        `full_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `user`
--

INSERT INTO `user` (`id`, `email`, `roles`, `password`, `full_name`) VALUES
                                                                         (1, 'Mustafa7@outlook.com', '[]', '$2y$13$C94Jw7Qo694HhxpjNvLN0eaElsuLKfwIfD7.X3m6oXXmrh5LVRlJq', 'mustafa Khedoe'),
                                                                         (2, 'Krishna04@outlook.com', '[\"ROLE_ADMIN\"]', '$2y$13$CgDQbODCPDC8Ecl51AihSO1qDwuqpdwEGS07Q4nqWzqxImbkiEPMG', 'Krishna Bihari'),
                                                                         (3, 'thijmen2@outlook.com', '[]', '$2y$13$cxONREGHMssf.5VQm0JxB.o0l69XyIJC9n0r5VaOmlRL5BOgqyIVK', 'Thijmen Bastiaan');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `category`
--
ALTER TABLE `category`
    ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `doctrine_migration_versions`
--
ALTER TABLE `doctrine_migration_versions`
    ADD PRIMARY KEY (`version`);

--
-- Indexen voor tabel `messenger_messages`
--
ALTER TABLE `messenger_messages`
    ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_75EA56E0FB7336F0` (`queue_name`),
  ADD KEY `IDX_75EA56E0E3BD61CE` (`available_at`),
  ADD KEY `IDX_75EA56E016BA31DB` (`delivered_at`);

--
-- Indexen voor tabel `transactions`
--
ALTER TABLE `transactions`
    ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_EAA81A4C12469DE2` (`category_id`),
  ADD KEY `IDX_EAA81A4CA76ED395` (`user_id`);

--
-- Indexen voor tabel `user`
--
ALTER TABLE `user`
    ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_IDENTIFIER_EMAIL` (`email`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `category`
--
ALTER TABLE `category`
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT voor een tabel `messenger_messages`
--
ALTER TABLE `messenger_messages`
    MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `transactions`
--
ALTER TABLE `transactions`
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT voor een tabel `user`
--
ALTER TABLE `user`
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Beperkingen voor geëxporteerde tabellen
--

--
-- Beperkingen voor tabel `transactions`
--
ALTER TABLE `transactions`
    ADD CONSTRAINT `FK_EAA81A4C12469DE2` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`),
  ADD CONSTRAINT `FK_EAA81A4CA76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);
COMMIT;
