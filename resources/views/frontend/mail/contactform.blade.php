<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Contact Form Submission</title>
</head>
<body>
<h1>Contact Form Submission</h1>

<p><strong>Name:</strong> {{ $formData['name'] }}</p>
<p><strong>Email:</strong> {{ $formData['email'] }}</p>
<p><strong>Phone:</strong> {{ $formData['phone'] }}</p>
<p><strong>Message:</strong> {{ $formData['message'] }}</p>
</body>
</html>
