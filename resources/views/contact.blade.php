<x-layout title="Contact - My First Laravel project">
    @if(session('message'))
        <div class="success">
            ✅ {{ session('message') }}
        </div>
    @endif

    <h1>Contact Me</h1>

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
</x-layout>
