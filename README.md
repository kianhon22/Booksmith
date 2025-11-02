# Booksmith - Book Selling Platform

A comprehensive Laravel-based book selling platform that enables sellers to manage their book inventory and allows administrators to oversee the entire platform. Built with modern web technologies and best practices.

## Features

### Admin Features
- **Seller Management**
- **Category Management**
- **Book Management**
- **Permission Management**
- **Dashboard Analytics**
- **Automated Email**

### Seller Features
- **Book Management**
- **Order Management**
- **Sales Analytics**

### Shared Features
- **Book Catalogue**
- **Profile Management**
- **Documentation**
- **Responsive Design**

## Technology Stack

### Backend
- **Laravel (PHP)**
- **MySQL (XAMPP)**

### Frontend
- **Blade Templates**
- **Tailwind CSS**

### Key Packages
- **Laravel Breeze**
- **Spatie Laravel Permission**
- **Spatie Laravel Media Library**
- **Spatie Laravel Sluggable**

## Installation & Setup

### 1. Clone the Repository

```bash
git clone <repository-url>
cd Booksmith
```

### 2. Install PHP Dependencies

```bash
composer install
```

### 3. Install Frontend Dependencies

```bash
npm install
```

### 4. Environment Configuration

Copy the environment file:

```bash
cp .env.example .env
```

Generate application key:

```bash
php artisan key:generate
```

### 5. Database Configuration

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=booksmith
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

### 6. Run Migrations and Seeders

```bash
php artisan migrate --seed
```

This will seed roles (admin, seller) and permissions, create a default admin user, and other sample records.

### 7. Create Storage Link

```bash
php artisan storage:link
```

### 8. Build Frontend Assets and Start Server

For development:

```bash
composer run dev
```

## Mail Configuration

**For Gmail SMTP:**
```env
MAIL_MAILER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME=your-gmail
MAIL_PASSWORD=your-google-app-password
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS="hello@example.com"
MAIL_FROM_NAME="${APP_NAME}"
```

> **Note**: For Gmail, you need to generate an App Password in your Google Account settings.

## Technical Approach

The application follows Laravel's MVC (Model-View-Controller) architecture.

### Key Design Decisions

1. **Role-Based Views**: Instead of separate admin/seller views, the same views can adapt based on user role
2. **Media Library**: Spatie Media Library handles book cover uploads with automatic optimization
3. **Slug URLs**: SEO-friendly URLs for books using Spatie Sluggable
4. **Permission-Based Access**: Granular permissions allow fine-tuned access control

## Security

1. **Laravel Breeze**: Industry-standard authentication with secure password hashing (bcrypt)
2. **Spatie Permission**: Role-based access control (RBAC) with granular permissions
3. **CSRF Protection**: All forms protected with Laravel's CSRF tokens
4. **Password Hashing**: All passwords hashed using bcrypt
5. **Input Validation**: Form requests validate all user inputs
6. **XSS Protection**: Blade templating automatically escapes output
7. **Mass Assignment Protection**: Only whitelisted fields can be mass-assigned via `$fillable`
8. **Controller Level**: `cannot()` and `hasRole()` checks in controllers

## Scalability & Optimization

1. **Indexing**: Indexes on frequently queried columns
2. **Eager Loading**: Uses `with()` or `load()` to prevent N+1 query problems
3. **Pagination**: All list views use pagination (15 items per page)
4. **Caching**: Route, Config, Views caching

## User Experience

1. **Consistency**: Unified design language with indigo theme
2. **Responsiveness**: Mobile-first design using Tailwind CSS
3. **Visual Feedback**: Loading states, success/error messages
4. **Intuitive Navigation**: Clear sidebar navigation with role-based menu items
5. **Status Indicators**: Color-coded badges for order status, seller approval, etc
6. **Custom Reusable Component**: Standardized and dynamic components to be reused across blades
