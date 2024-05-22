# Kanye Quotes App Laravel Application

## Setup

1. Clone the repository:
    ```bash
    git clone https://github.com/dev-mo-ali/kanye-app.git
    cd kanye-quotes
    ```

2. Install dependencies:
    ```bash
    composer install
    npm install
    ```

3. Copy `.env` file:
    ```bash
    cp .env.example .env
    ```

4. Generate application key:
    ```bash
    php artisan key:generate
    ```

5. Run migrations:
    ```bash
    php artisan migrate
    ```

6. Build frontend assets:
    ```bash
    npm run dev
    ```

7. Serve the application:
    ```bash
    php artisan serve
    ```
8. use this account for test:
   "email":"test28@gmail.com",
   "password":"test1234"
9. Visit `http://localhost:8000/loging` to login to view the quotes.

10. Visit `http://localhost:8000/register` to create an account and login to view the quotes.

## API
- token is required to use the api
- use this account for test:
   "email":"test28@gmail.com",
   "password":"test1234"
- Fetch X random quotes (replace X with the number of quotes):
    ```
    GET /api/quotes/X
    ```
    Requires authentication token.

## Cron Job

- The cron job to refresh quotes runs every minute and is defined in `route/console.php`.

## Authentication

- Authentication is required for viewing quotes and accessing the API.
