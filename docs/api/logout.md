# Logout API

## Endpoint
POST /api/logout

## Headers
Authorization: Bearer <token>

## Success Response
```json
{
  "status": true,
  "message": "Logged out successfully"
}
```
Description

  Current token is revoked

  User becomes unauthenticated

---
