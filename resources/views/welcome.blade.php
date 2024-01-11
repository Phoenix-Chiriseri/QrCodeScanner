<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page/title>
    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <div class = "container">
        <div class="visible-print text-center">
            {!! QrCode::size(300)->generate(Request::url()); !!}
            <p>Scan me to return to the original page.</p>
        </div>
    </div>
    <!-- Your content goes here -->
    
    <!-- Your content goes here -->
    <!-- Bootstrap JS CDN (optional, add if needed) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
