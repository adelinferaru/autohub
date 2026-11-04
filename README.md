<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# AutoHub

AutoHub is an online marketplace for buying and selling used cars across several European countries.

## What it does

- **Car dealers** put their cars on AutoHub. They can add them one by one, or connect their own stock system so AutoHub picks up new cars and price changes automatically every hour.
- **Buyers** search for a car by make, price, year, fuel type or location, or just describe what they want ("a family SUV under €25,000 near Munich"). They can message the dealer and reserve a car for 48 hours while they decide.
- **Moderators** check every new listing before it goes live, to keep out mistakes, misleading ads and scams. An AI assistant helps them by spotting problems, such as a description that doesn't match the car's details or a suspiciously low price, and by suggesting a better description. A person always makes the final decision.
- Each country gets its own language, currency and units (kilometres or miles).
- Dealers also get a help assistant that answers questions from AutoHub's help articles.

## Why it exists

AutoHub is a practice project. It's built to the standard of a real product serving millions of visitors, so it's fast and secure, with automated testing and monitoring. It doubles as a portfolio piece and interview material.

Work is planned in the Jira project [AUTO](https://adelinferaru.atlassian.net/jira/software/projects/AUTO).

## Running it locally

Requirements: Docker Desktop (on Windows, with WSL2; keep the project inside the WSL filesystem, not under `/mnt/c`).

```bash
cp .env.example .env
./vendor/bin/sail up -d
./vendor/bin/sail artisan key:generate
./vendor/bin/sail artisan migrate
```

Local services:

| Service | Address |
| --- | --- |
| App | http://localhost |
| PostgreSQL 18 (pgvector) | localhost:5432 |
| Redis | localhost:6379 |
| Meilisearch | http://localhost:7700 |
| RustFS (S3) console | http://localhost:9001 (sail / password) |
| Mailpit | http://localhost:8025 |

Create a bucket named `autohub` in the RustFS console before uploading files.

## Contributing

- One branch per Jira story: `AUTO-<n>-short-name`.
- Open a pull request into `main`; CI must pass.
- No merge until the review is done and every must-fix item is resolved.

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Adelin Feraru via [adelin.feraru@gmail.com](mailto:adelin.feraru@gmail.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
