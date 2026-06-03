---
name: module-studyassign
description: Use when working with tugas belajar (study assignment) — managing employee study leave, submission, or history
---

# Studyassign Module

## Domain
Tugas belajar — pengelolaan izin belajar/tugas belajar pegawai (pendidikan lanjutan yang didanai/diijinkan pemerintah).

## Key Models
| Model | Keterangan |
|---|---|
| `StudyassignSubmission` | Pengajuan tugas belajar |
| `StudyassignHistory` | Riwayat tugas belajar |

## Database
- Connection: `platform` (PostgreSQL)
- Table prefix: `studyassign_*`
- Migrations: 1 file

## API Routes (`/studyassign/api`)
4 routes — CRUD submission dan history.

## Paired Module
Admin: `module-studyassign` | Self-service: `module-mystudyassign`
