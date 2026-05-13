# Full-Stack Web Portfolio

A creative, retro-inspired web portfolio designed with a custom "Windows Desktop" aesthetic. This project was developed as the final assignment for the **Internet & Web Programming (SEN3002)** course at Haliç University.

## 🚀 Overview

This portfolio serves as a hub for showcasing various software engineering and AI projects. It features a unique user interface where each section (Profile, About, Skills, Works, Contact) opens in a draggable-style window, mimicking an operating system environment.

## 🛠️ Tech Stack

- **Frontend:** HTML5, CSS3 (Custom Grid & Flexbox), JavaScript (Vanilla JS, AJAX/Fetch API)
- **Backend:** PHP (Session Management & CRUD Operations)
- **Database:** MySQL (MariaDB)
- **Design:** Pixel Art Aesthetics, Inline SVG Icons, Modern UI Cards

## ✨ Key Features

- **Dynamic Desktop Environment:** Multiple interactive windows for a seamless user experience.
- **Project Showcase (Dynamic):** Projects are fetched dynamically from the MySQL database using AJAX (Fetch API) to ensure zero-refresh updates.
- **Admin Dashboard:** A secure restricted area protected by PHP Session Management.
- **Message Inbox:** Contact form submissions are saved to the database and can be managed/viewed through the Admin Dashboard.
- **Modern Project Cards:** Features hover effects, technical spec badges, and project-specific cover images.
- **Retro Aesthetic:** Includes custom "sticker" decorations and a gridded notebook background for a creative developer workspace vibe.

## 📂 Database Setup

The project requires a MySQL database named `portfolio_db`. Use the provided `database.sql` script to set up the following tables:

1.  **`admin`**: Stores administrative credentials for the dashboard.
2.  **`projects`**: Stores project titles, descriptions, tools used, and cover image paths.
3.  **`messages`**: Stores incoming contact form submissions.

### Default Admin Credentials:
- **Username:** `sara`
- **Password:** `12345`

## ⚙️ Installation & Setup (Local)

1.  **Server Environment:** Install [XAMPP](https://www.apachefriends.org/) or any local server with PHP and MySQL support.
2.  **Directory:** Move the project folder to your `htdocs` directory (e.g., `C:/xampp/htdocs/portfolio`).
3.  **Database:** - Open `phpMyAdmin`.
    - Create a new database named `portfolio_db`.
    - Import the `database.sql` file.
4.  **Run:** Open your browser and navigate to `http://localhost/portfolio`.

## 📝 Project Details

- **Course:** SEN3002 - Internet & Web Programming
- **Institution:** Haliç University
- **Developer:** Sara Kalan
- **Submission Date:** May 14, 2026

---
*This project fulfills the full-stack integration requirements including database connectivity, session management, and asynchronous data handling.*
