# Database Tables (Current + Future)

## ✅ users
Stores user accounts and referral hierarchy.

| Column        | Type     | Description |
|---------------|----------|-------------|
| id            | bigint   | Primary key |
| name          | string   | User name |
| email         | string   | Unique email |
| password      | string   | Hashed password |
| invite_code   | string   | User's unique code |
| invited_by    | bigint   | FK → users.id |
| team_id       | bigint   | FK → teams.id |
| created_at    | timestamp |  |
| updated_at    | timestamp |  |

---

## ✅ teams
Represents a group/team created automatically when a user becomes a leader.

| Column | Type | Description |
|--------|------|-------------|
| id     | bigint | Primary key |
| leader_id | bigint | FK → users.id |
| created_at | timestamp | |
| updated_at | timestamp | |

---

## ✅ future tables (Phase 2+)

### properties
- Project, tower, phase details

### units
- Inventory (flat/plot/shop)

### sales
- Booking + verification flow

### commissions
- Multi-level commission logs

### payouts
- Payout cycle + approval
