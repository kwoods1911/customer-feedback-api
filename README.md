
## Customer Feedback Module

Development Set up Instructions

This application was developed locally on ubuntu using SQlite. Below are instructions to use sql in your environment.

After cloning the repository follow the steps below.

1. In database directory of your customer-feedback-api create a file called database.sqlite
2. Create .env file from the .env.example
3. Set the environment variable DB_DATABASE= to the path of your database.sqlite file

After configuring the .env files run the commands:

composer install
php artisan migrate:fresh

Testing can be done via postman.
