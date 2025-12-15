# Authenticated User API

## Endpoint
GET /api/user

## Headers
Authorization: Bearer <token>

## Success Response
```json
{
  "id": 2,
  "name": "Deep Test",
  "email": "deep@example.com",
  "invite_code": "XYZ123",
  "invited_by": 1,
  "team_id": 1
}
```
Description

Returns the authenticated user's profile.


---
