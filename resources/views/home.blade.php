<x-layout title="My First Laravel App">
    <h1>Welcome to my First Laravel Project!</h1>
    
    <div class="highlight">
        <h2>It Works!</h2>
        <p>Congratulations! You've successfully created your first Laravel application.</p>
        
        <p><strong>Laravel Version:</strong> {{ app()->version() }}</p>
        <p><strong>PHP Version:</strong> {{ phpversion() }}</p>
    </div>

    <h3>What I've learned:</h3>
    <ul>
        <li>✅ How to create routes in Laravel</li>
        <li>✅ How to create Blade view files</li>
        <li>✅ How to pass data to views</li>
        <li>✅ How to handle forms</li>
    </ul>
</x-layout>