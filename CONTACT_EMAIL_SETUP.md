# Contact Form Email Setup Guide

## Quick Setup

To receive emails when users submit the contact form, follow these steps:

### 1. Set Your Email Address

Add this line to your `.env` file:
```
CONTACT_ADMIN_EMAIL=your-email@example.com
```

Replace `your-email@example.com` with your actual email address.

### 2. Configure Mail Settings

Add these lines to your `.env` file for email delivery:

#### For Gmail (Recommended for testing):
```
MAIL_MAILER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME=your-gmail@gmail.com
MAIL_PASSWORD=your-app-password
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=your-gmail@gmail.com
MAIL_FROM_NAME="Your Company Name"
```

#### For Other SMTP Providers:
```
MAIL_MAILER=smtp
MAIL_HOST=your-smtp-host.com
MAIL_PORT=587
MAIL_USERNAME=your-email@example.com
MAIL_PASSWORD=your-password
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=your-email@example.com
MAIL_FROM_NAME="Your Company Name"
```

### 3. Gmail App Password Setup

If using Gmail, you need to create an App Password:

1. Go to your Google Account settings
2. Enable 2-Factor Authentication
3. Go to Security → App passwords
4. Generate a new app password for "Mail"
5. Use this password in your `.env` file (not your regular Gmail password)

### 4. Test the Setup

1. Run: `php artisan config:cache`
2. Submit a test message through your contact form
3. Check your email inbox

### 5. Optional Settings

You can also configure these optional settings in your `.env`:

```
# Disable email notifications (set to false)
CONTACT_SEND_NOTIFICATIONS=true

# Custom email subject prefix
CONTACT_EMAIL_SUBJECT_PREFIX="New Contact Form Submission"
```

## Troubleshooting

### Emails not being sent?

1. Check your `.env` file configuration
2. Check the Laravel logs: `storage/logs/laravel.log`
3. Test with a simple mail driver first:
   ```
   MAIL_MAILER=log
   ```
   This will log emails to `storage/logs/laravel.log` instead of sending them.

### Still having issues?

1. Make sure your SMTP credentials are correct
2. Check if your hosting provider blocks SMTP ports
3. Consider using a service like Mailgun, SendGrid, or AWS SES for production

## Email Template

The contact form emails are sent using a beautiful HTML template located at:
`resources/views/emails/contact-form.blade.php`

You can customize this template to match your brand.
