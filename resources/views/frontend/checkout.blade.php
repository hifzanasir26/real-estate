@extends('frontend.layout.layout')

@section('content')
  <style>
    /* Default Light Mode */
    body {
      font-family: 'Segoe UI', sans-serif;
      background-color: #f4f4f4;
      margin: 0;
      padding: 0;
      color: #333;
      transition: background 0.3s, color 0.3s;
    }
    .contact-form-container {
      max-width: 600px;
      margin: 100px auto;
      background-color: #fff;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 4px 15px rgba(0,0,0,0.1);
      transition: background 0.3s, box-shadow 0.3s;
    }
    .contact-form-container h2 {
      margin-bottom: 20px;
      color: #333;
      text-align: center;
    }
    table {
      width: 100%;
      border-collapse: collapse;
      margin-bottom: 20px;
    }
    table td {
      padding: 10px;
      vertical-align: middle;
      border-bottom: 1px solid #ddd;
    }
    table img {
      max-width: 100px;
      border-radius: 8px;
    }
    .form-group { margin-bottom: 15px; }
    .form-group label {
      display: block;
      font-weight: bold;
      margin-bottom: 5px;
      color: #444;
    }
    .form-group input,
    .form-group select,
    .form-group textarea {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 6px;
      font-size: 14px;
      box-sizing: border-box;
      background-color: #fff;
      color: #333;
      transition: background 0.3s, color 0.3s, border 0.3s;
    }
    .form-group textarea {
      resize: vertical;
      min-height: 100px;
    }
    .form-group input[type="checkbox"] {
      width: auto;
      margin-right: 5px;
    }
    .submit-btn {
      width: 100%;
      padding: 12px;
      background-color: #0066cc;
      color: white;
      border: none;
      border-radius: 6px;
      font-size: 16px;
      cursor: pointer;
    }
    .submit-btn:hover {
      background-color: #004999;
    }
    .form-footer {
      text-align: center;
      margin-top: 15px;
      font-size: 13px;
      color: #777;
    }

    /* 🌙 Dark Mode Styles */
    body.dark-mode {
      background-color: #121212;
      color: #eee;
    }
    body.dark-mode .contact-form-container {
      background-color: #1e1e1e;
      box-shadow: 0 4px 15px rgba(0,0,0,0.5);
    }
    body.dark-mode .contact-form-container h2 {
      color: #fff;
    }
    body.dark-mode table td {
      border-bottom: 1px solid #333;
    }
    body.dark-mode .form-group label {
      color: #ddd;
    }
    body.dark-mode .form-group input,
    body.dark-mode .form-group select,
    body.dark-mode .form-group textarea {
      background-color: #2a2a2a;
      color: #eee;
      border: 1px solid #444;
    }
    body.dark-mode .form-group input::placeholder,
    body.dark-mode .form-group textarea::placeholder {
      color: #aaa;
    }
    body.dark-mode .submit-btn {
      background-color: #3399ff;
    }
    body.dark-mode .submit-btn:hover {
      background-color: #1a73e8;
    }
    body.dark-mode .form-footer {
      color: #aaa;
    }
  </style>

  <div class="contact-form-container">
    <h2>Contact the Agent</h2>

    <!-- Property Details Table -->
    <table>
      <tr>
        <td rowspan="2" style="width:110px;">
          <img src="{{ asset('image/' . $property_image) }}" alt="{{ $property_title }}">
        </td>
        <td style="font-weight:bold; font-size:16px;">{{ $property_title }}</td>
      </tr>
      <tr>
        <td style="color:green; font-weight:bold;">
          {{ $property_price }} /month
          <hr> {{ $property_price2 }}
        </td>
      </tr>
    </table>

    <!-- Contact Form -->
    <form action="{{ route('detail.store') }}" method="POST">
      @csrf

      <input type="hidden" name="property_title" value="{{ $property_title }}">
      <input type="hidden" name="property_price" value="{{ $property_price }}">
      <input type="hidden" name="property_price2" value="{{ $property_price2 }}">
      <input type="hidden" name="property_image" value="{{ $property_image }}">

      <div class="form-group">
        <label for="fullName">Full Name</label>
        <input type="text" id="fullName" name="name" placeholder="Your full name" required>
      </div>

      <div class="form-group">
        <label for="email">Email Address</label>
        <input type="email" id="email" name="email" placeholder="you@example.com" required>
      </div>

      <div class="form-group">
        <label for="phone">Phone Number</label>
        <input type="tel" id="phone" name="phone" placeholder="03xx-xxxxxxx" required>
      </div>

      <div class="form-group">
        <label for="contactmethod">Preferred Contact Method</label>
        <select id="contactmethod" name="contactmethod" required>
          <option value="">-- Select an option --</option>
          <option value="email">Email</option>
          <option value="phone">Phone Call</option>
          <option value="whatsapp">WhatsApp</option>
        </select>
      </div>

      <div class="form-group">
        <label for="message">Your Message</label>
        <textarea id="message" name="message" placeholder="Write your inquiry here..." required></textarea>
      </div>

      <div class="form-group">
        <label>
          <input type="checkbox" name="privacy" required>
          I agree to the <a href="#">Privacy Policy</a>
        </label>
      </div>

      <button type="submit" class="submit-btn">Send Inquiry</button>
    </form>

    <div class="form-footer">
      We respect your privacy. Your information is safe with us.
    </div>
  </div>

  <!-- JS to toggle dark mode -->
  <script>
    document.getElementById('darkModeBtn').addEventListener('click', function () {
      document.body.classList.toggle('dark-mode');
    });
  </script>
@endsection
