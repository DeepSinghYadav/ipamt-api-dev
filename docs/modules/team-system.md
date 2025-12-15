# Team System Module

The Team System manages referral hierarchy, team creation, and inviter→invitee mapping.

## Features
- Unique invite code per user
- Inviter → Invitee mapping
- Team ID inheritance
- Auto team creation for leaders
- Multi-level downline structure

## Business Rules
- If user registers with invite code → invited_by = inviter.id
- New user inherits inviter's team_id
- If inviter has no team → create new team

## Future Enhancements
- Downline tree API
- Upline chain API
- Team analytics
- Invite usage tracking
