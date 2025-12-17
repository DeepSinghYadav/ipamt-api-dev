# Migrations Overview

Migrations define the structure of all database tables.

## Naming Convention
YYYY_MM_DD_HHMMSS_create_users_table.php YYYY_MM_DD_HHMMSS_create_teams_table.php

## Current Migrations
- create_users_table
- create_teams_table

## Future Migrations
- create_properties_table
- create_units_table
- create_sales_table
- create_commissions_table
- create_payouts_table

## Best Practices
- Always use foreign keys
- Use soft deletes only when required
- Keep migrations small and modular
