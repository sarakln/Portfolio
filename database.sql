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

-- Insert Admin (Password: 12345 - Used plain text for demo purposes, should be hashed with BCRYPT/MD5 in production)
INSERT INTO `admin` (`username`, `password`) VALUES ('sara', '12345');

-- 3. PROJECTS TABLE
CREATE TABLE IF NOT EXISTS `projects` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(150) NOT NULL,
  `description` text NOT NULL,
  `tools` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Insert Projects (Translated to English)
INSERT INTO `projects` (`title`, `description`, `tools`) VALUES 
('Student GPA & Ranking System', 'A desktop application featuring a user-friendly interface that calculates student grades and ranks them using data processing algorithms.', 'Python, Tkinter, Pandas'),
('Exam Performance Data Analysis', 'A data science project that analyzes and visualizes the factors affecting student exam performance using Kaggle datasets.', 'Python, Pandas, NumPy'),
('Dynamic Construction Progress Tracker', 'A project management tool that dynamically tracks construction progress, supported by AI-generated visual assets.', 'Python, Data Analysis, AI'),
('Visual Classification', 'Computer Vision-based object detection project.', 'Python, YOLO'),
('Student Management System', 'A graphical user interface developed with Pandas and Tkinter.', 'Python, Tkinter');