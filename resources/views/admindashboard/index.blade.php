@extends('admindashboard.layout.layout')
@section('content')
   
<style>
    .custom-card {
        background: linear-gradient(135deg, #ffffff, #f1f3f6);
        border-radius: 15px;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .custom-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
    }
    .icon-box {
        
        width: 60px;
        height: 60px;
        background: #0d6efd;
        color: #fff;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 28px;
        border-radius: 50%;
        margin: 0 auto 15px auto;
    }
    .metric-title {
        font-size: 1.2rem;
        font-weight: 600;
        color: #0d6efd;
    }
    .metric-value {
        font-size: 2rem;
        font-weight: 700;
        color: #212529;
    }
</style>

<div class="container my-4">
    <div class="row g-4">
        <!-- Card 1 -->
        <div class="col-lg-6">
            <div class="card custom-card shadow-lg border-0 text-center p-4">
                <div class="icon-box">
                    <i class="fas fa-users"></i> <!-- Users Icon -->
                </div>
                <div class="metric-title">Total Users</div>
                <div class="metric-value">{{ $totalusers }}</div>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="col-lg-6">
    <div class="card custom-card shadow-lg border-0 text-center p-4">
        <div class="icon-box" >
            <i class="fas fa-home"></i> <!-- Property Icon -->
        </div>
        <div class="metric-title">Total Property</div>
        <div class="metric-value">{{ $property }}</div>
    </div>
</div>

    </div>
</div>


    <div
        style="max-width: 1000px; margin: 40px auto; background: #fff; padding: 20px; border-radius: 10px; box-shadow: 0 4px 10px rgba(0,0,0,0.1);">
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
                        <td style="padding: 8px; border: 1px solid #ddd;">{{ $detail->created_at->format('d M Y, h:i A') }}
                        </td>
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
