# Privacy Education Platform

A modern web application built with Laravel 11 and Filament admin panel, designed to provide privacy education and management capabilities.

## 🚀 Features

- Modern Laravel 11 Framework
- Filament Admin Panel
- Livewire Components
- Media Library Integration
- Tailwind CSS for styling
- Docker support for development
- Comprehensive testing setup with Pest PHP

## 📋 Requirements

- PHP 8.2 or higher
- Composer
- Node.js & NPM
- Docker (optional, for containerized development)

## 🛠️ Installation

1. Clone the repository:
```bash
git clone [repository-url]
cd [project-directory]
```

2. Install PHP dependencies:
```bash
composer install
```

3. Install NPM dependencies:
```bash
npm install
```

4. Create environment file:
```bash
cp .env.example .env
```

5. Generate application key:
```bash
php artisan key:generate
```

6. Run database migrations:
```bash
php artisan migrate
```

7. Start the development server:
```bash
npm run dev
```

## 🐳 Docker Development

The project includes Docker configuration for easy development setup:

```bash
docker-compose up -d
```

## 🧪 Testing

The project uses Pest PHP for testing. Run tests with:

```bash
./vendor/bin/pest
```

## 📦 Project Structure

- `app/` - Core application code
- `config/` - Configuration files
- `database/` - Database migrations and seeders
- `public/` - Publicly accessible files
- `resources/` - Frontend resources (views, assets)
- `routes/` - Application routes
- `tests/` - Test files
- `vendor/` - Composer dependencies

## 🔧 Development

The project includes several development tools:

- Laravel Breeze for authentication
- Laravel Pint for code styling
- Laravel Sail for Docker development
- Laravel Pail for logging

## 📝 License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

## 🤝 Contributing

1. Fork the repository
2. Create your feature branch (`git checkout -b feature/amazing-feature`)
3. Commit your changes (`git commit -m 'Add some amazing feature'`)
4. Push to the branch (`git push origin feature/amazing-feature`)
5. Open a Pull Request
