# ICTServe (iServe) - MOTAC ICT Service Management System

[![CI](https://github.com/motac/ictserve/actions/workflows/ci.yml/badge.svg)](https://github.com/motac/ictserve/actions/workflows/ci.yml)

ICTServe is a comprehensive ICT service management system designed for the Ministry of Tourism, Arts & Culture (MOTAC). The system provides efficient management of ICT service requests, issue reporting, and support tracking for all MOTAC departments and staff.

## 🎯 Project Overview

ICTServe streamlines the process of requesting and managing ICT services within MOTAC, providing:

- **Public Service Requests**: Easy-to-use forms for all MOTAC staff to request ICT services
- **Issue Reporting**: Quick reporting of technical problems and system issues
- **Support Management**: Comprehensive support ticket tracking and resolution
- **Admin Dashboard**: Filament-powered admin panel for ICT staff and administrators
- **Role-Based Access**: Organizational hierarchy support with proper permissions
- **Audit Trail**: Complete change tracking for accountability

## 🛠 Tech Stack

- **Backend**: Laravel 12 (PHP 8.2+)
- **Frontend**: Livewire 3.6 with Alpine.js
- **Styling**: Tailwind CSS 4.0 with accessible design patterns
- **Admin Panel**: Filament 4.0 (Admin-only authentication)
- **Database**: MySQL/SQLite with comprehensive migration system
- **Authentication**: Admin-only via Filament (public forms require no authentication)
- **Permissions**: Spatie Laravel Permission for role-based access control
- **Auditing**: Laravel Auditing for complete change tracking
- **Testing**: PHPUnit with comprehensive Feature & Unit Tests

## 📋 Features

### Phase 1 (Completed) - Foundation & Core Scaffolding

- [x] Laravel 12 project setup with PHP 8.2+ support
- [x] Core package installation (Livewire 3.6, Filament 4.0, Spatie Permissions)
- [x] Database schema for organizational structure (departments, positions, grades)
- [x] Public-facing service request forms (no authentication required)
- [x] Admin-only authentication via Filament dashboard
- [x] Accessible public layout with skip navigation and semantic HTML
- [x] Comprehensive testing suite with 7/7 tests passing
- [x] CI/CD pipeline with GitHub Actions for automated testing

### Architecture Highlights

- **Public Access**: All citizens (MOTAC staff) can access service forms directly
- **Admin Access**: Authentication required only for administrators and support staff
- **Accessibility**: WCAG-compliant layouts with proper ARIA roles and skip navigation
- **Security**: Role-based permissions and complete audit trail
- **Scalability**: Modular structure ready for additional service modules

### Upcoming Phases

- **Phase 2**: Service Request Processing & Workflow Management
- **Phase 3**: Advanced Reporting & Analytics Dashboard
- **Phase 4**: Integration with External Systems & Mobile Support

## 🚀 Local Setup

### Prerequisites

- PHP 8.2 or higher
- Composer 2.0+
- Node.js 18 or higher
- NPM
- MySQL (or SQLite for development)

### Installation

1. **Clone the repository**

   ```bash
   git clone https://github.com/motac/ictserve.git
   cd ictserve
   ```

2. **Install PHP dependencies**

   ```bash
   composer install
   ```

3. **Install NPM dependencies**

   ```bash
   npm install
   ```

4. **Environment setup**

   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

5. **Configure database**

   Update your `.env` file with database credentials:

   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=ictserve
   DB_USERNAME=root
   DB_PASSWORD=
   ```

   Or use SQLite for development:

   ```env
   DB_CONNECTION=sqlite
   ```

6. **Run migrations**

   ```bash
   php artisan migrate
   ```

7. **Build frontend assets**

   ```bash
   npm run build
   ```

8. **Start the development server**

   ```bash
   php artisan serve
   ```

Visit `http://localhost:8000` to access the application.

### Development Commands

- **Run tests**: `php artisan test`
- **Run code formatting**: `./vendor/bin/pint`
- **Watch for changes**: `npm run dev`
- **Access admin panel**: `http://localhost:8000/admin`

## 🏗 Project Structure

```
ictserve/
├── app/
│   ├── Models/           # Eloquent models
│   ├── Http/Controllers/ # HTTP controllers
│   ├── Livewire/         # Livewire components
│   └── Providers/        # Service providers
├── database/
│   ├── migrations/       # Database migrations
│   ├── factories/        # Model factories
│   └── seeders/          # Database seeders
├── resources/
│   ├── views/            # Blade templates
│   ├── css/              # Stylesheets
│   └── js/               # JavaScript
├── tests/
│   ├── Feature/          # Feature tests
│   └── Unit/             # Unit tests
└── .github/
    └── workflows/        # CI/CD workflows
```

## 🔐 Security

- Role-based access control using Spatie Laravel Permission
- All user actions are audited using Laravel Auditing
- CSRF protection enabled
- SQL injection protection through Eloquent ORM
- XSS protection through Blade templating

## 🧪 Testing

Run the test suite:

```bash
# Run all tests
php artisan test

# Run specific test file
php artisan test tests/Feature/HomepageTest.php

# Run tests with coverage
php artisan test --coverage
```

## 🤝 Contributing

Please see [CONTRIBUTING.md](CONTRIBUTING.md) for details on our code of conduct and the process for submitting pull requests.

### Git Workflow

1. **Branch naming convention**:
   - Features: `feature/<issue-id>-short-description`
   - Bug fixes: `bugfix/<issue-id>-fix-name`
   - Hotfixes: `hotfix/<issue-id>-urgent-fix`

2. **Commit message format**:
   Use [Conventional Commits](https://www.conventionalcommits.org/):

   ```
   feat: Add user authentication
   fix: Resolve database connection issue
   docs: Update installation instructions
   ```

3. **Pull Request process**:
   - All work must go through a PR to `main`
   - Require at least one approval
   - All CI checks must pass

## 📄 License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

## 📞 Support

For support, please contact the development team or create an issue in the GitHub repository.

---

**Developed for Ministry of Tourism, Arts & Culture (MOTAC)**
