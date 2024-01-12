# UserPromo

Welcome to User Promo! This Laravel 8 application is designed for user referral code. Follow the steps below to set up the project on your local machine.

### Prerequisites

- Git installed on your machine
- Composer installed on your machine
- MySQL database server

### Getting Started

1. Clone the repository to your local machine:

    ```bash
    git clone <my-cool-project>
    ```

2. Install project dependencies:

    ```bash
    composer install
    ```

3. Copy the `.env.example` file and create a new `.env` file:

    ```bash
    cp .env.example .env
    ```

4. Generate an application key:

    ```bash
    php artisan key:generate
    ```

5. Create a MySQL database named "userpromo".

6. Run database migrations:

    ```bash
    php artisan migrate
    ```

7. Seed the database with initial data:

    ```bash
    php artisan db:seed
    ```

8. Start the development server:

    ```bash
    php artisan serve
    ```

9. Open your browser and navigate to [http://localhost:8000](http://localhost:8000).

You should now have the My Cool Project up and running locally! Feel free to explore and customize the application.
