@extends('admindashboard.layout.layout')
@section('content')
  <style>
  

    .table-container {
      max-width: 800px;
      margin: auto;
      background-color: #fff;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
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
  </style>

<div style="max-width: 1000px; margin: 40px auto; background: #fff; padding: 20px; border-radius: 10px; box-shadow: 0 4px 10px rgba(0,0,0,0.1);">
    <h2 style="margin-bottom: 20px; text-align: center;">Inquiries List</h2>

    <table style="width: 100%; border-collapse: collapse;">
        <thead>
            <tr style="background-color: #007bff; color: white;">
                <th style="padding: 10px; border: 1px solid #ddd;">#</th>
                <th style="padding: 10px; border: 1px solid #ddd;">Full Name</th>
                <th style="padding: 10px; border: 1px solid #ddd;">Email</th>
                <th style="padding: 10px; border: 1px solid #ddd;">Phone</th>
                <th style="padding: 10px; border: 1px solid #ddd;">Contact Method</th>
                <th style="padding: 10px; border: 1px solid #ddd;">Message</th>
                <th style="padding: 10px; border: 1px solid #ddd;">Submitted At</th>
            </tr>
        </thead>
        <tbody>
            @forelse($detaildata as $index => $detail)
                <tr>
                    <td style="padding: 8px; border: 1px solid #ddd;">{{ $index + 1 }}</td>
                    <td style="padding: 8px; border: 1px solid #ddd;">{{ $detail->name }}</td>
                    <td style="padding: 8px; border: 1px solid #ddd;">{{ $detail->email }}</td>
                    <td style="padding: 8px; border: 1px solid #ddd;">{{ $detail->phone }}</td>
                    <td style="padding: 8px; border: 1px solid #ddd;">{{ ucfirst($detail->contactmethod) }}</td>
                    <td style="padding: 8px; border: 1px solid #ddd;">{{ $detail->message }}</td>
                    <td style="padding: 8px; border: 1px solid #ddd;">{{ $detail->created_at->format('d M Y, h:i A') }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="7" style="text-align: center; padding: 15px; border: 1px solid #ddd;">
                        No inquiries found.
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>




@endsection
