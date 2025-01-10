<!-- resources/views/admin/dataUsers/pdf.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Data Users</title>
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
    <h2>Data Users</h2>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Profile Picture</th>
                <th>Nama User</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $key => $user)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td><img src="{{ storage_path('app/public/' . $user->profile_picture) }}" width="50" alt=""></td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
