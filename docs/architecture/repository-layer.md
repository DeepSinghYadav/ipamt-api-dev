# Repository Layer Architecture

The Repository Layer handles all database interactions.

## Purpose
- Abstract database queries
- Keep services clean
- Allow future DB changes without breaking logic

## Structure
app/Repositories/ UserRepository.php TeamRepository.php

## Responsibilities
- Fetch user by email
- Validate invite code
- Create user records
- Update team relationships

## Benefits
- Reusable query logic
- Cleaner services
- Easier testing
