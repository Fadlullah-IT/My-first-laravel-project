<!DOCTYPE html>
<html>
<head>
    <title>About - My First Laravel project!</title>
     <link rel="stylesheet" href="{{ asset('css/style.css') }}">

      
</head>
<body>
    <div class="container">
        <h1>👋 About Me</h1>
        
    
        <div class="nav">
            <a href="/">Home</a>
            <a href="/about">About</a>
            <a href="/contact">Contact</a>
        </div>
        
        
        <div class="info-box">
            <h2>Personal Info</h2>
            <!-- These variables come from the route -->
            <p><strong>Name:</strong> {{ $name }}</p>
            <p><strong>Age:</strong> {{ $age }} years old</p>
            <p><strong>Status:</strong> Learning Laravel! 🎓</p>
        </div>
        
        <h3>What I'm learning:</h3>
        <ul>
            <li>Laravel basics</li>
            <li>PHP web development</li>
            <li>Building awesome websites</li>
        </ul>
        
        <p><em>This page shows how Laravel passes data from routes to views!</em></p>
        
        <p><a href="/">← Back to Home</a></p>
    </div>
</body>
</html>