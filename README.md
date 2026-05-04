<p align="center">
  <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="200" alt="Laravel Logo" style="opacity:0.3">
</p>

<h1 align="center">🏡 SaviraNest</h1>
<p align="center"><em>Your Nest Away From Home</em></p>

<p align="center">
  <img src="https://img.shields.io/badge/Laravel-v11.x-FF2D20?style=flat-square&logo=laravel&logoColor=white" alt="Laravel Version">
  <img src="https://img.shields.io/badge/PHP-8.2+-777BB4?style=flat-square&logo=php&logoColor=white" alt="PHP Version">
  <img src="https://img.shields.io/badge/MySQL-8.0-4479A1?style=flat-square&logo=mysql&logoColor=white" alt="MySQL">
  <img src="https://img.shields.io/badge/TailwindCSS-3.x-38B2AC?style=flat-square&logo=tailwind-css&logoColor=white" alt="Tailwind">
  <img src="https://img.shields.io/badge/License-MIT-F9A826?style=flat-square" alt="License">
</p>

---

## 🌊 About SaviraNest

**SaviraNest** is a modern, lifestyle-driven hospitality and booking platform designed to redefine how people find comfort away from home. Built around the idea of warmth, safety, and elegance, SaviraNest connects travelers with carefully selected stays that feel personal, peaceful, and thoughtfully curated.

More than just a booking platform — SaviraNest is a **digital nest network**, offering short-term and long-term accommodation options ranging from cozy urban apartments to serene getaway homes and safari-inspired retreats. Every stay is chosen to deliver comfort, reliability, and a sense of belonging, no matter where you are in the world.

> 🏡 *Whether you're traveling for business, adventure, or relaxation — SaviraNest ensures every journey ends in comfort.*

---

## 🎨 Brand Colors & Design Identity

SaviraNest's UI follows a deliberate **60 / 30 / 10 color rule**, designed to feel like a real global booking platform — calm like a hotel lobby, fresh like the ocean coast, warm like home, and clean like a tech startup.

| Role | Color | Hex | Usage |
|------|-------|-----|-------|
| 🌊 Ocean Blue | ![#1E88E5](https://via.placeholder.com/12/1E88E5/000000?text=+) Ocean Blue | `#1E88E5` | Buttons, links, app UI, highlights |
| 🌑 Deep Navy | ![#0B1F3A](https://via.placeholder.com/12/0B1F3A/000000?text=+) Deep Navy | `#0B1F3A` | Headers, logo, text backgrounds |
| 🏝️ Sand Beige | ![#F4E7D3](https://via.placeholder.com/12/F4E7D3/000000?text=+) Sand Beige | `#F4E7D3` | Backgrounds, cards, sections |
| ✨ Sunrise Gold | ![#F9A826](https://via.placeholder.com/12/F9A826/000000?text=+) Warm Gold | `#F9A826` | Accents, icons, CTAs |
| 🌿 Soft Teal | ![#2EC4B6](https://via.placeholder.com/12/2EC4B6/000000?text=+) Soft Teal | `#2EC4B6` | Hover states, secondary UI |
| ⬜ Clean White | ![#FFFFFF](https://via.placeholder.com/12/FFFFFF/000000?text=+) White | `#FFFFFF` | Main backgrounds, spacing |

**Color Distribution Rule:**
```
60% → Neutral (White #FFFFFF + Sand Beige #F4E7D3)
30% → Blue tones (Ocean Blue #1E88E5 + Deep Navy #0B1F3A)
10% → Gold accents (#F9A826)
```

---

## 🛠️ Technology Stack

### Backend
| Technology | Version | Purpose |
|-----------|---------|---------|
| **PHP** | 8.2+ | Server-side language |
| **Laravel** | 11.x | Core web framework (routing, ORM, auth, queues) |
| **Laravel Sanctum** | — | API token authentication |
| **Laravel Scout** | — | Full-text search |
| **Laravel Horizon** | — | Queue monitoring |
| **MySQL** | 8.0 | Primary relational database |
| **Redis** | 7.x | Caching, sessions, queue driver |

### Frontend
| Technology | Version | Purpose |
|-----------|---------|---------|
| **Blade** | (Laravel) | Templating engine |
| **Tailwind CSS** | 3.x | Utility-first CSS framework |
| **Alpine.js** | 3.x | Lightweight JS reactivity |
| **Vite** | 5.x | Frontend asset bundler |
| **Livewire** *(optional)* | 3.x | Full-stack reactive components |

### Storage & Media
| Technology | Purpose |
|-----------|---------|
| **Laravel Filesystem (S3 / local)** | Property photos, user uploads |
| **Intervention Image** | Image resizing and optimization |

### Integrations & Services
| Service | Purpose |
|--------|---------|
| **Stripe / Flutterwave / M-Pesa** | Payment processing |
| **Google Maps API** | Location display and search |
| **Mailgun / SMTP** | Transactional email (bookings, confirmations) |
| **Twilio / Africa's Talking** | SMS notifications |
| **Cloudinary** *(optional)* | Media CDN |

### DevOps & Tools
| Tool | Purpose |
|------|---------|
| **Git + GitHub** | Version control |
| **Laravel Pint** | Code style fixer |
| **PHPUnit / Pest** | Testing framework |
| **Laravel Telescope** | Debug assistant (local dev) |
| **Docker / Sail** | Local development environment |

---

## 📦 What's Included

```
saviranest/
├── app/
│   ├── Http/
│   │   ├── Controllers/
│   │   │   ├── Auth/               # Registration, login, password reset
│   │   │   ├── BookingController   # Create, manage, cancel bookings
│   │   │   ├── PropertyController  # Listing CRUD
│   │   │   ├── ReviewController    # Guest reviews
│   │   │   ├── PaymentController   # Payment gateway integration
│   │   │   └── DashboardController # Host & guest dashboards
│   │   └── Middleware/
│   ├── Models/
│   │   ├── User.php
│   │   ├── Property.php
│   │   ├── Booking.php
│   │   ├── Review.php
│   │   └── Payment.php
│   └── Services/
│       ├── BookingService.php
│       └── PaymentService.php
├── resources/
│   ├── views/
│   │   ├── layouts/app.blade.php   # Main layout (Navy + White + Gold)
│   │   ├── home.blade.php          # Landing page
│   │   ├── properties/             # Browse, search, detail pages
│   │   ├── bookings/               # Booking flow
│   │   └── dashboard/              # Host & guest portals
│   └── css/
│       └── app.css                 # Tailwind + custom brand tokens
├── database/
│   ├── migrations/
│   └── seeders/
├── routes/
│   ├── web.php
│   └── api.php
└── tests/
```

---

## 🚀 Getting Started

### Requirements

- PHP >= 8.2
- Composer
- Node.js >= 18.x & npm
- MySQL 8.0
- Redis (optional but recommended)

### Installation

```bash
# 1. Clone the repository
git clone https://github.com/yourusername/saviranest.git
cd saviranest

# 2. Install PHP dependencies
composer install

# 3. Install frontend dependencies
npm install

# 4. Set up environment
cp .env.example .env
php artisan key:generate

# 5. Configure your .env (database, mail, payment keys, etc.)
# DB_DATABASE=saviranest
# DB_USERNAME=root
# DB_PASSWORD=

# 6. Run migrations and seeders
php artisan migrate --seed

# 7. Link storage
php artisan storage:link

# 8. Build assets
npm run dev

# 9. Start the server
php artisan serve
```

Visit `http://localhost:8000` 🎉

---

## 🔑 Key Features

- 🔍 **Smart Property Search** — Filter by location, dates, price, and property type
- 📅 **Real-Time Booking Calendar** — Live availability with date-range picker
- 🏠 **Host Dashboard** — Manage listings, availability, and bookings
- 🧳 **Guest Dashboard** — View trips, receipts, and reviews
- 💳 **Secure Payments** — Stripe / M-Pesa integration with booking confirmation
- ⭐ **Reviews & Ratings** — Two-way review system (guests rate hosts, hosts rate guests)
- 📧 **Email Notifications** — Booking confirmed, cancelled, and reminder emails
- 📱 **Mobile-Responsive UI** — Airbnb-style layout across all screen sizes
- 🌍 **Map Integration** — Google Maps embedded on every property listing
- 🔐 **Authentication** — Login, register, social login (Google), email verification

---

## 🧪 Testing

```bash
# Run all tests
php artisan test

# Run with coverage
php artisan test --coverage
```

---

## 🤝 Contributing

We welcome contributions! Please read the [contribution guide](https://laravel.com/docs/contributions) and submit a pull request. All contributors are expected to follow the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

---

## 🔒 Security

If you discover a security vulnerability within SaviraNest, please send an email to the project maintainer directly. All security issues will be addressed promptly and responsibly.

---

## 📄 License

SaviraNest is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

---

<p align="center">Built with ❤️ using <a href="https://laravel.com">Laravel</a> · Styled with the warmth of the coast 🌊🏡✨</p>