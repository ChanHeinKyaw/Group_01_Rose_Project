<!DOCTYPE html>
<html>
<head>
    <title>Hello Admin</title>
</head>
<body>
    Received contact email from : {{ $name }} <br><br>
    User details: <br><br>
    Name: {{ $name }}<br>
    Email: {{ $email }}<br>
    Phone: {{ $phone }}<br>
    Subject: {{ $subject }}<br>
    Message: {!! $subject !!}<br><br>
    Thank you.
</body>
</html>