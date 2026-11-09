<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>New Inquiry</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f6f8;
            padding: 20px;
        }
        .email-container {
            max-width: 600px;
            background: #ffffff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
            margin: auto;
        }
        .email-header {
            background-color: #0066cc;
            color: white;
            padding: 15px 20px;
            font-size: 18px;
            font-weight: bold;
            text-align: center;
        }
        .email-body {
            padding: 20px;
        }
        h3 {
            margin-top: 0;
            color: #0066cc;
            font-size: 16px;
            border-bottom: 2px solid #f4f4f4;
            padding-bottom: 5px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            font-size: 14px;
            margin-bottom: 20px;
        }
        table th, table td {
            padding: 10px;
            border-bottom: 1px solid #ddd;
            text-align: left;
            vertical-align: top;
        }
        table th {
            background-color: #f9f9f9;
            width: 40%;
        }
        .property-img {
            max-width: 120px;
            border-radius: 6px;
        }
    </style>
</head>
<body>

<div class="email-container">
    <div class="email-header">
        New Property Inquiry
    </div>
    <div class="email-body">

        <!-- Property Details -->
        <h3>Property Details</h3>
        <table>
           <tr>
    <th>Property Image</th>
    <td>
       
<img class="property-img" src="{{ $message->embed(public_path('image/' . $details['property_image'])) }}" alt="{{ $details['property_title'] }}">
     
    </td>
</tr>

            <tr>
                <th>Title</th>
                <td>{{ $details['property_title'] }}</td>
            </tr>
            <tr>
                <th>Price</th>
                <td>{{ $details['property_price'] }} /month</td>
            </tr>
            <tr>
                <th>Additional Price Info</th>
                <td>{{ $details['property_price2'] }}</td>
            </tr>
        </table>

        <!-- Customer Details -->
        <h3>Customer Details</h3>
        <table>
            <tr>
                <th>Name</th>
                <td>{{ $details['name'] }}</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>{{ $details['email'] }}</td>
            </tr>
            <tr>
                <th>Phone</th>
                <td>{{ $details['phone'] }}</td>
            </tr>
            <tr>
                <th>Preferred Contact Method</th>
                <td>{{ $details['contactmethod'] }}</td>
            </tr>
            <tr>
                <th>Message</th>
                <td>{{ $details['message'] }}</td>
            </tr>
        </table>

    </div>
</div>

</body>
</html>
