<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Property</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f6f8;
      margin: 0;
      padding: 0;
    }

    .container {
      max-width: 500px;
      margin: 50px auto;
      background-color: #ffffff;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
    }

    form {
      display: flex;
      flex-direction: column;
    }

    label {
      margin-bottom: 8px;
      font-weight: bold;
      color: #333;
    }

    input[type="text"],
    input[type="file"] {
      padding: 10px;
      margin-bottom: 20px;
      border: 1px solid #ccc;
      border-radius: 6px;
      font-size: 16px;
      transition: border-color 0.3s;
      background-color: #fff;
    }

    input[type="file"] {
      padding: 10px;
      cursor: pointer;
    }

    input[type="file"]::file-selector-button {
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

    input[type="file"]::file-selector-button:hover {
      background-color: #0056b3;
    }

    input[type="submit"] {
      background-color: #007bff;
      color: #fff;
      padding: 12px;
      border: none;
      border-radius: 6px;
      cursor: pointer;
      font-size: 16px;
      transition: background-color 0.3s;
    }

    input[type="submit"]:hover {
      background-color: #0056b3;
    }

    .preview-image {
      margin-bottom: 20px;
    }

    .preview-image img {
      max-width: 100px;
      border-radius: 6px;
      display: block;
    }
  </style>
</head>
<body>

<div class="contact-form-container" style="max-width: 600px; margin: 40px auto; background: #fff; padding: 30px; border-radius: 10px; box-shadow: 0 4px 15px rgba(0,0,0,0.1);">
  <h2 style="text-align:center; margin-bottom:20px;">Edit Inquiry</h2>

  <form action="{{ route('detail.update', $data->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="form-group" style="margin-bottom:15px;">
      <label for="fullName">Full Name</label>
      <input type="text" id="fullName" name="fullName" value="{{ old('fullName', $data->fullName) }}" required>
    </div>

    <div class="form-group" style="margin-bottom:15px;">
      <label for="email">Email Address</label>
      <input type="email" id="email" name="email" value="{{ old('email', $data->email) }}" required>
    </div>

    <div class="form-group" style="margin-bottom:15px;">
      <label for="phone">Phone Number</label>
      <input type="tel" id="phone" name="phone" value="{{ old('phone', $data->phone) }}" required>
    </div>

    <div class="form-group" style="margin-bottom:15px;">
      <label for="contactMethod">Preferred Contact Method</label>
      <select id="contactMethod" name="contactMethod" required>
        <option value="">-- Select an option --</option>
        <option value="email" {{ $data->contactMethod == 'email' ? 'selected' : '' }}>Email</option>
        <option value="phone" {{ $data->contactMethod == 'phone' ? 'selected' : '' }}>Phone Call</option>
        <option value="whatsapp" {{ $data->contactMethod == 'whatsapp' ? 'selected' : '' }}>WhatsApp</option>
      </select>
    </div>

    <div class="form-group" style="margin-bottom:15px;">
      <label for="message">Your Message</label>
      <textarea id="message" name="message" required>{{ old('message', $data->message) }}</textarea>
    </div>

    <button type="submit" class="submit-btn" style="width:100%; padding:12px; background-color:#0066cc; color:white; border:none; border-radius:6px; font-size:16px; cursor:pointer;">
      Update
    </button>
  </form>
</div>
@endsection


</body>
</html>
