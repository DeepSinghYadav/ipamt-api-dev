# Error Handling

All errors return JSON responses.

## Validation Error
```json
{
  "status": false,
  "message": "The email field is required."
}
```
Invalid Invite Code
```json
{
  "status": false,
  "message": "Invalid invite code"
}
```
Unauthenticated
```json
{
  "message": "Unauthenticated."
}
```
Server Error
```json
{
  "status": false,
  "message": "Something went wrong"
}
```
---
