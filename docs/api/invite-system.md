# Invite System API

## Overview
IPAMT uses a hierarchical invite system:
- Each user has a unique invite code
- Users can invite others
- Inviter → Invitee mapping
- Team ID inheritance

## Fields
- `invite_code`
- `invited_by`
- `team_id`

## Logic
- If user registers with invite code → invited_by = inviter.id
- New user inherits inviter's team_id
- If no team_id exists → inviter becomes team leader
