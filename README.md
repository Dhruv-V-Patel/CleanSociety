# CleanSociety

**CleanSociety** is a PHP-based web application for lodging, tracking, and managing public complaints. It streamlines communication between users and officials through an easy-to-navigate interface.

---

##  Table of Contents
- [About](#features)  
- [Features](#features)  
- [Technology Stack](#technology-stack)  
- [Setup & Installation](#setup--installation)  
- [Usage](#usage)  
- [Project Structure](#project-structure)  
- [Database Configuration](#database-configuration)  
- [Contributing](#contributing)  
- [Contact & License](#contact--license)  

---
## 🧐 About

**CleanSociety** is a web-based complaint management and tracking platform designed to make community issue reporting simple, transparent, and efficient.  
It bridges the communication gap between citizens and the authorities by allowing users to register complaints, track their progress, and receive timely updates — all from one unified portal.

The project is built using **PHP**, **MySQL**, **HTML**, and **CSS**, with a simple yet functional UI, making it easy to deploy on local or cloud-based servers.  
It’s ideal for municipalities, housing societies, or campus administrations to streamline issue resolution and maintain cleaner, more organized communities.

**Key Objectives:**
- Provide a **user-friendly interface** for citizens to submit complaints.  
- Enable **real-time tracking** of complaint status.  
- Offer an **admin dashboard** for officials to view, update, and manage complaints.  
- Store and manage complaint history for accountability and transparency.  

With CleanSociety, the goal is to **empower communities** to take active roles in maintaining their environment while giving authorities an efficient tool for issue resolution.

---

## 🌟 Features
- User registration, login, password reset functionality  
- Submit and view complaints with tracking  
- Admin/Official dashboard to manage, review, and update complaints  
- Contact Us, About Us, blog pages for content and engagement  
- Feedback flow via complaint status updates  

---

## 🧱 Technology Stack
- **Backend:** PHP (plain)  
- **Frontend:** HTML5, CSS3, JavaScript, PHP templates  
- **Database:** MySQL (via `dbconnect.php`)
- **Styling:** Custom CSS + basic UI enhancements
- **Documentation:** PPT & report file for project background (under `PPT & Report/`)  

---

## 🛠 Setup & Installation
1. Clone the repo:
   ```bash
   git clone https://github.com/Dhruv-V-Patel/CleanSociety.git
   cd CleanSociety
2. Set up a local PHP webserver (e.g. XAMPP, MAMP, WAMP).
3. Create a MySQL database, e.g. cleansociety_db.
4. Update dbconnect.php with your DB credentials:
   ```bash
   $conn = new mysqli('HOST', 'USERNAME', 'PASSWORD', 'cleansociety');
5. Import the SQL schema (e.g., cleansociety.sql if you have one; otherwise, manually create):
6. Place the CleanSociety directory into your server’s root (e.g. htdocs).
7. Visit http://localhost/CleanSociety/index.php in your browser.
---

## 🎯 Usage

- Sign Up / Log In: New users create an account, or log in to submit/view complaints.
- Submit Complaint: Complete the form on Complaints.php.
- Track Complaint: Use TrackComplaint.php to follow progress.
- Admin Portal: Officials can log in and manage complaints via dashboard.php.
    
---
## 📂 Project Structure

   ```bash
  CleanSociety
  ├── Assets/            # Images, CSS, Database, JS, Uploads
  ├── PPT & Report/      # Documentation files
  ├── _MainHeader.php    # Header template
  ├── _MainFooter.php    # Footer template
  ├── _Login&SignUp.php  # User auth interface
  ├── dashboard.php      # Admin dashboard
  ├── Complaints.php     # File to submit complaints
  ├── TrackComplaint.php # Track complaint page
  ├── _Blog.php          # Blog page 1
  ├── _AboutUS.php       # About Us page
  ├── _ContactUS.php     # Contact Us page
  ├── dbconnect.php      # DB connection logic
  ├── index.php          # Main landing page
  └── ... other PHP files
   ```
---
## 🤝 Contributing

- Contributions are welcome!
- Fork the repository
- Create a new branch (feature/your-feature)
- Commit changes; keep it clean and well-documented
- Push to your branch and create a PR

---

## 📞 Contact

Dhruv Patel \
GitHub: [@Dhruv-V-Patel](https://github.com/Dhruv-V-Patel) \
Email: dhruvpatel7063@gmail.com
