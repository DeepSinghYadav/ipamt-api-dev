# Service Layer Architecture

The Service Layer contains all business logic for the application.

## Purpose
- Keep controllers thin
- Centralize business rules
- Make logic reusable across modules
- Improve testability

## Structure
app/Services/ Auth/ AuthService.php User/ UserService.php Team/ TeamService.php

## Example Responsibilities
- Registration logic
- Invite code validation
- Team ID inheritance
- Login token generation

## Benefits
- Clean separation of concerns
- Easy to extend for future modules (Property, Sales, Commission)
