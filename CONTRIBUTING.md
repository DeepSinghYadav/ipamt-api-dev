# Contributing to IPAMT  
Thank you for your interest in contributing to the **Intelligent Property & Agent Management Tool (IPAMT)**.  
This document outlines the guidelines, standards, and workflow for contributing to the project.

---

# ✅ Code of Conduct
By participating in this project, you agree to maintain a respectful, collaborative, and professional environment.

---

# ✅ How to Contribute

## 1. Fork the Repository
Create your own copy of the project:

Fork → Clone → Create Branch

Example:

git clone https://github.com/your-username/ipamt-api-dev.git cd ipamt-api-dev

---

## 2. Create a Feature Branch
Follow the naming conventions:

feature/<feature-name> fix/<bug-name> docs/<documentation-update> refactor/<module-name>

Examples:

feature/login-api fix/invite-code-validation docs/readme-update

---

## 3. Follow Coding Standards

### ✅ Laravel Best Practices
- Use **Controller → Service → Repository** pattern  
- Keep controllers thin  
- Write reusable service methods  
- Avoid business logic inside controllers  
- Use Request Validation classes where possible  
- Follow PSR‑12 coding standards  

### ✅ Naming Conventions
- Classes: `PascalCase`  
- Methods: `camelCase`  
- Variables: `camelCase`  
- Migrations: `snake_case`  
- Database tables: plural (`users`, `properties`)  

---

## 4. Commit Message Guidelines

We follow **Conventional Commits**:

feat: new feature added fix: bug fix docs: documentation update refactor: code restructure chore: non-code tasks test: test cases

Examples:

feat: add login API with sanctum authentication fix: correct invite code validation logic docs: add roadmap and project structure

---

## 5. Pull Request Guidelines

Before submitting a PR:

✅ Ensure your code compiles  
✅ Run tests (if available)  
✅ Follow the project folder structure  
✅ Update documentation if needed  
✅ Add comments for complex logic  

### PR Title Format:
feat: short description fix: short description docs: short description

### PR Description Must Include:
- What was added/changed  
- Why the change was needed  
- Any breaking changes  
- Screenshots (if UI related)  

---

## 6. Branch Strategy

main → production-ready code dev → active development feature/* → new features fix/* → bug fixes docs/* → documentation updates

All PRs must target the **dev** branch unless explicitly approved.

---

## 7. Issue Reporting

When reporting an issue, include:

✅ Clear title  
✅ Steps to reproduce  
✅ Expected behavior  
✅ Actual behavior  
✅ Screenshots (if applicable)  
✅ API request/response samples  

Use GitHub issue templates:

- Bug Report  
- Feature Request  
- Documentation Update  

---

## 8. Project Structure Reference

.

app

Console

Exceptions

Http

Controllers

Middleware

Kernel.php

Models

Providers

Services

bootstrap

app.php

config

database

migrations

seeders

factories

public

index.php

resources

views

js

css

routes

api.php

web.php

channels.php

storage

tests

vendor

.env

.gitignore

artisan

composer.json

composer.lock

package.json

README.md

LICENSE

---

## 9. Documentation Standards

All documentation must be placed inside:

/docs /api /architecture /database /modules

Each file must include:

- Title  
- Summary  
- Use cases  
- Examples  
- Notes  

---

## ✅ Thank You

Your contributions help make IPAMT a powerful, scalable, and future‑ready system.  
We appreciate your time, effort, and expertise.

Developed by **Deep Singh Yadav**  
Founder – DSY Digital
