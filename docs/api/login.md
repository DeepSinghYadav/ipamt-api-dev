# Login API

## Endpoint
POST /api/login

Code

## Request Body
```json
{
  "email": "deep@example.com",
  "password": "123456"
}
```
Success Response
```json
{
  "status": true,
  "message": "Login successful",
  "token": "1|abc123...",
  "user": {
    "id": 2,
    "name": "Deep Test",
    "email": "deep@example.com"
  }
}
```
Error Response
```json
{
  "status": false,
  "message": "Invalid credentials"
}
```

---
