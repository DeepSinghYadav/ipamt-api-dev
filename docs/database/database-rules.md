# Database Rules & Standards

## ✅ Naming Rules
- Tables → plural (users, teams, properties)
- Columns → snake_case
- Foreign keys → `<table>_id`

## ✅ Indexing Rules
- Index all foreign keys
- Index frequently queried columns (email, invite_code)

## ✅ Integrity Rules
- Always use foreign key constraints
- Cascade deletes only when safe
- Use soft deletes only when required

## ✅ Performance Rules
- Avoid unnecessary joins
- Use pagination for large queries
- Use caching for heavy reports (future)
