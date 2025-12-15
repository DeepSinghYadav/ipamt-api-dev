# Controller Flow

Controllers act as the entry point for all API requests.

## Responsibilities
- Validate incoming requests
- Call service methods
- Return JSON responses

## Flow Diagram
Request → Controller → Service → Repository → Model → DB

## Example (Registration)
1. Controller validates request  
2. Controller calls `AuthService->register()`  
3. Service validates invite code  
4. Service calls repository to create user  
5. Controller returns JSON response  

Controllers must remain thin and free of business logic.
