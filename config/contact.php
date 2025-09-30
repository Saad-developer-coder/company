<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Contact Form Configuration
    |--------------------------------------------------------------------------
    |
    | Configure the contact form settings including email notifications
    | and other contact-related settings.
    |
    */

    'admin_email' => env('CONTACT_ADMIN_EMAIL', 'saadshivan62@gmail.com'),
    
    'notification_email' => env('CONTACT_NOTIFICATION_EMAIL', env('CONTACT_ADMIN_EMAIL', 'admin@devfsolutions.com')),
    
    'send_notifications' => env('CONTACT_SEND_NOTIFICATIONS', true),
    
    'email_subject_prefix' => env('CONTACT_EMAIL_SUBJECT_PREFIX', 'New Contact Form Submission'),
];
