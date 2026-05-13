-- 1. MESSAGES TABLE
CREATE TABLE IF NOT EXISTS `messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- 2. ADMIN TABLE
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Admin: sara / Password: 12345
INSERT INTO `admin` (`username`, `password`) VALUES ('sara', '12345');

-- 3. PROJECTS TABLE (Güncel Projelerinle)
CREATE TABLE IF NOT EXISTS `projects` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(150) NOT NULL,
  `description` text NOT NULL,
  `tools` varchar(100) NOT NULL,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- SENİN ASIL PROJELERİN (İngilizce ve Doğru Teknik Bilgilerle)
INSERT INTO `projects` (`title`, `description`, `tools`, `image`) VALUES 
('Construction Progress Tracker', 'A professional management tool for tracking construction sites through dynamic data visualization and AI-generated visual assets.', 'Python, Pandas, AI Generation', 'img1.png'),
('Exam Performance Analysis', 'A data science project that analyzes student success factors using statistical algorithms over Kaggle datasets.', 'Python, NumPy, Matplotlib', 'img2.png'),
('PDF AI Agent (Summarizer)', 'An intelligent AI agent built to analyze complex PDF documents, generate summaries, and produce automated test questions.', 'Python, FastAPI, Crew AI', 'img3.png');
