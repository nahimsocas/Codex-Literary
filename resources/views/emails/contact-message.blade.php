<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Message</title>
    <style>
        * {
            font-family: Roboto;
            letter-spacing: .6px;
        }
        
        p {
            font-weight: 400;
        }
    </style>
</head>
<body>
    <h1><strong>From:</strong> {{ $msg['name'] }} - {{ $msg['email'] }}</h1>
    <h2><strong>About:</strong> {{ $msg['subject'] }}</h2>
    <p><strong>Message:</strong> {{ $msg['message'] }}</p>
</body>
</html>