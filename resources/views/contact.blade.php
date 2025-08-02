<!DOCTYPE html>
<html>
<head>
    <title>Contact - My First Laravel project!</title>
     <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="container">
        <h1> Contact Me</h1>
        
        
        <div class="nav">
            <a href="/">Home</a>
            <a href="/about">About</a>
            <a href="/contact">Contact</a>
        </div>
        
        
        @if(session('message'))
            <div class="success">
                ✅ {{ session('message') }}
            </div>
        @endif
        
        <p>Send me a message using the form below:</p>
        
    
        <form method="POST" action="/contact">
            @csrf
            
            <div class="form-group">
                <label for="name">Your Name:</label>
                <input type="text" id="name" name="name" required>
            </div>
            
            <div class="form-group">
                <label for="email">Your Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            
            <div class="form-group">
                <label for="message">Your Message:</label>
                <textarea id="message" name="message" rows="5" required></textarea>
            </div>
            
            <button type="submit">Send Message</button>
        </form>
        
              
        <p><a href="/">← Back to Home</a></p>
    </div>
</body>
</html>
