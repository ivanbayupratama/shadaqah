<!DOCTYPE html>
<html>
<head>
    <title>Data Campaign</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #000;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h2>Data Campaign</h2>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Gambar Kampanye</th>
                <th>Judul Kampanye</th>
                <th>Deskripsi Kampanye</th>
            </tr>
        </thead>
        <tbody>
            @foreach($campaigns as $key => $campaign)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td><img src="{{ storage_path('app/public/' . $campaign->image) }}" width="50" alt=""></td>
                <td>{{ $campaign->title }}</td>
                <td>{{ $campaign->description }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
