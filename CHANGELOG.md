# Changelog

All notable changes to the Tercum LLC website project are documented in this file.
Format based on [Keep a Changelog](https://keepachangelog.com/en/1.1.0/).

## [Unreleased] - 2026-08-19

### Added
- Services page: "Why Choose Tercum" section with 6 differentiator cards from capability statement
- Services page: "Industries Served" section with 6 sector cards
- Services page: "Company Credentials" section (UEI, CAGE, SAM.gov, socio-economic, NAICS, ISO certifications)
- Services page: bullet list to "Who We Support" column for visual parity with "Our Approach"
- Capability statement PDF added to public root
- package-lock.json (npm dependencies locked)

### Changed
- Services page: "Our Approach" bullets replaced with 10 core competencies from capability statement
- Makefile: default target is now `help` (bare `make` prints available targets)
- Makefile: added `build`, `dev`, `install`, `test`, `fresh`, `optimize`, `clean`, `restart`, `rebuild` targets
- Makefile: host/Docker auto-detection for PHP and Composer
- Makefile: `up` no longer forces `--build`; dedicated `rebuild` target added
- Makefile: `.PHONY` declarations and self-documenting `help` target

### Fixed
- Services page: "Our Approach" and "Who We Support" columns now structurally aligned