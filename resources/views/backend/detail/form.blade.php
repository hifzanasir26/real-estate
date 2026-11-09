<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Create Property</title>
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background-color: #f4f4f4;
      margin: 0;
      padding: 0;
    }

    .contact-form-container {
      max-width: 600px;
      margin: 40px auto;
      background-color: #fff;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 4px 15px rgba(0,0,0,0.1);
    }

    .contact-form-container h2 {
      margin-bottom: 20px;
      color: #333;
      text-align: center;
    }

    .form-group {
      margin-bottom: 15px;
    }

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
    }

    .form-group textarea {
      resize: vertical;
      min-height: 100px;
    }

    .form-group input[type="file"] {
      padding: 6px;
      cursor: pointer;
    }

    .form-group input[type="file"]::file-selector-button {
      background-color: #007bff;
      color: white;
      padding: 8px 14px;
      border: none;
      border-radius: 6px;
      margin-right: 10px;
      font-weight: bold;
      cursor: pointer;
      transition: background-color 0.3s;
    }

    .form-group input[type="file"]::file-selector-button:hover {
      background-color: #0056b3;
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
  </style>
</head>
<body>

<div class="contact-form-container">
  <h2>Create Property & Contact Info</h2>

  <form action="{{ route('detail.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <!-- Contact Agent fields -->
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

   

    <button type="submit" class="submit-btn">submit</button>
  </form>
</div>

</body>
</html>
