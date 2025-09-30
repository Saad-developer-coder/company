<?php

namespace App\Console\Commands;

use App\Mail\ContactFormMail;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class TestContactEmail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'contact:test-email {email?}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send a test contact form email';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $email = $this->argument('email') ?? config('contact.admin_email', 'admin@yourcompany.com');
        
        $testData = [
            'name' => 'Test User',
            'email' => 'test@example.com',
            'company' => 'Test Company',
            'service' => 'web-development',
            'message' => 'This is a test message to verify that the contact form email system is working correctly.',
        ];

        try {
            Mail::to($email)->send(new ContactFormMail($testData));
            $this->info("Test email sent successfully to: {$email}");
        } catch (\Exception $e) {
            $this->error("Failed to send test email: " . $e->getMessage());
        }
    }
}
