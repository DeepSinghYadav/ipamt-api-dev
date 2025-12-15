# Authentication Module

The Authentication Module handles user onboarding, login, token management, and secure access.

## Features
- Registration (Open + Invite Mode)
- Login with Sanctum token
- Logout (token revocation)
- Protected routes
- User profile API

## Business Rules
- Email must be unique
- Password must be hashed
- Invite code optional (open mode)
- Invite code required (invite mode)

## Future Enhancements
- OTP login
- Email verification
- Password reset
