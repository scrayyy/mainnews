-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 03, 2022 at 07:21 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `news`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(111) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(6, 'პილიტიკა'),
(7, 'შემთხვევები'),
(8, 'ჯანმრთელობა'),
(9, 'ბიზნესი'),
(10, 'საზოგადოება'),
(11, 'სპორტი'),
(13, 'განათლება');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
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
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(111) NOT NULL,
  `cat_id` int(111) NOT NULL,
  `title` varchar(999) DEFAULT NULL,
  `desc_ka` text NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `upload_date` varchar(255) NOT NULL,
  `upload_date_two` varchar(999) NOT NULL,
  `visitors` int(111) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `cat_id`, `title`, `desc_ka`, `image`, `upload_date`, `upload_date_two`, `visitors`) VALUES
(167, 10, 'დღეიდან მოქალაქეები პირადობის მოწმობას უფასოდ აიღებენ | ვის ეხება აქცია', '<p>იუსტიციის სამინისტროს ინფორმაციით, დღეიდან, 1-ლი სექტემბრიდან ერთი&nbsp;თვის განმავლობაში პირადობის დამადასტურებელ მოწმობას უფასოდ გასცემენ. უწყების ცნობით, ინიციატივა საარჩევნო პროცესის შეუფერხებლად წარმართვას უკავშირდება.&nbsp;</p>\r\n\r\n<p>ერთი თვის განმავლობაში პირადობის მოწმობის საფასურის გადახდისგან გათავისუფლდებიან:</p>\r\n\r\n<ul>\r\n	<li>საქართველოს ის სრულწლოვანი მოქალაქეები, რომელთა სახელზე ამ დრომდე არ ყოფილა გაცემული საქართველოს მოქალაქის პირადობის დამადასტურებელი არც ერთი დოკუმენტი;</li>\r\n	<li>ასევე არასრულწლოვანი მოქალაქეები, რომელთაც აქციის დასრულებამდე, 1 ოქტომბრამდე უსრულდებათ 18 წელი;</li>\r\n	<li>მოქალაქეები, რომელთა პირადობის დამადასტურებელი დოკუმენტების ფოტოსურათები გამოუსადეგარია(უხარისხოა), ან არ ინახება სახელმწიფო სერვისების განვითარების სააგენტოს მონაცემთა ელექტრონულ ბაზაში.</li>\r\n</ul>\r\n\r\n<p>ასევე, იუსტიციის სამინისტროს ინფორმაციით, პირობის მოწმობას უფასოდ აიღებენ:</p>\r\n\r\n<ul>\r\n	<li>რეგისტრაციიდან მოხსნილი პირები, თუ ისინი დარეგისტრირდებიან კორექტულ მისამართზე;</li>\r\n	<li>მისამართის გარეშე რეგისტრირებული მოქალაქეები, თუ ისინი გაივლიან რეგისტრაციას კორექტულ მისამართზე;</li>\r\n	<li>მოქალაქეები, რომელთაც არ აქვთ იურიდიული ძალის მქონე არც ერთი დოკუმენტი;</li>\r\n	<li>ის პირები, რომლებიც რეგისტრირებული არიან საქართველოს ოკუპირებულ ტერიტორიაზე და არ ფლობენ იძულებით გადაადგილებული პირის სტატუსს; ამასთან, გაუქმებული აქვთ პირადობის მოწმობა.</li>\r\n</ul>\r\n\r\n<p>მათივე ინფორმაციით, დოკუმენტის გაცემისას მოქალაქეები გათავისუფლდებიან როგორც პირადობის მოწმობის, ისე ფოტოსურათის გადაღების საფასურისგან. აქციით სარგებლობა პირს მხოლოდ ერთხელ შეუძლია.</p>\r\n\r\n<p>პირადობის დამადასტურებელი დოკუმენტის უფასოდ აღების მსურველებმა&nbsp;იუსტიციის სახლებს, სახელმწიფო სერვისების განვითარების სააგენტოს ტერიტორიულ სამსახურებს ან საზოგადოებრივ ცენტრებს უნდა მიმართონ.</p>', 'news/TlUoG3MtP1vc5D3tAmIpasN9wc4qGC5ioFw74j0a.png', '31.August.2021', '2021-08-31 22:05:08', 1),
(168, 10, 'წვიმა, ძლიერი ქარი, შესაძლო სეტყვა და ზღვაზე შტორმი | საქართველოში აგრილდება', '<p>წვიმა ელჭექით, ზოგან ძლიერი, დროგამოშვებით იქროლებს დასავლეთის მიმართულების ძლიერი ქარი, შესაძლებელია სეტყვა&nbsp;- გარემოს ეროვნული სააგენტო 2-3 სექტემბერს საქართველოში მოსალოდნელ ამინდის პროგნოზს აქვეყნებს.&nbsp;</p>\r\n\r\n<p>უწყების ინფორმაციით, ზღვაზე 4-5 ბალიანი შტორმია მოსალოდნელი. დასავლეთ საქართველოში კი&nbsp;ჰაერის ტემპერატურა&nbsp;მნიშვნელოვნად დაიკლებს.</p>\r\n\r\n<p>სააგენტოში აცხადებენ, რომ&nbsp;მოსალოდნელმა ძლიერმა ნალექებმა შესაძლებელია საქართველოს პატარა მდინარეებზე წყალმოვარდნები, ხოლო ქვეყნის მთიან ზონებში მეწყრული პროცესების ჩასახვა-გააქტიურება გამოიწვიოს.</p>', 'news/i9EyeHzPjjl8f9adzDH7TlibUWjmTFN3Si3h12Z5.png', '31.August.2021', '2021-08-31 22:21:28', 1),
(170, 10, 'გერმანიაში ბალახზე სექსი აიკრძალა', '<p>გერმანიის ცალკეულ რეგიონში ბალახზე სექსი აიკრძალა. ადგილობრივი მედიის ინფორმაციით, შეზღუდვა ვრცელდება მხოლოდ იმ ქალაქებში, სადაც თივის წარმოება მიმდინარეობს. მაგალითად, აკრძალვა ეხება ბალტიის კუნძულ&nbsp;პიოლს, რომელიც ვისმარის ყურეში, მეკლენბურგ-ვორპომერნის ფედერალურ შტატში მდებარეობს.</p>\r\n\r\n<p>პიოლის მაცხოვრებლებმა ტურისტებისთვის სპეციალური გამაფრთხილებელი ნიშნებიც დადგეს, რომლებზეც წერია: &quot;<strong>თივის ზვინში სექსი&nbsp;სახიფათო და სიცოცხლისთვის საშიშია</strong>&quot;.</p>', 'news/9k1GCzKYB15t9myj2svFG4KQlQ98Yigfb8uUcqfR.png', '31.August.2021', '2021-08-31 22:25:05', 1),
(171, 10, '1-ლი სექტემბრის გრაფიკი - სად და როდის ჩაქრება შუქი', '<p>დღეს, 1-ლ სექტემბერს თბილისის ნაწილს ელექტრომომარაგება შეეზღუდება, ინფორმაციას კომპანია &quot;თელასი&quot; ავრცელებს, მიზეზად კი სხვადასხვა სამუშაოებს ასახელებს.</p>\r\n\r\n<h2>შუქი არ იქნება:</h2>\r\n\r\n<p><strong>დიდუბის რაიონი:</strong></p>\r\n\r\n<p>ქსელში გადართვების გამო 00:00 საათიდან 03:00 საათამდე შეზღუდვა შეეხება:&nbsp;დიღმის მასივის I, IV, V კვარტლების, აკაკი ბელიაშვილის და მიქელაძის ქუჩების მოსახლეობას.</p>\r\n\r\n<p>გეგმური სამუშაოების გამო 11:00 საათიდან 13:00 საათამდე შეზღუდვა შეეხება: წყალტუბოს&nbsp; ქუჩის მოსახლეობას.</p>\r\n\r\n<p>გეგმური სამუშაოების გამო 13:00 საათიდან 16:00 საათამდე შეზღუდვა შეეხება:&nbsp;აკაკი წერეთელის გამზირის, ვახუშტი ბაგრატიონის, სამტრედიის, ფოთის და ქუთაისის ქუჩების მოსახლეობას.</p>\r\n\r\n<p><strong>ნაძალადევის რაიონი:</strong></p>\r\n\r\n<p>გეგმური სამუშაოების გამო 10:00 საათიდან 17:00 საათამდე შეზღუდვა შეეხება:&nbsp;ჭიჭიკო ბენდელიანის, დავით ჭიჭინაძის, გიორგი სააკაძის, ცოტნე დადიანის, ჭყონდიდელის და ალექსანდრე მრევლიშვილის ქუჩების მოსახლეობას.</p>\r\n\r\n<p><strong>ვაკის რაიონი:</strong></p>\r\n\r\n<p>გეგმური სამუშაოების გამო 10:00 საათიდან 18:00 საათამდე შეზღუდვა შეეხება:&nbsp;დაბა კიკეთის&nbsp;&nbsp; მოსახლეობას.</p>\r\n\r\n<p>გეგმური სამუშაოების გამო 11:00 საათიდან 15:00 საათამდე შეზღუდვა შეეხება:&nbsp;ფალიაშვილის ქუჩის (ნაწილობრივ) მოსახლეობას.</p>\r\n\r\n<p><strong>საბურთალოს რაიონი:</strong></p>\r\n\r\n<p>გეგმური სამუშაოების გამო 10:00 საათიდან 18:00 საათამდე შეზღუდვა შეეხება:&nbsp;დიდი დიღმის&nbsp; IV მიკრორაიონის, სოფელი დიღმის (ნაწილობრივ) და პეტრიწის ქუჩის მოსახლეობას.</p>\r\n\r\n<p><strong>ჩუღურეთის რაიონი:</strong></p>\r\n\r\n<p>ქსელში გადართვების გამო 00:00 საათიდან 03:00 საათამდე შეზღუდვა შეეხება:&nbsp;კლდიაშვილის, ფიროსმანის, ჩიტაიას, ჩუბინაშვილის, გოგოლის, კონსტიტუციის და გოგი დოლიძის ქუჩების მოსახლეობას.</p>\r\n\r\n<p>გეგმური სამუშაოების გამო 11:00 საათიდან 14:00 საათამდე შეზღუდვა შეეხება:&nbsp;ჩუბინაშვილის, გოგოლის, კონსტიტუციის, ფიროსმანის და გოგი დოლიძის ქუჩების მოსახლეობას.</p>\r\n\r\n<p><strong>სამგორის რაიონი:</strong></p>\r\n\r\n<p>გეგმური სამუშაოების გამო 11:00 საათიდან 17:00 საათამდე შეზღუდვა შეეხება:&nbsp;ვარკეთილი-3 I, II მიკრორაიონების (ნაწილობრივ), გახოკიძის და მაისურაძის ქუჩების მოსახლეობას.</p>\r\n\r\n<p><strong>კრწანისის რაიონი:</strong></p>\r\n\r\n<p>გეგმური სამუშაოების გამო 10:00 საათიდან 18:00 საათამდე შეზღუდვა შეეხება:&nbsp;ავლევის, ალექსანდრე დიუმას, ვერცხლის, კალისტრატე ცინცაძის, კოტე აფხაზის, ოქრომჭედლების და ყავლაშვილის ქუჩების მოსახლეობას.</p>', 'news/nPhNUbOeHODp3bBYctZuavbqhlzp0Vzeqwhxab7d.png', '31.August.2021', '2021-08-31 22:26:25', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Levani & Kote', 'admin@admin.ge', NULL, '$2y$12$FPSdh5fSFcF/b/eJFQNhYO6sGz6PmRJfhDks8zc13JUduWyamp6eO', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `visitors`
--

CREATE TABLE `visitors` (
  `id` int(111) NOT NULL,
  `ip` varchar(255) NOT NULL,
  `news_id` int(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `visitors`
--

INSERT INTO `visitors` (`id`, `ip`, `news_id`) VALUES
(1, '::1', 24),
(2, '::1', 27),
(3, '::1', 179),
(4, '::1', 178),
(5, '::1', 179),
(6, '::1', 179),
(7, '::1', 179),
(8, '::1', 179),
(9, '::1', 174),
(10, '::1', 174),
(11, '::1', 173),
(12, '::1', 169),
(13, '::1', 169),
(14, '::1', 179),
(15, '::1', 169),
(16, '::1', 178),
(17, '::1', 178),
(18, '::1', 178),
(19, '::1', 179),
(20, '::1', 179),
(21, '::1', 174),
(22, '::1', 170),
(23, '::1', 173),
(24, '::1', 166),
(25, '::1', 166),
(26, '::1', 166),
(27, '::1', 167),
(28, '::1', 167),
(29, '::1', 167),
(30, '::1', 167),
(31, '::1', 167),
(32, '::1', 167),
(33, '::1', 168),
(34, '::1', 169),
(35, '::1', 170),
(36, '::1', 171),
(37, '::1', 168),
(38, '::1', 168),
(39, '::1', 167),
(40, '::1', 171),
(41, '::1', 167);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `visitors`
--
ALTER TABLE `visitors`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=172;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `visitors`
--
ALTER TABLE `visitors`
  MODIFY `id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
