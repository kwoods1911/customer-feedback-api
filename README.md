
# Customer Feedback Module
This is a lightweight Laravel API designed to collect and manage customer feedback submissions for lilyPadPOS.


## Requirements
- PHP >= 8.1
- Composer
- Laravel 10+
- SQLite or MySQL

## Installation

This application was developed locally on ubuntu using SQlite. Below are instructions to use sql in your environment.

   1. **Clone the repository:**
      ```bash
       git clone https://github.com/kwoods1911/customer-feedback-api.git
       cd customer-feedback-api
   
  1. **Install dependencies run**:
         composer install

   2. **Copy and configure .env file**:  
         cp.env.example .env

    3. **Set the Sqlite database path in the .env**: 
         DB_CONNECTION=sqlite
         DB_DATABASE=/absolute/path/to/database/database.sqlite

    4. **Generate app key and migrate database**:
         php artisan key:generate
         php artisan migrate   

    5. **Run api locally**:
         php artisan serve

