# POS Foundations

A clean, minimalist Point of Sale (POS) foundation built on CodeIgniter 4. This project establishes the core application architecture, explicit routing, shared layout templating, and initial static datasets for customer and user accounts.

## System Requirements

- **PHP**: 8.1 or higher (configured with `intl`, `mbstring`, `json`)
- **Composer**: 2.0 or higher
- **Web Server**: Built-in PHP development server or Apache / Nginx

## Installation & Setup

1. **Clone the repository** (or navigate to the project directory):
   ```bash
   git clone https://github.com/SimouneNicole/it0049-pos-foundations.git
   cd it0049-pos-foundations
   ```

2. **Install Composer dependencies**:
   ```bash
   composer install
   ```

3. **Configure Environment**:
   Copy the `env` template file to `.env`:
   ```bash
   cp env .env
   ```
   Open `.env` and verify the base URL configuration:
   ```ini
   CI_ENVIRONMENT = development
   app.baseURL = 'http://localhost:8080/'
   ```

4. **Start the Development Server**:
   Launch the local CodeIgniter development server using Spark:
   ```bash
   php spark serve --port 8080
   ```
   The application will be accessible at `http://localhost:8080/`.

## Application Routes

| Method | Route | Controller Handler | Description |
|---|---|---|---|
| `GET` | `/` | `\App\Controllers\Pages::home` | Overview landing page |
| `GET` | `/about` | `\App\Controllers\Pages::about` | POS platform specifications and architecture |
| `GET` | `/customers` | `\App\Controllers\Customers::index` | Customer accounts listing with contact details |
| `GET` | `/users` | `\App\Controllers\Users::index` | User accounts registry with roles |

## Testing

Run automated tests using PHPUnit:
```bash
vendor/bin/phpunit --no-coverage
```

Verify route mappings:
```bash
php spark routes
```

## Project Structure

```text
app/
├── Config/
│   └── Routes.php         # Explicit GET routes using array-callable syntax
├── Controllers/
│   ├── BaseController.php # Core controller base
│   ├── Customers.php      # Customer dataset controller
│   ├── Pages.php          # Overview & About controller
│   └── Users.php          # User accounts dataset controller
└── Views/
    ├── layouts/
    │   └── main.php       # Shared HTML layout with navigation & glass theme
    ├── pages/
    │   ├── home.php       # Landing overview view
    │   └── about.php      # Platform architecture view
    ├── customers/
    │   └── index.php      # Customer records table view
    └── users/
        └── index.php      # User accounts table view
public/
├── css/
│   └── style.css          # Liquid-glass responsive stylesheet
└── index.php              # Application front controller
```

## License

This project is open source and available under the MIT License.
