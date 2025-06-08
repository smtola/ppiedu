<!DOCTYPE html>
<html>

<head>
    <title>New Job Application</title>
</head>

<body>
    <h2>New Job Application Received</h2>

    <div>
        <p><strong>Name:</strong> {{ $name ?? '' }}</p>
        <p><strong>Email:</strong> {{ $email ?? '' }}</p>
        <p><strong>Phone:</strong> {{ $phone ?? '' }}</p>
        <p><strong>Position:</strong> {{ $position ?? '' }}</p>
        <p><strong>Message:</strong></p>
        <p>{{ $message ?? '' }}</p>
    </div>

    <p>A resume has been attached to this email.</p>
</body>

</html>
