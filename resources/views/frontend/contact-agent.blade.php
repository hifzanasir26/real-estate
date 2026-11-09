{{-- @extends('frontend.layout.layout')

@section('content')

<style>
  form {
    max-width: 400px;
    margin: auto;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
  }
  input, select, textarea {
    width: 100%;
    padding: 8px;
    margin-top: 5px;
    margin-bottom: 15px;
  }
  button {
    padding: 10px 20px;
    background-color: #0066cc;
    color: white;
    border: none;
    cursor: pointer;
  }
  button:hover {
    background-color: #004999;
  }
</style>



<form action="" method="">
  <h2>Contact Agent</h2>
  
  <label for="fullName">Full Name:</label><br>
  <input type="text" id="fullName" name="fullName" required placeholder="Your full name"><br><br>
  
  <label for="email">Email Address:</label><br>
  <input type="email" id="email" name="email" required placeholder="Your email address"><br><br>
  
  <label for="phone">Phone Number:</label><br>
  <input type="tel" id="phone" name="phone" required placeholder="Your phone number"><br><br>
  
  <!-- Hidden field for property reference -->
  <input type="hidden" id="property" name="property" value="Property ID or Name here">
  
  <label for="contactMethod">Preferred Contact Method:</label><br>
  <select id="contactMethod" name="contactMethod" required>
    <option value="" disabled selected>Select an option</option>
    <option value="email">Email</option>
    <option value="phone">Phone Call</option>
    <option value="whatsapp">WhatsApp</option>
  </select><br><br>
  
  <label for="bestTime">Best Time to Contact (Optional):</label><br>
  <input type="text" id="bestTime" name="bestTime" placeholder="e.g., Morning, Afternoon"><br><br>
  
  <label for="message">Your Message / Inquiry:</label><br>
  <textarea id="message" name="message" rows="5" required placeholder="Write your questions or message here"></textarea><br><br>
  
  <input type="checkbox" id="privacy" name="privacy" required>
  <label for="privacy">I agree to the <a href="/privacy-policy" target="_blank">Privacy Policy</a></label><br><br>
  
  <!-- Simple CAPTCHA placeholder (you can integrate real CAPTCHA service) -->
  <label for="captcha">What is 3 + 4? (Spam protection):</label><br>
  <input type="text" id="captcha" name="captcha" required placeholder="Your answer"><br><br>
  
  <button type="submit">Send Message</button>
</form>

@endsection
 --}}
