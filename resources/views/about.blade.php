<x-layout title="About - My First Laravel project">
    <h1>About Me</h1>

    <div class="info-box">
        <h2>Personal Info</h2>
        <!-- These variables come from the route -->
        <p><strong>Name:</strong> {{ $name }}</p>
        <p><strong>Age:</strong> {{ $age }} years old</p>
        <p><strong>Status:</strong> Learning Laravel! 🚀</p>
    </div>

    <h3>What I'm Learning:</h3>
    <ul>
        <li>Database basics</li>
        <li>PHP web development</li>
        <li>Building awesome websites</li>
    </ul>

    <p><a href="/">← Back to Home</a></p>
</x-layout>