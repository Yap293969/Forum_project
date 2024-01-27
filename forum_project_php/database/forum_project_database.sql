
/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_forum_website`
--

-- --------------------------------------------------------

--
-- Table structure for table `banned_manager`
--

CREATE TABLE `banned_manager` (
  `username` varchar(100) NOT NULL,
  `page_name` varchar(100) NOT NULL,
  `banned_date` date NOT NULL,
  `banned_reason` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `communities`
--

CREATE TABLE `communities` (
  `community_name` varchar(50) NOT NULL,
  `community_created_date` date NOT NULL,
  `deleted_community` varchar(50) NOT NULL,
  `community_size` int NOT NULL,
  `host_member_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `communities_management_dashboard`
--

CREATE TABLE `communities_management_dashboard` (
  `username` varchar(100) NOT NULL,
  `member_position` varchar(100) NOT NULL,
  `member_join date` date NOT NULL,
  `kicked_member` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `event_calendar`
--

CREATE TABLE `event_calendar` (
  `year` date NOT NULL,
  `month` date NOT NULL,
  `day` date NOT NULL,
  `total_post` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `faq_help_center`
--

CREATE TABLE `faq_help_center` (
  `problem` varchar(200) NOT NULL,
  `solution` varchar(200) NOT NULL,
  `problem_categories` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `forgot_username_password`
--

CREATE TABLE `forgot_username_password` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `new_password` varchar(100) NOT NULL,
  `old_password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_openings`
--

CREATE TABLE `job_openings` (
  `job_title` varchar(50) NOT NULL,
  `job_description` varchar(100) NOT NULL,
  `click_times` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `log_in`
--

CREATE TABLE `log_in` (
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `member_directory`
--

CREATE TABLE `member_directory` (
  `community_name` varchar(100) NOT NULL,
  `number_of_member` int NOT NULL,
  `host_member_name` varchar(100) NOT NULL,
  `host_member_rank` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pinned_thread_post`
--

CREATE TABLE `pinned_thread_post` (
  `thread_post_title` varchar(100) NOT NULL,
  `total_like` int NOT NULL,
  `total_share` int NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `post_history`
--

CREATE TABLE `post_history` (
  `post_title` varchar(50) NOT NULL,
  `post_description` varchar(100) NOT NULL,
  `post_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pulls_and_survey`
--

CREATE TABLE `pulls_and_survey` (
  `pulls_and_survey_title` varchar(100) NOT NULL,
  `pulls_and_survey_type` varchar(100) NOT NULL,
  `number_of_participants` int NOT NULL,
  `results` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `resources_library`
--

CREATE TABLE `resources_library` (
  `resources_categories` varchar(200) NOT NULL,
  `resources_title` varchar(200) NOT NULL,
  `resources_link` varchar(200) NOT NULL,
  `resources_source` varchar(200) NOT NULL,
  `resources_uploader` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rules_and_guidelines`
--

CREATE TABLE `rules_and_guidelines` (
  `question` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `inquiries` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sign_up`
--

CREATE TABLE `sign_up` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `date_of_birth` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subcription_plan`
--

CREATE TABLE `subcription_plan` (
  `subscription_plan` varchar(100) NOT NULL,
  `subscription_duration` varchar(100) NOT NULL,
  `subscription_expire_date` date NOT NULL,
  `subscription_starting_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `topic_directory`
--

CREATE TABLE `topic_directory` (
  `topic` int NOT NULL,
  `created_topic` varchar(100) NOT NULL,
  `deleted_topic` varchar(100) NOT NULL,
  `updated_topic` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_profile`
--

CREATE TABLE `user_profile` (
  `username` int NOT NULL,
  `joined_date` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_recent_activities`
--

CREATE TABLE `user_recent_activities` (
  `liked_post` varchar(100) NOT NULL,
  `joined_communities` varchar(100) NOT NULL,
  `shared_video` varchar(100) NOT NULL,
  `date_&_time` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `communities`
--
ALTER TABLE `communities`
  ADD PRIMARY KEY (`community_name`);

--
-- Indexes for table `faq_help_center`
--
ALTER TABLE `faq_help_center`
  ADD PRIMARY KEY (`problem`);

--
-- Indexes for table `job_openings`
--
ALTER TABLE `job_openings`
  ADD PRIMARY KEY (`job_title`);

--
-- Indexes for table `pulls_and_survey`
--
ALTER TABLE `pulls_and_survey`
  ADD PRIMARY KEY (`pulls_and_survey_title`);

--
-- Indexes for table `resources_library`
--
ALTER TABLE `resources_library`
  ADD PRIMARY KEY (`resources_title`);

--
-- Indexes for table `rules_and_guidelines`
--
ALTER TABLE `rules_and_guidelines`
  ADD PRIMARY KEY (`question`);

--
-- Indexes for table `sign_up`
--
ALTER TABLE `sign_up`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `subcription_plan`
--
ALTER TABLE `subcription_plan`
  ADD PRIMARY KEY (`subscription_plan`);

--
-- Indexes for table `topic_directory`
--
ALTER TABLE `topic_directory`
  ADD PRIMARY KEY (`topic`);
  
  -- Add user_id column
/*change primary key from username to user_id */
ALTER TABLE `sign_up`
  ADD `user_id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY FIRST;

-- Remove the current primary key constraint on the username column
ALTER TABLE `sign_up`
  DROP PRIMARY KEY;
	
ALTER TABLE `log_in`
ADD COLUMN `user_id` INT,
ADD FOREIGN KEY (`user_id`) REFERENCES `sign_up`(`user_id`);

-- Remove the current primary key constraint on the username column

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
