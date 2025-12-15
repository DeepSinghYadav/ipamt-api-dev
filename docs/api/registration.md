# Registration API

## Endpoint

POST /api/register

## Modes
### ✅ Open Mode
- No invite code required
- System auto-generates invite code

### ✅ Invite Mode
- Invite code required
- Inviter → Invitee mapping
- Team ID inheritance

## Request Body
```json
{
  "name": "Deep Test",
  "email": "deep@example.com",
  "password": "123456",
  "invite_code": "OPTIONAL_OR_REQUIRED"
}

Success Response

{
  "status": true,
  "message": "Registration successful",
  "data": {
    "id": 2,
    "name": "Deep Test",
    "email": "deep@example.com",
    "invite_code": "XYZ123",
    "invited_by": 1,
    "team_id": 1
  }
}

Error Responses

    Missing fields

    Invalid invite code

    Duplicate email

    Validation errors


