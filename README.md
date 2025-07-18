# 📱 WhatsApp Clone – Web Version

A lightweight clone of WhatsApp's UI built using **HTML**, **CSS (with Tailwind)**, **JavaScript**, and **PHP** for session management. This project aims to replicate WhatsApp's look and feel while implementing core UI and basic functionality.

---

## 🚀 Features (Implemented)

- ✅ **Login/Signup Pages** (UI only)
- ✅ **Dashboard Page**
  - Sidebar with links: Dashboard, Members, Billing
  - Top navigation bar
- ✅ **Settings Overlay**
  - Logout button
- ✅ **Responsive Layout** using Tailwind CSS
- ✅ **JavaScript-based Routing & Overlay Management**
- ✅ **Basic Session Check in PHP** (currently commented out for development)
- ✅ **Implemented chat layout and dummy messages**
---


## 🛠️ Technologies Used

- **Frontend:** HTML, Tailwind CSS, JavaScript
- **Backend:** PHP (session management)

---

## ⚙️ How to Run the Project

1. Download or clone the repository:
   ```bash
   git clone https://github.com/yourusername/whatsapp-clone.git
   ```

2. Open the project in a local PHP environment (e.g., XAMPP, MAMP, or PHP built-in server):
   ```bash
   php -S localhost:8000
   ```

3. Navigate to:
   ```
   http://localhost:8000/index.php
   ```

---

## 🔐 Known Issues / In Development

- [ ] Session-based access control is **commented out** in `settings.php` to allow overlay loading via `fetch()`.
- [ ] No actual login/signup authentication yet (forms only).
- [ ] Settings overlay currently loads HTML fragment directly; needs AJAX-safe session protection.
- [ ] No backend chat or messaging logic implemented yet.
- [ ] Responsive tweaks for mobile not fully polished.

---

## ✨ Next Steps

- 🔒 Re-enable session checks with AJAX-friendly fallback
- 📤 Enable real-time message sending with basic PHP backend
- 📲 Add mobile responsiveness
- 👥 Integrate user list (dummy or database)

---

## 🙌 Credits

Developed by Yaw Gyamera – internship project inspired by WhatsApp Web.
