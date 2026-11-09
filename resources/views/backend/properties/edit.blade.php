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

  <div class="container">
    <form action="{{ route('properties.update', $data->id) }}" method="POST" enctype="multipart/form-data">
      @csrf
      @method('PUT')

      <label for="image">Current Image</label>
      <div class="preview-image">
        <img src="{{ asset('image/' . $data->image) }}" alt="data Image">
      </div>

      <label for="image">Change Image</label>
      <input type="file" id="image" name="image">

      <label for="title">Title</label>
      <input type="text" id="title" name="title" value="{{ $data->title }}">

      <label for="text1">Text 1</label>
      <input type="text" id="text1" name="text1" value="{{ $data->text1 }}">

      <label for="text2">Text 2</label>
      <input type="text" id="text2" name="text2" value="{{ $data->text2 }}">

      <input type="submit" value="Update">
    </form>
  </div>

</body>
</html>
