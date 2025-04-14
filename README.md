# Installing Laravel and Running Migrations with Seeders

Follow these steps to install Laravel and set up your database:

## Prerequisites
Ensure you have the following installed on your system:
- PHP >= 8.3
- Composer
- A database server (e.g., MySQL, PostgreSQL, SQLite)

## 1. Configure Environment
Copy the example environment file and update it with your database credentials:
```bash
cp .env.example .env
```
Then, edit the `.env` file with the following details:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

## 2. Install Dependencies
Install required dependencies:
```bash
composer install
```

## 3. Generate Application Key
```bash
php artisan key:generate
```

## 4. Run Migrations with Seeders
Run the following command to migrate the database and seed it with initial data:
```bash
php artisan migrate --seed
```

## 5. Serve the Application
Start the development server:
```bash
php artisan serve
```

Your Laravel application is now set up and ready to use!