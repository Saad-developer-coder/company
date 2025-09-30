<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Contact Form Submission - DevF Solutions</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        .header {
            background: linear-gradient(135deg, #3b82f6, #1d4ed8);
            color: white;
            padding: 30px;
            text-align: center;
            border-radius: 10px 10px 0 0;
        }
        .content {
            background: #f8fafc;
            padding: 30px;
            border-radius: 0 0 10px 10px;
        }
        .field {
            margin-bottom: 20px;
            padding: 15px;
            background: white;
            border-radius: 8px;
            border-left: 4px solid #3b82f6;
        }
        .field-label {
            font-weight: bold;
            color: #374151;
            margin-bottom: 5px;
        }
        .field-value {
            color: #6b7280;
        }
        .message-field {
            background: white;
            padding: 20px;
            border-radius: 8px;
            border-left: 4px solid #10b981;
        }
        .footer {
            text-align: center;
            margin-top: 30px;
            padding: 20px;
            color: #6b7280;
            font-size: 14px;
        }
        .company-name {
            font-weight: bold;
            color: #3b82f6;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>New Contact Form Submission</h1>
        <p><span class="company-name">DevF Solutions</span> - You have received a new message from your website contact form</p>
    </div>
    
    <div class="content">
        <div class="field">
            <div class="field-label">Name:</div>
            <div class="field-value">{{ $contactData['name'] }}</div>
        </div>
        
        <div class="field">
            <div class="field-label">Email:</div>
            <div class="field-value">
                <a href="mailto:{{ $contactData['email'] }}">{{ $contactData['email'] }}</a>
            </div>
        </div>
        
        @if($contactData['company'])
        <div class="field">
            <div class="field-label">Company:</div>
            <div class="field-value">{{ $contactData['company'] }}</div>
        </div>
        @endif
        
        @if($contactData['service'])
        <div class="field">
            <div class="field-label">Service Interested In:</div>
            <div class="field-value">{{ ucwords(str_replace('-', ' ', $contactData['service'])) }}</div>
        </div>
        @endif
        
        <div class="message-field">
            <div class="field-label">Message:</div>
            <div class="field-value" style="white-space: pre-wrap;">{{ $contactData['message'] }}</div>
        </div>
    </div>
    
    <div class="footer">
        <p>This message was sent from your <span class="company-name">DevF Solutions</span> website contact form on {{ now()->format('F j, Y \a\t g:i A') }}</p>
        <p>Reply directly to this email to respond to {{ $contactData['name'] }}</p>
        <p><strong>DevF Solutions</strong> - Innovative Digital Solutions</p>
    </div>
</body>
</html>
