## form-dlt

# Online Practice Test Platform

A full-stack Laravel application for managing a question bank, generating practice tests, recording responses, and tracking user performance.

## What it does

- Organizes questions by tags and question type and generates tests from selected topic areas.
- Supports multiple question formats, answer submission, scoring, and detailed post-test review.
- Stores test histories and summarizes recent performance by topic.
- Includes authenticated user accounts, Facebook login, textbook/resource links, and an administrative interface for managing content.
- Uses relational models for users, questions, tests, tags, question types, and learning resources.

## Technical focus

**PHP, Laravel 5.5, Eloquent ORM, SQL, Blade, Laravel Admin, Hashids, Parsedown**

This is an older web-development project retained as an example of database-backed application design and full-stack implementation.

# Setup

set .env

composer inatall

uncomment DatabaseSeeder.php

php artisan migrate --seed

php artisan admin:import log-viewer

# Deploy on Heroku

heroku login

git add .

git commit -am "make it better"

git push heroku master

heroku buildpacks:set heroku/php

heroku run php artisan migrate

heroku run php artisan db:seed

heroku run php artisan admin:import log-viewer
