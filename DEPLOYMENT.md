# GAPC School Project - Production Deployment Guide

## 🚀 Pre-Production Checklist

### 1. Security Validation
Run the security test script:
```bash
php test_security.php
```

### 2. Database Migration (if upgrading)
If upgrading from the old XAMPP version:
```bash
# Backup your existing database first!
mysqldump -u root -p gapc_db > backup_$(date +%Y%m%d_%H%M%S).sql

# Run the password migration
php migrate_passwords.php
```

### 3. Environment Configuration
```bash
# Copy and configure production environment
cp .env.production .env

# Edit .env with your production database credentials
nano .env
```

### 4. Docker Deployment (Recommended)
```bash
# Build and deploy
docker-compose up -d

# Check container status
docker-compose ps

# View logs
docker-compose logs -f web
```

### 5. Traditional Server Deployment
```bash
# Install dependencies
composer install --no-dev --optimize-autoloader

# Set proper permissions
chown -R www-data:www-data /var/www/html/gapc-school-project
chmod -R 755 /var/www/html/gapc-school-project

# Configure Apache VirtualHost (use docker/apache/000-default.conf as template)
```

## 🔒 Security Hardening

### Production Environment Variables
```env
# Set these in your .env file
APP_ENV=production
APP_DEBUG=false
DB_PASSWORD=your_secure_password_here
```

### Apache Security Configuration
The `docker/apache/000-default.conf` includes:
- Security headers (XSS protection, CSRF protection, etc.)
- File access restrictions
- PHP security settings

### Database Security
1. **Change default passwords**
2. **Create dedicated database user with limited privileges**
3. **Enable SSL connections**
4. **Regular security updates**

### Additional Security Measures
1. **SSL/TLS Certificate**: Always use HTTPS in production
2. **Firewall Configuration**: Restrict access to necessary ports only
3. **Regular Backups**: Automated database and file backups
4. **Monitoring**: Set up application and security monitoring
5. **Updates**: Keep all components updated

## 📊 Performance Optimization

### PHP-FPM Configuration
```ini
# /etc/php/8.2/fpm/pool.d/www.conf
pm.max_children = 50
pm.start_servers = 5
pm.min_spare_servers = 5
pm.max_spare_servers = 35
```

### Apache Optimization
```apache
# Enable compression
LoadModule deflate_module modules/mod_deflate.so

# Enable caching
LoadModule expires_module modules/mod_expires.so
<IfModule mod_expires.c>
    ExpiresActive On
    ExpiresByType text/css "access plus 1 month"
    ExpiresByType application/javascript "access plus 1 month"
    ExpiresByType image/png "access plus 1 month"
    ExpiresByType image/jpg "access plus 1 month"
    ExpiresByType image/jpeg "access plus 1 month"
</IfModule>
```

## 🔍 Monitoring and Logging

### Log Files to Monitor
- Apache access logs: `/var/log/apache2/access.log`
- Apache error logs: `/var/log/apache2/error.log`
- PHP error logs: `/var/log/apache2/php_errors.log`
- Application logs: Check your application's error logging

### Health Checks
The Docker configuration includes health checks. For manual deployment:
```bash
# Create a health check endpoint
curl -f http://your-domain.com/health-check.php
```

## 🚨 Security Incident Response

### If You Suspect a Security Breach:
1. **Immediately change all passwords**
2. **Check access logs for suspicious activity**
3. **Update all software components**
4. **Run security scans**
5. **Contact security professionals if needed**

### Regular Security Maintenance:
- Monthly security updates
- Quarterly penetration testing
- Annual security audits
- Regular backup verification

## 📞 Support and Maintenance

### Regular Tasks:
- [ ] Weekly: Check application logs
- [ ] Monthly: Security updates
- [ ] Quarterly: Full security review
- [ ] Annually: Penetration testing

### Backup Strategy:
```bash
# Daily database backup
0 2 * * * mysqldump -u user -p database > backup_$(date +\%Y\%m\%d).sql

# Weekly full backup
0 3 * * 0 tar -czf /backup/full_$(date +\%Y\%m\%d).tar.gz /var/www/html/gapc-school-project
```

## 🎯 Performance Benchmarks

After deployment, verify:
- Page load times < 3 seconds
- Database query response < 100ms
- Memory usage < 128MB per request
- CPU usage < 80% under normal load

## 🏗️ Scaling Considerations

For high-traffic environments:
- Use load balancers
- Implement database read replicas
- Use Redis for session storage
- Implement CDN for static assets