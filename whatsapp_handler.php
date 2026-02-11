<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Content-Type');

// Check if request is POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'Method not allowed']);
    exit;
}

// Check if action is whatsapp_lead
if (!isset($_POST['action']) || $_POST['action'] !== 'whatsapp_lead') {
    http_response_code(400);
    echo json_encode(['success' => false, 'message' => 'Invalid action']);
    exit;
}

// Validate input data
$name = isset($_POST['name']) ? trim($_POST['name']) : '';
$phone = isset($_POST['phone']) ? trim($_POST['phone']) : '';

if (empty($name) || empty($phone)) {
    http_response_code(400);
    echo json_encode(['success' => false, 'message' => 'Name and phone number are required']);
    exit;
}

// Sanitize input
$name = filter_var($name, FILTER_SANITIZE_STRING);
$phone = filter_var($phone, FILTER_SANITIZE_STRING);

// Validate phone number (basic validation)
if (!preg_match('/^[0-9]{10}$/', $phone)) {
    http_response_code(400);
    echo json_encode(['success' => false, 'message' => 'Please enter a valid 10-digit phone number']);
    exit;
}

// Email configuration
$to_email = 'satyamrai374@gmail.com';
$subject = 'New WhatsApp Lead from Website';
$from_email = 'noreply@' . $_SERVER['HTTP_HOST'];

function getAsianDateTime($timezone_identifier = 'Asia/Kolkata')
{
    // Set the default timezone for this script's execution
    date_default_timezone_set($timezone_identifier);

    // Format and return the current date and time
    return date("Y-m-d H:i:s T"); // T displays the timezone abbreviation
}




// Create email message
$email_message = "
<!DOCTYPE html>
<html>
<head>
    <style>
        body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
        .container { max-width: 600px; margin: 0 auto; padding: 20px; }
        .header { background-color: #25d366; color: white; padding: 20px; text-align: center; }
        .content { background-color: #f9f9f9; padding: 20px; }
        .info-row { margin: 10px 0; padding: 10px; background-color: white; border-left: 4px solid #25d366; }
        .label { font-weight: bold; color: #25d366; }
        .footer { text-align: center; padding: 20px; font-size: 12px; color: #666; }
    </style>
</head>
<body>
    <div class='container'>
        <div class='header'>
            <h2>🎉 New WhatsApp Lead!</h2>
        </div>
        <div class='content'>
            <p>You have received a new lead from your website's WhatsApp form:</p>
            
            <div class='info-row'>
                <span class='label'>Name:</span> {$name}
            </div>
            
            <div class='info-row'>
                <span class='label'>Phone Number:</span> {$phone}
            </div>
            
            <div class='info-row'>
                <span class='label'>Date & Time:</span> " . getAsianDateTime('Asia/Kolkata') . "
            </div>
            
            <div class='info-row'>
                <span class='label'>IP Address:</span> " . $_SERVER['REMOTE_ADDR'] . "
            </div>
            
            <div class='info-row'>
                <span class='label'>User Agent:</span> " . (isset($_SERVER['HTTP_USER_AGENT']) ? $_SERVER['HTTP_USER_AGENT'] : 'Not available') . "
            </div>
        </div>
        <div class='footer'>
            <p>This email was automatically generated from your website's WhatsApp contact form.</p>
        </div>
    </div>
</body>
</html>
";

// Email headers
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= "From: Website WhatsApp Form <{$from_email}>" . "\r\n";
$headers .= "Reply-To: {$from_email}" . "\r\n";
$headers .= "X-Mailer: PHP/" . phpversion();

// Send email
$email_sent = mail($to_email, $subject, $email_message, $headers);

// Log the lead (optional - you can save to database or file)
$log_entry = date('Y-m-d H:i:s') . " - Name: {$name}, Phone: {$phone}, IP: " . $_SERVER['REMOTE_ADDR'] . "\n";
file_put_contents('whatsapp_leads.log', $log_entry, FILE_APPEND | LOCK_EX);

// Prepare response
if ($email_sent) {
    $response = [
        'success' => true,
        'message' => 'Lead submitted successfully',
        'data' => [
            'name' => $name,
            'phone' => $phone,
            'timestamp' => date('Y-m-d H:i:s')
        ]
    ];
} else {
    $response = [
        'success' => false,
        'message' => 'Email could not be sent, but lead was logged'
    ];
}

// Return JSON response
echo json_encode($response);

// Optional: Save to database
/*
// Database configuration
$servername = "localhost";
$username = "your_db_username";
$password = "your_db_password";
$dbname = "your_database_name";

try {
    $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $stmt = $pdo->prepare("INSERT INTO whatsapp_leads (name, phone, ip_address, created_at) VALUES (?, ?, ?, NOW())");
    $stmt->execute([$name, $phone, $_SERVER['REMOTE_ADDR']]);
    
} catch(PDOException $e) {
    error_log("Database error: " . $e->getMessage());
}
*/
?>