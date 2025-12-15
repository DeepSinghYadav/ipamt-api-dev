# IPAMT – Project Roadmap  
A structured, milestone‑driven roadmap for the Intelligent Property & Agent Management Tool (IPAMT).  
This roadmap covers Authentication, Team System, Property Module, Commission Engine, Payout System, and Admin Panel.

---

# ✅ Phase 1 — Authentication & Team System (Current Phase)

### 🎯 Objective  
A secure, scalable foundation for user onboarding, invite system, and team hierarchy.

### ✅ Completed
- [x] Laravel API scaffolding setup  
- [x] Sanctum installation & token system  
- [x] Registration API (Open + Invite Mode)  
- [x] Invite code validation  
- [x] Inviter → Invitee mapping  
- [x] Team ID inheritance  
- [x] Login API with token generation  
- [x] Protected route testing (`/api/user`)  
- [x] User model enhancements (HasApiTokens, relations)

### 🟡 In Progress
- [ ] Admin Settings Module (registration_mode, limits, etc.)
- [ ] Downline Tree API (multi-level)
- [ ] Upline Chain API
- [ ] Activity Logs (user actions, invites, login events)

### 🔜 Upcoming
- [ ] Team analytics (directs, total downline count)
- [ ] Invite usage tracking

---

# ✅ Phase 2 — Property & Inventory Module

### 🎯 Objective  
A complete real‑estate property management system for builders and marketing teams.

### 🟡 Planned Features
- [ ] Property Master (project, tower, phase)
- [ ] Unit / Inventory Management  
- [ ] Unit Status Flow (available → booked → sold)  
- [ ] Customer KYC & document upload  
- [ ] Booking request API  
- [ ] Booking verification flow  
- [ ] Property‑wise analytics  

---

# ✅ Phase 3 — Sales & Commission Engine

### 🎯 Objective  
A flexible, admin‑controlled commission system for multi‑level agent networks.

### 🟡 Planned Features
- [ ] Commission Rules (admin controlled)  
- [ ] Level Limit (e.g., 3‑level, 5‑level, unlimited)  
- [ ] Multi‑Level Commission Engine  
- [ ] Commission Calculation Flow  
- [ ] Refund / Reversal Policy  
- [ ] Commission Logs & Reports  
- [ ] Builder‑wise commission configuration  

---

# ✅ Phase 4 — Payout & Finance System

### 🎯 Objective  
A complete payout cycle for agents and marketing teams.

### 🟡 Planned Features
- [ ] Payout Cycle (weekly / monthly)  
- [ ] Payout Approval Flow  
- [ ] Payout Ledger  
- [ ] Bank Details & KYC  
- [ ] Payout History  
- [ ] Exportable reports (CSV / PDF)  

---

# ✅ Phase 5 — Admin Panel (Web UI)

### 🎯 Objective  
A powerful dashboard for builders, admins, and marketing heads.

### 🟡 Planned Features
- [ ] Dashboard (sales, commissions, team stats)  
- [ ] Team Tree UI  
- [ ] Property Management UI  
- [ ] Sales Entry UI  
- [ ] Commission UI  
- [ ] Settings UI  
- [ ] Activity Logs UI  

---

# ✅ Phase 6 — Mobile App (Future)

### 🎯 Objective  
A mobile‑first experience for agents and field teams.

### 🟡 Planned Features
- [ ] Login & Profile  
- [ ] Team Tree  
- [ ] Sales Entry  
- [ ] Commission Tracking  
- [ ] Notifications  
- [ ] Offline Mode (optional)

---

# ✅ Versioning Plan

| Version | Description |
|--------|-------------|
| v0.1.0 | Registration + Login + Invite System |
| v0.2.0 | Team System APIs |
| v0.3.0 | Property Module |
| v0.4.0 | Sales Module |
| v0.5.0 | Commission Engine |
| v1.0.0 | Full MVP Release |

---

# ✅ Notes
- Roadmap is flexible and will evolve with business requirements.  
- Each phase will be documented in `/docs` folder.  
- GitHub issues + milestones will track progress.

---

# ✅ Author
Developed by **Deep Singh Yadav**  
Founder – DSY Digital
