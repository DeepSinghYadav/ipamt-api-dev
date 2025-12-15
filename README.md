# IPAMT – Intelligent Property & Agent Management Tool  
A modular, scalable, and future‑proof backend system designed for real‑estate builders, marketing teams, and multi‑level agent networks.  
IPAMT का उद्देश्य है एक ऐसा unified system बनाना जो registration, team hierarchy, commission rules, और admin‑controlled settings को एक ही जगह manage कर सके।

---

## ✅ Phase 1 – Authentication & Team Management (Current Phase)
- User Registration (Open + Invite Mode)
- Login with Sanctum Token
- Invite Code System (Auto‑Generated)
- Parent–Child (Inviter → Invitee) Mapping
- Team ID Inheritance
- Admin‑Controlled Registration Mode
- Clean Architecture (Controller → Service → Repository)

---

## ✅ Phase 2 – Property & Sales Module (Upcoming)
- Property Master
- Unit / Inventory Management
- Sales Entry & Verification
- Booking Status Flow
- Customer KYC & Document Upload
- Activity Logs

---

## ✅ Phase 3 – Commission Engine (Future Module)
- Multi‑Level Commission Rules
- Builder‑Controlled Commission Slabs
- Level Limit (Admin Controlled)
- Refund / Reversal Policy
- Payout Cycle
- Commission Logs & Reports

---

## ✅ Architecture
- Fully Modular Structure  
- Service + Repository Pattern  
- API Versioning (v1, v2…)  
- Clean Database Design  
- Future‑Proof Module Plug‑in System  
- Laravel Best Practices  

---

## ✅ Tech Stack
- Laravel 12+
- PHP 8.2+
- MySQL / MariaDB
- REST APIs
- Sanctum Authentication
- Modular Folder Structure

---

## ✅ Features
- Multi‑level invite chain  
- Admin‑controlled system behavior  
- Flexible settings for different business models  
- Zero‑downtime module upgrades  
- Multi‑client ready architecture  
- Clean, scalable backend foundation  

---

## 📁 Project Folder Structure

.
 * [app](./app)
   * [Console](./app/Console)
   * [Exceptions](./app/Exceptions)
   * [Http](./app/Http)
     * [Controllers](./app/Http/Controllers)
     * [Middleware](./app/Http/Middleware)
     * [Kernel.php](./app/Http/Kernel.php)
   * [Models](./app/Models)
   * [Providers](./app/Providers)
   * [Services](./app/Services)
 * [bootstrap](./bootstrap)
   * [app.php](./bootstrap/app.php)
 * [config](./config)
 * [database](./database)
   * [migrations](./database/migrations)
   * [seeders](./database/seeders)
   * [factories](./database/factories)
 * [public](./public)
   * [index.php](./public/index.php)
 * [resources](./resources)
   * [views](./resources/views)
   * [js](./resources/js)
   * [css](./resources/css)
 * [routes](./routes)
   * [api.php](./routes/api.php)
   * [web.php](./routes/web.php)
   * [channels.php](./routes/channels.php)
 * [storage](./storage)
 * [tests](./tests)
 * [vendor](./vendor)
 * [.env](./.env)
 * [.gitignore](./.gitignore)
 * [artisan](./artisan)
 * [composer.json](./composer.json)
 * [composer.lock](./composer.lock)
 * [package.json](./package.json)
 * [README.md](./README.md)
 * [LICENSE](./LICENSE)


---

## 🛣️ Project Roadmap

### ✅ Phase 1 — Authentication & Team System (Current)
- [x] Registration API (Open + Invite Mode)
- [x] Login API (Sanctum Token)
- [x] User Model Enhancements
- [x] Invite Code Generation
- [x] Inviter → Invitee Mapping
- [x] Team ID Inheritance
- [ ] Admin Settings Module
- [ ] Downline / Upline Tree API
- [ ] Activity Logs

### ✅ Phase 2 — Property Module
- [ ] Property Master
- [ ] Unit / Inventory Management
- [ ] Sales Entry API
- [ ] Sale Verification Flow

### ✅ Phase 3 — Commission Engine
- [ ] Commission Rules
- [ ] Multi‑Level Commission Engine
- [ ] Commission Calculation Flow

### ✅ Phase 4 — Payout System
- [ ] Payout Cycle
- [ ] Payout Approval Flow

### ✅ Phase 5 — Admin Panel (UI)
- [ ] Dashboard
- [ ] Team Tree UI
- [ ] Sales UI
- [ ] Commission UI
- [ ] Settings UI

---

## ✅ License
This project is licensed under the MIT License.

---

## ✅ Author
Developed by **Deep Singh Yadav**  
Founder – DSY Digital  
