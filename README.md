# GAPC School Project - Production Ready

Governor Andres Pascual College School Project - Now production-ready with enhanced security and deployment capabilities.

## 🚀 Production Ready Features

### Security Enhancements
- ✅ **SQL Injection Protection**: All database queries use prepared statements
- ✅ **Password Security**: Argon2ID password hashing (industry standard)
- ✅ **CSRF Protection**: Token-based CSRF protection on all forms
- ✅ **Input Validation**: Comprehensive server-side validation and sanitization
- ✅ **Session Security**: Secure session management with timeout and hijacking protection
- ✅ **Rate Limiting**: Login attempt rate limiting to prevent brute force attacks
- ✅ **Security Headers**: Comprehensive HTTP security headers

### Architecture Improvements
- ✅ **Environment Configuration**: Environment-based configuration with .env files
- ✅ **Database Layer**: Standardized PDO-based database layer with connection pooling
- ✅ **Error Handling**: Proper error handling and logging
- ✅ **Dependency Management**: Composer-based dependency management

### Deployment
- ✅ **Docker Support**: Full Docker containerization for easy deployment
- ✅ **Production Configuration**: Optimized Apache configuration with security headers
- ✅ **Database Migrations**: Automated database setup and password migration
- ✅ **Health Checks**: Application health monitoring

## 🛠️ Quick Start

### Development Environment
```bash
# Clone the repository
git clone https://github.com/0xt4cs/gapc-school-project.git
cd gapc-school-project

# Install dependencies
composer install

# Copy environment file
cp .env.example .env

# Configure your database settings in .env
```

### Production Deployment with Docker
```bash
# Build and run with Docker Compose
docker-compose up -d

# The application will be available at http://localhost:8080
```

### Manual Production Setup
```bash
# Install dependencies
composer install --no-dev --optimize-autoloader

# Configure production environment
cp .env.production .env

# Update database credentials in .env file

# Run password migration (if upgrading from old version)
php migrate_passwords.php

# Configure your web server (Apache/Nginx) to point to the project directory
```

## 📋 Migration from XAMPP

If you're upgrading from the old XAMPP version:

1. **Backup your database** before proceeding
2. **Update your database credentials** in the `.env` file
3. **Run the password migration script**: `php migrate_passwords.php`
4. **Test the application** thoroughly

## 🔐 Security Considerations

- Change default database passwords in production
- Use HTTPS in production environments
- Regular security updates and monitoring
- Implement proper backup strategies
- Monitor application logs for suspicious activity

## 📚 Original Project

This was originally a first-year school project submitted in the 2nd semester of 2022, now enhanced for production use with industry-standard security practices.
