# Citizen Engagement System

Citizen Engagement System | ICT CHAMBER | HangaHub | 2025 Hackathon  
A modern web platform for submitting, tracking, and managing public service complaints.

---

## 📌 Overview

The **Citizen Engagement System** is a web-based platform that empowers citizens to report issues and track their resolution. Agencies respond and update complaint statuses to promote transparency, accountability, and public engagement.

---

## 🚀 Features

- 📝 **Complaint Submission**  
  Citizens submit complaints through a simple form with category, details, and contact info.

- 🔍 **Complaint Tracking**  
  Users track progress using a unique tracking ID.

- 🧑‍💼 **Agency Operations Panel**  
  Agencies log in securely to manage and respond to complaints.

- 📧 **Email Notifications**  
  Automatic email alerts on submission and updates.

- 🔐 **OTP-Based Admin Login**  
  Secure login for Super Admin with OTP verification.

- 🌍 **Multi-language Support**  
  Switch between Kinyarwanda, English, French, Kiswahili.

- 👥 **Role-Based Access**  
  Different roles for Super Admin and Agency users.

---

## 🛠️ Tech Stack

- **Backend:** Laravel 10 (PHP 8.x)
- **Frontend:** Blade, Bootstrap 5
- **Database:** MySQL
- **Auth:** Laravel Auth with OTP verification
- **Email:** Laravel Mail (Markdown templates)
- **Languages:** Multilingual with session-based locale

---

## 📦 Installation Guide

### Requirements

- PHP >= 8.1
- Composer
- MySQL
- Node.js & npm
- Mailtrap/SMTP email service

### Setup Steps

```bash
git clone https://github.com/Ckaay/CitizenEngagementSystem.git
cd CitizenEngagementSystem
composer install
npm install && npm run dev
cp .env.example .env
php artisan key:generate
