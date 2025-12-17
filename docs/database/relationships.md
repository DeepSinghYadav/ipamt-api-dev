# Database Relationships

## ✅ User Relationships
- A user **belongs to** a team
- A user **may have many** invitees
- A user **may be invited by** another user

### Example
User → invited_by → User User → team_id → Team

---

## ✅ Team Relationships
- A team **has one** leader
- A team **has many** members

---

## ✅ Future Relationships

### Property Module
- Property → hasMany → Units
- Unit → belongsTo → Property

### Sales Module
- Sale → belongsTo → User
- Sale → belongsTo → Unit

### Commission Module
- Commission → belongsTo → Sale
- Commission → belongsTo → User
