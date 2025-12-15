# Laravel Request Lifecycle (Simplified for IPAMT)

## Steps
1. Request enters `public/index.php`
2. Kernel loads middleware
3. Route is matched
4. Controller is executed
5. Service layer handles logic
6. Repository interacts with DB
7. Response returned as JSON

## Middleware Used
- `api`
- `auth:sanctum`

This lifecycle ensures clean request handling and secure authentication.
