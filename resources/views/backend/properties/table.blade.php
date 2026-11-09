@extends('admindashboard.layout.layout')
@section('content')
  <style>
    .table-container {
      margin: auto;
      background-color: #fff;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
    }

    .add-btn {
      display: inline-block;
      padding: 10px 18px;
      margin-bottom: 20px;
      font-size: 15px;
      font-weight: bold;
      color: #fff;
      background-color: #28a745;
      border-radius: 6px;
      text-decoration: none;
      transition: background 0.3s;
    }

    .add-btn:hover {
      background-color: #218838;
    }

    table {
      width: 100%;
      border-collapse: collapse;
    }

    thead {
      background-color: #007bff;
      color: white;
    }

    th, td {
      padding: 12px 15px;
      border: 1px solid #ddd;
      text-align: left;
    }

    tbody tr:nth-child(even) {
      background-color: #f9f9f9;
    }

    img {
      max-width: 80px;
      height: auto;
      border-radius: 6px;
    }

    .action-buttons a {
      display: inline-block;
      padding: 8px 12px;
      font-size: 14px;
      text-decoration: none;
      border-radius: 6px;
      transition: background-color 0.3s;
      margin-right: 6px;
    }

    .btn-edit {
      background-color: #17a2b8;
      color: white;
    }

    .btn-edit:hover {
      background-color: #138496;
    }

    .btn-delete {
      background-color: #6c757d;
      color: white;
    }

    .btn-delete:hover {
      background-color: #5a6268;
    }
    .add-btn {
  display: inline-block;
  padding: 10px 18px;
  margin-bottom: 20px;
  font-size: 15px;
  font-weight: bold;
  color: #fff;              /* White text */
  background-color: #28a745; /* Green background */
  border-radius: 6px;
  text-decoration: none;     /* underline remove */
  transition: background 0.3s, color 0.3s;
}

.add-btn:hover,
.add-btn:focus,
.add-btn:active {
  background-color: #218838; /* Dark green hover */
  color: #fff;               /* White text on hover */
  text-decoration: none;     /* underline remove */
}

  </style>
</head>
<body>

  <div class="table-container my-5">
    <h2>Submitted Form Data</h2>

    {{-- Add New Button --}}
    <a href="{{ route('properties.form') }}" class="add-btn">+ Add New</a>

    @if(session('success'))
      <div style="padding: 10px; background: #d4edda; color: #155724; border-radius: 5px; margin-bottom: 20px;">
        {{ session('success') }}
      </div>
    @endif

    <table>
      <thead>
        <tr>
          <th>ID</th>
          <th>Image</th>
          <th>Title</th>
          <th>Text 1</th>
          <th>Text 2</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($propertiesdate as $item)
        <tr>
          <td>{{ $item->id }}</td>
          <td><img src="{{ asset('image/' . $item->image) }}" alt="Image"></td>
          <td>{{ $item->title }}</td>
          <td>{{ $item->text1 }}</td>
          <td>{{ $item->text2 }}</td>
          <td class="action-buttons">
            <a class="btn-edit" href="{{ route('properties.edit', $item->id) }}">Edit</a>
            <a class="btn-delete" href="{{ route('properties.delete', $item->id) }}" onclick="return confirm('Are you sure you want to delete this item?')">Delete</a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>

</body>
</html>
@endsection
