# Authentication Overview

IPAMT uses **Laravel Sanctum** for token-based authentication.

## Key Features
- Token generation on login
- Bearer token authentication
- Protected routes using `auth:sanctum`
- Token revocation on logout

## Authentication Flow
1. User registers (open or invite mode)
2. User logs in → receives token
3. User accesses protected routes using `Authorization: Bearer <token>`
4. User logs out → token revoked
