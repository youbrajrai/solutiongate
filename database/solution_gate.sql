-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 30, 2021 at 01:06 PM
-- Server version: 5.7.27-cll-lve
-- PHP Version: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `solution_gate`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_current` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `title`, `content`, `is_current`, `created_at`, `updated_at`) VALUES
(1, 'Results', '<p>We take the time to understand your business and the competitive space so we can deliver beautiful websites and marketing strategies that deliver results.</p>', 0, '2021-10-14 08:24:18', '2021-10-14 08:39:44'),
(2, 'Experience', '<p>Our team have worked with technology since the 90&rsquo;s. We&rsquo;re an open book and share our knowledge to help you make better decisions.</p>', 0, '2021-10-14 08:40:07', '2021-10-14 08:40:07'),
(3, 'Communication', '<p>We&rsquo;re straight shooters and want to be involved in successful projects with clients that appreciate building friendly, honest business relationships.</p>', 0, '2021-10-14 08:40:30', '2021-10-14 08:40:30'),
(4, 'Strategic', '<p>We take the time to understand your business and the competitive space so we can deliver beautiful websites and marketing strategies that deliver results.</p>', 0, '2021-10-14 08:40:52', '2021-10-14 08:40:52');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `name`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Chamlagai Pratisthan', 'asdasda', '1635246496.logo.png', '2021-10-26 14:09:42', '2021-10-26 14:53:16'),
(2, 'Chainpur Infotech', 'Website Development', '1635246165.final-logo.png', '2021-10-26 14:47:45', '2021-10-26 14:47:45');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `name`, `email`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Junu Tamang', 'tamangjunu688@gmail.com', 'Hello!', '2021-10-15 16:03:01', '2021-10-15 16:03:01'),
(2, 'Alisha Chamlagain', 'anish.chg@gmail.com', 'werwerwerwerwerwerwerwer', '2021-10-22 14:40:40', '2021-10-22 14:40:40'),
(3, 'Alisha Chamlagain', 'anish.chg@gmail.com', 'tets message', '2021-10-22 14:45:17', '2021-10-22 14:45:17'),
(4, 'Alisha Chamlagain', 'anish.chg@gmail.com', 'tets message', '2021-10-22 14:48:15', '2021-10-22 14:48:15'),
(5, 'Alisha Chamlagain', 'anish.chg@gmail.com', 'tets message', '2021-10-22 14:51:26', '2021-10-22 14:51:26'),
(6, 'Shailendra Shrestha', 'shailendracool433@gmail.com', 'Hello demo 1', '2021-10-23 10:02:58', '2021-10-23 10:02:58'),
(7, 'test message', 'swatantra0723@gmail.com', 'test mesage', '2021-10-24 19:04:05', '2021-10-24 19:04:05'),
(8, 'test message', 'swatantra0723@gmail.com', 'test mesage', '2021-10-24 19:05:51', '2021-10-24 19:05:51'),
(9, 'test message', 'swatantra0723@gmail.com', 'test mesage', '2021-10-24 19:06:06', '2021-10-24 19:06:06'),
(10, 'कोभिड-१९ विशेष', 'anish.chg@gmail.com', 'nb hchbn vhjn vyuhj', '2021-10-24 19:13:33', '2021-10-24 19:13:33'),
(11, 'Alisha Chamlagain', 'anish.chg@gmail.com', 'nb cytghvh vh vhgv hvnhvut', '2021-10-24 19:14:43', '2021-10-24 19:14:43');

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
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `heroes`
--

CREATE TABLE `heroes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `hero` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `heroes`
--

INSERT INTO `heroes` (`id`, `title`, `content`, `hero`, `created_at`, `updated_at`) VALUES
(1, 'WEBSITE DESIGN & DEVELOPMENT', '<p>Website is one of the prominent ways to boost your brand recognition, connect with your audience and present your business 24/7 online. It is the most effective tool to promote your business, extend your reach and enrich customer service. With our years of experience and young, energetic and creative professionals we assure to deliver you the most comprehensive and excellent web solutions.</p>\r\n\r\n<p>Website not only brings your business online but most essentially helps you connect with your potential customers, digitally. As all the marketing platforms and tools are built to redirect visitors to websites, websites can be considered as the ultimate way to convert visitors to customers. Our dedicated team has always been able to create brilliant websites, exactly matching the needs and objectives of our clients. Whether you want to create a new website or make changes in your existing one, we assure you to deliver a highly customized website with the latest design and technology to make it stand out amongst others.</p>', '1634184352.web-design-g588e1df76_1280.jpg', '2021-10-14 07:50:52', '2021-10-14 07:50:52'),
(2, 'Creative & Effective Advertising Pieces', '<p><strong>Digital marketing</strong>&nbsp;helps brands improve their customer loyalty online.&nbsp;<strong>Social media</strong>&nbsp;is not only great for improving customer service, it also helps&nbsp;<strong>improve customer relationships by allowing brands to know their customers&#39; needs and wants better</strong>.</p>\r\n\r\n<ul>\r\n	<li>&nbsp;<strong>Facebook Network</strong>:&nbsp;<small><em>Facebook, Instagram, Whatsapp &amp; Audience Network</em></small></li>\r\n	<li>&nbsp;</li>\r\n	<li>&nbsp;<strong>Google Network</strong>:&nbsp;<small><em>Google Search, Youtube &amp; Google Partner Network</em></small></li>\r\n	<li>&nbsp;</li>\r\n	<li>&nbsp;<strong>Search Engine Marketing</strong>:&nbsp;<small><em>Search Enging Optimization(SEO), Online Marketing</em></small></li>\r\n	<li>&nbsp;</li>\r\n	<li>&nbsp;<strong>Other Social Network</strong>:&nbsp;<small><em>Tiktok, Viber and others</em></small></li>\r\n</ul>', '1634184528.social-media-g9f20a22c2_1920.jpg', '2021-10-14 07:53:48', '2021-10-14 07:53:48'),
(3, 'Domain & Hosting', '<p>We have made a prudent approach to provide you world-class domain and hosting services even through local payment solutions. Our expert team is fully dedicated to provide you with a domain specific to your needs and the most reliable hosting service with great technical support.</p>\r\n\r\n<p><img alt=\"web design in nepal\" src=\"https://webhousenepal.com/assets/front/images/domain2.jpg\" /></p>\r\n\r\n<p>Domain and hosting are the cornerstones of a website; a major platform to which every possible customer strikes. Domain provides the digital name to your business whereas hosting gives you space to display all your features, products and services. So, they are the nub of every business that seeks online presence. Web House Nepal feels more than happy to cater your A1 domain and hosting service with magnificent features of security, bandwidth and storage scalability, migration assistance and great technical support at a very reasonable cost and renewal fees.</p>\r\n\r\n<p>We don&rsquo;t just provide you domain and hosting, we offer you a secure and hassle free foundation for your online presence.</p>', '1634185550.domain-ge23068b22_1280.jpg', '2021-10-14 08:10:50', '2021-10-14 08:10:50'),
(4, 'chfnvjghv', '<p>n hncvhg hgv bn</p>', '1635089260.social-media-g9f20a22c2_1920.jpg', '2021-10-24 19:12:40', '2021-10-24 19:12:40');

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_02_19_164930_create_contact_us_table', 1),
(5, '2021_07_05_123044_create_heroes_table', 1),
(6, '2021_07_05_124350_create_abouts_table', 1),
(7, '2021_07_05_151115_create_services_table', 1),
(8, '2021_07_05_151249_create_projects_table', 1),
(9, '2021_07_07_214456_create_works_table', 1),
(10, '2021_07_08_144136_create_teams_table', 1),
(11, '2021_07_08_170749_create_clients_table', 1),
(12, '2021_07_08_174702_create_missions_table', 1),
(13, '2021_09_25_155046_add_content_to_projects_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `missions`
--

CREATE TABLE `missions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` enum('Mission','Vision') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Mission',
  `content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `missions`
--

INSERT INTO `missions` (`id`, `type`, `content`, `created_at`, `updated_at`) VALUES
(3, 'Vision', '<p>We envision to lead the global tech world through abstract service in optimizing online visibility and digitalization of every single business: start-up, SME or large enterprise.</p>', '2021-10-26 14:37:29', '2021-10-26 14:37:29'),
(5, 'Mission', '<p>Solution Gate strives to provide cutting-edge technology solutions to your business and brand through creative&nbsp; web design &amp; development, software, mobile app, digital marketing, graphic designing and domain &amp; hosting services.</p>', '2021-10-26 14:45:06', '2021-10-26 14:45:06');

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
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `organization` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `organization`, `type`, `image`, `created_at`, `updated_at`, `content`) VALUES
(1, 'Chainpur Infotech', 'Website', '1634268094.chianp.png', '2021-10-15 07:06:34', '2021-10-15 07:06:34', '<p>Chainpur Infotech</p>'),
(2, 'Star College', 'Digital Marketing', '1634293359.DG MA.png', '2021-10-15 14:07:40', '2021-10-22 13:40:53', '<p>asdasdasdasdasdasdasdasdasdasd</p>');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `content`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Website Development', '<p>Website is one of the prominent ways to boost your brand recognition, connect with your audience and present your business 24/7 online. It is the most effective tool to promote your business, extend your reach and enrich customer service. With our years of experience and young, energetic and creative professionals we assure to deliver you the most comprehensive and excellent web solutions.</p>\r\n\r\n<p>Website not only brings your business online but most essentially helps you connect with your potential customers, digitally. As all the marketing platforms and tools are built to redirect visitors to websites, websites can be considered as the ultimate way to convert visitors to customers. Our dedicated team has always been able to create brilliant websites, exactly matching the needs and objectives of our clients. Whether you want to create a new website or make changes in your existing one, we assure you to deliver a highly customized website with the latest design and technology to make it stand out amongst others.</p>\r\n\r\n<p>Our in-house experts are highly professional to deliver you an excellent website in terms of design, usability and functionality.&nbsp;We provide custom website solutions that distribute a compelling user experience while integrating with your overall marketing goals and brand identity.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3><strong>Responsive Web Design</strong></h3>\r\n\r\n<p>Web Creation is the web design and development company that develops and designs websites for you. We focus on the responsiveness of the site, how fast it works and analysis the improvement needed in it. We can also help with&nbsp;<strong>e-commerce solutions and web site redesign</strong>&nbsp;including logo design and business identity services</p>\r\n\r\n<p>We have a&nbsp;web development&nbsp;specialist who has years of experience with them. The price that we offer for this job is budget-friendly.</p>\r\n\r\n<p>A full growing business site needs a stable strategy and creativity for its development. The steps we follow are:</p>\r\n\r\n<ul>\r\n	<li>Web Designing</li>\r\n	<li>UX Research</li>\r\n	<li>SEO Optimization</li>\r\n	<li>Landing Page Design</li>\r\n	<li>PSD to HTML</li>\r\n	<li>&nbsp;Wire framing</li>\r\n	<li>&nbsp;Information Architecture</li>\r\n	<li>&nbsp;Responsive Web Design</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3><strong>Web App Development</strong></h3>\r\n\r\n<p>Web Application Development or Web Development is the one of the fastest growing IT Industry in the world. The web development industry is expected to grow 25-40% by year 2019 and it is growing because most of the companies are willing to have their workflow web application for the easy management and overall growth estimation.</p>\r\n\r\n<ul>\r\n	<li>&nbsp;CMS Development</li>\r\n	<li>&nbsp;Custom Application Development</li>\r\n	<li>Ecommerce Development</li>\r\n	<li>Social Media Apps</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3><strong>Domain &amp; Hosting</strong></h3>\r\n\r\n<p>We additionally give dependable site facilitating in Nepal, our facilitating arrangement that handles each part of your site. Our devoted server situated in Chicago USA, which has 99.9% uptime of your site, implying that it will dependably be accessible to clients on the Internet. Our web associations with both the Power Company and real telecom suppliers. Reinforcement battery control supplies and diesel generators guarantee no glitches in operation</p>\r\n\r\n<ul>\r\n	<li>&nbsp;24/7 technical support and 99% uptime guarantee</li>\r\n	<li>&nbsp;Great service and affordable prices</li>\r\n	<li>&nbsp;Easy site administration with web-based control panel</li>\r\n	<li>&nbsp;Easy-to-use control panel</li>\r\n	<li>&nbsp;Sub-domains</li>\r\n	<li>Business &amp; eCommerce Hosting Plan</li>\r\n	<li>&nbsp;Personal Website Hosting Plan</li>\r\n	<li>&nbsp;Extensive bandwidth</li>\r\n	<li>&nbsp;Email accounts with web-based email</li>\r\n	<li>&nbsp;Daily backups to ensure data security</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3><strong>E-Commerce Solutions</strong></h3>\r\n\r\n<p>Most people who work their business on line nowadays realize the importance of having a reliable and sustainable means in regard to the financing and payment aspects of their business transactions.&nbsp;Our dedicated team can provide you with a range of very attractive and fully featured are E-commerce development in nepal for your business.</p>\r\n\r\n<ul>\r\n	<li>&nbsp;Mobile responsive E-commerce</li>\r\n	<li>24*7 follow up with customers</li>\r\n	<li>&nbsp;Payment gateway integration</li>\r\n	<li>&nbsp;Mass Media Recognition</li>\r\n	<li>&nbsp;Stress Free payment</li>\r\n	<li>&nbsp;Multiple Ecommerce Platforms</li>\r\n</ul>', '1634296960.Untitled-2.png', '2021-10-15 15:07:40', '2021-10-27 07:26:51'),
(5, 'Mobile Application', '<p>Presently, we all belong to mobile generation. The demand and necessity of mobile apps has incredibly grown with tremendous increase in the use of mobile phones. We put our heart and soul to meet your every business or individual need through an ideal mobile app (IOS or Android).</p>\r\n\r\n<p>There are very limited works that we can&rsquo;t do from mobile now. Communication, entertainment, news, schedules, social media, meetings, projects, purchasing, selling, payments, GPS, navigation, marketing, research, banking and so on, mobile has made all these accessible at our fingertips. Being handy and with multitasking function, mobile phones are the most popular gadget throughout the world. So, getting your business on mobile means promoting your products and services among a wide range of people. Mobile apps are the most competent tool to optimize business operations, enhance visibility of your business, increase visitors&rsquo; engagement and fascinate them to your business through strategic interface and function.</p>\r\n\r\n<p>Our professionals and creative team spare no effort to boost your business through a mobile app that exactly suits your business.</p>\r\n\r\n<h3><strong>Android app development in Nepal</strong></h3>\r\n\r\n<p>We are a&nbsp;<em>Android app development company in Nepal.</em>&nbsp;We offer an assortment of Android companionable mobile applications that not only modernize style but additionally enhance the business effectively. we understand your brand value and therefore craft a result that continuously keeps your target audiences in mind.</p>\r\n\r\n<p>Our service includes Android Web-based Apps, UI/UX Design, App Porting, App Consultation, and App Testing. We include almost all the categories like sports, education, games, health, and photos for development in the Google play store.</p>\r\n\r\n<ul>\r\n	<li>We focus on offline experience as well.</li>\r\n	<li>We make the app user-friendly, with flexible layouts.</li>\r\n	<li>In-house development strategy.</li>\r\n	<li>We Understand the Android market first.</li>\r\n	<li>We support multiple languages with localization</li>\r\n	<li>We focus on all types of testing, such as functional etc.</li>\r\n</ul>\r\n\r\n<h3><strong>iOS app development in Nepal</strong></h3>\r\n\r\n<p>iOS is the world&rsquo;s second most popular platform after Android. It is considered the most secure and reliable software. As a Digital company, we develop end to end costume iOS app for&nbsp;<strong>iPad and iPhone</strong>&nbsp;to meet the costumer&rsquo;s needs. We also support the maintained of iOS apps. Our developers are experienced and apps they make are easy to use. If and upgrades are required you can do it by yourself or inform us. It will save you money.</p>\r\n\r\n<p>Being a trusted <strong>company in Nepal</strong>&nbsp;we make sure all the features you mentioned are included during the development process. Our iOS development includes all the required steps from Elevation, designing and testing to lunching. Our price rates and pretty reasonable and are on budget scale. Apps will adapt to the new versions that will come in the future.</p>\r\n\r\n<ul>\r\n	<li>iOS Enterprise apps</li>\r\n	<li>Video, live streaming and entertainment apps</li>\r\n	<li>Social media and chat apps</li>\r\n	<li>Camera and Photo Editing Apps</li>\r\n	<li>Education and knowledge apps</li>\r\n	<li>Travel and tourism apps</li>\r\n	<li>Health &amp; fitness apps</li>\r\n	<li>Support and maintenance</li>\r\n</ul>\r\n\r\n<h3><strong>Hybrid app development in Nepal</strong></h3>\r\n\r\n<p>Hybrid apps are a combination of both mobile web apps and native apps. They are app that just like any other&nbsp;<strong>IOS or Android apps&nbsp;</strong>out there. Hybrid apps are becoming more famous and popular this year.</p>\r\n\r\n<p>We are developers that meet the requirements of client&rsquo;s expectations. Developing&nbsp;Hybrid Applications<a href=\"https://www.webcreationnepal.com/hybrid-app-development-nepal.html\"><strong>&nbsp;</strong></a>requires highly experienced and trained architects to work with. We have a magnificent team to operate with that can guide and lead your idea to form a fascinating structure of hybrid applications. We provide you with assistance to work with so that you are able to operate or be familiar with the work easily.&nbsp;<strong>The Benefits include:</strong></p>\r\n\r\n<ul>\r\n	<li>&nbsp;Low cost with ease of development</li>\r\n	<li>Native experience with simple</li>\r\n	<li>Creative ideas meet target audience</li>\r\n	<li>High-speed performance</li>\r\n	<li>Attractive UI/UX designs</li>\r\n	<li>Offline Support</li>\r\n	<li>Hassle-free integration with other apps</li>\r\n	<li>Multi-platform support</li>\r\n</ul>\r\n\r\n<h3><strong>Native mobile apps Development in Nepal</strong></h3>\r\n\r\n<p>Native app development is the making of apps that run on specific platforms. They need a specific platform like&nbsp;Google play store or Apple play store.<a href=\"https://www.webcreationnepal.com/native-mobile-app-development-nepal.html\"><strong>&nbsp;</strong></a>It requires different skills as compared to website development. Performance Enhancement updates are also available for OS for native apps. Apps like Twitter are native apps.</p>\r\n\r\n<p>As it requires different skills, we have developers who are fully skilled in native app development. Our team<a href=\"https://www.webcreationnepal.com/about.html\"><strong>&nbsp;</strong></a>has mastered the art of building a native app which is high in quality. Based on the full understanding of the costumer&#39;s perspective we will give you the best job.&nbsp;<strong>The Benefits include:</strong></p>\r\n\r\n<ul>\r\n	<li>Efficient</li>\r\n	<li>High scalability</li>\r\n	<li>Integrates With Existing Software</li>\r\n	<li>Secures App Data</li>\r\n	<li>Attractive UI/UX designs</li>\r\n	<li>Easy to maintain</li>\r\n	<li>Hassle-free integration with other apps</li>\r\n	<li>Multi-platform support</li>\r\n</ul>', '1635237085.phone-g06837f6ed_640.jpg', '2021-10-26 12:16:25', '2021-10-27 07:22:58'),
(6, 'Software & System Development', '<p>We aim to deliver you a fully dynamic and scalable system/software that makes your business and daily life much easier. Our team is highly competent to understand your business idea and deliver you a user-centric system/software that definitely optimizes your work.</p>\r\n\r\n<p>Development of Business requirements based software is the key feature of Web House Nepal. Using the latest tools and technology we deal with the development of business applications software combined with immaculate user experience (UX), smooth workflow and great functionality. Our experience melded with our expertise has gained a noble reputation in delivering unmatchable systems and software. We possibly develop every kind of software that manages and optimizes B2B, B2C or organizational internal operations.</p>\r\n\r\n<p>We have designed 100s of system/software and we feel proud to receive absolute gratification from each of our clients.</p>', '1635237455.23_Benefits-of-School-Management-ERP-Software---Get-Free-Demo-Now.jpg.crdownload', '2021-10-26 12:22:35', '2021-10-26 12:22:35'),
(7, 'Digital Marketing Services', '<p>Digital marketing refers to the use of digital media in order to promote, sell or buy products and services to the customers and businesses.&nbsp;Digital marketing can&rsquo;t be denied to be the most powerful tool to target your consumers and increase conversion rate. We are dedicated in making great strides to your business through every single tool and tactic of digital marketing.</p>\r\n\r\n<p>Observing the daily impact of digitalization in the entire business sector, it wouldn&rsquo;t be wrong for us to say that traditional marketing doesn&rsquo;t work any longer in most of the cases. In recent years, digital marketing has already proven itself to be the most efficient way for business growth. Distinct to traditional marketing, digital marketing is not only reasonable in terms of cost and effort but is also the only possible way to get exceptional results in a very short period of time. It provides accurate audience targeting, measureable and real time results, provision to update marketing strategy as per the change in business scenario and provides two way communication between you and your possible consumers through queries and feedbacks.</p>\r\n\r\n<p>Our team includes leading digital marketing experts who analyze your business and generate the most suitable strategies to promote your business in different platforms of digital marketing: SEO, SEM, Social Media Marketing, google ads, video marketing, email marketing, sms marketing and others.</p>\r\n\r\n<h3><strong>SEO and Web Promotion Service in Nepal</strong></h3>\r\n\r\n<p>Search Engine Optimization &amp; Internet Promotion is vital today, if you want your site to appear in search results. The foundation of a successful web promotion &amp; optimization of the position of a web page in search engines list is the technical design which regarding the underlying code defines at once how friendly a web page is to the search engines and plays a vital role for the future of this page in search engines.</p>\r\n\r\n<p>We provides optimized content for SEO. Incorporate high end content management tools for easy publishing. Complete audio/visual, Offshore Web Development Companymultimedia, graphic and text documentation. Outsourcing has proved to be a deciding factor for companies that offer cost and quality edge in a competitive market.</p>\r\n\r\n<ul>\r\n	<li>&nbsp;Search Engine Promotion</li>\r\n	<li>&nbsp;Social Media Optimization (SMO)</li>\r\n	<li>&nbsp;Local Directory Submission</li>\r\n	<li>Banner and Ad Placements (PPC)</li>\r\n	<li>Email Designing / Marketing</li>\r\n	<li>&nbsp;Content Marketing</li>\r\n</ul>\r\n\r\n<h3><strong>PPC Management Service in Nepal</strong></h3>\r\n\r\n<p><strong>PPC marketing service</strong>&nbsp;is the best way to drive massive traffic to your website. It promotes visibility to your website and adds value. It is also the increasing demand for selling products and services. The digital platform requires highly&nbsp;skilled professionals<strong> </strong>to leverage the process and reach the maximum audience for profit.</p>\r\n\r\n<p>We help you to rank top in any of the search engines for your business. All you have to do is just pay for the result to drive traffic. We will do the rest of the work for you. We will make sure our&nbsp;<strong>PPC marketing</strong>&nbsp;job is result-oriented to your satisfaction.</p>\r\n\r\n<ul>\r\n	<li>&nbsp;Paid Search</li>\r\n	<li>Display Advertising</li>\r\n	<li>Shopping Ads</li>\r\n	<li>Social Media Advertising</li>\r\n	<li>Re-Marketing</li>\r\n	<li>&nbsp;Media Buy</li>\r\n</ul>\r\n\r\n<h3><strong>Social Media Marketing Service in Nepal</strong></h3>\r\n\r\n<p><strong>Social media marketing</strong>&nbsp;is a process of promoting products through social media platforms. Some of the most popular platforms out there include&nbsp;<strong>Facebook, Twitter, Pinterest, YouTube, and Instagram</strong>. The costumers are using many of these big platforms currently. If you are not using&nbsp;social media&nbsp;as a way to interact with costumers, you are missing a great way to increase your business profit. It can bring a big success to your brand and business.</p>\r\n\r\n<p>You know that social media can be a headache most of the time with so many different options on how to get results. Well, now you can relax. We are here to help you in bringing results as you wish. We bring you the&nbsp;best price&nbsp;that you can afford on a budget scale.</p>\r\n\r\n<ul>\r\n	<li>&nbsp;Virtual Marketing</li>\r\n	<li>Facebook Page Management</li>\r\n	<li>&nbsp;Twitter Account Management</li>\r\n	<li>&nbsp;Social Bookmarking</li>\r\n	<li>&nbsp;Youtube Channel Creation &amp; Management</li>\r\n	<li>Social Media Audit</li>\r\n	<li>Improve Site Conversion</li>\r\n	<li>&nbsp;LinkedIn profile Creation &amp; Management</li>\r\n</ul>\r\n\r\n<h3><strong>Content Writing in Nepal</strong></h3>\r\n\r\n<p>Content writing service helps to translate your ideas into the smooth-spoken and effective copy, enhancing your website with content that attracts visitors in, inspires them, connects them together with your vision, ethos, products or services, and guides them smoothly around the website.</p>\r\n\r\n<p>Solution Gate is a company offering various web services for pretty much every industry vertical where we have a tendency to try and meet your necessities and check out to provide you with the best content within the market. The content that we offer is completely distinctive, contemporary and whole plagiarism free wherever our writers make sure that the content that they provide is authentic and relevant</p>\r\n\r\n<ul>\r\n	<li>Website Content Writing Services</li>\r\n	<li>&nbsp;Corporate Profiles and Brochures</li>\r\n	<li>&nbsp;Newsletter Writing Services</li>\r\n	<li>&nbsp;Blog Writing Services</li>\r\n	<li>&nbsp;Press Release Writing Services</li>\r\n	<li>&nbsp;Product Catalogs</li>\r\n	<li>&nbsp;Web Content Optimizations</li>\r\n	<li>&nbsp;Social Media Marketing Content</li>\r\n	<li>&nbsp;Article Writing Services</li>\r\n	<li>Product Description Writing Services</li>\r\n</ul>', '1635238693.social-media-g9f20a22c2_1920.jpg', '2021-10-26 12:43:13', '2021-10-27 07:25:35'),
(8, 'Domain and Hosting', '<p>We have made a prudent approach to provide you world-class domain and hosting services even through local payment solutions. Our expert team is fully dedicated to provide you with a domain specific to your needs and the most reliable hosting service with great technical support.</p>\r\n\r\n<p>Domain and hosting are the cornerstones of a website; a major platform to which every possible customer strikes. Domain provides the digital name to your business whereas hosting gives you space to display all your features, products and services. So, they are the nub of every business that seeks online presence. Web House Nepal feels more than happy to cater your A1 domain and hosting service with magnificent features of security, bandwidth and storage scalability, migration assistance and great technical support at a very reasonable cost and renewal fees.</p>\r\n\r\n<p>We don&rsquo;t just provide you domain and hosting, we offer you a secure and hassle free foundation for your online presence.</p>', '1635238807.domain-ge23068b22_1280.jpg', '2021-10-26 12:45:07', '2021-10-26 12:45:07'),
(9, 'Graphics Design', '<p>There&#39;s no limit to what you can get designed at DesignCrowd. Whether you&#39;re looking for a spectacular new logo or some stunning flyers, the talented global community of designers at DesignCrowd can make it happen. DesignCrowd prides itself on it&#39;s high quality designers who deliver only the best graphic design services. Find the right design service for you below and get design you&#39;ll love today!</p>\r\n\r\n<h3><strong>Logo &amp; Branding:</strong></h3>\r\n\r\n<p>Need to make a lasting impression? The right combination of colors, shapes and words will define your brand. Get the perfect logo and ensure your branding hits the spot with these services.</p>\r\n\r\n<ul>\r\n	<li>Logo Design</li>\r\n	<li>Business Card Design</li>\r\n	<li>Stationery Design</li>\r\n	<li>Label Design</li>\r\n	<li>Letterhead Design</li>\r\n	<li>Logo and Business Card Design</li>\r\n</ul>\r\n\r\n<h3><strong>Web Design Services:</strong></h3>\r\n\r\n<p>Looking to make a mark on the world wide web? Whether you need a new design for a custom built website or a design for a popular CMS platform you&#39;ll find the perfect web design with these design services.</p>\r\n\r\n<ul>\r\n	<li>Web Design</li>\r\n	<li>App Design</li>\r\n	<li>Banner Ad Design</li>\r\n	<li>Icon Design</li>\r\n	<li>Ecommerce Website Design</li>\r\n	<li>Landing Page Design</li>\r\n</ul>\r\n\r\n<h3><strong>Print Design Services:</strong></h3>\r\n\r\n<p>Sending something to print can be so final! Don&#39;t make the mistake of having a mistake - get the design right the first time, whether it&#39;s a flyer, poster or sticker. Check out all our print design services.</p>\r\n\r\n<ul>\r\n	<li>Flyer Design</li>\r\n	<li>Postcard Design</li>\r\n	<li>Broucher Design</li>\r\n	<li>Poster Design</li>\r\n	<li>Advertisement Design</li>\r\n	<li>Catalogue Design</li>\r\n	<li>Menu Design</li>\r\n	<li>Newspaper Ad Design</li>\r\n	<li>Sticker Design</li>\r\n	<li>Resume Design</li>\r\n</ul>\r\n\r\n<h3><strong>Graphic Design Services:</strong></h3>\r\n\r\n<p>Need some walking advertising? A little promotional gear for the team manning the tradeshow booth? Get custom apparel, mugs or caps from our professional designers.</p>\r\n\r\n<ul>\r\n	<li>T-shirt Design</li>\r\n	<li>Packaging Design</li>\r\n	<li>Bag and Tote Design</li>\r\n	<li>Cup and Mug Design</li>\r\n	<li>Merchandize Design</li>\r\n</ul>\r\n\r\n<h3><strong>Art &amp; Illustration:</strong></h3>\r\n\r\n<p>Not everyone is an artist - but the designers at DesignCrowd definitely are. Whether you need a mascot designed for your sporting team or a piece of custom wall art you&#39;ll find what you need with these design services.</p>\r\n\r\n<ul>\r\n	<li>Illustration Design</li>\r\n	<li>Book Cover Design</li>\r\n	<li>Art Design</li>\r\n	<li>Card Design</li>\r\n	<li>Greeting Card Design</li>\r\n	<li>Invitation Design</li>\r\n	<li>Character Design</li>\r\n</ul>', '1635242811.colored-pencils-g16bf0c383_640.jpg', '2021-10-26 12:49:02', '2021-10-26 13:52:35');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `linkedin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `name`, `designation`, `image`, `facebook`, `twitter`, `instagram`, `linkedin`, `created_at`, `updated_at`) VALUES
(1, 'Shailendra Shrestha', 'Administrative Officer', '1634300037.sallu.jpg', 'https://www.facebook.com/shailendra.shrestha1', 'https://twitter.com/SolutionGate2', 'https://www.instagram.com/solutiongate.sg/', 'https://www.linkedin.com/in/shailendra-shrestha-9154b91a6/', '2021-10-15 15:47:51', '2021-10-15 15:58:57'),
(2, 'Anish Chmlagai', 'Senior Designer', '1634299535.anish.jpg', 'https://www.facebook.com/anish.chamlagain.9', 'https://twitter.com/SolutionGate2', 'https://www.instagram.com/solutiongate.sg/', 'https://www.linkedin.com/in/shailendra-shrestha-9154b91a6/', '2021-10-15 15:50:35', '2021-10-15 15:50:35'),
(3, 'Sanjay Karki', 'Senior Developer', '1634299584.sanjay.jpg', 'https://www.facebook.com/sanjay.karki.144', 'https://twitter.com/SolutionGate2', 'https://www.instagram.com/solutiongate.sg/', 'https://www.linkedin.com/in/shailendra-shrestha-9154b91a6/', '2021-10-15 15:51:24', '2021-10-15 15:51:24');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `avatar`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Solution Gate', 'admin@gmail.com', NULL, '2021-10-08 11:45:24', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'v38zYYoVcXBjWG3YlhncbBkZvVf5P4QqC2IEOgQkfA95a9NiSrV85OcdbuVx', '2021-10-08 11:45:24', '2021-10-08 11:45:24');

-- --------------------------------------------------------

--
-- Table structure for table `works`
--

CREATE TABLE `works` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `works`
--

INSERT INTO `works` (`id`, `title`, `content`, `created_at`, `updated_at`) VALUES
(5, 'Idea and Consultation', '<p>sadasda</p>', '2021-10-23 09:15:39', '2021-10-23 09:15:39'),
(6, 'Research and Project Planning', '<p>asdasd</p>', '2021-10-23 09:15:57', '2021-10-23 09:15:57'),
(7, 'Development and Testing', '<p>asdasd</p>', '2021-10-23 09:16:16', '2021-10-23 09:19:01'),
(8, 'Support and Maintenance', '<p>asdasd</p>', '2021-10-23 09:19:19', '2021-10-23 09:19:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `heroes`
--
ALTER TABLE `heroes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `missions`
--
ALTER TABLE `missions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `works`
--
ALTER TABLE `works`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `heroes`
--
ALTER TABLE `heroes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `missions`
--
ALTER TABLE `missions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `works`
--
ALTER TABLE `works`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
