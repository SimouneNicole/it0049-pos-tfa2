# IT0049 — POS: From Arrays to a Real Database (TFA2)

A Point of Sale (POS) application built on CodeIgniter 4. This repository builds upon the foundational architecture established in TFA1, replacing static PHP arrays with a persistent MySQL database managed through CodeIgniter's Model layer and Query Builder methods.

## Features & Improvements in TFA2

- **Persistent MySQL Storage**: Migrated from ephemeral static arrays to relational database tables (`customers` and `users`).
- **CodeIgniter 4 Model Architecture**: Implemented `CustomerModel` and `UserModel` extending `CodeIgniter\Model`.
- **Query Builder Integration**: Retrieved all dataset records using Query Builder methods (`findAll()`) without raw SQL queries.
- **Database Export Included**: Pre-packaged SQL schema and seed data located in `db_export/database.sql`.
- **Preserved Design Language**: The liquid-glass responsive layout, floating capsule navigation, and table presentations remain consistent with the original user experience.

---

## System Requirements

- **PHP**: 8.2 or higher (`intl`, `mbstring`, `json`, `mysqli` extensions enabled)
- **Composer**: 2.0 or higher
- **Database**: MySQL 5.7+ / MariaDB 10.3+ (e.g., via XAMPP)
- **Web Server**: Built-in PHP development server (`spark serve`) or Apache

---

## Installation & Setup

### 1. Clone the Repository
```bash
git clone https://github.com/SimouneNicole/it0049-pos-tfa2.git
cd it0049-pos-tfa2
```

### 2. Install Dependencies
```bash
composer install
```

### 3. Database Setup (MySQL / XAMPP)
1. Start **Apache** and **MySQL** in your XAMPP Control Panel.
2. Open **phpMyAdmin** (`http://localhost/phpmyadmin`) or your MySQL terminal.
3. Import the provided export file located at [`db_export/database.sql`](db_export/database.sql):
   ```bash
   mysql -u root -p < db_export/database.sql
   ```
   *Alternatively, create the database `it0049_pos` in phpMyAdmin and import `db_export/database.sql`.*

### 4. Configure Environment
Copy the `env` template file to `.env`:
```bash
cp env .env
```
Ensure the database credentials in `.env` match your local MySQL configuration (default XAMPP settings shown):
```ini
CI_ENVIRONMENT = development
app.baseURL = 'http://localhost:8080/'

database.default.hostname = localhost
database.default.database = it0049_pos
database.default.username = root
database.default.password = ''
database.default.DBDriver = MySQLi
database.default.port = 3306
```

### 5. Start the Application
Run the CodeIgniter development server via Spark:
```bash
php spark serve --port 8080
```
Open your browser and navigate to `http://localhost:8080/`.

---

## Database Schema

### `customers` Table
| Column | Type | Constraints | Description |
|---|---|---|---|
| `id` | `INT` | `AUTO_INCREMENT`, `PRIMARY KEY` | Unique customer identifier |
| `full_name` | `VARCHAR(100)` | `NOT NULL` | Customer's full name |
| `email` | `VARCHAR(100)` | `NOT NULL` | Customer's email address |
| `phone` | `VARCHAR(20)` | `NULL` | Customer's contact number |
| `created_at` | `DATETIME` | `NOT NULL` | Timestamp of record creation |

### `users` Table
| Column | Type | Constraints | Description |
|---|---|---|---|
| `id` | `INT` | `AUTO_INCREMENT`, `PRIMARY KEY` | Unique user identifier |
| `username` | `VARCHAR(50)` | `NOT NULL`, `UNIQUE` | Unique user login name |
| `full_name` | `VARCHAR(100)` | `NOT NULL` | Staff member full name |
| `created_at` | `DATETIME` | `NOT NULL` | Timestamp of record creation |

---

## Application Routes

| Method | Route | Controller Handler | Data Source |
|---|---|---|---|
| `GET` | `/` | `\App\Controllers\Pages::home` | Static overview view |
| `GET` | `/about` | `\App\Controllers\Pages::about` | Platform specifications view |
| `GET` | `/customers` | `\App\Controllers\Customers::index` | `CustomerModel::findAll()` (MySQL) |
| `GET` | `/users` | `\App\Controllers\Users::index` | `UserModel::findAll()` (MySQL) |

---

## Project Structure

```text
it0049-pos-tfa2/
├── app/
│   ├── Config/
│   │   ├── Database.php       # Database configuration connection groups
│   │   └── Routes.php         # Explicit GET routes mapping to controllers
│   ├── Controllers/
│   │   ├── BaseController.php # Core controller base
│   │   ├── Customers.php      # Customer controller using CustomerModel
│   │   ├── Pages.php          # Overview & About controller
│   │   └── Users.php          # User accounts controller using UserModel
│   ├── Models/
│   │   ├── CustomerModel.php  # Model wrapping the 'customers' table
│   │   └── UserModel.php      # Model wrapping the 'users' table
│   └── Views/
│       ├── layouts/
│       │   └── main.php       # Shared HTML layout with navigation & glass theme
│       ├── pages/
│       │   ├── home.php       # Landing overview view
│       │   └── about.php      # Platform architecture view
│       ├── customers/
│       │   └── index.php      # Customer records table view
│       └── users/
│           └── index.php      # User accounts table view
├── db_export/
│   └── database.sql           # Complete schema and seed data export
├── public/
│   ├── css/
│   │   └── style.css          # Liquid-glass responsive stylesheet
│   └── index.php              # Application front controller
├── .env                       # Local environment configuration (git-ignored)
├── env                        # Environment configuration template
└── composer.json              # Project dependencies and autoload definitions
```

---

## Testing & Verification

Check defined application routes:
```bash
php spark routes
```

Run test suite:
```bash
vendor/bin/phpunit --no-coverage
```

---

## License

This project is open-source software licensed under the [MIT License](LICENSE).
