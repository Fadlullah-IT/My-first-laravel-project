<!DOCTYPE html>
<html>
<head>
    <title>My First Laravel App</title>
     <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    
</head>
<body>
    <div class="container">
        <h1>🎉 Welcome to My First Laravel Project!</h1>
        
        <div class="nav">
            <a href="/">Home</a>
            <a href="/about">About</a>
            <a href="/contact">Contact</a>
        </div>
        
        
        <div class="highlight">
            <h2>It Works! </h2>
            <p>Congratulations! You've successfully created your first Laravel application.</p>
          
            <p><strong>Laravel Version:</strong> {{ app()->version() }}</p>
            <p><strong>PHP Version:</strong> {{ phpversion() }}</p>
        </div>
        
        <h3>What i've learned:</h3>
        <ul>
            <li>✅ How to create routes in Laravel</li>
            <li>✅ How to create Blade view files</li>
            <li>✅ How to pass data to views</li>
            <li>✅ How to handle forms</li>
        </ul>
    
    </div>
</body>
</html>
