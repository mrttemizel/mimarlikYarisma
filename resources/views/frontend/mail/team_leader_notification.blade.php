<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Completed</title>
</head>
<body style="font-family: Arial, sans-serif; background-color: #f4f4f9; padding: 20px;">
<div style="max-width: 600px; margin: 0 auto; background-color: #ffffff; padding: 20px; border-radius: 8px;">
    <h2 style="text-align: center; color: #333;">Your registration is completed</h2>

    <p>Dear {{ $teamLeaderName }},</p>

    <p>Thank you for registering for the Rethinking Architecture Competition.</p>

    <p>By completing your registration, you confirm that you have read, understood, and accepted the following parts in our brief:</p>

    <ul>
        <li>Terms and Participation</li>
        <li>Copyright</li>
        <li>Conflict of Interest</li>
    </ul>

    <p><strong>Your registration number is:</strong> <span style="font-size: 18px; color: #2c3e50;">{{ $teamName }}</span></p>

    <p>Please use this number for all correspondence and submissions related to the competition.</p>

    <p>Kind regards,</p>

    <hr>
    <p style="font-size: 12px; text-align: center; color: #999;">This email was sent from Rethinking Architecture Competition. Please do not reply to this email.</p>
</div>
</body>
</html>
